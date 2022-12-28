<?php
include '../Model/TriggerModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if (isset($_POST['submit1'])) {
    $rpid = $budget = "";
    
        $rpid = input_data($_POST['rpid']);
        $budget = input_data($_POST['budget']);
        $res = trigger1($rpid,$budget);
        if($res){
            echo "trigger mission failed";
        }
        else{
            echo"trigger mission done";
        }
    }

if (isset($_POST['submit2'])) {

    $aid = $mblno = "";
   
        $aid = input_data($_POST['aid']);
        $mblno = input_data($_POST['mblno']);
        $res = trigger2($aid,$mblno);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    }


if (isset($_POST['submit3'])) {
   
    $pid = $amount = "";
    
        $pid = input_data($_POST['pid']);
        $amount = input_data($_POST['amount']);
        $res = trigger3($pid,$amount);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    
}

?>