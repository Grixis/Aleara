<?php
/**
 *   File functions:
 *   Show players minerals, herbs, gold and maps
 *
 *   @name                 : zloto.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @version              : 1.0
 *   @since                : 24.01.2006
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id: zloto.php 566 2006-09-13 09:31:08Z thindil $


require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/zloto.php");

$gr1 = $db -> Execute("SELECT id, nutari, illani, illanias, dynallca, illani_seeds, illanias_seeds, nutari_seeds, dynallca_seeds FROM herbs WHERE gracz=".$player -> id);
$ref = $db -> Execute("SELECT refs, ryby, grzyby, ziemniaki, klucz, wywar FROM players WHERE id=".$player -> id);
$ryby=$ref -> fields['ryby'];
$grzyby=$ref -> fields['grzyby'];
$ziemniaki=$ref -> fields['ziemniaki'];
$ref = $ref -> fields['refs'];
$klucz=$ref -> fields['klucz'];
$wywar=$ref -> fields['wywar'];
$smarty -> assign(array("Refs" => $ref,
    "Maps" => $player -> maps,
    "Gold" => $player -> credits,
    "Bank" => $player -> bank,
    "Mithril" => $player -> platinum,
    "Ryby" => $ryby,
    "Klucz" => $klucz,
    "Wywar" => $wywar,
    "Grzyby" => $grzyby,
    "Ziemniaki" => $ziemniaki,
    "Itemsinfo" => ITEMS_INFO,
    "Goldinhands" => GOLD_IN_HANDS,
    "Goldinbank" => GOLD_IN_BANK2,
    "Tmithril" => T_MITHRIL,
    "Trefs" => T_REFS,
    "Tmaps" => T_MAPS,
    "Min1" => MIN1,
    "Min2" => MIN2,
    "Min3" => MIN3,
    "Min4" => MIN4,
    "Min5" => MIN5,
    "Min6" => MIN6,
    "Min7" => MIN7,
    "Min8" => MIN8,
    "Min9" => MIN9,
    "Min10" => MIN10,
    "Min11" => MIN11,
    "Min12" => MIN12,
    "Min13" => MIN13,
    "Ore1" => ORE1,
    "Ore2" => ORE2,
    "Ore3" => ORE3,
    "Ore4" => ORE4,
    "Herb1" => HERB1,
    "Herb2" => HERB2,
    "Herb3" => HERB3,
    "Herb4" => HERB4,
    "Seeds1" => SEEDS1,
    "Seeds2" => SEEDS2,
    "Seeds3" => SEEDS3,
    "Seeds4" => SEEDS4,
    "Minerals" => MINERALS,
    "Money" => MONEY,
    "Lumber" => LUMBER,
    "Seeds" => SEEDS,
    "Herbs" => HERBS));

if ($gr1 -> fields['id'])
{
    $smarty -> assign(array("Illani" => $gr1 -> fields['illani'],
                            "Illanias" => $gr1 -> fields['illanias'],
                            "Nutari" => $gr1 -> fields['nutari'],
                            "Dynallca" => $gr1 -> fields['dynallca'],
                            "Ilaniseeds" => $gr1 -> fields['illani_seeds'],
                            "Illaniasseeds" => $gr1 -> fields['illanias_seeds'],
                            "Nutariseeds" => $gr1 -> fields['nutari_seeds'],
                            "Dynallcaseeds" => $gr1 -> fields['dynallca_seeds']));
}
    else
{
    $smarty -> assign(array("Illani" => 0,
                            "Illanias" => 0,
                            "Nutari" => 0,
                            "Dynallca" => 0,
                            "Ilaniseeds" => 0,
                            "Illaniasseeds" => 0,
                            "Nutariseeds" => 0,
                            "Dynallcaseeds" => 0));
}

$objOres = $db -> Execute("SELECT owner, copperore, zincore, tinore, ironore, coal, copper, bronze, brass, iron, steel, pine, hazel, yew, elm, crystal, adamantium, meteor FROM minerals WHERE owner=".$player -> id) or die($db -> ErrorMsg());
if ($objOres -> fields['owner'])
{
    $smarty -> assign(array("Copperore" => $objOres -> fields['copperore'],
        "Zincore" => $objOres -> fields['zincore'],
        "Tinore" => $objOres -> fields['tinore'],
        "Ironore" => $objOres -> fields['ironore'],
        "Coal" => $objOres -> fields['coal'],
        "Copper" => $objOres -> fields['copper'],
        "Iron" => $objOres -> fields['iron'],
        "Bronze" => $objOres -> fields['bronze'],
        "Brass" => $objOres -> fields['brass'],
        "Steel" => $objOres -> fields['steel'],
        "Pine" => $objOres -> fields['pine'],
        "Hazel" => $objOres -> fields['hazel'],
        "Yew" => $objOres -> fields['yew'],
        "Elm" => $objOres -> fields['elm'],
        "Crystal" => $objOres -> fields['crystal'],
        "Adamantium" => $objOres -> fields['adamantium'],
        "Meteor" => $objOres -> fields['meteor']));
}
    else
{
    $smarty -> assign(array("Copperore" => 0,
        "Zincore" => 0,
        "Tinore" => 0,
        "Ironore" => 0,
        "Coal" => 0,
        "Copper" => 0,
        "Iron" => 0,
        "Bronze" => 0,
        "Brass" => 0,
        "Steel" => 0,
        "Pine" => 0,
        "Hazel" => 0,
        "Yew" => 0,
        "Elm" => 0,
        "Crystal" => 0,
        "Adamantium" => 0,
        "Meteor" => 0));
}
$objOres -> Close();
$test = $db -> Execute("SELECT klucz FROM players WHERE id=".$player -> id);
$klucz = $test -> fields['klucz'];
$smarty -> assign(array("klucz" => $klucz));

$test = $db -> Execute("SELECT artefaktoko FROM players WHERE id=".$player -> id);
$artefaktoko = $test -> fields['artefaktoko'];
$smarty -> assign(array("artefaktoko" => $artefaktoko));

$test = $db -> Execute("SELECT artefaktzab FROM players WHERE id=".$player -> id);
$artefaktzab = $test -> fields['artefaktzab'];
$smarty -> assign(array("artefaktzab" => $artefaktzab));

$test = $db -> Execute("SELECT artefaktwlos FROM players WHERE id=".$player -> id);
$artefaktwlos = $test -> fields['artefaktwlos'];
$smarty -> assign(array("artefaktwlos" => $artefaktwlos));

$test = $db -> Execute("SELECT artefaktzebro FROM players WHERE id=".$player -> id);
$artefaktzebro = $test -> fields['artefaktzebro'];
$smarty -> assign(array("artefaktzebro" => $artefaktzebro));

$test = $db -> Execute("SELECT artefaktserce FROM players WHERE id=".$player -> id);
$artefaktserce = $test -> fields['artefaktserce'];
$smarty -> assign(array("artefaktserce" => $artefaktserce));


$test = $db -> Execute("SELECT kjaskini FROM players WHERE id=".$player -> id);
$kjaskini= $test -> fields['kjaskini'];

$smarty -> assign(array("kjaskini" => $kjaskini));


$test = $db -> Execute("SELECT kpuszczy FROM players WHERE id=".$player -> id);
$kpuszczy= $test -> fields['kpuszczy'];

$smarty -> assign(array("kpuszczy" => $kpuszczy));

$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$test = $db -> Execute("SELECT wlos FROM players WHERE id=".$player -> id);
$wlos = $test -> fields['wlos'];
$smarty -> assign(array("wlos" => $wlos));

$test2 = $db -> Execute("SELECT pokrzywa FROM players WHERE id=".$player -> id);
$pokrzywa = $test2 -> fields['pokrzywa'];
$smarty -> assign(array("pokrzywa" => $pokrzywa));

$test3 = $db -> Execute("SELECT kora FROM players WHERE id=".$player -> id);
$kora = $test3 -> fields['kora'];
$smarty -> assign(array("kora" => $kora));
$test4 = $db -> Execute("SELECT wywar FROM players WHERE id=".$player -> id);
$wywar = $test4 -> fields['wywar'];
$smarty -> assign(array("wywar" => $wywar));

$test4 = $db -> Execute("SELECT geoja FROM players WHERE id=".$player -> id);
$geoja = $test4 -> fields['geoja'];
$smarty -> assign(array("geoja" => $geoja));


$test = $db -> Execute("SELECT kpustyni FROM players WHERE id=".$player -> id);
$kpustyni= $test -> fields['kpustyni'];

$smarty -> assign(array("kpustyni" => $kpustyni));

$test = $db -> Execute("SELECT przygodaa FROM players WHERE id=".$player -> id);
$przygodaa= $test -> fields['przygodaa'];

$smarty -> assign(array("przygodaa" => $przygodaa));

$test = $db -> Execute("SELECT kzamku FROM players WHERE id=".$player -> id);
$kzamku= $test -> fields['kzamku'];
$smarty -> assign(array("kzamku" => $kzamku));
$test = $db -> Execute("SELECT ksmierci FROM players WHERE id=".$player -> id);
$ksmierci= $test -> fields['ksmierci'];
$smarty -> assign(array("ksmierci" => $ksmierci));
$test = $db -> Execute("SELECT kpotepienia FROM players WHERE id=".$player -> id);
$kpotepienia= $test -> fields['kpotepienia'];
$smarty -> assign(array("kpotepienia" => $kpotepienia));
$test = $db -> Execute("SELECT kdiaburiona FROM players WHERE id=".$player -> id);
$kdiaburiona= $test -> fields['kdiaburiona'];
$smarty -> assign(array("kdiaburiona" => $kdiaburiona));
$test = $db -> Execute("SELECT kplomienia FROM players WHERE id=".$player -> id);
$kplomienia= $test -> fields['kplomienia'];
$smarty -> assign(array("kplomienia" => $kplomienia));
$test = $db -> Execute("SELECT drzewka FROM players WHERE id=".$player -> id);
$drzewka= $test -> fields['drzewka'];
$smarty -> assign(array("drzewka" => $drzewka));
$test = $db -> Execute("SELECT kluczdokopalni FROM players WHERE id=".$player -> id);
$kluczdokopalni= $test -> fields['kluczdokopalni'];
$smarty -> assign(array("kluczdokopalni" => $kluczdokopalni));

$test = $db -> Execute("SELECT klejnotmuttaua FROM players WHERE id=".$player -> id);
$klejnotmuttaua= $test -> fields['klejnotmuttaua'];
$smarty -> assign(array("klejnotmuttaua" => $klejnotmuttaua));

$smarty -> display ('zloto.tpl');
require_once("includes/foot.php");
?>
