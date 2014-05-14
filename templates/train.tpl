<center><IMG SRC="images/locations/blonie.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Action == ''}
    Idąc wieczorem dróżką  na przedmieściach miasta widzisz w oddali błyskające magiczne światła mieczy oraz różnych oręży. Zaciekawiony sytuacją podchodzisz bliżej i dostrzegasz, iż to tylko walki treningowe. Postanawiasz poobserwować chwilę trenujących. Widzisz jak zacięcie trenują wydając przy tym dzikie okrzyki, a pot spływa im po czołach. Po chwili podchodzi do Ciebie stary półmok z brodą ciągnącą się aż do ziemi. Powiedział Ci, że jest tutejszym trenerem walk i że może Cię wyszkolić za odpowiednią opłatą. Ty zaś zaglądasz w sakwę, aby sprawdzić czy masz trochę złota przy sobie. Zastanawiasz się co zrobić…<br /><ul>
    {section name=k loop=$StatsDesc}
	<li><span id="{$StatOptions[k]}">{$PlayerCost[k]}</span> {$smarty.const.ENERGY} {$StatsDesc[k]}</li>
	{/section}</ul>
	Za każdy trening pobiera się opłatę w wysokości <strong id="goldcost">{$GoldCost}</strong> sztuk złota.<br><br>
	
    <form method='post' action='train.php?action=train'>
    {$smarty.const.I_WANT} <select id='train' name='train' onchange="changemax();">
		{section name=j loop=$StatOptions}
			<option value={$StatOptions[j]}>{$TrainedStats[j]}</option>
		{/section}
   </select> 
    <input id="repval" type='text' size='4' value='0' name='rep' /> {$smarty.const.T_AMOUNT}. <input type='submit' value='{$smarty.const.A_TRAIN}' />
    </form>
	<div align="center"><div id="trainslider" style="width: 75%"></div></div>
	<div id="slidervalue"></div>
	<div id="energy" style="display: none;">{$Energy}</div>
	<div id="money" style="display: none;">{$Money}</div></br>
{/if}
{if $Action == 'train'}
	{$smarty.const.COST} <b>{$energyCost}</b> {$smarty.const.ENERGY_COST}, <strong>{$goldCost}</strong> sztuk złota<br />
	{$smarty.const.WILL_GAIN} <b>{$gainedStat}</b> {$gainedStatName}.
    <form method='post' action='train.php?action=train&amp;step=next'>
        <input type='hidden' name='train' value='{$Train}' />
        <input type='hidden' name='rep' value='{$Rep}' />
        <input type='submit' value='{$smarty.const.A_TRAIN}' />
    </form></br>
{/if}
{/strip}</br>