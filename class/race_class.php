<?php
class Race
{
    var $name;
    var $ap_sila;
    var $ap_zrecznosc;
    var $ap_szybkosc;
    var $ap_inteligencja;
    var $ap_silawoli;
    var $ap_wytrzymalosc;
    var $ap_hp;
    var $train_sila;
    var $train_zrecznosc;
    var $train_szybkosc;
    var $train_inteligencja;
    var $train_silawoli;
    var $train_wytrzymalosc;
    
function Race($racename) {
        
        global $db;
        $data=$db -> Execute("Select * from rasa where nazwa='".$racename."'");
        
        $this -> name = $data -> fields['nazwa'];
        //dane do AP - ilość statów za AP
        $this ->ap_hp = $data -> fields['hp'];
        $this ->ap_sila = $data -> fields['sila'];
        $this ->ap_zrecznosc = $data -> fields['zrecznosc'];
        $this ->ap_szybkosc = $data -> fields['szybkosc'];
        $this ->ap_inteligencja = $data -> fields['inteligencja'];
        $this ->ap_silawoli = $data -> fields['sila_woli'];
        $this ->ap_wytrzymalosc = $data -> fields['wytrzymalosc'];
        
        //dane do szkoły - koszty treningów w energii
        $this ->train_sila = $data -> fields['train_sila'];
        $this ->train_zrecznosc = $data -> fields['train_zrecznosc'];
        $this ->train_szybkosc = $data -> fields['train_szybkosc'];
        $this ->train_inteligencja = $data -> fields['train_inteligencja'];
        $this ->train_silawoli = $data -> fields['train_silawoli'];
        $this ->train_wytrzymalosc = $data -> fields['train_wytrzymalosc'];
    }
}

?>