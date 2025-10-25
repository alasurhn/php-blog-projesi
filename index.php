<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("baglan.php");

$mesaj = "";
if (isset($_GET["durum"])) {
    if ($_GET["durum"] == "ok") {
        $mesaj = "<div class='alert alert-success'>Mesajınız başarıyla gönderildi.</div>";
    } elseif ($_GET["durum"] == "hata") {
        $mesaj = "<div class='alert alert-danger'>Lütfen tüm alanları doldurun.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Almanya Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Almanya Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="#hakkinda">Almanya Hakkında</a></li>
                <li class="nav-item"><a class="nav-link" href="#gezilecek">Gezilecek Yerler</a></li>
                <li class="nav-item"><a class="nav-link" href="#iletisim">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Form sonucu mesaj -->
<div class="container mt-3">
    <?= $mesaj ?>
</div>

<!-- Banner -->
<div class="container mt-3">
    <img src="img/almanya.jpg" class="img-fluid w-100" alt="Almanya Manzara">
</div>

<!-- Hakkında -->
<div class="container mt-5" id="hakkinda">
    <h2>Almanya Hakkında</h2>
    <p>Almanya, Avrupa'nın kalbinde yer alan, tarihi, sanatı, teknolojisi ve düzenli yaşam tarzıyla tanınan bir ülkedir. Başkenti Berlin olan Almanya; zengin kültürü, kaleleri, festivalleri ve yüksek yaşam kalitesiyle öne çıkar.</p>
</div>

<!-- Gezilecek Yerler -->
<div class="container mt-5" id="gezilecek">
    <h2>Gezilecek Yerler</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <?php
        $yerler = [
            ["Brandenburg Kapısı", "Berlin'in simgesi haline gelmiş tarihi bir yapıdır.", "brandenburg.jpg"],
            ["Neuschwanstein Şatosu", "Masallara ilham veren ünlü Bavyera şatosudur.", "castle.jpg"],
            ["Köln Katedrali", "Gotik mimarisiyle ünlü devasa bir katedraldir.", "köln.jpg"],
            ["Heidelberg", "Tarihi üniversitesi ve romantik atmosferiyle bilinir.", "heidelberg.jpg"],
            ["Münih Marienplatz", "Şehir merkezinde tarihi bir meydandır.", "marienplatz.jpg"],
            ["Hamburg Limanı", "Avrupa’nın en büyük limanlarından biridir.", "hamburg.jpg"]
        ];

        foreach ($yerler as $yer) {
            echo '
            <div class="col">
                <div class="card h-100">
                    <img src="img/' . $yer[2] . '" class="card-img-top" alt="' . $yer[0] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $yer[0] . '</h5>
                        <p class="card-text">' . $yer[1] . '</p>
                    </div>
                    <div class="card-footer text-muted">Son güncelleme: ' . date("d.m.Y") . '</div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Sık Sorulan Sorular -->
<div class="container mt-5">
    <h2>Sık Sorulan Sorular</h2>
    <div class="accordion" id="sorular">
        <?php
        $sorular = [
            "Almanya'da ne yenir?" => "Bratwurst, pretzel, schnitzel ve bira oldukça popülerdir.",
            "Neuschwanstein Şatosu nerede?" => "Bavyera eyaletinde, Füssen kasabası yakınlarındadır.",
            "Almanya'da ulaşım nasıldır?" => "Tren, otobüs ve metro gibi gelişmiş toplu taşıma ağı mevcuttur.",
            "Almanya ne zaman gezilmeli?" => "İlkbahar ve yaz ayları turizm için idealdir.",
            "Almanya'ya vize gerekli mi?" => "Türkiye vatandaşları için Schengen vizesi gereklidir.",
        ];

        $i = 0;
        foreach ($sorular as $soru => $cevap) {
            echo '
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading' . $i . '">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $i . '">
                        ' . $soru . '
                    </button>
                </h2>
                <div id="collapse' . $i . '" class="accordion-collapse collapse" data-bs-parent="#sorular">
                    <div class="accordion-body">' . $cevap . '</div>
                </div>
            </div>';
            $i++;
        }
        ?>
    </div>
</div>

<!-- İletişim Formu -->
<div class="container mt-5" id="iletisim">
    <h2>İletişim</h2>
    <form action="islem.php" method="POST">
        <div class="mb-3">
            <label>Ad Soyad</label>
            <input type="text" name="adsoyad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>E-posta</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mesaj</label>
            <textarea name="mesaj" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    Almanya Blog &copy; 2025 - Tüm Hakları Saklıdır.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
