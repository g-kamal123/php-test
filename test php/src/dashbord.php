<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['user_input']))
header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>search Here</label>
    <input id="search" type="text">
    <table id='table'>
        <?php for($i=0;$i<count($arr);$i++){?>
            <tr><td><?php echo $arr[$i]['username'] ?></td><td><?php echo $arr[$i]['password'] ?></td></tr>
            <?php } ?>
    </table>


    <a href='logout.php'>logout</a>
</body>
<script src="search.js"></script>
</html>