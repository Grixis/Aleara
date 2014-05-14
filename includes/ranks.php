<?php
require_once("languages/".$player -> lang."/ranks.php");
function selectrank($strRank, $strGender)
{
    $arrRank = array('Namiestnik', 'Hrabia', 'Kronikarz', 'Member', 'Admin', 'Strażnik Miejski', 'Stary Dziad', 'Wskrzesiciel', 'Kostuch', 'Mistrz Gry', 'Murgrabia', 'Druid', 'Wielki Mistrz', 'Gladiator', 'Królowa Potępionych', 'Honorowy Mieszkaniec', 'Staff', 'Sędzia', 'Ławnik', 'Prawnik', 'Żebrak', 'Magazynier', 'Bibliotekarz', 'Rycerz', 'Dama', 'Marszałek Rady', 'Poseł', 'Kanclerz Sądu', 'Królewski Błazen', 'Redaktor', 'Karczmarka','Bohater', 'Ksiądz', 'Ksiądz', 'Techniczny', 'Żul spod mostu');
    if ($strGender != 'F')
    {
        $arrRank2 = array(R_NAMIESTNIK, R_HRABIA, R_KRONIKARZ, R_MEMBER, R_KING, R_STRAZNIK, R_STARYDZIAD, R_WSKRZESICIEL, R_KOSTUCH, R_MISTRZGRY, R_MURGRABIA, R_DRUID, R_WIELKIMISTRZ, R_GLADIATOR, R_KROLOWAPOTEPIONYCH, R_HONOROWYMIESZKANIEC, R_STAFF, R_JUDGE, R_JUDGE2, R_LAWYER, R_BEGGAR, R_BARBARIAN, R_SCRIBE, R_KNIGHT, R_LADY, R_COUNT, R_COUNT2, R_JUDGE3, R_JOKER, R_REDACTOR, R_INNKEEPER, R_HERO, R_KSIADZ, R_PROCURATOR, R_ZUL);
    }
        else
    {
        $arrRank2 = array(R_NAMIESTNIK2, R_HRABIA2, R_KRONIKARZ2, R_MEMBER2, R_KING2, R_STRAZNIK2, R_STARYDZIAD2, R_WSKRZESICIEL2, R_KOSTUCH2, R_MISTRZGRY2, R_MURGRABIA2, R_DRUID2, R_WIELKIMISTRZ2, R_GLADIATOR2, R_KROLOWAPOTEPIONYCH2, R_HONOROWYMIESZKANIEC2, R_STAFF2, R_JUDGE21, R_JUDGE2, R_LAWYER2, R_BEGGAR2, R_BARBARIAN2, R_SCRIBE2, R_KNIGHT, R_LADY, R_COUNT, R_COUNT21, R_JUDGE3, R_JOKER, R_REDACTOR2, R_INNKEEPER2, R_HERO2, R_PROCURATOR, R_KSIADZ2, R_TECH2);
    }
    $intKey = array_search($strRank, $arrRank);
    return $arrRank2[$intKey];
}
?>
