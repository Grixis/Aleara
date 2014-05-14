<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

JPlugin::loadLanguage( 'tpl_SG1' );

define( 'path', dirname(__FILE__) );
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/setup.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>

<jdoc:include type="head" />

<?php

	$menu_name        = $this->params->get("menuName", "topmenu");

	$menu_type        = $this->params->get("menuType", "splitmenu");

	require(path .DS."styleloader.php");

	require(path .DS."utils.php");

?>

<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />

<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

</head>


<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/menu.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/head.php');	?>

<body id="page_bg">

	<div id="wrapper">

		<div id="holder">

			<div class="clr"></div>

			<div id="header">

              <div id="pillmenu">

				<div id="horiz-menu">
									 <?php echo $main_navigation;?>
								
						</div>

			</div>

				<div class="logo">

					<table cellpadding="0" cellspacing="0">

						<tr>

							<td>

								<h1><a href="index.php"><?php echo $mainframe->getCfg('sitename') ;?></a></h1>

							</td>

						</tr>

					</table>

				</div>

                             <div id="search"><jdoc:include type="modules" name="user4" /></div>

			</div>



          

			

			

			<div id="content">

				

				<?php if($this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div class="content_m">

					<div class="content_b">

						<div class="content_t">

				

				<?php elseif($this->countModules('left') and !$this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div class="content_m_l">

					<div class="content_b_l">

						<div class="content_t">

				

				<?php elseif(!$this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div class="content_m_r">

					<div class="content_b_r">

						<div class="content_t">

				

				<?php else: ?>

				<div class="content_m_full">

					<div class="content_b_full">

						<div class="content_t">

				<?php endif; ?>

				

				<?php if($this->countModules('left') and JRequest::getCmd('layout') != 'form') : ?>

				<div id="leftcolumn">

					<jdoc:include type="modules" name="left" style="rounded" />

					<br />

					<?php $sg = 'banner'; include "templates.php"; ?>

					<br />

				</div>

				<?php endif; ?>

				

				<?php if($this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div id="maincolumn">			

				<?php elseif($this->countModules('left') and !$this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div id="maincolumn_left">

				<?php elseif(!$this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div id="maincolumn_right">

				<?php else: ?>

				<div id="maincolumn_full">

				<?php endif; ?>

				

					<div class="nopad">

						<jdoc:include type="message" />

						

							<jdoc:include type="component" />

				

					</div>

					

				</div>

					

				<?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>

				<div id="rightcolumn">

					<jdoc:include type="modules" name="right" style="rounded" />

				</div>

				<?php endif; ?>

				<div class="clr"></div>

								

				

						</div>

					</div>

				</div>

			</div>

			

			<div id="footer">

				<div id="sgf">

					<p>

						<jdoc:include type="modules" name="debug" />

						<?php $sg = ''; include "templates.php"; ?>

						<a href="http://validator.w3.org/check/referer">valid xhtml</a>

						<a href="http://jigsaw.w3.org/css-validator/check/referer">valid css</a>

					</p>

				</div>

			</div>

			

		</div>

	</div>	

</body>

</html>