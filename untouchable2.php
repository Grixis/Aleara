<?

$title = 'Prezenty';
require_once('includes/head.php');

$test = $db -> Execute("SELECT sp FROM players WHERE id=".$player -> id);
$sp= $test -> fields['sp'];
if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'sword':
            $c = 100;
            $n = 'Ogień Chaosu';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'Ogień Chaosu', 5000,'W',500000,0,1,10,10000,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;
   
   
       case '1':
            $c = 50;
            $n = '15.000 sztuk złota';
            $query = 'UPDATE players SET credits = credits + 15000 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
        case '2':
            $c = 200;
            $n = '5 brylantów';
            $query = 'UPDATE players SET refs = refs + 5 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;
       case '3':
            $c = 150;
            $n = '2 AP';
            $query = 'UPDATE players SET ap = ap + 2 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
              case '4':
            $c = 300;
            $n = '8 siły';
            $query = 'UPDATE players SET strength = strength + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
       case '5':
            $c = 300;
            $n = '8 zręczności';
            $query = 'UPDATE players SET agility = agility + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
       case '6':
            $c = 300;
            $n = '8 inteligencji';
            $query = 'UPDATE players SET inteli = inteli + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
         case '7':
            $c = 300;
            $n = '8 szybkości';
            $query = 'UPDATE players SET szyb = szyb + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
        case '8':
            $c = 300;
            $n = '8 siły woli';
            $query = 'UPDATE players SET wisdom = wisdom + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
         case '9':
            $c = 300;
            $n = '8 wytrzymałości';
            $query = 'UPDATE players SET wytrz = wytrz + 8 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
               case '100':
            $c = 300;
            $n = '10 RC';
            $query = 'UPDATE players SET magia = magia + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
        case '10':
            $c = 300;
            $n = '10 stolarstwa';
            $query = 'UPDATE players SET fletcher = fletcher + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '11':
            $c = 300;
            $n = '10 kowalstwa';
            $query = 'UPDATE players SET ability = ability + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
              case '12':
            $c = 300;
            $n = '10 górnictwa';
            $query = 'UPDATE players SET mining = mining + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '13':
            $c = 300;
            $n = '10 hutnictwa';
            $query = 'UPDATE players SET hutnictwo = hutnictwo + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '14':
            $c = 300;
            $n = '10 drwalnictwa';
            $query = 'UPDATE players SET lumberjack = lumberjack + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '15':
            $c = 100;
            $n = '5 uniku';
            $query = 'UPDATE players SET unik = unik + 5 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-400 WHERE id=".$player -> id);
       break;   
       
       
       
           
       case '16':
            $c = 400;
            $n = 'kolczyki królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kolczyki królowej inteligencji', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '17':
            $c = 400;
            $n = 'amulet umarłych';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'amulet umarłych zręczności', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '18':
            $c = 400;
            $n = 'bransoleta nekromanty';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'bransoleta nekromanty siły woli', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '19':
            $c = 400;
            $n = 'menhir pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'menhir pustelnika szybkości', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '20':
            $c = 400;
            $n = 'talizman pokoju';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'talizman pokoju zręczności', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '21':
            $c = 400;
            $n = 'kamień z świętej rzeki';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kamień z świętej rzeki siły', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '22':
            $c = 400;
            $n = 'ząb szamanów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'ząb szamanów inteligencji', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '23':
            $c = 400;
            $n = 'zaklęta kość starego pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zaklęta kość starego pustelnika szybkości', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '24':
            $c = 400;
            $n = 'korona królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'korona królowej siły', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '25':
            $c = 400;
            $n = 'magiczny kielich kapłana';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'magiczny kielich kapłana wytrzymałości', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '27':
            $c = 400;
            $n = 'rękawice ze skóry węża';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'rękawice ze skóry węża wytrzymałości', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;           
       case '28':
            $c = 400;
            $n = 'buty barbarzyńcy';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'buty barbarzyńcy wytrzymałości', 10,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
        
       case '30':
            $c = 400;
            $n = 'zbroja łuskowana gladiatorów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zbroja łuskowana gladiatorów', 50,'A',500000,0,100,1,100,1,'Y',0,50,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;        
       case '32':
            $c = 800;
            $n = 'jednorożec czarnego pana';
            $query = "INSERT INTO kon (owner, size, value, bedroom, wardrobe, points, name, used, build, rest, locator, locrest, 	cost, seller) VALUES(".$player -> id.",10, 100,'Y',0,100,'jednorożec czarnego pana',0,80,'N',0,'N',0,0)";
            //$db -> Execute("UPDATE players SET sp=sp-600 WHERE id=".$player -> id);
       break;        
       
       
       
       
       
       
       
       
       
       
       
       
       
    }

    
    if ($sp < $c)
    {
      error("Nie stać cie!");
    }
    $db -> Execute($query);
    $db -> Execute("UPDATE players SET sp=sp-".$c." WHERE id=".$player -> id);
    $lol = $db -> Execute('SELECT id FROM players WHERE sp = '.$player -> id);
    $i = 0;
    while(!$lol -> EOF)
    {
        $db -> Execute('UPDATE players SET sp = 0 WHERE id = '.$lol -> fields['id']);
        $i++;
    }
        
    error('Za '.$c.'  punktów otrzymałeś <b>'.$n.'</b>!');
}
    else
{
    
    $smarty -> assign('Info', 'Witaj, '.$player -> user.'!<br /> Zastanów się co wybrać dla siebie:');
}



$smarty -> assign(array("sp" => $sp));  
						                           

$smarty -> display('prezent2.tpl');
require_once('includes/foot.php');

?>
