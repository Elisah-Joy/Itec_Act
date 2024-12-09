<?php

$y = 2024;
$m = 2;

switch($m){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $day = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $day = 30;
        break;
    case 2:
        if (($y % 4 == 0 && $y % 100 !== 0) || ($y % 400 == 0)){
            $day = 29;
        }
        else{
            $day = 28;
        }
        break;
    default:
    echo "Error!";
}
echo "Calendar: $y, $m <br>";

for ($days = 1; $days <= $day; $days++){
    echo "$days \n";
    if ($days % 7 == 0) {
        echo "<br>";
    }
}

?>