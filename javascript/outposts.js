// Orodlin Team
// eyescream


// Activates tab "i" to emulate normal links, but ajax-powered. Usage: for example main menu text
function tab(i)
{
    $('#tabcontainer').triggerTab(i);
    return false;
}

// Function for outpost listing slider - level handles "from ... to ...".
function levels(cx,cy,x,y)
{
    var max = document.getElementById('biggestOutpost').innerHTML / 100;
    var values = $('#levels-slider').slider("option","values");
    document.getElementById('slevel').value =$('#levels-slider').slider("values",1);;
    document.getElementById('elevel').value =$('#levels-slider').slider("values",2);;
}

// Outpost shop, "size" slider - function to update fields with required minerals.
function size(input)
{
    var base = parseInt(document.getElementById('size').innerHTML);
    var maxlevel = parseInt(document.getElementById('maxsize').innerHTML);
    var add = document.getElementById('level').value = input;

    document.getElementById('size-gold').innerHTML = add * (2 * base + add + 3) * 125;
    document.getElementById('size-plat').innerHTML = add * 10;
    document.getElementById('size-pine').innerHTML = add * (2 * base + add - 1) / 2;
}

// Outpost shop, "lairs" slider.
function lairs(input)
{
    var base = parseInt(document.getElementById('baselairs').innerHTML);
    var maxlevel = parseInt(document.getElementById('maxlairs').innerHTML);
    var add = document.getElementById('lairs').value = input;
    var neededMeteor = add * (2 * base + add + 1) / 2;

    document.getElementById('lair-mete').innerHTML = neededMeteor;
    document.getElementById('lair-gold').innerHTML = add * (2 * base + add + 3) * 25;
    document.getElementById('lair-crys').innerHTML = neededMeteor * 5;
}

// Outpost shop, "barracks" slider.
function barracks(input)
{
    var base = parseInt(document.getElementById('basebarracks').innerHTML);
    var maxlevel = parseInt(document.getElementById('maxbarracks').innerHTML);
    var add = document.getElementById('barracks').value = input;
    var neededMeteor = add * (2 * base + add + 1) / 2;

    document.getElementById('barr-mete').innerHTML = neededMeteor;
    document.getElementById('barr-gold').innerHTML = add * (2 * base + add + 3) * 25;
    document.getElementById('barr-adam').innerHTML = neededMeteor * 5;
}

// Outpost shop, "warriors-archers" sliders.
function warriors(input)
{
    var max = parseInt(document.getElementById('maxsoldiers').innerHTML);
    var war = document.getElementById('warriors').value = input;
    var arr = parseInt(document.getElementById('archers').value);
    if (war + arr > max)
    {
        document.getElementById('archers').value = max - war;
        //$('#track5').SliderSetValues([[(max-war)*100/200,0]]);
    }
    sum();
}

function archers(input)
{
    var max = parseInt(document.getElementById('maxsoldiers').innerHTML);
    var war = parseInt(document.getElementById('warriors').value);
    var arr = document.getElementById('archers').value = input;
    if (war + arr > max)
    {
        document.getElementById('warriors').value = max - arr;
        //update warriors slider
    }
    sum();
}

// Outpost shop, sum money spent on army and machines.
function sum()
{
    var val = (parseInt(document.getElementById('archers').value) + parseInt(document.getElementById('warriors').value)) * 25 + (parseInt(document.getElementById('barricades').value) + parseInt(document.getElementById('catapults').value)) * 35;
    if (val > parseInt(document.getElementById('treasury').innerHTML))
        document.getElementById('armysum').innerHTML = '<blink>' + val + '</blink>';
    else
        document.getElementById('armysum').innerHTML = val;
}

// Outpost shop, "barricades-catapults" slider.
function barricades(input)
{
    var max = document.getElementById('maxmachines').innerHTML;
    var fort = document.getElementById('barricades').value = input;
    var catapult = Math.round(document.getElementById('catapults').value);
    if (fort + catapult > max)
        document.getElementById('catapults').value = max - fort;
    sum();
}

function catapults(input)
{
    var max = document.getElementById('maxmachines').innerHTML;
    var catapult = document.getElementById('catapults').value = input;
    var fort = Math.round(document.getElementById('barricades').value);
    if (fort + catapult > max)
        document.getElementById('barricades').value = max - catapult;
    sum();
}

// Outpost veterans. Function to be called back when equipent is dropped on image.
function dropWeapon(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.W.value=eid;
    $('#weaponname').val($(drag).html());
    $(drag).hide('scale');
}
function dropBow(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.B.value=eid;
    $('#bowname').val($(drag).html());
    $(drag).hide('scale');
}
function dropArmor(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.A.value=eid;
    $('#armorname').val($(drag).html());
    $(drag).hide('scale');
}
function dropHelmet(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.H.value=eid;
    $('#helmetname').val($(drag).html());
    $(drag).hide('scale');
}
function dropShield(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.S.value=eid;
    $('#shieldname').val($(drag).html());
    $(drag).hide('scale');
}
function dropLegs(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.L.value=eid;
    $('#legsname').val($(drag).html());
    $(drag).hide('scale');
}
function dropRing1(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.I1.value=eid;
    $('#ring1name').val($(drag).html());
    $(drag).hide('scale');
}
function dropRing2(drag)
{
    
    var eid = $(drag).attr('id');
    var eid = eid.substring(1, eid.length);
    document.formularz.I2.value=eid;
    $('#ring2name').val($(drag).html());
    $(drag).hide('scale');
}
function clearEquipment()
{
    $(this).parent().parent().find(".name").html('');    // go "up" (from <input> to <td>) and back
    $(this).parent().find("input[@type=hidden]").attr("value", 0);
}

function submitVeteran()
{
    return false;
}

function testRings()
{
    if ($('#ring1').val() == $('#ring2').val() && $('#ring1').val() !='')
    {
        alert('Nie możesz założyć tego samego pierscienia 2 razy');// Any idea to use more than one language?
        return false;
    }
    return true;
}

// Called after veteran div has ben dropped on <table> for edition.
function dropVeteran(drag)
{
    $(drag).hide();
    var vetId = $(drag).attr('id');
    vetId = vetId.substring(3, vetId.length);
    $.post('outposts.php?view=veterans',{ vid: vetId}, function(msg){$('.formupdate').html(msg);});
}
function dropMonster(drag)
{
		var coreid = $(drag).attr('id');
		coreid = coreid.substring(4, coreid.length);
		$.post('outposts.php?view=beasts',{ id: coreid}, function(msg){$('.formupdate').html(msg);});
}