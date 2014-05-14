<?php 

	/*--------------------------------------------------------------
	# Website: http://www.jm-experts.com
	# Support: support@joomla-manager.com
	---------------------------------------------------------------*/
	
	// no direct access
	defined('_JEXEC') or die('Restricted access');

	$document = &JFactory::getDocument();
	$renderer = $document->loadRenderer( 'module' );
	$options = array( 'style' => "raw" );
	$module	 = JModuleHelper::getModule( 'mod_mainmenu' );
	$main_navigation = false;

	$menu_name = $this->params->get("menuname", "mainmenu"); 
	$mtype = $this->params->get("menutype", "moomenu");

	if($mtype == "moomenu" or $mtype == "suckerfish") : 								      	
		$module->params	= "menutype=$menu_name\nshowAllChildren=1";
		$main_navigation = $renderer->render( $module, $options );
	else :
		$module->params	= "menutype=$menu_name\nshowAllChildren=0";
		$main_navigation = $renderer->render( $module, $options );
	endif;

?>