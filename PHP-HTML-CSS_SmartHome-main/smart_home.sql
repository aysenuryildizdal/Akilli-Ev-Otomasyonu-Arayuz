-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2024, 14:57:00
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `smart_home`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `ıd` int(11) NOT NULL,
  `ustbaslik` varchar(1000) NOT NULL,
  `aciklama` varchar(1000) NOT NULL,
  `linkmetın` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `hakkimizda` varchar(2000) NOT NULL,
  `altbaslik` varchar(1000) NOT NULL,
  `guven` varchar(1000) NOT NULL,
  `uzer` varchar(1000) NOT NULL,
  `enver` varchar(1000) NOT NULL,
  `altlink` varchar(1000) NOT NULL,
  `yorum` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`ıd`, `ustbaslik`, `aciklama`, `linkmetın`, `link`, `hakkimizda`, `altbaslik`, `guven`, `uzer`, `enver`, `altlink`, `yorum`) VALUES
(1, 'AKILLI EV NEDİR?', 'Görünüşte basit olan bu sorunun, kime sorduğunuza bağlı olarak birçok farklı cevabı vardır. Kısacası, “akıllı ev”, normalde insanlar tarafından gerçekleştirilen görevleri otomatikleştiren bir dizi cihazla donatılmış bir konuttur. Bazıları yapının içine yerleştirilir ve bazıları daha sonra eklenir ve ev sahipleri bunları uygulamalarla, sesli komutlarla, otomasyonla veya yapay zekâ kullanarak çalıştırır. Akıllı ev sistemleri ile eve uğramadan ev ile ilgili çoğu işinizi planlı ve kolay bir yoldan yapabilirsiniz. Akıllı ev sistemleri ile birlikte güvenlik,aydınlatma ,eğlence ve müzik gibi alanları oturduğunuz yerden rahatlıkla kontrol edebilirsiniz .Bu teknolojiler sizlere zamandan tasarruf sağladığı gibi konfor da sağlamış olur.', 'Daha Fazlası', 'nasılsaholur', '2024 yılında başladığımız ticari hayatımız ile 10 yılı aşkın süredir kesintisiz hizmet vermekteyiz. Sahaya adım attığımız günden itibaren geliştirdikleri çözümler sayesinde sektöre yön veren lider markalar ile çalışmamız bugün geldiğimiz noktada ‘ Akıllı Ev Sistemleri’ denilince akla gelen ilk isimlerden olmamızı sağlamıştır. Globalleşen çağın geliştirmiş olduğu teknolojiyi projelerinizde kullanabilmeniz için tüm beklentinizi karşılayacak ürün çeşitliliği ve yazılım uygulamaları ile en uygun alternatifleri sunuyoruz. Rezidans, otel, villa, bireysel konut, ticari, kamu projeleriniz ve yat projeleriniz için kullanacağınız akıllı sistemler, anahtar-prizler, kamera ve multimedya sistemlerinin sağlamış olduğu kolaylıklar ile vazgeçilmeziniz olmaya adayız.Misyonumuz firmamızdan ürün veya hizmet alan siz değerli müşterilerimizin ihtiyaçlarını istenilen zaman, mekan ve kalitede karşılamaktır. İhtiyaç duyulan her alanda sadece gününüzü değil geleceğinizi de kolaylaştıracak çözümler sunmayı hedefliyoruz.', 'Neden Bizi Seçmelisiniz?', 'Evinizin güvenliği için aldığınız önlemler yeterli mi? Gecenin karanlığında endişe verici bir ses mi duydunuz? Sadece başucunuzdaki butona basarak bütün ışıkların bir anda yakabilirsiniz. Binanız ne kadar güvenliyse, siz de kendinizi o kadar güvende hissederseniz. Hareket sensörleri, eve girmeden davetsiz misafirleri tespit edip uzaklaştırılabilir, kapı ya da pencerelere yapılacak müdahalelerde siren çaldırıp SMS ile uyarı vermesi sağlanabilir. Duman dedektörleri, ısı dedektörleri, su baskın sensörleri ve gaz kaçağı dedektörleri yardımı ile yangın, su baskını ya da gaz kaçağına karşı güvenlik sağlanabilir. Yerleştirilecek kameralar sayesinde uzaktan internet ya da cep telefonu yoluyla mekanizlenebilir ve görüntüler kayıt altında tutulabilir. Evinizin akıllı bina otomasyon sistemine entegre edilmiş hareket dedektörleriyle hırsız tehlikesine karşı korunursunuz. Smarthome, siz evde yokken meydana gelebilecek su kaçaklarını engellemek için su baskın dedektörleriyle ve evinizde olabilecek g', 'Uzaktan erişim sayesinde, evinize gelmeden önce evinizde bulunan sistemlerin kontrolünü yapabilirsiniz. Böylece siz dışarıdayken evinizde yaşam olduğu hissini uyandırabilirsiniz. Evinize gelmeden önce sıcak bir ortamın sizi karşılamasını istiyorsanız cep telefonunuzdan sisteme bağlanıp, ısıtma sisteminizi istedi- ğiniz sıcaklıkta çalıştırabilir, iklimlendirme ile ilgili diğer kontrolleri (nem alma, fan hızı kontrolü, alttan ısıtma vb.) de daha sonra sisteminize entegre edebilirsiniz. Evinizdeki sistemle, pc veya iPad üzerinden bağlantı kurabilir, istedi- ğiniz senaryoları devreye alabilirsiniz. Dünyanın neresinde olursanız olun , uzaktan erişim sayesinde internet üzerinden binanızı kontrol edebilirsiniz.', 'Akıllı ev ile Enerjiyi verimli kullanın, daha yaşanabilir bir dünya ve daha yüksek hayat standartlarına ulaşın. Akıllı ev cihazlarının enerji tüketimindeki etkileri, kullanılan cihazın türüne ve özelliklerine bağlıdır. Ancak genel olarak, akıllı ev cihazları enerji tasarrufu sağlayabilir. Örneğin, akıllı termostatlar evdeki ısıtma ve soğutma sistemlerini otomatik olarak kontrol ederek enerji tasarrufu sağlayabilirler. Bu cihazlar, evin boş olması durumunda ısıtma ve soğutma sistemlerini otomatik olarak kapatır veya evdeki insanların tercihlerine göre sıcaklığı ayarlayabilir. Böylece, enerji tasarrufu sağlanırken evin konfor seviyesi de korunur. Akıllı ev aydınlatma sistemleri de enerji tasarrufu sağlayabilirler. Bu sistemler, sensörler veya zamanlama özellikleri ile evin farklı bölümlerindeki ışıkları açıp kapatarak enerji tüketimini azaltabilirler.', 'Mehmet Yasin ÖZSAGLAM', 'ban!'),
(2, 'AKILLI EV SİSTEMLERİ \r\nNASIL ÇALIŞIR?', 'Akıllı ev sistemleri, Wi-Fi, Bluetooth, ZigBee ve diğerleri gibi farklı iletişim platformları aracılığıyla İnternete bağlı bir cihaz ağı üzerinden çalışır. Elektronik arayüzler aracılığıyla cihazlar Alexa veya Google Assistant gibi bir sesli asistan veya bir uygulama üzerinden uzaktan yönetilebilir. Bu IoT cihazlarının çoğu, hareket, sıcaklık ve ışıktaki değişiklikleri izleyen sensörlere sahiptir, böylece kullanıcı cihazın çevresi hakkında bilgi alabilir. Cihazda fiziksel değişiklikler yapmak için kullanıcı, ışık anahtarları, motorlu valfler veya cihazların uzaktan kontrol edilmesini sağlayan motorlar gibi fiziksel mekanizmaları tetikler.', '', '', '', '', '', '', '', 'Deniz Kaya', ' Kullanımı çok kolay, Türkçe menüden istediğim gibi programlama yapabiliyorum. Belkide ömrünüz boyunca hic kullanmayacagınız yangın alarmı, gaz alarmının evde olması bile insanın içini rahatlatıyor. Sistemin kulanımı çok kolay.\r\n                  Yeri gelmisken bahsedeyim. 3 katli evimizde oturmaya basladigimizda en alt katı henüz aktif olarak kullanmaya başlamamıştık. Günlerimiz diğer 2 üst katta geciyordu. Bir gün duş almaya en üst kattaki banyoya girdim bir müddet sonra su taşkını alarmı ötmeye basladı. Alarmın nereden geldiğini anlamak icin akıllı ev sisteminin ekranına baktık ve en alt kattaki mutfakta su taskını oldugunu gördük. İnip baktıgımızda gördük ki tıkali bir atık su borusundan geriye taşan su mutfak giderinden gelerek taşkina sebep oluyordu. Tıkanan boruyu açtırdık ve bir daha problem yaşmadık. Ancak burada önemli olan kullanmadığımız bir bölge akıllı ev sistemi tarafından denetleniyor bize haber veriyor olması. Bu sayede parkelerimizi ve diğer ahsap mobilyalarımızı hasar görmekten kurtarmış olduk.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kuladmin`
--

CREATE TABLE `kuladmin` (
  `ıd` int(11) NOT NULL,
  `ad` varchar(20) NOT NULL,
  `maıl` varchar(20) NOT NULL,
  `sıfre` varchar(20) NOT NULL,
  `yetki` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kuladmin`
--

INSERT INTO `kuladmin` (`ıd`, `ad`, `maıl`, `sıfre`, `yetki`) VALUES
(1, 'admin', 'admin@aaa.com', '1234', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(1, 'habipcan', 'habipcand1@gmail.com', '$2y$10$JLlQM45NN.h0E.uifz4ZlOhpkQoaRyKL4F47wzpjvYjnIZZAmCzFi', '2024-05-15 16:32:13'),
(71, 'aysenurd', 'ayse.nur07@gmail.com', '$2y$10$A0x6RlVhmlBMWRvGXlh72ueSVKcGpuaXGfy81/HGBnUqPfGjUrb6S', '2024-05-17 02:12:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nasılsahipolurum`
--

CREATE TABLE `nasılsahipolurum` (
  `ıd` int(25) NOT NULL,
  `baslık` varchar(1000) NOT NULL,
  `altbaslık` varchar(1000) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `linkmetin` varchar(200) NOT NULL,
  `açıklama` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `nasılsahipolurum`
--

INSERT INTO `nasılsahipolurum` (`ıd`, `baslık`, `altbaslık`, `foto`, `linkmetin`, `açıklama`) VALUES
(1, 'Nasıl Sahip olurum ?', 'Ürün Özellikleri', 'urun.png', 'Bize Ulaşın', '- Aç-Kapa kontrol ile; evin istenilen herhangi bir yerinden buton ya da dokunmatik panel üzerinden tüm aydınlatmaların açılıp kapanabilmesi,<br>- Dimmerlı aydınlatma kontrolü ile; mum ışığı ayarında bir akşam yemeği, iyi aydınlatılmış bir çalışma ortamı ya da bir şeyler okumak için en ideal ışık seviyesini ayarlayabilme,- Senaryolar oluşturularak tek bir dokunuşla istenilen ambiyansın oluşturulması (yemek, sohbet, okuma gibi aydınlatma senaryoları),<br>- Varlık detektörleri ile; Hareket detektörüne nispeten daha hassas bir algılama ile aydınlatma kontrolü ve enerji tasarrufu sağlanması,<br>- Aydınlık sensörü sayesinde hava kararınca istenilen aydınlatmaların açılmasının, hava aydınlandığında kapanmasının sağlanması,<br>-  Tüm mahallerin aydınlatma sisteminin açık veya kapalı olmasıyla ilgili durum bilgilerinin dokunmatik ekran üzerinden görülebilmesi ve kontrol edilebilmesi,<br>- Oda veya kat bazında aydınlatma kontrolü,<br>- Tüm prizleri kontrol imkanı,<br>- Brightness Sensor ile; Gözlerinizi rahatsız etmeyecek aydınlık seviyesini otomatik olarak ayarlama<br>- Timer ve Lojik özellikleri ile; kullanıcı hatalarını önleyecek zamanlama ve mantıksal kontrollerle enerji tasarrufu…'),
(2, 'PERDE/PANJUR', '', 'nasıl.jpg', '', '-Perde/Panjur Kontrolü ile; evin istenilen herhangi bir yerinden buton ya da dokunmatik panel üzerinden tüm perdelerin açılıp kapanabilmesi, <br>\r\n-Brightness Sensor ile isik sensöru sayesinde algılanan ışik seviyesine göre perde-panjurların pozisyonu otomatik olarak ayarlanır. <br> Sıcak yaz günlerinde binanızdaki gölgeleme otomatik olarak sağlanır.Ya da kıs mevsiminde hava erkenden karardığında ısı yalıtımlı panjurlar otomatik olarak  pozisyonlarını kendisi ayarlayabilir\r\n\r\n-Weather Statıon sayesinde hava kararınca istenilen aydınlatmaların açılmasının, hava aydınlandığında kapanmasının sağlanması,<br>\r\n\r\n-Senaryolar oluşturularak tek bir dokunuşla istenilen ambiyansın oluşturulması (yemek, sohbet, okuma gibi Perde/Panjur senaryoları),<br>'),
(3, 'İKLİMLENDİRME', '', 'nasıl3.jpg', '', '-İklimlendirme kontrolü sayesinde;  bölümlerin sıcaklığı en makul düzeyde tutulur. İstenilen sıcaklık değeri akıllı anahtarlar üzerinden yapılabildiği gibi, değişen koşullara göre merkezden ayarlanabilir, odalara kullanım sınırlamaları getirilebilir. <br>\r\n\r\n- Bu kontrolleri yaparken odanın mimari konseptine uygun, termostatlı akıllı anahtarlar ile hem aydınlatma hem iklimlendirme hem senaryolar gibi tüm fonksiyonları bir arada kullanabilme imkanı…<br>\r\n- Klima ve Fancoil sistemlerinin tamamında, oda bazında veya evin tamamında kontrol edilmesi,<br>\r\n\r\n- Isıtma sistemlerinde açma kapama kontrolü, oda bazında kontrol yapılabilmesi,<br>\r\n\r\n- Ev dışındayken uzaktan açıp kapayabilme imkanı,<br>\r\n\r\n- Gece ve gündüz veya istenilen saatler de  ihtiyaca uygun  ayrı ayrı sıcaklık seviyeleri<br>\r\n\r\n- Odada kimse yoksa stand by sıcaklık seviyesi..<br>\r\n\r\n- Merkezden izleme ve kontrol etme.<br>\r\n\r\n- Iphone, Ipad, android gibi mobil cihazlar üzerinden evinizdeki tüm sistemlerin durum bilgisini alıp buna göre evin içinden veya dışından eviniz ile ilgili her oda için aydınlatma, ısıtma/soğutma, perde kontrollerini yapabilirsiniz. <br>'),
(4, 'GÜVENLİK', '', 'nasıl2.jpg', '', '- Çeşitli bölgelerde hareket dedektörlü koruma, <br>\r\n- Yangın, gaz, duman dedektörleri ile koruma,<br>\r\n\r\n- Su basma sensörleri ile su kaçaklarına müdahale edilmesi,<br>\r\n\r\n- Dokunmatik panel üzerinden alarm kurma ve devreden çıkarma imkanı,<br>');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`ıd`);

--
-- Tablo için indeksler `kuladmin`
--
ALTER TABLE `kuladmin`
  ADD PRIMARY KEY (`ıd`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `nasılsahipolurum`
--
ALTER TABLE `nasılsahipolurum`
  ADD PRIMARY KEY (`ıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kuladmin`
--
ALTER TABLE `kuladmin`
  MODIFY `ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Tablo için AUTO_INCREMENT değeri `nasılsahipolurum`
--
ALTER TABLE `nasılsahipolurum`
  MODIFY `ıd` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
