<?if( $sg == 'banner' ):?>
<br />
<table cellpadding="0" cellspacing="0" style="margin:0 auto">
	<tr>
		<td style="font-size:11px;color:#999;font-family:Tahoma,Arial,Verdana;line-height:16px;text-align:center;">Designed by:</td>
	</tr>
	<tr>
		<td>
			<div style="background:transparent url(templates/<?php echo $this->template ?>/images/banner_02.jpg) no-repeat;width:82px;height:16px;font-size:11px;color:#999;font-family:Tahoma,Arial,Verdana;padding:0 0 0 28px;line-height:16px;text-align:center;">
				<a href="http://www.jm-experts.com" style="text-decoration:none;">JM-Experts!</a>
			</div>
		</td>
	</tr>
</table>
<?else:?>
 	<?php echo $mainframe->getCfg('sitename') ;?>, Powered by <a href="http://joomla.org/" class="footer" target="_blank">Joomla!</a> 
<?endif;?>