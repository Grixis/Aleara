<?php

	/*--------------------------------------------------------------
	# Website: http://www.jm-experts.com
	# Support: support@joomla-manager.com
	---------------------------------------------------------------*/

	// This data goes between the <head></head> tags of the template

?>
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/images/favicon.ico" />
<link href="<?php echo $template_baseurl; ?>/css/template_css.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo $template_baseurl; ?>/css/suckerfish.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo $template_baseurl; ?>/css/joomla_classes.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo $template_baseurl; ?>/css/typography.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo $template_baseurl; ?>/css/stuff.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo $template_baseurl; ?>/css/style1.css" rel="stylesheet"  type="text/css" />
<!--[if IE 6]>
<link href="<?php echo $template_baseurl; ?>/css/ie6_css.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 7]>
<link href="<?php echo $template_baseurl; ?>/css/ie7_css.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript">
template_path = '<?php echo $template_baseurl; ?>';
</script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/lib/scripts/template_scripts.js"></script>

<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/lib/scripts/menu.php?style=<?php echo $this->params->get("menutype", "moomenu"); ?>&amp;width=<?php echo $this->params->get("menu_width", 1); ?>&amp;height=<?php echo $this->params->get("menu_height", 1); ?>&amp;opacity=<?php echo $this->params->get("menu_opacity", 1); ?>&amp;animation=<?php echo $this->params->get("menu_animation", 1); ?>&amp;speed=<?php echo $this->params->get("menu_speed", 500); ?>"></script>