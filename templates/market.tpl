<center><IMG SRC="images/locations/rynekhandlowy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
Rynek. Najważniejszy punkt każdego miasta mieszczący się na ogromnym placu z fontanną i studnią. Kolorowe baldachimy rozwieszone nad stoiskami  chroniły kupców i ich towary przed słońcem. Idąc wzdłuż ścieżki prowadzącej między przekupkami, wyłożonej kamiennym brukiem, rozglądasz się uważnie.  Twoich nozdrzy dosięga zapach świeżego pieczywa, lśniąca skórka jabłek błyszczy w słońcu, kusząc by zakupić chociaż sztukę. Mijasz targowisko z żywnością, poganiany zapachem ryb, niwelowanym w tym momencie girlandami suszonych jak i dopiero co zerwanych ziół.  Hałas panujący na tym terenie był nie do zniesienia. Sprzedawcy przekrzykujący się wzajemnie, wychwalali swe towary, inni zaś dobijali interesów, głośno się targując. Spotkać tutaj można przedstawicieli wielu ras, którzy błądzili tak samo jak ty w poszukiwaniu pożądanych towarów i okazji. Niczego nie brakowało, a wybór asortymentu był szeroki. Poczynając na żywności i minerałach, kończąc na broniach i odzieniu. Nogi skierowały cię w stronę fontanny gdzie stała trubadurka opiewająca bohaterów w swych pieśniach.  Ponownie zagłębiasz się w targowisko, tym razem precyzyjnie określając stoisko w którym chcesz dokonać zakupu.
{if $View == ""}
    <br />{if $Location == "Altara"}
        {$Marketinfo}<br /><br />
    {/if}

    <a href="market.php?view=myoferts">{$Amyoferts}</a><br /><br />

    {section name=market loop=$Markets}
        {$Markets[market]}<br />
        <ul>
            <li><a href="{$Filesname[market]}.php?view=market&amp;limit=0&amp;lista=id">{$Ashow}</a></li>
            <li><a href="{$Filesname[market]}.php?view=szukaj">{$Asearch}</a></li>
            <li><a href="{$Filesname[market]}.php?view=add">{$Aadd}</a></li>
            <li><a href="{$Filesname[market]}.php?view=del">{$Adelete}</a></li>
            {if $smarty.section.market.index != "1"}
                <li><a href="{$Filesname[market]}.php?view=all">{$Alist}</a></li>
            {/if}
            {if $smarty.section.market.index == "1"}
                <li><a href="{$Filesname[market]}.php?view=all&amp;limit=0">{$Alist}</a></li>
            {/if}
        </ul>
    {/section}
{/if}

{if $View == "myoferts"}
    <br />{if $Type == ""}
        {section name=myoferts loop=$Markets}
            <a href="market.php?view=myoferts&amp;type={$Filesname[myoferts]}">{$Markets[myoferts]} {$Oamount[myoferts]}</a><br />
        {/section}
        <br />
        <a href="market.php?view=myoferts&amp;deleteall=no">{$Deleteall}</a><br />
        {if $Actiondelete == "no"}
            <form method="post" action="market.php?view=myoferts&amp;deleteall=yes">
                <br />{$Youwant2}<br />
                <input type="submit" value="{$Ayes}" />
            </form>
        {/if}
        {if $Actiondelete == "yes"}
            <br />{$Message}<br />
        {/if}
    {/if}
    {if $Type != ""}
        {if $Change == "" && $Delete == "" && $Add == ""}
            <table align="center" width="100%">
                <tr>
                    {section name=thead loop=$Ttable}
                        <td align="center"><b><u>{$Ttable[thead]}</u></b></td>
                    {/section}
                </tr>
                {section name=oferts loop=$Tvalues}
                    <tr>
                        {section name=ofert loop=$Tvalues[oferts]}
                            <td align="center">{$Tvalues[oferts][ofert]}</td>
                        {/section}
                        <td align="center"><a href="market.php?view=myoferts&amp;type={$Type}&amp;delete={$Tid[oferts]}">{$Adelete}</a><br />
                            <a href="market.php?view=myoferts&amp;type={$Type}&amp;change={$Tid[oferts]}">{$Achange}</a><br />
                            <a href="market.php?view=myoferts&amp;type={$Type}&amp;add={$Tid[oferts]}">{$Aadd}</a>
                        </td>
                    </tr>
                {/section}
            </table>
        {else}
            {$Message}<br /><br />
        {/if}
        {if $Delete != "" && $Message == ""}
            {$Youwant}{$Oname}?
            <form method="post" action="market.php?view=myoferts&amp;type={$Type}&amp;delete={$Delete}&amp;confirm=yes">
                <input type="submit" value="{$Ayes}" />
            </form>
        {/if}
        {if $Add != "" && $Message == ""}
            <form method="post" action="market.php?view=myoferts&amp;type={$Type}&amp;add={$Add}&amp;confirm=yes">
                <input type="submit" value="{$Aadd}" /> {$Toofert}{$Oname} <input type="text" name="amount" value="0" size="5" />{$Tamount2}.<br />
            </form>
        {/if}
        {if $Change != "" && $Message == ""}
            <form method="post" action="market.php?view=myoferts&amp;type={$Type}&amp;change={$Change}&amp;confirm=yes">
                <input type="submit" value="{$Achange}" /> {$Tofert}{$Oname} {$Ona} <input type="text" name="amount" value="0" size="5" /> {$Goldcoins}
            </form>
        {/if}
    {/if}
    <br /><br /><a href="market.php">{$Aback}</a>
{/if}
{/strip}</br>