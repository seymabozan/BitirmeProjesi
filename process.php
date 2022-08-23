<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
//MySQL veritabanına giriş. ----

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  

  $link = mysqli_connect("localhost", "root", "","isim_sifre");
  $result = mysqli_query($link,"SELECT * from users where username = '$username' ")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
// -----------

  $row = mysqli_fetch_array($result);
  if ($row['username'] == $username){
    echo "Seçtiğiniz kullanıcı adı alınmış lütfen başka bir kullanıcı adı seçin";
    header("Refresh: 3; url=kaydol.php");
  }
  else{
    $sql= "INSERT INTO users (username, password)
    VALUES ('$username', '$password')";
    if (mysqli_query($link, $sql)) {
      echo '<div class="alert alert-success alert-dismissible w-75 show m-5" role="alert">
      <strong>&emsp;Hesabın Başarıyla oluşturuldu!</strong>&emsp;Şimdi ingilizce öğrenmen için seni anasayfaya ışınlıyorum bol şans çekirge!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    setcookie("username",$username,time()+6000);
    $result = mysqli_query($link,"select * from users where username = '$username' ")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $id=$row['id'];
    $puan=$row['puan'];
    $result = mysqli_query($link,"INSERT INTO kartlar1_10 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar11_20 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar21_30 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar31_40 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar41_50 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar51_60 (id) VALUES ('$id')");
    setcookie("id",$id,time()+6000);
    setcookie("puan",$puan, time()+6000);
    $result = mysqli_query($link,"select puan from users where username = '$username' ")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    $row = mysqli_fetch_array($result);
    
    setcookie("kart1_iknow",0,time()+6000);
    setcookie("kart2_iknow",0,time()+6000);
    setcookie("kart3_iknow",0,time()+6000);
    setcookie("kart4_iknow",0,time()+6000);
    setcookie("kart5_iknow",0,time()+6000);
    setcookie("kart6_iknow",0,time()+6000);
    setcookie("kart7_iknow",0,time()+6000);
    setcookie("kart8_iknow",0,time()+6000);
    setcookie("kart9_iknow",0,time()+6000);
    setcookie("kart10_iknow",0,time()+6000);
    setcookie("kart11_iknow",0,time()+6000);
    setcookie("kart12_iknow",0,time()+6000);
    setcookie("kart13_iknow",0,time()+6000);
    setcookie("kart14_iknow",0,time()+6000);
    setcookie("kart15_iknow",0,time()+6000);
    setcookie("kart16_iknow",0,time()+6000);
    setcookie("kart17_iknow",0,time()+6000);
    setcookie("kart18_iknow",0,time()+6000);
    setcookie("kart19_iknow",0,time()+6000);
    setcookie("kart20_iknow",0,time()+6000);
    setcookie("kart21_iknow",0,time()+6000);
    setcookie("kart22_iknow",0,time()+6000);
    setcookie("kart23_iknow",0,time()+6000);
    setcookie("kart24_iknow",0,time()+6000);
    setcookie("kart25_iknow",0,time()+6000);
    setcookie("kart26_iknow",0,time()+6000);
    setcookie("kart27_iknow",0,time()+6000);
    setcookie("kart28_iknow",0,time()+6000);
    setcookie("kart29_iknow",0,time()+6000);
    setcookie("kart30_iknow",0,time()+6000);
    setcookie("kart31_iknow",0,time()+6000);
    setcookie("kart32_iknow",0,time()+6000);
    setcookie("kart33_iknow",0,time()+6000);
    setcookie("kart34_iknow",0,time()+6000);
    setcookie("kart35_iknow",0,time()+6000);
    setcookie("kart36_iknow",0,time()+6000);
    setcookie("kart37_iknow",0,time()+6000);
    setcookie("kart38_iknow",0,time()+6000);
    setcookie("kart39_iknow",0,time()+6000);
    setcookie("kart40_iknow",0,time()+6000);
    setcookie("kart41_iknow",0,time()+6000);
    setcookie("kart42_iknow",0,time()+6000);
    setcookie("kart43_iknow",0,time()+6000);
    setcookie("kart44_iknow",0,time()+6000);
    setcookie("kart45_iknow",0,time()+6000);
    setcookie("kart46_iknow",0,time()+6000);
    setcookie("kart47_iknow",0,time()+6000);
    setcookie("kart48_iknow",0,time()+6000);
    setcookie("kart49_iknow",0,time()+6000);
    setcookie("kart50_iknow",0,time()+6000);
    setcookie("kart51_iknow",0,time()+6000);
    setcookie("kart52_iknow",0,time()+6000);
    setcookie("kart53_iknow",0,time()+6000);
    setcookie("kart54_iknow",0,time()+6000);
    setcookie("kart55_iknow",0,time()+6000);
    setcookie("kart56_iknow",0,time()+6000);
    setcookie("kart57_iknow",0,time()+6000);
    setcookie("kart58_iknow",0,time()+6000);
    setcookie("kart59_iknow",0,time()+6000);
    setcookie("kart60_iknow",0,time()+6000);
    header("Refresh: 1; url=index.php");
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
      header("Refresh: 1; url=kaydol.php");
    }
  }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
