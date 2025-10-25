<?php
include("baglan.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adsoyad = $_POST["adsoyad"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    if (!empty($adsoyad) && !empty($email) && !empty($mesaj)) {
        $sorgu = $baglanti->prepare("INSERT INTO iletisim (adsoyad, email, mesaj) VALUES (?, ?, ?)");
        $sorgu->bind_param("sss", $adsoyad, $email, $mesaj);
        $sorgu->execute();
        header("Location: index.php?durum=ok");
    } else {
        header("Location: index.php?durum=hata");
    }
}
?>