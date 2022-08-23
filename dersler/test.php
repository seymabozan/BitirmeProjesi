<?php
$Skor=$_COOKIE['sonSkor'];
$Skor=$Skor*3;
$id= $_COOKIE['id'];
$puan=$_COOKIE['puan'];
$Skor=$puan+$Skor;
$link = mysqli_connect("localhost", "root", "","isim_sifre");
$row = mysqli_query($link,"UPDATE users SET puan=$Skor where id=$id")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$result = mysqli_query($link,"select puan from users where id=$id ")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$row = mysqli_fetch_array($result);
$puan=$row["puan"];
setcookie("puan",$puan, time()+6000);
setcookie("sonSkor",0,time()+6000);
echo "<script>window.location='/index.php'</script>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 500px;
  height: 500px;
  margin-top: 30px;
  margin-left: 100px;
  border-radius: 50%;
  border: 6px solid black;
  border-color: black transparent black transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

    </style>
</head>
<body>
<div class="lds-dual-ring"></div>
</body>
</html>