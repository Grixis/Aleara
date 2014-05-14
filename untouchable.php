<?

$title = 'Świąteczne Prezenty';
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
            $c = 200;
            $n = '200.000.000 sztuk złota';
            $query = 'UPDATE players SET credits = credits + 200000000 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
        case '2':
            $c = 100;
            $n = '10 brylantów';
            $query = 'UPDATE players SET refs = refs + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;
       case '3':
            $c = 300;
            $n = '100 AP';
            $query = 'UPDATE players SET ap = ap + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
              case '4':
            $c = 200;
            $n = '10 siły';
            $query = 'UPDATE players SET strength = strength + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
       case '5':
            $c = 200;
            $n = '10 zręczności';
            $query = 'UPDATE players SET agility = agility + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
       case '6':
            $c = 200;
            $n = '10 inteligencji';
            $query = 'UPDATE players SET inteli = inteli + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
         case '7':
            $c = 200;
            $n = '10 szybkości';
            $query = 'UPDATE players SET szyb = szyb + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
        case '8':
            $c = 200;
            $n = '10 siły woli';
            $query = 'UPDATE players SET wisdom = wisdom + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
         case '9':
            $c = 200;
            $n = '10 wytrzymałości';
            $query = 'UPDATE players SET wytrz = wytrz + 10 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-200 WHERE id=".$player -> id);
       break;
               case '100':
            $c = 300;
            $n = '100 RC';
            $query = 'UPDATE players SET magia = magia + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
        case '10':
            $c = 300;
            $n = '100 stolarstwa';
            $query = 'UPDATE players SET fletcher = fletcher + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '11':
            $c = 300;
            $n = '100 kowalstwa';
            $query = 'UPDATE players SET ability = ability + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
              case '12':
            $c = 300;
            $n = '100 górnictwa';
            $query = 'UPDATE players SET mining = mining + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '13':
            $c = 300;
            $n = '100 hutnictwa';
            $query = 'UPDATE players SET hutnictwo = hutnictwo + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '14':
            $c = 300;
            $n = '100 drwalnictwa';
            $query = 'UPDATE players SET lumberjack = lumberjack + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;
       case '15':
            $c = 400;
            $n = '100 uniku';
            $query = 'UPDATE players SET unik = unik + 100 WHERE id = '.$player -> id;
            //$db -> Execute("UPDATE players SET sp=sp-400 WHERE id=".$player -> id);
       break;   
       
       
       
           
       case '16':
            $c = 100;
            $n = 'kolczyki królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kolczyki królowej inteligencji', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '17':
            $c = 100;
            $n = 'amulet umarłych';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'amulet umarłych zręczności', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '18':
            $c = 100;
            $n = 'bransoleta nekromanty';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'bransoleta nekromanty siły woli', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '19':
            $c = 100;
            $n = 'menhir pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'menhir pustelnika szybkości', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '20':
            $c = 100;
            $n = 'talizman pokoju';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'talizman pokoju zręczności', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '21':
            $c = 100;
            $n = 'kamień z świętej rzeki';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kamień z świętej rzeki siły', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '22':
            $c = 100;
            $n = 'ząb szamanów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'ząb szamanów inteligencji', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '23':
            $c = 100;
            $n = 'zaklęta kość starego pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zaklęta kość starego pustelnika szybkości', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '24':
            $c = 100;
            $n = 'korona królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'korona królowej siły', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '25':
            $c = 100;
            $n = 'magiczny kielich kapłana';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'magiczny kielich kapłana wytrzymałości', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '27':
            $c = 100;
            $n = 'rękawice ze skóry węża';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'rękawice ze skóry węża wytrzymałości', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;           
       case '28':
            $c = 100;
            $n = 'buty barbarzyńcy';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'buty barbarzyńcy wytrzymałości', 1111,'I',500000,0,1000000,1,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '29':
            $c = 300;
            $n = 'gałąź ze świętego drzewa';
            $query = "INSERT INTO equipment (owner, name, cost, minlev, type, power, status) VALUES(".$player -> id.",'gałąź ze świętego drzewa',0,1,'T',500,'U')";
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;       
       case '30':
            $c = 300;
            $n = 'zbroja łuskowana gladiatorów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zbroja łuskowana gladiatorów', 200,'A',500000,0,1000000,1,1000000,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-300 WHERE id=".$player -> id);
       break;        
       case '32':
            $c = 600;
            $n = 'jednorożec czarnego pana';
            $query = "INSERT INTO kon (owner, size, value, bedroom, wardrobe, points, name, used, build, rest, locator, locrest, 	cost, seller) VALUES(".$player -> id.",50, 10000,'Y',0,100000,'jednorożec czarnego pana',0,80000,'N',0,'N',0,0)";
            //$db -> Execute("UPDATE players SET sp=sp-600 WHERE id=".$player -> id);
       break;        
       
       
       
       
       case '50':
            $c = 100;
            $n = 'kolczyki królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kolczyki królowej inteligencji', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '51':
            $c = 100;
            $n = 'amulet umarłych';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'amulet umarłych zręczności', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '52':
            $c = 100;
            $n = 'bransoleta nekromanty';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'bransoleta nekromanty siły woli', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '53':
            $c = 100;
            $n = 'menhir pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'menhir pustelnika szybkości', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '54':
            $c = 100;
            $n = 'talizman pokoju';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'talizman pokoju zręczności', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '55':
            $c = 100;
            $n = 'kamień z świętej rzeki';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kamień z świętej rzeki siły', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '56':
            $c = 100;
            $n = 'ząb szamanów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'ząb szamanów inteligencji', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '57':
            $c = 100;
            $n = 'zaklęta kość starego pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zaklęta kość starego pustelnika szybkości', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '58':
            $c = 100;
            $n = 'korona królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'korona królowej siły', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '59':
            $c = 100;
            $n = 'magiczny kielich kapłana';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'magiczny kielich kapłana wytrzymałości', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '60':
            $c = 100;
            $n = 'rękawice ze skóry węża';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'rękawice ze skóry węża wytrzymałości', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;           
       case '61':
            $c = 100;
            $n = 'buty barbarzyńcy';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'buty barbarzyńcy wytrzymałości', 2222,'I',500000,0,1000000,100,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       case '100':
            $c = 100;
            $n = 'kolczyki królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kolczyki królowej inteligencji', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '101':
            $c = 100;
            $n = 'amulet umarłych';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'amulet umarłych zręczności', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;       
       case '102':
            $c = 100;
            $n = 'bransoleta nekromanty';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'bransoleta nekromanty siły woli', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '103':
            $c = 100;
            $n = 'menhir pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'menhir pustelnika szybkości', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '104':
            $c = 100;
            $n = 'talizman pokoju';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'talizman pokoju zręczności', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '105':
            $c = 100;
            $n = 'kamień z świętej rzeki';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'kamień z świętej rzeki siły', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '106':
            $c = 100;
            $n = 'ząb szamanów';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'ząb szamanów inteligencji', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '107':
            $c = 100;
            $n = 'zaklęta kość starego pustelnika';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'zaklęta kość starego pustelnika szybkości', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '108':
            $c = 100;
            $n = 'korona królowej';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'korona królowej siły', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;        
       case '109':
            $c = 100;
            $n = 'magiczny kielich kapłana';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'magiczny kielich kapłana wytrzymałości', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;         
       case '110':
            $c = 100;
            $n = 'rękawice ze skóry węża';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'rękawice ze skóry węża wytrzymałości', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
       break;           
       case '111':
            $c = 100;
            $n = 'buty barbarzyńcy';
            $query = "INSERT INTO equipment (owner, name, power, type, cost, zr, wt, minlev, maxwt, amount, magic, poison, szyb, twohand) VALUES(".$player -> id.",'buty barbarzyńcy wytrzymałości', 3333,'I',500000,0,1000000,200,0,1,'Y',0,500,'Y')";
            //$db -> Execute("UPDATE players SET sp=sp-100 WHERE id=".$player -> id);
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
        
    error('Za '.$c.' świątecznych punktów otrzymałeś <b>'.$n.'</b>!');
}
    else
{
    
    $smarty -> assign('Info', 'Witaj, '.$player -> user.'!<br />Znajdujesz się właśnie w komnacie, w której stoi wielka choinka, a pod nią znajdują się prezenty dla mieszkańców krainy. Zastanawiasz się co wybrać dla siebie:');
}



$smarty -> assign(array("sp" => $sp));  
						                           

$smarty -> display('prezenty.tpl');
require_once('includes/foot.php');

?>
