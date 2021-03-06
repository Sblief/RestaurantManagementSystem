<?php

include_once('../../../vendor/autoload.php');

use App\User\User;
use App\User\Auth;
use App\GlobalClasses\Message;
use App\GlobalClasses\Utility;
use App\Admin\Admin;
use App\OrderSystem\OrderSystem;


if(!isset($_SESSION)){
    session_start();
}
if (!empty($_GET['number']) && isset($_GET['number'] )&& !empty($_GET['tsid']) && isset($_GET['tsid'])){
    $_SESSION['paymentNumber'] = $_GET['number'];
    $_SESSION['transactionId'] = $_GET['tsid'];
}
if ($_GET['cashOnDelivery'] == true){
    $_SESSION['paymentNumber'] = "Cash On delivery";
    $_SESSION['transactionId'] = "N/A";
}
if ($_GET['card'] == true){
    $_SESSION['paymentNumber'] = "Card";
    $_SESSION['transactionId'] = "Check Account";
}
if ($_GET['reserve'] == true){
    $_SESSION['paymentNumber'] = "Reserve Table";
    $_SESSION['transactionId'] = "Successful";
}
$order=new OrderSystem();

$id=$order->prepare($_SESSION)->getUserID();

$_SESSION['user_id']=$id['id'];

Utility::d($_SESSION['cart_list']);

$orderedItem=count($_SESSION['cart_list']);
//Utility::d($_SESSION['cart_list']);
$itemCodeArray=array_keys($_SESSION['cart_list']);

$_SESSION['food_code']=implode(',',$itemCodeArray);

//Utility::d($_SESSION['food_code']);

    $OrderList=$order->prepare($_SESSION)->storeOrder();




//
//for($i=1;$i<=$orderedItem;$i++)
//{
//    $_POST[$i]=$_SESSION['cart_list'][$i];
//}
//
//Utility::dd($_POST);
//for($i=1;$i<=$orderedItem;$i++)
//{
//    $order->prepare($_POST[$i]);
//    $OrderList=$order->storeOrder();
//}
