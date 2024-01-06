<?php
include "settings.php";
include 'includes/config.php';
$amt = $_GET['amt'];
$ref = $_GET['refId'];
$pid = $_GET['oid'];
$data =[
    'amt'=> $amt,
    'rid'=> $ref,
    'pid'=>$pid,
    'scd'=> 'EPAYTEST'
];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    
    curl_close($curl);
    if(strpos(  $response, "Success") !== false){
        echo "<h1> Congrats your Payment was Successfull !!!";

      

    }
    else{
        echo "<h1> Sorry your Payment wasn't Successfull !!!";

    }
    // if($dbh->query($sql) == True){
    //     echo "<h1> Congrats your Booking was Successfull !!!";
    //   }
    //   else{
    //     echo "<h1> Sorry your Booking wasn't Successfull !!!";
      
    //   }
?>
<br>
<br>
<br>
<div id="center_button">
    <button onclick="location.href='index.php'">Back to Home</button>
</div>
