<?php
function greeting(){
    $timeOfDay = date('a');
    if($timeOfDay =='am'){
        return 'GOODMORNING';
   }
    if($timeOfDay =='pm'){
        return'GOODNIGHT';
  }
}
$message = greeting();
echo $message;
?>