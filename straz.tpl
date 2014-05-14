{strip}
{$Listinfo}<br /><br />

<fieldset style="width:90%">
<legend><u>{$Secnames[0]}</u></legend>
<table width="100%">
    <tr>
        <td width="50%"><b>{$Ranknames[0]}</b></td>
        <td><b>{$Ranknames[1]}</b></td>
    </tr>
    <tr>
        <td valign="top">
            {section name=admins loop=$Stafflist[0][0]}
            <a href="view.php?view={$Stafflist[0][0][admins]}">{$Stafflist[0][1][admins]}</a> ID: {$Stafflist[0][0][admins]}<br />
            {/section}
        </td>
        
    </tr>
    
</fieldset>
{/strip}