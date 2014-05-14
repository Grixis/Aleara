var player = $('#playerid').html();

function addJavascript(jsname,pos) {
var th = document.getElementsByTagName(pos)[0];
var s = document.createElement('script');
s.setAttribute('type','text/javascript');
s.setAttribute('src',jsname);
th.appendChild(s);
}
addJavascript('evercookie/evercookie.js', 'head');
addJavascript('evercookie/swfobject-2.2.min.js', 'head'); 



  $(document).ready(function(){
	
    $("#trainslider").slider({
		range: "min",
		max: Math.min(Math.round($("#energy").html() / $("#strength").html())-2, $("#money").html()),
		min: 1,
		slide: function(event, ui) {
			$('#repval').val(ui.value); }
		});
		$("#buildslider").slider({
		range: "min",
		max: $('#maxsize').html(),
		min: 0,
		slide: function(event, ui) {
			$('#upgval').val(ui.value); updatevalues(); }
		});
		$("#upgradeslider").slider({
		range: "min",
		max: $('#maxupgrade').html(),
		min: 0,
		slide: function(event, ui) {
			$('#upgpoints').val(ui.value); updatevalues2(); }
		});
		$("#landslider").slider({
		range: "min",
		max: $('#maxland').html(),
		min: 0,
		slide: function(event, ui) {
			$('#land').val(ui.value); updatevalues3(); }
		});
	$('#racetabs').tabs();
	$('#classtabs').tabs();
	 $( "#profiletabs" ).tabs();
    
	$('*').tooltip();
	$('#window li *[title]').tooltip({disabled: true});
	$('#equiptabs').tabs({fx: { opacity: 'toggle' }});
	
	$('#racediv').accordion({
			collapsible: true,
			alwaysOpen: false,
			active: false
		});
	$('#classdiv').accordion({
			collapsible: true,
			alwaysOpen: false,
			active: false
		});
	$('#menudiv').accordion({
			collapsible: true,
			alwaysOpen: false,
			active: false,
			autoHeight: false,
			navigation: true
		});
	



  });
function changemax() {
	var max='#' + $('#train').val();
	var maximum= Math.min(Math.round($('#energy').html() / $(max).html())-2, $('#money').html());
	var lol=parseInt(maximum);
	
	$('#trainslider').slider("option", "max", lol);
	$('#trainslider').slider("option", "value", 1);
	}
