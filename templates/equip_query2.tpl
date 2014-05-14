{if $Show == 'weapons'}
{section name=weap loop=$Id}
    Id:{$Id[weap]} {$Name[weap]} (+{$Power[weap]})<br> 
{/section}
{/if}