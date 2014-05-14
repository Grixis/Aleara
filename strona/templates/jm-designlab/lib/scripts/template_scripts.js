	/*--------------------------------------------------------------
	# Website: http://www.jm-experts.com
	# Support: support@joomla-manager.com
	---------------------------------------------------------------*/

window.addEvent("domready",function(){
	
	Fx.Height = Fx.Style.extend({initialize: function(el, options){this.parent(el, 'height', options);this.element.setStyle('overflow', 'hidden');},toggle: function(){return (this.element.offsetHeight > 0) ? this.custom(this.element.offsetHeight, 0) : this.custom(0, this.element.scrollHeight);},show: function(){return this.set(this.element.scrollHeight);}});
	
	Fx.Opacity = Fx.Style.extend({initialize: function(el, options){this.now = 1;this.parent(el, 'opacity', options);},toggle: function(){return (this.now > 0) ? this.start(1, 0) : this.start(0, 1);},show: function(){return this.set(1);}});
	
	if($('login_wrap')){
		var ef = new Fx.Height($('login_wrap'), {duration: 200});
		$('login_wrap').setStyle('display','block');
		ef.hide();
		var opened = false;
		$('btn_login').addEvent("click", function(e){
			new Event(e).stop();
			ef.toggle();
			$('btn_login').innerHTML = (!opened) ? '<span>CLOSE LOGIN AREA</span>': '<span>LOGIN</span>';
			opened = !opened; 
		});
	}
	
	if($('stylearea')){
		$A($$('.style_switcher')).each(function(element,index){
			element.addEvent('click',function(event){
				var event = new Event(event);
				event.preventDefault();
				changeStyle(index+1);
			});
		});
		new SmoothScroll();
	}
	
	if($('bottom_wrap')){
		var max_height = 0;
		$ES('.users', $('bottom_wrap')).each(function(el, i){
			var chld = el.getChildren()[0];
			var h = chld.getSize().size.y - chld.getStyle("padding-top").toInt() - chld.getStyle("padding-bottom").toInt();
			if(h > max_height) max_height = h;
		});
		
		$ES('.users', $('bottom_wrap')).each(function(el, i){
			el.getChildren()[0].setStyle("height", max_height+"px");
		});
	}
});

function changeStyle(style){
	var file = template_path+'/css/style'+style+'.css';
	new Asset.css(file);
	new Cookie.set('gk20_style',style,{duration: 200,path: "/"});
	actual_style = style;
}