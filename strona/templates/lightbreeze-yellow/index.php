<?php
/**
 * @subpackage	LightBreeze v1.6 HM01J
 * @copyright	Copyright (C) 2010-2012 Hurricane Media - All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
$LeftMenuOn = ($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-7'));
$RightMenuOn = ($this->countModules('position-6') or $this->countModules('position-8'));
$TopNavOn = ($this->countModules('position-13'));

$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$sitetitle = $this->params->get('sitetitle');
$sitedescription = $this->params->get('sitedescription');

$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo.gif';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/sfhover.js"></script>
</head>
<body>
<div id="wrapper">

	<div id="header">

		<!-- TopNav -->
		<?php if($TopNavOn ): ?>
		<div id="topnav">
			<jdoc:include type="modules" name="position-13" style="xhtml" />
		</div>
		<?php endif; ?>		


		<!-- Logo -->
		<div id="logo">
			
			<?php if ($logo && $logoimage == 1): ?>
				<a href="<?php echo $this->baseurl ?>"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>" /></a>
			<?php endif; ?>
			<?php if (!$logo || $logoimage == 0): ?>

				<?php if ($sitetitle): ?>
					<a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle); ?></a><br/>
				<?php endif; ?>

				<?php if ($sitedescription): ?>
					<div class="sitedescription"><?php echo htmlspecialchars($sitedescription); ?></div>
				<?php endif; ?>

			<?php endif; ?>

  		</div>
	
		<!-- Search -->
		<div id="search">		
			<jdoc:include type="modules" name="position-0" />
		</div>
	</div>
	
	<div id="topmenu">
		<jdoc:include type="modules" name="position-1" />
	</div>
	<br clear="all" />
	
	<!-- Breadcrumbs -->
	<?php if ($this->countModules('position-2')): ?>
	<div id="breadcrumbs">
		<jdoc:include type="modules" name="position-2" />
	</div>
	<?php endif; ?>


	<!-- Left Menu -->
	<?php if($LeftMenuOn ): ?>
	<div id="leftmenu">
		<jdoc:include type="modules" name="position-7" style="xhtml" />
		<jdoc:include type="modules" name="position-4" style="xhtml" />
		<jdoc:include type="modules" name="position-5" style="xhtml" />
	</div>
	<?php endif; ?>


	<!-- Contents -->
	<?php if($LeftMenuOn AND $RightMenuOn): ?>
	<div id="content-w1">
	<?php elseif($LeftMenuOn OR $RightMenuOn): ?>
	<div id="content-w2">	
	<?php else: ?>
	<div id="content-w3">	
	<?php endif; ?>
	
		<?php if ($this->countModules('position-12')): ?>
		<div id="content-top">
			<jdoc:include type="modules" name="position-12" />
		</div>
		<?php endif; ?>
	
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>


	<!-- Right Menu -->
	<?php if($RightMenuOn ): ?>
	<div id="rightmenu">
		<jdoc:include type="modules" name="position-6" style="xhtml" />
		<jdoc:include type="modules" name="position-8" style="xhtml" />
		<jdoc:include type="modules" name="position-3" style="xhtml" />
	</div>
	<?php endif; ?>
	

	<!-- Footer -->
	<div id="footer">
		<jdoc:include type="modules" name="position-14" />
	</div>

	<div id="push"></div>

</div>





<!-- Page End -->
<div id="copyright">&copy;<?php echo date('Y'); ?> <?php echo $sitename; ?> | <a href="http://www.hurricanemedia.net">Designed by Hurricane Media</a><br/> 












<div class="cp2"><a href="http://www.leksakerindex.se"><img src="templates/<?php echo $this->template; ?>/images/spacer.gif" alt="LeksakerIndex" /></a><a href="http://www.leksakeronline.eu"><img src="templates/<?php echo $this->template; ?>/images/spacer.gif" alt="LeksakerOnline" /></a><a href="http://www.barnochbaby.com"><img src="templates/<?php echo $this->template; ?>/images/spacer.gif" alt="BarnOchBaby" /></a><a href="http://www.barnkläderforum.se"><img src="templates/<?php echo $this->template; ?>/images/spacer.gif" alt="BarnKläderForum" /></a></div></div>
</body>
</html>