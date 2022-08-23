<?php
$username= $_COOKIE['username'];
if($username==""){
    header("Refresh:0; url=giris.php");
  }
$id= $_COOKIE['id'];

?>
<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ana Sayfa</title>
  <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico"/>
  <style>
    body{
      padding:0;
    }
    .container{
      height: 400px;
      width: 30%;
      margin: 10px 0 0 0;
      padding: 0;
      background-color: purple;
      border-radius:  0 120px 120px 0;
      float: left;
    }
    #img1{
      width: 300px;
      position: relative;
      left: 15px;
      top: 13%;
      border-radius: 20px;
    }
    .container2{
      background-image: linear-gradient(to left, #fff0f5,#de6fa1);
      width: 65%;
      height: 200px;
      float: left;
      position: relative;
      top: 100px;
      border-radius:20px;
      margin-left: 20px;
    }
    .container2 p{
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      font-size: 16px;
    }
    .container2 h2{
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      color: #2e3548;
    }
    #dersler{
      display: block;
      margin-top: 450px;
      background-color: #FA8BFF;
      background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
    }
  </style>
</head>
<body>
<div class="container">
  <img id="img1" src="images/yoga.jpg" alt="cat.jpg">
</div>
<div class="container2">
  <h2>Selam sana ey yolcu</h2>
  <p>Burası ingilizce derslerini alabileceğin bir arazi</p>
  <p>Kelime bilgini geliştirmek için kelime kartları kısmını kullabilir,</p>
  <p>İngilizce'de ilerledikçe otomatik olarak mağazadan eşyalar kazanabilirsin</p>
</div>
<div id="dersler">
  <?php include_once('dersler/anasayfa.html') ?>
</div>
<script>
  
</script>
</body>
</html>