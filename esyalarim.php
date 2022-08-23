<?php
$username= $_COOKIE['username'];
if($username==""){
    header("Refresh:0; url=giris.php");
  }
$id= $_COOKIE['id'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelime Kartları</title>
    <style>
        .urunler{
            display: grid;
            grid-template-columns: auto;
            gap: 10px;
            background-color: #2196F3;
            padding: 10px;
        }
        .urun img{
            width: 400px;
            height: 400px;
            border-radius: 20px;
            float:left;
            padding:10px 10px 10px 10px;
        }
        p{
            font-family: 'Times New Roman', Times, serif;
            font-size: 32px;
            color: #05058E;
            margin: 20px 20px 20px 0;
        }
        .urun{
            border: 1px solid red;
            border-radius: 20px;
            padding: 10px;
            background-color: #ff4040;
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
            color: #05058E;
        }
        #urun1{
            display: none;
        }
        #urun2{
            display: none;
        }
        #urun3{
            display: none;
        }
        #urun4{
            display: none;
        }
        #urun5{
            display: none;
        }
    </style>
</head>
<body>
<?php include_once("header.php");
?>
<div class="urunler">
    <div class="urun" id="urun1">
        <img src="images/bandana.jpg" alt="bandana">
        <br><br><br>
        <p>&nbsp&nbsp&nbspSevimli Maskotumuza artık bir gangster :)</p><br>
        <p>&nbsp&nbsp&nbspSevimli dostumuza çok yakıştığını düşünüyorsan &nbsp&nbsp&nbspkazanman için 100 puan kazanman yeterli</p>
        <br><br><br>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="urun1durum">HENÜZ KAZANILAMADI</span> </h1>
    </div>
    <div class="urun" id="urun2">
    <img src="images/kitap.jpg" alt="kitap">
        <br><br><br>
        <p>&nbsp&nbspSevimli Maskotumuza en sevdiği kitabı hediye etmeye &nbsp&nbspne dersin?</p><br>
        <p>&nbsp&nbspSevimli dostumuza kitabı hediye etmek için 200 puan &nbsp&nbspkazanman yeterli</p>
        <br>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="urun2durum">HENÜZ KAZANILAMADI</span> </h1>
    </div>
    <div class="urun" id="urun3">
        <img src="images/pelerin.jpg" alt="pelerin">
        <br><br><br>
        <p>&nbsp&nbspO bir kuş o bir uçak hayır hayır o bizim maskot corgi</p>
        <br>
        <p>&nbsp&nbspDostumuzu göklerde ait olduğu yerde görmek için 300 &nbsp&nbsppuan kazanman yeterli</p>
        <br><br>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="urun3durum">HENÜZ KAZANILAMADI</span> </h1>
    </div>
    <div class="urun" id="urun4">
        <img src="images/roket.jpg" alt="roket">
        <br><br><br>
        <p>&nbsp&nbspBiraz fazla turist ömer izleyen corgi uzaya gitmeyi istiyor</p>
        <br>
        <p>&nbsp&nbspDostumuzun dileğini gerçekleştirmek için 400 puan &nbsp&nbspkazanman yeterli</p>
        <br><br>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="urun4durum">HENÜZ KAZANILAMADI</span> </h1>
    </div>
    <div class="urun" id="urun5">
        <img src="images/infinity.jpg" alt="sonsuzluk eldiveni">
        <br><br><br>
        <p>&nbsp&nbspCorgi evrene denge getirmek istiyor ve bunun için &nbsp&nbspsonsuzluk eldivenine ihtiyacı var</p>
        <br>
        <p>&nbsp&nbsp"Perfectly balanced, as all things should be" 500 puan</p>
        <br><br>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="urun5durum">HENÜZ KAZANILAMADI</span> </h1>
    </div>
</div>
<script>
function getCookieByName(name){
    var cerezler = document.cookie.split(";");
        for (var i = 0; i < cerezler.length; i++) { //dizi icerisinde donuyoruz 
        var cookiePair = cerezler[i].split("="); //'cerez_ismi=cerez_degeri' seklindeki verileri '=' ifadesine gore parcaliyoruz ve cerez_degeri degiskenine aktariyoruz
            if(name == cookiePair[0].trim()) { //isminin 'cerez ismi' olup olmadigini kontrol ediyoruz. Esitse 
                return cookiePair[1];//alert(cookiePair[1]); //cerezin degerini ekrana yazdiriyoruz 
            }
    }
}
puan=getCookieByName("puan");
pler=document.getElementsByTagName("p");
for(var i = 0; i <pler.length ; i++){
    pler[i].style.display = "none";
}
if(puan>=100){
    document.getElementById("urun1").style.backgroundColor = "#1CFF98";
    document.getElementById("urun1durum").innerHTML="Tebrikler bu ödülü kazandınız"
    document.getElementById("urun1").style.display = "block";
}
if(puan>=200){
    document.getElementById("urun2").style.backgroundColor = "#1CFF98";
    document.getElementById("urun2durum").innerHTML="Tebrikler bu ödülü kazandınız"
    document.getElementById("urun2").style.display = "block";
}
if(puan>=300){
    document.getElementById("urun3").style.backgroundColor = "#1CFF98";
    document.getElementById("urun3durum").innerHTML="Tebrikler bu ödülü kazandınız"
    document.getElementById("urun3").style.display = "block";
}
if(puan>=400){
    document.getElementById("urun4").style.backgroundColor = "#1CFF98";
    document.getElementById("urun4durum").innerHTML="Tebrikler bu ödülü kazandınız"
    document.getElementById("urun4").style.display = "block";
}
if(puan>=500){
    document.getElementById("urun5").style.backgroundColor = "#1CFF98";
    document.getElementById("urun5durum").innerHTML="Tebrikler bu ödülü kazandınız"
    document.getElementById("urun5").style.display = "block";
}
</script>
</body>
</html>