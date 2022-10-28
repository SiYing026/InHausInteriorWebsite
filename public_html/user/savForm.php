<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
?>

<!-- Price box minimal--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Save Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
      <defs>
        <symbol id="check" viewBox="0 0 16 16">
          <path fill="currentColor" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M7,11.4L3.6,8L5,6.6l2,2l4-4L12.4,6L7,11.4z"></path>
        </symbol>
      </defs>
    </svg>

    <style>
    .ie-panel{display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
      clear: both;
      text-align:center;
      position: relative;
      z-index: 1;
    } 
    html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}

        @-webkit-keyframes thanks {
      from {
        transform: translate3d(0, -3rem, 0);
      }
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    @keyframes thanks {
      from {
        transform: translate3d(0, -3rem, 0);
      }
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    @-webkit-keyframes success-icon-animation {
      from {
        opacity: 0;
        transform: scale(0.1) rotate(30deg);
        transform-origin: center bottom;
      }
      50% {
        transform: rotate(-10deg) scale(1.25);
      }
      70% {
        transform: rotate(3deg);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
    @keyframes success-icon-animation {
      from {
        opacity: 0;
        transform: scale(0.1) rotate(30deg);
        transform-origin: center bottom;
      }
      50% {
        transform: rotate(-10deg) scale(1.25);
      }
      70% {
        transform: rotate(3deg);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
    .success-block {
      display: flex;
      align-items: center;
    }
    .success-block .title {
      font-size: 3.5rem;
      font-weight: bold;
    }
    .success-block .title > span {
      display: inline-block;
      opacity: 1;
      transition: transform 0.3s, opacity 0.3s;
      transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
      -webkit-animation: thanks 0.3s forwards;
              animation: thanks 0.3s forwards;
      margin: 0 -1px;
    }
    .success-block .title > span:nth-child(1) {
      -webkit-animation-delay: 0.045s;
              animation-delay: 0.045s;
    }
    .success-block .title > span:nth-child(2) {
      -webkit-animation-delay: 0.09s;
              animation-delay: 0.09s;
    }
    .success-block .title > span:nth-child(3) {
      -webkit-animation-delay: 0.135s;
              animation-delay: 0.135s;
    }
    .success-block .title > span:nth-child(4) {
      -webkit-animation-delay: 0.18s;
              animation-delay: 0.18s;
    }
    .success-block .title > span:nth-child(5) {
      -webkit-animation-delay: 0.225s;
              animation-delay: 0.225s;
    }
    .success-block .title > span:nth-child(6) {
      -webkit-animation-delay: 0.27s;
              animation-delay: 0.27s;
    }
    .success-block .title > span:nth-child(7) {
      -webkit-animation-delay: 0.315s;
              animation-delay: 0.315s;
    }
    .success-block .title > span:nth-child(8) {
      -webkit-animation-delay: 0.36s;
              animation-delay: 0.36s;
    }
    .success-block .title > span:nth-child(9) {
      -webkit-animation-delay: 0.405s;
              animation-delay: 0.405s;
    }
    .success-block .title > span:nth-child(10) {
      -webkit-animation-delay: 0.45s;
              animation-delay: 0.45s;
    }
    .success-block .title > span:nth-child(11) {
      -webkit-animation-delay: 0.5s;
              animation-delay: 0.5s;
    }
    .success-block .title:hover .title > span {
      -webkit-animation: thanks 0.35s forwards;
              animation: thanks 0.35s forwards;
    }
    .success-block .success-icon {
      margin-right: 1rem;
      width: 4rem;
      height: 4rem;
      color: #93c461;
      opacity: 0;
      margin-left: -2rem;
      -webkit-animation: success-icon-animation 1s 0.25s forwards;
              animation: success-icon-animation 1s 0.25s forwards;
    }

    .container {
      display: flex;
      min-height: 100vh;
      width: 100vw;
      align-items: center;
      justify-content: center;
    }
    </style>


</head>
<body>
<?php
    if(
    !empty($_POST['preferred_style']) &&
    !empty($_POST['consulType']) &&
    !empty($_POST['comment']) &&
    !empty($_POST['date']) &&
    !empty($_POST['time']) &&
    !empty($_POST['area'])){

   $custID = $_SESSION['unique_id'];
    $course = implode(',', $_POST['preferred_style']);
    $type = $_POST['consulType'];
    $comment = $_POST['comment'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $area = $_POST['area'];
    $currentdate =  date("Y-m-d");
    $var=NULL;

    
            
    $queryInsert = mysqli_query($conn, "INSERT INTO appointment(consultation_id, created_datetime, 
        consultation_date, consultation_time, consultation_type, preferred_style, design_range, 
         consultation_remark, unique_id)
                        VALUES (0, '$currentdate', '$date', '$time', '$type',' $course','$area','$comment','$custID')");
            
       
            echo '<div class="container test">';
            echo ' <div class="success-block">';
            echo '<svg class="icon success-icon" aria-hidden="true" xmlns:xlink="http://www.w3.org/1999/xlink">';
            echo '<use xlink:href="#check"></use>';
            echo '</svg>';
            echo '<div class="title"><span>S</span><span>u</span><span>c</span><span>c</span><span>e</span><span>s</span><span>s</span></div>';
              
            echo '</div>';
            echo '</div>';
             
            echo '<div class="container test">';
            echo ' <div class="success-block">';
            echo "Successfully place an appointment! please click the link below back to homepage";
            echo '<a href="index.html">Home Page </a>';
            echo '</div>';
            echo '</div>';
  

   }else{
   echo "Please fill in all the information to place an appointment! ";
   }

   mysqli_close($conn);



?>
</body>
</html>