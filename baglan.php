<?php
$baglanti = new mysqli("localhost", "root", "", "blog");
if ($baglanti->connect_error) {
    die("Veritabanı bağlantı hatası: " . $baglanti->connect_error);
}
?>