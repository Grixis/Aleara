<center><IMG SRC="images/locations/domymieszkancow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{strip}
{if $Action == ""}
    <p>Słońce leniwie przesuwa się ku zachodowi, pokrywając miasto czerwienią. Hałas na ulicach zaczyna ustępować ciszy. Opuściłeś już główne ulice Aleary, kierując się w stronę dzielnicy mieszkalnej. Domy, które mijasz zbudowane są w najróżniejszych stylach. Po prawej, wśród bujnych konarów drzew, znajduje się wielki pałac, którego motywem przewodnim jest liść. Marmurowe kolumny ozdobione są szmaragdowymi ornamentami. Tuż za bramą dostrzegasz dwie wspaniałe fontanny, a przy podjeździe wykonany z niezwykłym kunsztem, kryształowy pomnik. Okrągłe okna nadają tej budowli nieco zabawnego charakteru, jednocześnie wzbudzając nieco zazdrości. Wchodzisz w jedną z bocznych uliczek mijając po drodze kilka mniejszych pałacyków. W oddali zaczynasz dostrzegać znajome zarysy, myślisz sobie: nareszcie w domu/p>
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
    {if $Houseid == ""}
        <li> <a href="house.php?action=land">{$Aland}</a></li>
        <li> <a href="house.php?action=list">{$Alist}</a></li>
        <li> <a href="house.php?action=rent">{$Arent}</a></li>
    {/if}
    {if $Houseid > "0"}
        <li> <a href="house.php?action=my">{$Ahouse}</a></li>
        <li> <a href="house.php?action=build">{$Aworkshop}</a></li>
        <li> <a href="house.php?action=land">{$Aland}</a></li>
        <li> <a href="house.php?action=list">{$Alist}</a></li>
        <li> <a href="house.php?action=rent">{$Arent}</a></li>
    {/if}  
    </ul>
{/if}

{if $Action == "rent"}
    <table width="100%">
    <tr>
    <td width="10%"><b><u>{$Hnumber}</u></b></td>
    <td width="10%"><b><u>{$Hseller}</u></b></td>
    <td width="30%"><b><u>{$Hname}</u></b></td>
    <td width="10%"><b><u>{$Hsize}</u></b></td>
    <td width="20%"><b><u>{$Htype}</u></b></td>
    <td width="10%"><b><u>{$Hcost}</u></b></td>
    <td width="10%"><b><u>{$Hoption}</u></b></td>
    </tr>
    {section name=house loop=$Housesname}
        <tr>
        <td>{$Housesid[house]}</td>
        <td><a href="view.php?view={$Housesseller[house]}">{$Housesseller[house]}</a></td>
        <td>{$Housesname[house]}</td>
        <td>{$Housesbuild[house]}</td>
        <td>{$Housestype[house]}</td>
    <td>{$Housescost[house]}</td>
    <td>{$Houseslink[house]}</td>
        </tr>
    {/section}
    </table> <a href="house.php">{$Aback}</a>
    {$Message}
{/if}

{if $Action == "land"}
    <p>{$Landinfo}</p>
		{if $Substep == "new"}
			<a href="house.php?action=land&amp;step=buy">Kup pierwszy obszar ziemi</a> za 20 mithrilu.
		{else}
    <form method="post" action="house.php?action=land&amp;step=buy">
    <input type="submit" value="Kup" /> <input id="land" type="text" name="land" size="5" value="0" /> obszarów ziemi
    </form><br><br>Użyj suwaka poniżej aby zakupić kilka obszarów na raz.<br><br>
        
    <center><div id="landslider" style="width:50%"></div></center>
		<div id="curland" style="display: none;">{$Lands}</div>
		<div id="maxland" style="display: none;">{$Maxland}</div><br><br>
		<center>Potrzebne surowce: <span id="gold">0</span> złota, <span id="mith">0</span> mithrilu</center><br><br>
		Obecnie posiadasz <b>{$Lands}</b> obszarów ziemi. Koszty kolejnych obszarów:<br><br>
		Obszar <b>{$Lands1}</b> : <b>{$Gold1}</b> złota, <b>{$Mith1}</b> mithrilu<br>
		Obszar <b>{$Lands2}</b> : <b>{$Gold2}</b> złota, <b>{$Mith2}</b> mithrilu<br>
		Obszar <b>{$Lands3}</b> : <b>{$Gold3}</b> złota, <b>{$Mith3}</b> mithrilu<br>
		Obszar <b>{$Lands4}</b> : <b>{$Gold4}</b> złota, <b>{$Mith4}</b> mithrilu<br>
		Obszar <b>{$Lands5}</b> : <b>{$Gold5}</b> złota, <b>{$Mith5}</b> mithrilu<br>
    {/if}
{/if}

