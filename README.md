
Bu proje, Almanya temalı içerik sunan, dinamik bir blog/bilgi sitesidir. Temel olarak bir PHP web uygulaması olup, MySQL veritabanı bağlantısı, form işleme ve Bootstrap ile modern bir kullanıcı arayüzü içerir.

Temel Özellikler:

Teknolojiler: PHP (MySQLi ile), MySQL Veritabanı, HTML, CSS (Bootstrap 5) ve JavaScript (Bootstrap Bundle).

İçerik: Almanya hakkında genel bilgiler (#hakkinda), gezilecek yerler listesi (#gezilecek) ve sıkça sorulan sorular (#sorular) gibi bölümler içerir.

Gezilecek yerler, resim ve kısa açıklamalarla birlikte kartlar halinde dinamik olarak listelenir.

Sıkça sorulan sorular, etkileşimli bir Bootstrap Accordion bileşeni kullanılarak sunulur.

Veritabanı Entegrasyonu:

baglan.php dosyası ile veritabanı bağlantısı (localhost, kullanıcı: root, şifre: ``, veritabanı: blog) sağlanır.

blog.sql dosyası, blog veritabanını ve iletişim formu verilerini depolayan iletisim tablosunu oluşturur (Ad Soyad, E-posta, Mesaj, Tarih).

İletişim Formu: Ziyaretçilerin site yöneticisiyle iletişime geçmesini sağlayan bir form (#iletisim) bulunur.

islem.php dosyası, POST isteği ile gelen Ad Soyad, E-posta ve Mesaj bilgilerini alır.

Veriler, MySQLi Hazırlanmış İfadeler (Prepared Statements) kullanılarak güvenli bir şekilde iletisim tablosuna eklenir, bu da SQL Injection riskini azaltır.

Gerekli alanlar boş bırakıldığında kullanıcıya hata mesajı gösterilir.

Kullanıcı Geri Bildirimi: Form gönderme işlemi başarılı olduğunda veya bir hata oluştuğunda, index.php sayfası üzerinde Bootstrap uyarı (alert) bileşenleriyle geri bildirim mesajı gösterilir.

Kullanıcı Arayüzü: Responsive (duyarlı) tasarım için Bootstrap 5 kütüphanesi kullanılır. Navbar, kartlar, accordion ve form bileşenleri Bootstrap ile stilize edilmiştir.
