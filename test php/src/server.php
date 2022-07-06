<?php 
session_start();
include 'config.php';
if([$_SESSION['user_input']] == null){
    $_SESSION['user_input'] = array();
}
if(isset($_POST['info'])){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $_SESSION['user_input'][$user] = array(
        'user'=> $user,
        'pass'=> $pass
    );
    // echo $_SESSION['user'];
    // print_r($_SESSION['user_input']);
    // print_r($arr);
    $out =0;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]['username']==$user)
        if($arr[$i]['password']==$pass)
        $out =1;
    }
    echo $out;
}
if(isset($_POST['input'])){
    $inp = $_POST['input'];
    $len = $_POST['length'];
    $text = "<tr>";
    for($i=0;$i<count($arr);$i++){
        if(substr($arr[$i]['username'],0,$len)==$inp){
        $text .= "<td>".$arr[$i]['username']."</td>";
        $text .= "<td>".$arr[$i]['password']."</td>";
        }
    }
    $text .= "</tr>";
    echo $text;
}
?>