{if $Action == "build"}
    <p>Witaj w warsztacie budowlanym. Tutaj możesz popracować nad swoim domem aby był większy i lepszy. Każde działanie wymaga oprócz surowców specjalnych punktów budowlanych. Punkty budowlane wzrastają z każdym resetem. 
    Obecnie posiadasz <b>{$Points}</b> punktów budowlanych. </p>
    {if $Buildhouse !=""}
			{if $Substep == "new"}
				{$Buildhouse}
			{else}	
    <h1>Rozbudowa domu</h1>
    Rozbudowa domu pozwoli ci na powiększenie jego rozmiaru. W większym domu śpi się lepiej, a samopoczucie znacznie rośnie. Większy dom pozwala na odzyskanie większej ilości energii. Każdy poziom rozbudowy obniża jego jakość o 10.<br><br>
    <div id="maxsize" style="display: none">{$Maxsize}</div>
    <div id="cursize" style="display: none">{$Size}</div>
    <form method="post" action="house.php?action=build&amp;step=add">
    <input type="submit" value="Rozbuduj" /> swój dom o <input type="text" id="upgval" name="upgval" size="3" value="0" /> poziomów<br><br>
    <center><div id="buildslider" style="width:50%"></div></center>
    
    </form>
    <br>
    <center>Potrzebne surowce:<span id="gold">0</span> złota, <span id="mith">0</span> mithrilu, <span id="pine">0</span> sosny, <span id="points">0</span> punktów budowlanych.</center><br><br>
    Posiadasz dom o rozmiarze <b>{$Size}</b>. Koszty kolejnych poziomów rozbudowy:<br><br>
	Poziom <b>{$Size1}</b> : <b>{$Buildgold1}</b> złota, <b>{$Buildmith1}</b> mithrilu, <b>{$Buildpine1}</b> sosny<br>
	Poziom <b>{$Size2}</b> : <b>{$Buildgold2}</b> złota, <b>{$Buildmith2}</b> mithrilu, <b>{$Buildpine2}</b> sosny<br>
	Poziom <b>{$Size3}</b> : <b>{$Buildgold3}</b> złota, <b>{$Buildmith3}</b> mithrilu, <b>{$Buildpine3}</b> sosny<br>
	Poziom <b>{$Size4}</b> : <b>{$Buildgold4}</b> złota, <b>{$Buildmith4}</b> mithrilu, <b>{$Buildpine4}</b> sosny<br>
	Poziom <b>{$Size5}</b> : <b>{$Buildgold5}</b> złota, <b>{$Buildmith5}</b> mithrilu, <b>{$Buildpine5}</b> sosny<br>
	Dodatkowo każdy poziom rozbudowy wymaga <b>20</b> punktów budowlanych.
	<hr>
			{/if}
    {/if}
    {if $Buildbed !=""}
    <h1>Budowa sypialni</h1>
    Budowa sypialni umożliwi ci odpoczywanie w swoim domu zarówno tobie, jak i twojemu lokatorowi.<br><br>
    <center><input type="button" value="Wybuduj sypialnię" onclick="window.location='house.php?action=build&amp;step=bedroom'"></center><br><br>
    <center>Potrzebne surowce: 25000 złota, 50 mithrilu, 100 sosny, 50 punktów budowlanych</center>
    <hr>
    {/if}
    {if $Buildwardrobe !=""}
    <h1>Szafy na przedmioty</h1>
    Kupno szaf na przedmioty pozwoli ci na bezpieczne przechowywanie twoich przedmiotów. Każda szafa pomieści 100 przedmiotów.<br><br>
    <center><input type="button" value="Kup szafę" onclick="window.location='house.php?action=build&amp;step=wardrobe'" /><br><br>
    Potrzebne surowce: 10000 złota, 100 sosny, 10 punktów budowlanych</center>
    <hr>
    {/if}
    {if $Upgrade !=""}
    <h1>Upiększanie domu</h1>
    Upiększanie domu zwiększa jego wartość i poziom luksusu. Zwiększa również ilość energii odzyskiwanej podczas odpoczynku.<br><br>
 
        <form method="post" action="house.php?action=build&amp;step=upgrade&amp;step2=make">
       <input type="submit" value="Zwiększ" /> wartość domu o <input id="upgpoints" type="text" name="points" size="5" value="0" />
        </form><br><br>
        
    <center><div id="upgradeslider" style="width:50%"></div></center>
    <br>
    <center>Potrzebne surowce:<span id="upg_gold">0</span> złota, <span id="upg_ada">0</span> adamantium, <span id="upg_crys">0</span> kryształów, <span id="upg_meteo">0</span> meteoru, <span id="upg_yew">0</span> cisu, <span id="upg_elm">0</span> wiązu, <span id="upg_points">0</span> punktów budowlanych</center>  
    <div id="maxupgrade" style="display: none">{$Maxupgrade}</div><br><br>
	Każde zwiększenie poziomu upiększenia o jeden punkt wymaga <b>5000</b> złota, <b>20</b> adamantium, <b>10</b> kryształów, <b>5</b> kawałków meteorytu, <b>10</b> cisu, <b>20</b> wiązu oraz <b>10</b> punktów budowlanych.
    {/if}
    {if $Step == "new"}
        <form method="post" action="house.php?action=build&amp;step=new&amp;step2=make">
        {$Hname} <input type="text" name="name" /><br />
        <input type="submit" value="{$Abuild}" /></form><br />
    {/if}
    {if $Step == "upgrade"}
        {$Upginfo}{$Upg_cost}{$Tcredits}{$Upg_adamant}{$Tadamantium}{$Upg_crystal}{$Tcrystal}{$Upg_meteor}{$Tmeteor}{$Upg_yew}{$Tyew}{$Upg_elm}{$Telm}<br />
        <form method="post" action="house.php?action=build&amp;step=upgrade&amp;step2=make">
        {$Upgrade3} <input type="text" name="points" size="5" /><br />
        <input type="submit" value="{$Awork}" /></form><br />
    {/if}
    <br /><br /><a href="house.php">{$Aback}</a>
{/if}