function collapse() {
	$(".collapsible").hide();
}
function reloadTab(param, param2) {
	var $tabs = $('#equiptabs').tabs();
var selected = $tabs.tabs('option', 'selected');
var newurl = "equip_query.php?owner="+player+"&type="+param+"&sort="+param2;
$tabs.tabs( 'url' , selected , newurl );
$tabs.tabs( 'load' , selected);	
}
function reloadTab2(param, param2) {
	var $tabs = $('#equiptabs').tabs();
var selected = $tabs.tabs('option', 'selected');
var newurl = "equip_query2.php?owner="+player+"&type="+param+"&sort="+param2;
$tabs.tabs( 'url' , selected , newurl );
$tabs.tabs( 'load' , selected);	
}
function updatevalues() {
	var size=parseInt($("#cursize").html());
	var build=parseInt($('#upgval').val());
	
			element1=(size+build-1)*10000;
		   element2=(size-1)*10000;
		   sum1=(0+element1)/2*(size+build);
		   sum2=(0+element2)/2*size;
		   gold=sum1-sum2;
		   
		   element1=(size+build-1)*10;
		   element2=(size-1)*10;
		   sum1=(0+element1)/2*(size+build);
		   sum2=(0+element2)/2*size;
		   mith=sum1-sum2;
		   
		   element1=(size+build-1)*20;
		   element2=(size-1)*20;
		   sum1=(0+element1)/2*(size+build);
		   sum2=(0+element2)/2*size;
		   pine=sum1-sum2;
		   
		   points=build*20;

    $('#gold').html(gold);
    $('#mith').html(mith);
    $('#pine').html(pine);
    $('#points').html(points);
}
function updatevalues2() {
	var build=parseInt($('#upgpoints').val());
		
		upg_cost = build * 5000;
    upg_adamantium = build * 20;
    upg_crystal = build * 10;
    upg_meteor = build* 5;
    upg_elm = build* 10;
		upg_yew = build * 20;
		upg_points = build * 10;

    $('#upg_gold').html(upg_cost);
    $('#upg_ada').html(upg_adamantium);
    $('#upg_crys').html(upg_crystal);
    $('#upg_meteo').html(upg_meteor);
		$('#upg_yew').html(upg_yew);
		$('#upg_elm').html(upg_elm);
		$('#upg_points').html(upg_points);
}
function updatevalues3() {
	var size=parseInt($("#curland").html());
	var build=parseInt($("#land").val());
	
		   element1=(size+build-1)*5000;
		   element2=(size-1)*5000;
		   sum1=(0+element1)/2*(size+build);
		   sum2=(0+element2)/2*size;
		   gold=sum1-sum2;
		   
		   element1=(size+build-1)*10;
		   element2=(size-1)*10;
		   sum1=(0+element1)/2*(size+build);
		   sum2=(0+element2)/2*size;
		   mith=sum1-sum2;
		   

    $('#gold').html(gold);
    $('#mith').html(mith);
}
function select(param) {
	var $tabs = $('#equiptabs').tabs();
	var selected = $tabs.tabs('option', 'selected');

	$('#desc'+selected).html('<img src="../images/icons/blank.png" />');
	$('#desc'+selected).html($('#eq'+param).html());
}
function dropEq(drag)
{
    $(drag).hide();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    //alert("equip2.php?equip="+vetId);
    $("#preloader").html("<center><img src='../images/misc/preloader.gif'></center>");
    $("#container").load("equip2.php?equip="+vetId);
}
function repairEq(drag)
{
    $(drag).hide();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    //alert("equip2.php?equip="+vetId);
    $("#preloader").html("<center><img src='../images/misc/preloader.gif'></center>");
    $("#master_all").load("equip2.php?napraw="+vetId);
}
function sellEq(drag)
{
    $(drag).hide();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    //alert("equip2.php?equip="+vetId);
    $("#preloader").html("<center><img src='../images/misc/preloader.gif'></center>");
    $("#master_all").load("equip2.php?sell="+vetId);
}
function message(data)
{
	alert(data);
}
function potion(drag)
{
    $(drag).hide();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    //alert("equip2.php?equip="+vetId);
    $("#preloader").html("<center><img src='../images/misc/preloader.gif'></center>");
    alert(vetId);
	$.get("equip_query2.php?mix="+vetId , function(data){
		if (data == 'P')
		{
			$('#poison_id').val(vetId);
			$("#poison_dialog").dialog({
			modal: false,
			buttons: {
			Zatruj: function() {
				var equid=$("#equid").val();
				//alert("equip2.php?poison="+equid+"&poisonid="+vetId);
				$("#master_all").load("equip2.php?poison="+equid+"&poisonid="+vetId);
			}
			}
			
			});
		}
			
	});
}
function sendEq(drag)
{
    $(drag).hide();
    $("#send_dialog").dialog();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    //alert("equip2.php?equip="+vetId);
    //$("#preloader").html("<img src='images/misc/preloader.gif'>");
    $("#itemid").val(vetId);
}
function clock() {
  var ut=new Date();
  var h,m,s;
  var time="        ";
  h=ut.getHours();
  m=ut.getMinutes();
  s=ut.getSeconds();
  if(s<=9) s="0"+s;
  if(m<=9) m="0"+m;
  if(h<=9) h="0"+h;
  time+=h+":"+m+":"+s;
  document.getElementById('clock').innerHTML=time;
  document.getElementById('toreset').innerHTML=60-m+' minut';
  
}

setInterval("clock()",1000);
