<?php
$val = "demo"; //assigned iPay Vendor ID... hard code it here.

// $val1 = $_GET["id"];
// $val2 = $_GET["ivm"];
// $val3 = $_GET["qwh"];
// $val4 = $_GET["afd"];
// $val5 = $_GET["poi"];
// $val6 = $_GET["uyt"];
// $val7 = $_GET["ifd"];


$val1 = "112";
$val2 = "112";
$val3 = 1542258930;
$val4 = 687817199;
$val5 = 582199082;
$val6 = 2089115959;
$val7 = 1644154629;

$ipnurl = "https://www.ipayafrica.com/ipn/?vendor=".$val."&id=".$val1."&ivm=".
$val2."&qwh=".$val3."&afd=".$val4."&poi=".$val5."&uyt=".$val6."&ifd=".$val7;


$fp = fopen($ipnurl, "rb");
$status = stream_get_contents($fp, -1, -1);

fclose($fp);


switch($status){
    case 'fe2707etr5s4wq': 
        echo 'The payment Failed transaction.';

    break;
        case 'aei7p7yrx4ae34':

            echo 'The payment was a Success';

        break;
            case 'bdi6p2yy76etrs':
                echo 'The payment is still  Pending';

            break;
                case 'cr5i3pgy9867e1':
                    echo 'The code has already been Used';

                break;
                    case 'dtfi4p7yty45wq': 
                        echo 'Insufficient funds';
                    break;
                        case 'eq3i7p5yt7645e':
                            echo 'More: Overpayment';
                        break;

}



    
     
    
   
    
  

?>