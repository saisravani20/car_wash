<?php 
 include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin_log {
            max-width: 100;
            background-color: black;
            border: none;
            color: white;
            padding: 15px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            /* margin: 4px 2px; */
            cursor: pointer;
            box-align: center;
            margin: 0;
            position: absolute;
            top: 63%;
            left: 50%;
            width:18%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

.heading {
    display: block;
    text-align: center;
    background-color: #232f3e;
    box-shadow: 1px 3px 3px #232f3e;
    max-width: 136vh;
    margin: 1% auto;
    padding: 5px;  
}
h1 {
    color: coral;
    font-weight: bold;
    
    background: transparent;
    padding: 7px;
    
}
.user_log {
  max-width: 100;
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px; */
  cursor: pointer;
  box-align: center;
  margin: 0;
position: absolute;
top: 50%;
left: 50%;
width:18%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
/* body {
  background-image: url('carwash.jpg');

} */
.demo-bg {
    opacity: 0.5;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
  }
    </style>
</head>
<body>
<img
    class="demo-bg"
    src="carwash.jpg"
    alt=""
  > 
  <div class="heading"> 
  <h1>WELCOME TO THE CAR WASH SERVICE</h1>
</div>
  <a href="login.php"><button class="user_log">Customer login</button></a>
     <!-- <img src="carwash.jpg"width="400" height="200"> -->
     

  <br><br>
  <a href="admin/index.php"> <button class="admin_log">Admin login</button></a>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
function disabledBack() { window.history.forward();}
  setTimeout("disabledBack()",0);
  window.onunload=function(){ null };
</script>
</html>