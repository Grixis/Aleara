<?php
	
	/*--------------------------------------------------------------
	# Website: http://www.jm-experts.com
	# Support: support@joomla-manager.com
	---------------------------------------------------------------*/
	
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	

	$user_position_1 = 'null';
	$user_position_2 = 'null';
	$user_position_3 = 'null';
	$user_position_4 = 'null';
	
	if($this->countModules('user1 and user2 and user3')){
		$user_position_1 = 'us_width-32b';		
	}else if($this->countModules('user1 and user2') || $this->countModules('user2 and user3') || $this->countModules('user1 and user3')){
		$user_position_1 = 'us_width-49b';
	}	
	
	if($this->countModules('user4 and user5 and user6')){
		$user_position_2 = 'us_width-32b';		
	}else if($this->countModules('user4 and user5') || $this->countModules('user5 and user6') || $this->countModules('user4 and user6')){
		$user_position_2 = 'us_width-49b';
	}		

	if($this->countModules('user7 and user8 and user9 and user10')){
		$user_position_3 = 'us_width-24b';	
	}else if($this->countModules('user7 and user8 and user9') || $this->countModules('user7 and user8 and user10') || $this->countModules('user8 and user9 and user10') || $this->countModules('user9 and user10 and user7') || $this->countModules('user9 and user10 and user8')){
		$user_position_3 = 'us_width-32b';
	}else if($this->countModules('user7 and user8') || $this->countModules('user7 and user10') || $this->countModules('user8 and user9') || $this->countModules('user8 and user10') || $this->countModules('user7 and user9') || $this->countModules('user9 and user10')){
		$user_position_3 = 'us_width-49b';
	}
		
	$user_position_4 = ($this->countModules('user11')>0) + ($this->countModules('user12')>0) + ($this->countModules('user13')>0) + ($this->countModules('user14')>0) + ($this->countModules('user15')>0) + ($this->countModules('user16')>0);
$user_position_4w = $user_position_4 > 0 ? 'us_width-' . floor(99 / $user_position_4) : '';
			
	// component and pos width
        $w_component = ('component');
        $w_right = $this->countModules( 'right' );
         $w_count = ($w_component && $w_right) ? '-2' : false;
	  $w_bg = ($w_component && $w_right) ? '-2' : false;
	
	// header help classes
	$header_style1 = '';
	$header_style2 = '';
	
	if($this->countModules('header && advert2'))
	{
		$header_style1 = 'left';
		$header_style2 = 'right';		
	}
	else
	{
		$header_style1 = 'center';
		$header_style2 = 'center';
	}

?>