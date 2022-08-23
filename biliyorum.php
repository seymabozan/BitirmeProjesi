<?php
$username= $_COOKIE['username'];
$id= $_COOKIE['id'];
$kart1 = $_COOKIE['kart1'];
$kart2 = $_COOKIE['kart2'];
$kart3 = $_COOKIE['kart3'];
$kart4 = $_COOKIE['kart4'];
$kart5 = $_COOKIE['kart5'];
$kart6 = $_COOKIE['kart6'];
$kart7 = $_COOKIE['kart7'];
$kart8 = $_COOKIE['kart8'];
$kart9 = $_COOKIE['kart9'];
$kart10 = $_COOKIE['kart10'];
$kart11 = $_COOKIE['kart11'];
$kart12 = $_COOKIE['kart12'];
$kart13 = $_COOKIE['kart13'];
$kart14 = $_COOKIE['kart14'];
$kart15 = $_COOKIE['kart15'];
$kart16 = $_COOKIE['kart16'];
$kart17 = $_COOKIE['kart17'];
$kart18 = $_COOKIE['kart18'];
$kart19 = $_COOKIE['kart19'];
$kart20 = $_COOKIE['kart20'];
$kart21 = $_COOKIE['kart21'];
$kart22 = $_COOKIE['kart22'];
$kart23 = $_COOKIE['kart23'];
$kart24 = $_COOKIE['kart24'];
$kart25 = $_COOKIE['kart25'];
$kart26 = $_COOKIE['kart26'];
$kart27 = $_COOKIE['kart27'];
$kart28 = $_COOKIE['kart28'];
$kart29 = $_COOKIE['kart29'];
$kart30 = $_COOKIE['kart30'];


if(isset($_POST['iknow1'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart1=$kart1+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart1_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow2'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart2=$kart2+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart2_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow3'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart3=$kart3+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart3_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow4'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart4=$kart4+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart4_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow5'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart5=$kart5+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart5_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow6'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart6=$kart6+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart6_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow7'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart7=$kart7+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart7_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow8'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart8=$kart8+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart8_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow9'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart9=$kart9+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart9_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow10'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart10=$kart10+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart10_iknow",1,time()+6000);
    echo "<script>window.location='kartlar1.php'</script>";}
if(isset($_POST['iknow11'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart11=$kart11+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart11_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow12'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart12=$kart12+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart12_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow13'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart13=$kart13+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart13_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow14'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart14=$kart14+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart14_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow15'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart15=$kart15+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart15_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow16'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart16=$kart16+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart16_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow17'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart17=$kart17+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart17_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow18'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart18=$kart18+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart18_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow19'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart19=$kart19+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart19_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow20'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart20=$kart20+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart20_iknow",1,time()+6000);
    echo "<script>window.location='kartlar2.php'</script>";}
if(isset($_POST['iknow21'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart21=$kart21+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart21_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow22'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart22=$kart22+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart22_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow23'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart23=$kart23+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart23_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow24'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart24=$kart24+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart24_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow25'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart25=$kart25+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart25_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow26'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart26=$kart26+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart26_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow27'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart27=$kart27+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart27_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow28'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart28=$kart28+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart28_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow29'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart29=$kart29+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart29_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow30'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart30=$kart30+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart30_iknow",1,time()+6000);
    echo "<script>window.location='kartlar3.php'</script>";}
if(isset($_POST['iknow31'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart31=$kart31+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart31_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow32'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart32=$kart32+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart32_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow33'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart33=$kart33+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart33_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow34'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart34=$kart34+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart34_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow35'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart35=$kart35+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart35_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow36'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart36=$kart36+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart36_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow37'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart37=$kart37+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart37_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow38'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart38=$kart38+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart38_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow39'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart39=$kart39+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart39_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow40'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar31_40 SET kart40=$kart40+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart40_iknow",1,time()+6000);
    echo "<script>window.location='kartlar4.php'</script>";}
if(isset($_POST['iknow41'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart41=$kart41+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart41_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow42'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart42=$kart42+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart42_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow43'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart43=$kart43+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart43_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow44'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart44=$kart44+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart44_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow45'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart45=$kart45+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart45_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow46'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart46=$kart46+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart46_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow47'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart47=$kart47+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart47_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow48'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart48=$kart48+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart48_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow49'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart49=$kart49+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart49_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow50'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar41_50 SET kart50=$kart50+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart50_iknow",1,time()+6000);
    echo "<script>window.location='kartlar5.php'</script>";}
if(isset($_POST['iknow51'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart51=$kart51+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart51_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow52'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart52=$kart52+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart52_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow53'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart53=$kart53+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart53_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow54'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart54=$kart54+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart54_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow55'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart55=$kart55+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart55_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow56'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart56=$kart56+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart56_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow57'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart57=$kart57+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart57_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow58'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart58=$kart58+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart58_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow59'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart59=$kart59+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart59_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
if(isset($_POST['iknow60'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar51_60 SET kart60=$kart60+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart60_iknow",1,time()+6000);
    echo "<script>window.location='kartlar6.php'</script>";}
?>