{if $Action == "list"}
    <table width="100%">
    <tr>
    <td width="10%"><b><u>{$Hnumber}</u></b></td>
    <td width="10%"><b><u>{$Howner}</u></b></td>
    <td width="10%"><b><u>{$Hlocator}</u></b></td>
    <td width="40%"><b><u>{$Hname}</u></b></td>
    <td width="10%"><b><u>{$Hsize}</u></b></td>
    <td width="20%"><b><u>{$Htype}</u></b></td>
    </tr>
    {section name=house loop=$Housesname}
        <tr>
        <td>{$Housesid[house]}</td>
        <td><a href="view.php?view={$Housesowner[house]}">{$Housesowner[house]}</a></td>
    <td>{$Locator[house]}</td>
        <td>{$Housesname[house]}</td>
        <td>{$Housesbuild[house]}</td>
        <td>{$Housestype[house]}</td>
        </tr>
    {/section}
    </table> <a href="house.php">{$Aback}</a>
{/if}

{if $Action == "my"}
    {if $Step == ""}
        {$Houseinfo}<br /><br />
        <table width="70%">
        <tr><td width="35%">{$Hname}: </td><td width="65%"> {$Name} {if $Owner == $Id} [<a href="house.php?action=my&amp;step=name">{$Cname}</a>] {/if}</td></tr>
        <tr><td>{$Howner}: </td><td> <a href="view.php?view={$Owner}">{$Owner}</a></td></tr>
        <tr><td>{$Hsize}: </td><td> {$Build}</td></tr>
        <tr><td>{$Lamount}: </td><td> {$Size}</td></tr>
        <tr><td>{$Frooms}: </td><td> {$Unused}</td></tr>
        <tr><td>{$Hvalue}: </td><td> {$Value} {$Housename}</td></tr>
        <tr><td>{$Hlocator}: </td><td> {$Locator}</td></tr>
        <tr><td>{$Ibedroom}: </td><td> {$Bedroom}</td></tr>
        <tr><td>{$Wamount}: </td><td> {$Wardrobe}</td></tr>
        <tr><td>{$Iamount}: </td><td> {$Items}</td></tr>
        </table><br/>
        {$Bedroomlink}
        {$Wardrobelink}
        {$Locatorlink}
        {$Sellhouse}
        {$Locleave}
        (<a href="house.php">{$Aback}</a>)
    {/if}
    {if $Step == "leave" && $Step2 == ""}
        {$Youwant}
        <form method="post" action="house.php?action=my&amp;step=leave&amp;step2=confirm">
            <input type="submit" value="{$Yes}" />
        </form>
    {/if}
    {if $Step == "sell"}
        {if $Step2 == ""}
            {$Sellinfo}<br />
            <form method="post" action="house.php?action=my&amp;step=sell&amp;step2=sell">
            <input type="submit" value="{$Asend}" /> {$Housesale} <input type="text" name="cost" />{$Goldcoins}
            </form>
        {/if}
        {if $Step2 == "sell"}
            {$Message}<br /><br />
            (<a href="house.php">{$Aback}</a>)<br />
        {/if}
    {/if}
    {if $Step == "locator"}
        {if $Step2 == ""}
            <form method="post" action="house.php?action=my&amp;step=locator&amp;step2=change">
        <select name="loc"><option value="add">{$Oadd}</option>
        <option value="delete">{$Odelete}</option></select> {$Second}<br />
        {$Lid2}: <input type="text" name="lid" size="5" value="{$Locid}" /><br />
        <input type="submit" value="{$Amake}" /></form><br />
    {/if}
    {$Message}
    {/if}
    {if $Step == "name"}
        <form method="post" action="house.php?action=my&amp;step=name&amp;step2=change">
        <input type="submit" value="{$Achange}" /> {$Ona}: <input type="text" name="name" />
        </form><br />
    {/if}
    {if $Step == "bedroom"}
        {$Bedinfo}<ul{if $Graphstyle == "Y"} class="sword"{/if}>
        <li> <a href="house.php?action=my&amp;step=bedroom&amp;step2=rest">{$Arest}</a></li>
        <li> <a href="logout.php?rest=Y&amp;did={$Id}">{$Asleep}</a></li>
        </ul>
    {/if}
    {if $Step == "wardrobe"}
        {$Winfo} <b>{$Wardrobe} {$Wamount}</b> {$And2} <b>{$Amount} {$Iamount4}</b> {$Inw}<br /><ul>
        <li> <a href="house.php?action=my&amp;step=wardrobe&amp;step2=add">{$Ahidei}</a></li>
        <li> <a href="house.php?action=my&amp;step=wardrobe&amp;step2=list">{$Alist}</a></li>
        </ul>
       {if $Step2 == "list"}
           <table width="100%">
           <tr>
           <td width="28%"><b><u>{$Iname}</u></b></td>
           <td width="12%"><b><u>{$Ipower}</u></b></td>
           <td width="12%"><b><u>{$Idur}</u></b></td>
           <td width="12%"><b><u>{$Iagi}</u></b></td>
           <td width="12%"><b><u>{$Ispeed}</u></b></td>
           <td width="12%"><b><u>{$Iamount2}</u></b></td>
           <td width="12%"><b><u>{$Ioption}</u></b></td>
           </tr>
           {section name=house1 loop=$Itemname}
               <tr>
               <td>{$Itemname[house1]}</td>
               <td align="center">{$Itempower[house1]}</td>
               <td align="center">{$Itemdur[house1]}/{$Itemmaxdur[house1]}</td>
               <td align="center">{$Itemagility[house1]}</td>
               <td align="center">{$Itemspeed[house1]}</td>
               <td align="center">{$Itemamount[house1]}</td>
               <td>- <a href="house.php?action=my&amp;step=wardrobe&amp;take={$Itemid[house1]}">{$Aget}</a></td>
               </tr>
           {/section}
           </table>
        {/if}
        {if $Take != ""}
            {if $Step3 == ""}
                <form method="post" action="house.php?action=my&amp;step=wardrobe&amp;take={$Id}&amp;step3=add">
                <input type="submit" value="{$Aget}" /> {$Fromh} <input type="text" name="amount" value="{$Amount}" size="5" /> {$Amount2} <b>{$Name}</b><br />
                </form>
            {/if}
        {/if}
        {if $Step2 == "add"}
            <form method="post" action="house.php?action=my&amp;step=wardrobe&amp;step2=add&amp;step3=add"><table>
            <tr><td colspan="2">{$Item}: <select name="przedmiot">
            {section name=house2 loop=$Itemname1}
                <option value="{$Itemid1[house2]}">({$Iamount3}: {$Itemamount1[house2]}) {$Itemname1[house2]}</option>
            {/section}
            </select> {$Amount2} <input type="text" name="amount" size="5" /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{$Ahide}" /></td></tr>
            </table></form>
        {/if}
    {/if}
    {if $Step != "" && $Step2 != "sell"}
        <br />(<a href="house.php?action=my">{$Aback}</a>)
    {/if}
{/if}
{/strip}
</br>