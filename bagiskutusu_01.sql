-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 01 Eyl 2020, 20:52:20
-- Sunucu sürümü: 10.3.23-MariaDB-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bagiskutusu_01`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity`
--

CREATE TABLE `activity` (
  `activityID` int(11) NOT NULL,
  `societyID` int(11) NOT NULL,
  `place` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `clock` time NOT NULL,
  `day` int(10) NOT NULL,
  `mounth` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `activity`
--

INSERT INTO `activity` (`activityID`, `societyID`, `place`, `title`, `clock`, `day`, `mounth`) VALUES
(26, 17, 'Ankamall AVM önü', 'Hayır Çarşısı Kermes', '12:40:00', 23, 'Ağustos'),
(34, 17, 'Mogan Parkı', 'Ağaç Dikimi', '18:00:00', 15, 'Temmuz'),
(35, 17, 'Konutkent Atapark', 'Maske Dağıtımı', '22:10:00', 30, 'Haziran'),
(36, 17, 'Gölbaşı/Ankara', 'Lösev Buluşma', '15:00:00', 5, 'Temmuz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blogID` int(11) NOT NULL,
  `societID` int(11) NOT NULL,
  `tag` varchar(55) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `text` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `blogLink` varchar(100) NOT NULL,
  `b_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blogID`, `societID`, `tag`, `date`, `text`, `title`, `blogLink`, `b_image`) VALUES
(20, 17, 'fidan', '2020-04-22', '&lt;p&gt;&amp;nbsp; &amp;nbsp;Ağa&amp;ccedil; ve orman sevgisini geliştirmek, toplumun b&amp;uuml;t&amp;uuml;n kesimlerinin &amp;ccedil;evreye olan duyarlılıklarına katkı sağlamak, &amp;ouml;zellikle son aylarda &amp;ccedil;ıkan orman yangınları neticesinde zarar g&amp;ouml;ren alanların yeniden ağa&amp;ccedil;landırma konusunda fidan dikimi hepimiz i&amp;ccedil;in &amp;ouml;nemli bir faaliyettir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; &amp;nbsp;Fidan k&amp;ouml;kleri g&amp;uuml;neşe ve r&amp;uuml;zgara karşı korunmalıdır. Fidan dikerken k&amp;ouml;kler kıvrılıp, d&amp;ouml;nmemeli, toprakta hava boşluğu kalacak bi&amp;ccedil;imde sığ veya derin dikilmemelidir. Dikilecek fidanın&amp;nbsp;20 cm&amp;#39; den uzun olan k&amp;ouml;kleri &amp;ouml;nceden kesilmelidir. T&amp;uuml;pl&amp;uuml; ve kaplı fidanşar&amp;nbsp;naylon ve kaplarından mutlaka &amp;ccedil;ıkarıldıktan sonra dikilmelidir. Donlu g&amp;uuml;nlerde fidan dikmeyiniz. Boylu fidanların r&amp;uuml;zgarla sallanmasını &amp;ouml;nlemek i&amp;ccedil;in kazıkla bağlanması uygun olur.&lt;/p&gt;', 'Daha Yeşil Bir Dünya', 'gucsuzler-yurdu-dernegi-daha-yesil-bir-dunya-158', 'daha-yesil-bir-dunya-gucsuzler-yurdu-dernegi-715.jpg'),
(21, 17, 'dünya,küreselısınma,iklim,doğa', '2020-04-25', '&lt;p&gt;K&amp;uuml;resel ısınma, başlıca atmosfere salınan gazların neden olduğu d&amp;uuml;ş&amp;uuml;n&amp;uuml;len sera etkisinin sonucunda, D&amp;uuml;nya &amp;uuml;zerinde yıl boyunca kara, deniz ve havada &amp;ouml;l&amp;ccedil;&amp;uuml;len ortalama sıcaklıklarda g&amp;ouml;r&amp;uuml;len artışa verilen isimdir.&lt;/p&gt;', 'Küresel Isınma', 'gucsuzler-yurdu-dernegi-kuresel-isinma-893', 'kuresel-isinma-gucsuzler-yurdu-dernegi-655.jpg'),
(22, 17, 'yardım', '2020-04-25', '&lt;p&gt;Birleşmiş Milletler D&amp;uuml;nya Gıda Programı (WFP), kuraklık, sel felaketleri ve k&amp;ouml;t&amp;uuml; ekonomi y&amp;ouml;netimi nedeniyle Afrika&amp;rsquo;nın g&amp;uuml;neyinde 45 milyon kişinin a&amp;ccedil;lık tehlikesi ile karşı karşıya olduğunu ve b&amp;ouml;lgeye &amp;ccedil;ok acil bir şekilde gıda yardımı yapılması gerektiğini duyurdu. WFP&amp;#39;den yapılan a&amp;ccedil;ıklamada, uluslararası toplumun hemen harekete ge&amp;ccedil;mesi gerektiği belirtilirken, acil yardımların hızlıca ulaştırılması, iklim değişikliğinin &amp;ouml;n&amp;uuml;ne ge&amp;ccedil;mek i&amp;ccedil;in, uzun vadeli yatırımların hayata ge&amp;ccedil;irilmesi gerektiği ifade edildi. WFP, ilk etapta gerekli olan 489 milyon doların şu ana dek sadece 205 milyon dolarlık kısmının toplanabildiğini de bildirdi.&lt;/p&gt;', 'Afrika\'daki Açlık Sorunu', 'gucsuzler-yurdu-dernegi-afrika-daki-aclik-sorunu-853', 'afrika-daki-aclik-sorunu-gucsuzler-yurdu-dernegi-800.jpg'),
(23, 17, 'ihtiyaç,yardım,bağış', '2020-04-25', '&lt;p&gt;Bağış&amp;ccedil;ılık, yani k&amp;uuml;lt&amp;uuml;r&amp;uuml;m&amp;uuml;zdeki yaygın adıyla hayırseverlik, aslında toplumsal &amp;ouml;zelliklerimiz i&amp;ccedil;erisinde &amp;ouml;ne &amp;ccedil;ıkan değerlerden biridir.&amp;nbsp;Araştırma sonu&amp;ccedil;lara bizlere toplumun %88&amp;rsquo;inin ihtiya&amp;ccedil; sahiplerine doğrudan yardım etmeyi tercih ettiğini, %12&amp;rsquo;sinin ise ilgili kurumlar aracılığıyla bağış yaptığını g&amp;ouml;steriyor.&lt;/p&gt;', 'Bağış', 'gucsuzler-yurdu-dernegi-bagis-468', 'bagis-gucsuzler-yurdu-dernegi-885.jpg'),
(24, 17, 'ramazan,ihtiyaç,yardım', '2020-05-10', '&lt;p&gt;Ramazan, Hicr&amp;icirc; takvime g&amp;ouml;re 9. ay ve İslam dininin inancına g&amp;ouml;re Muhammed&amp;#39;e Kur&amp;#39;an ayetlerinin inmeye başladığı, aynı zamanda M&amp;uuml;sl&amp;uuml;manlarca oru&amp;ccedil; tutulmaya başlanılan aydır. Bu ayda oru&amp;ccedil; tutmak İslam&amp;#39;ın beş şartından biridir.&lt;/p&gt;', 'Ramazan Ayı', 'gucsuzler-yurdu-dernegi-ramazan-ayi-102', 'ramazan-ayi-gucsuzler-yurdu-dernegi-463.jpg'),
(25, 17, 'ihtiyaç,yardım,sağlık,pandemi,covid-19', '2020-05-10', '&lt;p&gt;Koronavir&amp;uuml;s hastalığı (COVID-19), yeni keşfedilen bir koronavir&amp;uuml;s&amp;uuml;n neden olduğu bulaşıcı bir hastalıktır.&lt;/p&gt;\r\n\r\n&lt;p&gt;COVID-19&amp;#39;a neden olan vir&amp;uuml;s, genellikle enfekte kişi &amp;ouml;ks&amp;uuml;rd&amp;uuml;ğ&amp;uuml;, hapşırdığı veya nefes verdiği zaman oluşan damlacıklar yoluyla bulaşır. Bu damlacıklar &amp;ccedil;ok ağır olduğundan havada asılı kalamaz ve hemen yere ya da y&amp;uuml;zeylere d&amp;uuml;şer.&lt;/p&gt;\r\n\r\n&lt;p&gt;COVID-19 ile enfekte birinin yakınındayken vir&amp;uuml;s&amp;uuml; solursanız veya vir&amp;uuml;s&amp;uuml;n bulaştığı bir y&amp;uuml;zeye dokunduktan sonra g&amp;ouml;zlerinize, burnunuza veya ağzınıza dokunursanız enfekte olabilirsiniz.&lt;/p&gt;', 'Dünyayı etkisi altına alan COVID-19', 'gucsuzler-yurdu-dernegi-dunyayi-etkisi-altina-alan-covid-19-521', 'dunyayi-etkisi-altina-alan-covid-19-gucsuzler-yurdu-dernegi-335.jpg'),
(26, 17, 'ihtiyaç,yardım', '2020-05-10', '&lt;p&gt;B&amp;ouml;lge, din, dil, ırk ve mezhep ayrımı yapmaksızın d&amp;uuml;nyanın herhangi bir yerinde sıkıntıya d&amp;uuml;şm&amp;uuml;ş, felakete uğramış, zul&amp;uuml;m g&amp;ouml;rm&amp;uuml;ş, a&amp;ccedil; ve a&amp;ccedil;ıkta kalmış; savaş, tabii afet gibi sebeplerle mağdur olmuş, yaralanmış, sakat kalmış; evsiz, yurtsuz, t&amp;uuml;m insanlara yardım etmek ama&amp;ccedil;lı yardım kuruluşları bulunmaktadır.&lt;/p&gt;', 'Yardım Kuruluşları', 'gucsuzler-yurdu-dernegi-yardim-kuruluslari-749', 'yardim-kuruluslari-gucsuzler-yurdu-dernegi-383.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryDescription` varchar(55) NOT NULL,
  `categoryType` int(11) NOT NULL,
  `categoryName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`categoryID`, `categoryDescription`, `categoryType`, `categoryName`) VALUES
(1, 'erzak yardımı, mal ve para yardımı', 2, 'Temel İhtiyaç'),
(2, 'kömür yardımı, mal yardımı', 2, 'Eşya'),
(3, 'Elektrik faturası, maddi yardım', 1, 'Fatura'),
(4, 'yiyecek ve maddi yardım', 3, 'Ramazan'),
(5, 'Kurum para yardımı', 4, 'Kurum '),
(6, 'eşya', 2, 'Covid19'),
(7, 'eşya', 2, 'Deprem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `city`
--

CREATE TABLE `city` (
  `cityID` int(11) NOT NULL,
  `city_no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `city`
--

INSERT INTO `city` (`cityID`, `city_no`, `name`) VALUES
(1, 1, 'Adana'),
(2, 2, 'Adıyaman'),
(3, 3, 'Afyonkarahisar'),
(4, 4, 'Ağrı'),
(5, 5, 'Amasya'),
(6, 6, 'Ankara'),
(7, 7, 'Antalya'),
(8, 8, 'Artvin'),
(9, 9, 'Aydın'),
(10, 10, 'Balıkesir'),
(11, 11, 'Bilecik'),
(12, 12, 'Bingöl'),
(13, 13, 'Bitlis'),
(14, 14, 'Bolu'),
(15, 15, 'Burdur'),
(16, 16, 'Bursa'),
(17, 17, 'Çanakkale'),
(18, 18, 'Çankırı'),
(19, 19, 'Çorum'),
(20, 20, 'Denizli'),
(21, 21, 'Diyarbakır'),
(22, 22, 'Edirne'),
(23, 23, 'Elâzığ'),
(24, 24, 'Erzincan'),
(25, 25, 'Erzurum'),
(26, 26, 'Eskişehir'),
(27, 27, 'Gaziantep'),
(28, 28, 'Giresun'),
(29, 29, 'Gümüşhane'),
(30, 30, 'Hakkâri'),
(31, 31, 'Hatay'),
(32, 32, 'Isparta'),
(33, 33, 'Mersin'),
(34, 34, 'İstanbul'),
(35, 35, 'İzmir'),
(36, 36, 'Kars'),
(37, 37, 'Kastamonu'),
(38, 38, 'Kayseri'),
(39, 39, 'Kırklareli'),
(40, 40, 'Kırşehir'),
(41, 41, 'Kocaeli'),
(42, 42, 'Konya'),
(43, 43, 'Kütahya'),
(44, 44, 'Malatya'),
(45, 45, 'Manisa'),
(46, 46, 'Kahramanmaraş'),
(47, 47, 'Mardin'),
(48, 48, 'Muğla'),
(49, 49, 'Muş'),
(50, 50, 'Nevşehir'),
(51, 51, 'Niğde'),
(52, 52, 'Ordu'),
(53, 53, 'Rize'),
(54, 54, 'Sakarya'),
(55, 55, 'Samsun'),
(56, 56, 'Siirt'),
(57, 57, 'Sinop'),
(58, 58, 'Sivas'),
(59, 59, 'Tekirdağ'),
(60, 60, 'Tokat'),
(61, 61, 'Trabzon'),
(62, 62, 'Tunceli'),
(63, 63, 'Şanlıurfa'),
(64, 64, 'Uşak'),
(65, 65, 'Van'),
(66, 66, 'Yozgat'),
(67, 67, 'Zonguldak'),
(68, 68, 'Aksaray'),
(69, 69, 'Bayburt'),
(70, 70, 'Karaman'),
(71, 71, 'Kırıkkale'),
(72, 72, 'Batman'),
(73, 73, 'Şırnak'),
(74, 74, 'Bartın'),
(75, 75, 'Ardahan'),
(76, 76, 'Iğdır'),
(77, 77, 'Yalova'),
(78, 78, 'Karabük'),
(79, 79, 'Kilis'),
(80, 80, 'Osmaniye'),
(81, 81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `commentIp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`commentID`, `userID`, `blogID`, `comment`, `date`, `commentIp`) VALUES
(36, 52, 20, 'Sevdikleriniz ya da kendiniz için fidan bağışı yapın,\nfidanlar doğa ile buluşsun, yaşam kazansın.', '2020-06-20', 8598),
(37, 52, 20, 'Hayatı Koruyan Ormanlara Birlikte Sahip Çıkalım', '2020-06-20', 8598),
(38, 52, 21, 'Küresel ısınma, uzun bir zaman zarfında hava dengelerini ve ekosistemlerini değiştiren Dünya\'nın ortalama sıcaklıklarında genel bir artışa sebebiyet veren bir iklim değişikliği sorunudur ve sera etkisinin artmasıyla birlikte atmosferdeki sera gazlarının çoğalması bu durumu tetiklemektedir.', '2020-06-20', 8598),
(39, 52, 21, 'Koronavirüsün ortaya çıkması ile yavaşlamaya başlamıştır.Özellikle hava kirliliğinde ciddi düşüşler söz konusu.', '2020-06-20', 8598),
(40, 52, 22, 'Zengin yeraltı kaynakları ve tarıma elverişli toprakları olmasına rağmen iç savaş sebebiyle büyük gıda krizi yaşayan Güney Sudan\'da, 4,9 milyon kişi acil yardım bekliyor.', '2020-06-20', 8598),
(41, 52, 22, 'Afrika\'nın güneyinden sorumlu WFP yöneticisi Lola Castro, &quot;Bu açlık krizi, bugüne dek gördüklerimizin çok ötesinde ve vaziyet durumun daha da kötüye gideceğini gösteriyor&quot; dedi. Açlık krizinin yaşandığı bölgede siklon mevsiminin de başladığını dile getiren Castro, &quot;Geçtiğimiz yıl, daha önce görülmemiş boyutlarda yıkıma sebep olan fırtınaların tekrarı ile başa çıkamayız&quot; ifadesinde bulundu.', '2020-06-20', 8598),
(42, 52, 23, 'Nakdi Bağış, parasal bağışlara verilen addır.', '2020-06-20', 8598),
(43, 52, 23, 'Ayni Bağış ise eşya, hizmet, bedelsiz kullandırma gibi parasal olmayan bağışlardır.', '2020-06-20', 8598),
(44, 52, 23, 'Toplumumuzu oluşturan önemli katmanlardan biri de ihtiyaç sahibi kişilerdir.', '2020-06-20', 8598),
(45, 52, 24, 'Türkiye\'deki yardım kuruluşlarınca ramazan ayında dünyanın dört bir yanındaki ihtiyaç sahiplerine hayırseverlerin bağışları ulaştırılacak.', '2020-06-20', 8598),
(46, 52, 25, '1-)Ellerinizi sık sık yıkayın. \n2-)Dirsek içine doğru öksürün.\n3-)Yüzünüze dokunmaktan kaçının.\n4-)Sosyal mesafe kuralına uyun.\n5-)Mümkünse evde kalın.', '2020-06-20', 8598),
(47, 52, 25, 'En yaygın semptomlar: ateş,kuru öksürük,yorgunluk', '2020-06-20', 8598),
(48, 52, 26, 'Yoksul, yani geçim sıkıntısı yaşayan veya doğal afet sonucunda yardıma muhtaç olan kişilere giyecek, yiyecek, barınma, tedavi, ve benzeri yardımlarda bulunmaya ve bunları karşılığında bir ücret beklemeden yapmaya sosyal yardım denmektedir. Sosyal yardım kuruluşları genel olarak aldığı bağışlar ve gönüllü çalışanları sayesinde yoksul insanlara ulaşıp onlara yardım ederler.', '2020-06-20', 8598),
(49, 52, 26, 'İhtiyaç sahiplerinin eğitim, gıda, giyim, sağlık, barınma ve ruhsal fiziksel şiddet, savaş mağduru insanların hem maddi hem manevi ihtiyaçlarını karşılamak, onlara destek olabilmek üzere bir çok yardım derneği vardır.', '2020-06-20', 8598);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `message` text NOT NULL,
  `cName` varchar(55) NOT NULL,
  `cMail` varchar(100) NOT NULL,
  `cIp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contactID`, `message`, `cName`, `cMail`, `cIp`) VALUES
(1, 'deneme mesajı', 'Burak', 'burakusoglu@gmail.com', '192.168.1.1'),
(50, 'asd', 'asd', 'asd@hotmail.com', '176.40.231.224');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donate`
--

CREATE TABLE `donate` (
  `donateID` int(11) NOT NULL,
  `donateListID` int(11) NOT NULL,
  `donaterID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `donate`
--

INSERT INTO `donate` (`donateID`, `donateListID`, `donaterID`, `date`) VALUES
(1, 33, 1, '2020-04-23'),
(2, 33, 2, '2020-04-23'),
(3, 35, 3, '2020-04-23'),
(4, 33, 4, '0000-00-00'),
(5, 33, 5, '0000-00-00'),
(6, 33, 6, '0000-00-00'),
(7, 33, 7, '0000-00-00'),
(8, 33, 8, '0000-00-00'),
(9, 33, 9, '0000-00-00'),
(10, 33, 10, '0000-00-00'),
(11, 33, 11, '0000-00-00'),
(12, 33, 12, '0000-00-00'),
(13, 35, 13, '0000-00-00'),
(14, 35, 14, '0000-00-00'),
(15, 35, 15, '0000-00-00'),
(16, 35, 16, '0000-00-00'),
(17, 34, 17, '0000-00-00'),
(18, 34, 18, '0000-00-00'),
(19, 34, 19, '0000-00-00'),
(20, 33, 20, '0000-00-00'),
(21, 33, 21, '0000-00-00'),
(22, 35, 22, '0000-00-00'),
(23, 33, 23, '0000-00-00'),
(24, 36, 24, '0000-00-00'),
(25, 35, 25, '0000-00-00'),
(26, 35, 26, '0000-00-00'),
(27, 35, 27, '0000-00-00'),
(28, 35, 28, '0000-00-00'),
(29, 35, 29, '0000-00-00'),
(30, 35, 30, '0000-00-00'),
(31, 35, 31, '0000-00-00'),
(32, 35, 32, '0000-00-00'),
(33, 36, 33, '0000-00-00'),
(34, 33, 34, '0000-00-00'),
(35, 35, 35, '0000-00-00'),
(36, 34, 36, '0000-00-00'),
(37, 35, 37, '0000-00-00'),
(38, 35, 38, '0000-00-00'),
(39, 34, 39, '0000-00-00'),
(40, 34, 40, '0000-00-00'),
(41, 36, 41, '0000-00-00'),
(42, 36, 42, '0000-00-00'),
(43, 34, 43, '0000-00-00'),
(44, 46, 47, '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donatelist`
--

CREATE TABLE `donatelist` (
  `donateListID` int(11) NOT NULL,
  `societyID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `donateImage` varchar(55) NOT NULL,
  `donateName` varchar(55) NOT NULL,
  `donateAmount` int(11) NOT NULL,
  `donateOpenDate` date NOT NULL DEFAULT current_timestamp(),
  `donateListVisible` int(11) NOT NULL,
  `donateDescription` text NOT NULL,
  `donateLink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `donatelist`
--

INSERT INTO `donatelist` (`donateListID`, `societyID`, `categoryID`, `donateImage`, `donateName`, `donateAmount`, `donateOpenDate`, `donateListVisible`, `donateDescription`, `donateLink`) VALUES
(33, 17, 5, 'kurum-ihtiyac-bagisi-gucsuzler-yurdu-dernegi-376.png', 'Kurum ihtiyaç bağışı', 505, '2020-04-22', 1, '&lt;p&gt;kurum ihtiya&amp;ccedil; bağışı hakkında yazı&lt;/p&gt;', 'gucsuzler-yurdu-dernegi-kurum-ihtiyac-bagisi-205'),
(34, 17, 3, '108-gucsuzler-yurdu-dernegi-109.jpg', 'Elektrik faturasını ödemede sorunlar yaşıyor', 60, '2020-04-22', 1, '&lt;p&gt;işten &amp;ccedil;ıkarılmış&lt;/p&gt;', 'gucsuzler-yurdu-dernegi-burak-233'),
(35, 17, 2, 'komur-yardimi-3-ton-gucsuzler-yurdu-dernegi-896.jpeg', 'Kömür Yardımı 10 Ton', 0, '2020-04-22', 1, '&lt;p&gt;a&amp;ccedil;ıklama yazısı buraya yazılacaktır&lt;/p&gt;', 'gucsuzler-yurdu-dernegi-komur-yardimi-3-ton-178'),
(36, 17, 4, '106-gucsuzler-yurdu-dernegi-868.jpg', 'ramazan kolisi 59 adet', 900, '2020-04-22', 1, '&lt;p&gt;denemedir&lt;/p&gt;', 'gucsuzler-yurdu-dernegi-burak-519'),
(45, 25, 6, 'maske-10-000-adet-atilim-vakfi-624.jpg', 'Maske 10.000 Adet', 0, '2020-06-20', 1, 'Covid-19 Pandemisi nedeniyle ihtiyaç sahiplerine maske yardımı', 'atilim-vakfi-maske-10-000-adet-344'),
(46, 25, 6, 'dezenfektan-500-kutu-atilim-vakfi-262.jpg', 'Dezenfektan 500 Kutu', 0, '2020-06-20', 1, 'Covid-19 sürecinde el hijyeni için dezenfektan yardımı', 'atilim-vakfi-dezenfektan-500-kutu-796'),
(47, 25, 7, 'kiyafet-atilim-vakfi-394.jpg', 'Kıyafet', 0, '2020-06-20', 1, 'Elazığ Depremi sebebiyle mağdur olan insanlara kıyafet yardımı', 'atilim-vakfi-kiyafet-276'),
(48, 25, 1, 'temel-gida-paketi-atilim-vakfi-878.jpg', 'Temel Gıda Paketi', 0, '2020-06-20', 1, 'Maddi sıkıntı çeken insanlara temel gıda paket yardımı', 'atilim-vakfi-temel-gida-paketi-254');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donater`
--

CREATE TABLE `donater` (
  `donaterID` int(11) NOT NULL,
  `donateType` int(11) NOT NULL,
  `donaterName` varchar(55) NOT NULL,
  `donaterSurname` varchar(55) NOT NULL,
  `donaterMail` varchar(55) NOT NULL,
  `donaterSecretType` int(11) NOT NULL,
  `notification` int(11) NOT NULL,
  `moneyAmount` int(11) NOT NULL,
  `itemName` varchar(55) NOT NULL,
  `itemCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `donater`
--

INSERT INTO `donater` (`donaterID`, `donateType`, `donaterName`, `donaterSurname`, `donaterMail`, `donaterSecretType`, `notification`, `moneyAmount`, `itemName`, `itemCount`) VALUES
(1, 4, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 1, 150, '', 0),
(2, 4, 'burcu', 'burcu', 'burcu@hotmail.com', 0, 1, 5, '', 0),
(3, 4, 'kubi', 'kubi', 'kubi@hotmail.com', 0, 1, 0, '', 0),
(4, 5, 'burak', 'kusoglu', 'burak@hotmail.com', 1, 1, 50, '', 0),
(5, 5, 'Burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 10, '', 0),
(6, 5, 'Burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 50, '', 0),
(7, 5, 'Burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 50, '', 0),
(8, 5, 'Burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 50, '', 0),
(9, 5, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 10, '', 0),
(10, 5, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 1, 5, '', 0),
(11, 5, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(12, 5, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 15, '', 0),
(13, 2, 'asd', 'asd', 'asd@hotmail.com', 0, 0, 0, 'asd', 2),
(14, 2, 'Deneme', 'Deneme', 'deneme@hotmail.com', 0, 0, 0, 'Sandalye', 2),
(15, 2, 'Deneme', 'Deneme', 'deneme@hotmail.com', 0, 0, 0, 'Sandalye', 2),
(16, 2, 'Deneme', 'Deneme', 'deneme@hotmail.com', 0, 0, 0, 'Sandalye', 2),
(17, 3, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(18, 3, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 15, '', 0),
(19, 3, 'burak', 'kusoglu', 'kusogluburak33@gmail.com', 0, 0, 15, '', 0),
(20, 5, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(21, 5, 'burak', 'kusoglu', 'kusogluburak33@gmail.com', 0, 0, 5, '', 0),
(22, 2, 'brak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 0, 'kömür', 1),
(23, 5, 'Atakan', 'Dönmez', 'ata.kann1991@gmail.com', 1, 1, 15, '', 0),
(24, 4, 'Burak', 'Kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(25, 2, 'burak', 'kuşoğlu', 'kusogluburak33@gmail.com', 0, 0, 0, 'burak kusoglu', 2),
(26, 2, 'burak', 'kuşoğlu', 'kusogluburak33@gmail.com', 0, 0, 0, 'asddd', 2),
(27, 2, 'burak', 'kuşoğlu', 'kusogluburak33@gmail.com', 0, 0, 0, 'kömür', 2),
(28, 2, 'burak', 'kusoglu', 'kusogluburak33@gmail.com', 0, 0, 0, 'kömür', 2),
(29, 2, 'burak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 0, 'asd', 2),
(30, 2, 'burak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 0, 'asd', 2),
(31, 2, 'burak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 0, 'asd', 2),
(32, 2, 'burak', 'kuşoğlu', 'kusogluburak33@gmail.com', 0, 0, 0, 'asd', 2),
(33, 4, 'burak', '23123', 'asd@hotmail.com', 0, 0, 20, '', 0),
(34, 5, 'burak kusoglu', 'kusoglu', 'burak@hotmail.com', 0, 0, 80, '', 0),
(35, 2, 'Burak', 'Kuşoğlu baba', 'burakkusoglu@yandex.com', 0, 0, 0, 'Kömür', 7),
(36, 3, 'burak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(37, 2, 'burak', 'kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 0, 'kömür', 10),
(38, 2, 'burak', 'kusoglu', 'kusogluburak33@gmail.com', 0, 0, 0, 'kömür', 10),
(39, 3, 'burak', 'kusoglu', 'burak@hotmail.com', 0, 0, 5, '', 0),
(40, 3, 'ata', 'can', 'atakandmz@gmail.com', 0, 0, 5, '', 0),
(41, 4, 'ata', 'can', 'atakandmz@gmail.com', 0, 0, 20, '', 0),
(42, 4, 'ata', 'can', 'atakandmz@gmail.com', 0, 0, 0, 'Masa', 4),
(43, 3, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(44, 4, 'burak', 'kusoglu', 'burakkusoglu@yandex.com', 0, 0, 5, '', 0),
(45, 4, 'Burak', 'Kuşoğlu', 'burakkusoglu@yandex.com', 0, 0, 15, '', 0),
(46, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 20, '', 0),
(47, 6, 'burak', 'kusoglu', 'burak@hotmail.com', 0, 0, 0, 'dezenfekten', 5),
(48, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 5, '', 0),
(49, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 5, '', 0),
(50, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 5, '', 0),
(51, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 5, '', 0),
(52, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 5, '', 0),
(53, 4, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', 1, 1, 15, '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favorite`
--

CREATE TABLE `favorite` (
  `favoriteID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `donateListID` int(11) NOT NULL,
  `favoriteDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `favorite`
--

INSERT INTO `favorite` (`favoriteID`, `userID`, `donateListID`, `favoriteDate`) VALUES
(604, 47, 35, '2020-06-11 12:20:59'),
(605, 47, 34, '2020-06-11 12:21:00'),
(606, 48, 33, '2020-06-12 11:09:55'),
(607, 50, 34, '2020-06-13 21:18:08'),
(608, 51, 33, '2020-06-18 17:58:37'),
(609, 51, 34, '2020-06-18 17:58:39'),
(610, 47, 33, '2020-06-22 21:31:25'),
(611, 52, 33, '2020-06-22 21:31:57'),
(612, 53, 34, '2020-06-23 21:47:17'),
(613, 53, 35, '2020-06-23 21:47:19');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `follow`
--

CREATE TABLE `follow` (
  `followID` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `mail` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `follow`
--

INSERT INTO `follow` (`followID`, `activityID`, `name`, `mail`) VALUES
(40, 26, 'deniz', 'kayadeniz.660@gmail.com'),
(41, 26, 'Recep', 'reco.fb_1907@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iplog`
--

CREATE TABLE `iplog` (
  `ipLogID` int(11) NOT NULL,
  `lastIp` int(100) NOT NULL,
  `city` varchar(55) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likeblog`
--

CREATE TABLE `likeblog` (
  `likeID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `likeblog`
--

INSERT INTO `likeblog` (`likeID`, `commentID`, `userID`) VALUES
(26, 37, 47),
(27, 36, 47);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `needer`
--

CREATE TABLE `needer` (
  `neederID` int(11) NOT NULL,
  `neederName` varchar(55) NOT NULL,
  `neederSurname` varchar(55) NOT NULL,
  `neederTC` int(55) NOT NULL,
  `neederPhone` varchar(55) NOT NULL,
  `neederAddress` text NOT NULL,
  `neederDate` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `needer`
--

INSERT INTO `needer` (`neederID`, `neederName`, `neederSurname`, `neederTC`, `neederPhone`, `neederAddress`, `neederDate`) VALUES
(1, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inönü', '0000'),
(2, 'burak', 'kuşoğlu', 2147483647, '5555', 'asd', '0000'),
(3, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inonu mahallesi camlıca sitesi 4.blok no 11', '1997'),
(4, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inonu mahallesi camlıca sitesi 4.blok no 11', '1997'),
(5, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inonu mahallesi camlıca sitesi 4.blok no 11', '1997'),
(6, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent, inönü mahallesi, çamlıca sitesi', '1997'),
(7, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent deneme', '1997'),
(8, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent deneme', '1997'),
(9, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent deneme', '1997'),
(10, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent deneme', '1997'),
(11, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inonu mahallesi camlıca sitesi 4.blok no 11', '1997'),
(12, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'inonu mahallesi camlıca sitesi 4.blok no 11', '1997'),
(13, 'burak', 'kuşoğlu', 2147483647, '05464982017', 'batıkent, inönü mahallesi, çamlıca sitesi', '1997');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `open`
--

CREATE TABLE `open` (
  `openID` int(11) NOT NULL,
  `neederID` int(11) NOT NULL,
  `societyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `request`
--

CREATE TABLE `request` (
  `requestID` int(11) NOT NULL,
  `requestName` varchar(55) NOT NULL,
  `requestSurname` varchar(55) NOT NULL,
  `requestMail` varchar(55) NOT NULL,
  `requestPhone` varchar(20) NOT NULL,
  `requestComment` text NOT NULL,
  `requestTC` int(200) NOT NULL,
  `requestDocument` text NOT NULL,
  `cityID` int(11) NOT NULL,
  `requestAddress` text NOT NULL,
  `societyID` int(11) NOT NULL,
  `requestDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `request`
--

INSERT INTO `request` (`requestID`, `requestName`, `requestSurname`, `requestMail`, `requestPhone`, `requestComment`, `requestTC`, `requestDocument`, `cityID`, `requestAddress`, `societyID`, `requestDate`) VALUES
(28, 'burak', 'kusoglu', 'fg@hotmail.com', '(054) 649-8201', 'deneme', 2147483647, 'burak-kusoglu-873.jpg', 6, 'inonu mahallesi camlıca sitesi 4.blok no 11', 17, '2020-05-09 23:31:33'),
(29, 'burak', 'kusoglu', 'fg@hotmail.com', '(054) 649-8201', 'deneme', 2147483647, 'burak-kusoglu-414.jpg', 6, 'inonu mahallesi camlıca sitesi 4.blok no 11', 17, '2020-06-12 11:08:29'),
(30, 'deniz', 'kaya', 'kayadeniz.660@gmail.com', '(555) 718-8692', 'fatura ödeme talebi', 2147483647, 'deniz-kaya-213.jpg', 6, '12.sokak', 0, '2020-06-23 22:16:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resetpassword`
--

CREATE TABLE `resetpassword` (
  `resetPasswordID` int(11) NOT NULL,
  `societyID` int(11) NOT NULL,
  `resetLink` varchar(100) NOT NULL,
  `endTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resetpassworduser`
--

CREATE TABLE `resetpassworduser` (
  `resetpasswordUserID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `salt`
--

CREATE TABLE `salt` (
  `saltID` int(11) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `salt`
--

INSERT INTO `salt` (`saltID`, `salt`, `userID`) VALUES
(43, 'PRxpP*VRB)', 47),
(44, '8)I](ekWyr', 48),
(45, 'kgUgf-nq4E', 49),
(46, 'ODfI2Zx%BT', 50),
(47, 'nfKxQOY0?R', 51),
(48, 'f)1C_4}so]', 52),
(49, '.gsGuDJ/S}', 53),
(50, 'nBTpfqhKIx', 54);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saltsociety`
--

CREATE TABLE `saltsociety` (
  `saltSocietyID` int(11) NOT NULL,
  `saltSociety` varchar(100) NOT NULL,
  `societyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `saltsociety`
--

INSERT INTO `saltsociety` (`saltSocietyID`, `saltSociety`, `societyID`) VALUES
(16, '/s/5G_-l)/2c{IV', 16),
(17, 'yV(UQv/s0RmGE4K', 17),
(25, 'Bv]7Rl0R.1GOzOD', 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `setting`
--

CREATE TABLE `setting` (
  `title` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `announcment` text NOT NULL,
  `mail` varchar(55) NOT NULL,
  `instagramLink` varchar(55) NOT NULL,
  `facebookLink` varchar(55) NOT NULL,
  `linkedinLink` varchar(55) NOT NULL,
  `twitterLink` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `setting`
--

INSERT INTO `setting` (`title`, `description`, `announcment`, `mail`, `instagramLink`, `facebookLink`, `linkedinLink`, `twitterLink`) VALUES
('Bağış Kutusu', 'Herkesin güvenli bir şekilde bağışını yapabileceği bir', '&lt;p&gt;Sistem G&amp;uuml;ncellemesi V1.0&lt;/p&gt;\r\n\r\n&lt;p&gt;S&amp;uuml;r&amp;uuml;m: 1.1&lt;/p&gt;\r\n\r\n&lt;p&gt;G&amp;uuml;ncelleme Tarihi : 12.04.2020&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Eklenen &amp;Ouml;zellikler:&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Profil Ayarlarını D&amp;uuml;zenleyebilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Şifremi Unuttum Ekranını Kullanabilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum A&amp;ccedil;ılan Bağış Taleplerini G&amp;ouml;r&amp;uuml;nt&amp;uuml;leyebilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum A&amp;ccedil;ılan Bağış Talepleri &amp;Uuml;zerine Alabilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;G&amp;uuml;ncelleme Tarihi : 13.04.2020&lt;/p&gt;\r\n\r\n&lt;p&gt;S&amp;uuml;r&amp;uuml;m: 1.2&lt;/p&gt;\r\n\r\n&lt;p&gt;Eklenen &amp;Ouml;zellikler:&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Etkinlik Oluşturabilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Etkinliklerini D&amp;uuml;zenleyebilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;G&amp;uuml;ncelleme Tarihi : 15.04.2020&lt;/p&gt;\r\n\r\n&lt;p&gt;S&amp;uuml;r&amp;uuml;m: 1.3&lt;/p&gt;\r\n\r\n&lt;p&gt;Eklenen &amp;Ouml;zellikler:&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Blog Yazısı&amp;nbsp;Oluşturulabilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Blog Yazılarını D&amp;uuml;zenlenebilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;G&amp;uuml;ncelleme Tarihi : 22.04.2020&lt;/p&gt;\r\n\r\n&lt;p&gt;S&amp;uuml;r&amp;uuml;m: 1.4&lt;/p&gt;\r\n\r\n&lt;p&gt;Eklenen &amp;Ouml;zellikler:&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Bağış Oluşturabilir.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kurum Oluşturduğu Bağışı Silebilir.&lt;/p&gt;', 'destek.bagiskutusu@gmail.com', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `society`
--

CREATE TABLE `society` (
  `societyID` int(11) NOT NULL,
  `societyName` varchar(300) NOT NULL,
  `societyLink` varchar(300) NOT NULL,
  `societyText` text NOT NULL,
  `societyImage` text NOT NULL,
  `societyAddress` text NOT NULL,
  `societyPhone` varchar(20) NOT NULL,
  `societyMail` varchar(50) NOT NULL,
  `societyWeb` varchar(255) NOT NULL,
  `societyPass` varchar(300) NOT NULL,
  `passControl` int(1) NOT NULL,
  `societyDate` datetime NOT NULL DEFAULT current_timestamp(),
  `rank` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `society`
--

INSERT INTO `society` (`societyID`, `societyName`, `societyLink`, `societyText`, `societyImage`, `societyAddress`, `societyPhone`, `societyMail`, `societyWeb`, `societyPass`, `passControl`, `societyDate`, `rank`) VALUES
(16, 'Admin', '', '', '', '', '', 'destek.bagiskutusu@gmail.com', '', '$2y$10$wFKYACLe1h7aZLnDas9xB.kVusJF9UVwGVbWXDTJowaBpom6yRo9S', 1, '2020-04-11 22:07:55', 1),
(17, 'Güçsüzler Yurdu Derneği', 'gucsuzler-yurdu-dernegi', 'Kurum açıklama yazısı alanıdır burası!', 'gucsuzler-yurdu-dernegi.png', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12239.920781481691!2d32.8611022!3d39.9194594!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdb241e2e42f769a!2zR8O8w6dzw7x6bGVyIFl1cmR1IERlcm5lxJ9pIEdlbmVsIE1lcmtleg!5e0!3m2!1str!2str!4v1583443653781!5m2!1str!2str', '(312) 433 61 73', 'burakusoglu@yandex.com', 'https://gucsuzleryurdu.org.tr', '$2y$10$x8Gjxa0QpivBymDHK.8uQ.1cYe5N/Ix5bZSBl/xz7ed.sJ5ZO09xy', 1, '2020-04-11 22:09:49', 0),
(25, 'Atılım Vakfı', 'atilim-vakfi', 'Atılım Üniversitesi vakfıdır.', 'atilim-vakfi.png', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12258.441435061342!2d32.7238677!3d39.8157311!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x384ab208be168a84!2zQXTEsWzEsW0gw5xuaXZlcnNpdGVzaQ!5e0!3m2!1str!2str!4v1592672876827!5m2!1str!2str', '0312 586 80 00', 'burakkusoglu@yandex.com', 'https://www.atilim.edu.tr', '$2y$10$bVCjNPddvEr75OCLFMtyEueQK02kI02fKE8cdpzxf92QQle1ZHQQe', 1, '2020-06-20 20:01:43', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `sponsorID` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `sponsorLink` varchar(100) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`sponsorID`, `name`, `phone`, `sponsorLink`, `image`) VALUES
(7, 'Atilim Üniversitesi', '(0312) 586 80 00', 'http://atilim.edu.tr', '03123121212-Admin-575.png'),
(10, 'Güçsüzler Yurdu Derneği', '0312 433 61 73', 'http://gucsuzleryurdu.org.tr/', '0312-433-61-73-Admin-255.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `userMail` varchar(55) NOT NULL,
  `userPass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`userID`, `userName`, `userMail`, `userPass`) VALUES
(47, 'burak', 'burak@hotmail.com', '$2y$10$tYFey9k.Tw2nk3OPgnVdF.pspxdHb3Y/RRXT.dx2aiidG39wibu22'),
(48, 'burak', 'kusogluburak33@gmail.com', '$2y$10$szZuv2sWObABPYlYcTdfuOFtL4mzrlaLhBvPadi8CeKYAgAknBVsq'),
(49, 'burak', 'buak@hotmail.com', '$2y$10$4dwaTYLf2tnlrEWClQ4uS.XjiTPqcS0RHYfNFe9drNxoezNMRvfpm'),
(50, 'baba', 'baba@hotmail.com', '$2y$10$mYQ4TodoQ.ZEqtbuykb9z.AP/HK6XMA7POU.nikI8z0QMVxMGr3uO'),
(51, 'asd', 'asd1@gmail.com', '$2y$10$rd9skV2PcD/nHAoKM1dAxew8zrQFdQavcb44PcFYSyNTTgCPwdLAe'),
(52, 'Barış', 'baris.gursun@student.atilim.edu.tr', '$2y$10$5I1waM5koOd2NTvKhmSiRuAkGUsIGlboxn6ufzNKvSK8ZDc7DS2tW'),
(53, 'deniz kaya', 'kayadeniz.660@gmail.com', '$2y$10$VgUfMzlmluUQ9SeTyFARlOfLLaZ2xam5BL5goyFg0FqOvMykN3enm'),
(54, 'gg', 'gg@gg.com', '$2y$10$ID5iOURf1Rz3mFrnj43rROdbYVLQGnF70IxCyjyUpm.iRQjtP7et.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `writec`
--

CREATE TABLE `writec` (
  `writeCID` int(11) NOT NULL,
  `donaterID` int(11) NOT NULL,
  `contactID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityID`),
  ADD KEY `societyID` (`societyID`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`),
  ADD KEY `societID` (`societID`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Tablo için indeksler `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityID`);

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `blogID` (`blogID`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Tablo için indeksler `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`donateID`),
  ADD KEY `donateListID` (`donateListID`),
  ADD KEY `donaterID` (`donaterID`);

--
-- Tablo için indeksler `donatelist`
--
ALTER TABLE `donatelist`
  ADD PRIMARY KEY (`donateListID`),
  ADD KEY `societyID` (`societyID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Tablo için indeksler `donater`
--
ALTER TABLE `donater`
  ADD PRIMARY KEY (`donaterID`);

--
-- Tablo için indeksler `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favoriteID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `donateListID` (`donateListID`);

--
-- Tablo için indeksler `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`followID`),
  ADD KEY `activityID` (`activityID`);

--
-- Tablo için indeksler `iplog`
--
ALTER TABLE `iplog`
  ADD PRIMARY KEY (`ipLogID`),
  ADD KEY `userID` (`userID`);

--
-- Tablo için indeksler `likeblog`
--
ALTER TABLE `likeblog`
  ADD PRIMARY KEY (`likeID`),
  ADD KEY `commentID` (`commentID`),
  ADD KEY `userID` (`userID`);

--
-- Tablo için indeksler `needer`
--
ALTER TABLE `needer`
  ADD PRIMARY KEY (`neederID`);

--
-- Tablo için indeksler `open`
--
ALTER TABLE `open`
  ADD PRIMARY KEY (`openID`),
  ADD KEY `neederID` (`neederID`),
  ADD KEY `societyID` (`societyID`);

--
-- Tablo için indeksler `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `cityID` (`cityID`);

--
-- Tablo için indeksler `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`resetPasswordID`),
  ADD KEY `societyID` (`societyID`);

--
-- Tablo için indeksler `resetpassworduser`
--
ALTER TABLE `resetpassworduser`
  ADD PRIMARY KEY (`resetpasswordUserID`),
  ADD KEY `userID` (`userID`);

--
-- Tablo için indeksler `salt`
--
ALTER TABLE `salt`
  ADD PRIMARY KEY (`saltID`),
  ADD KEY `userID` (`userID`);

--
-- Tablo için indeksler `saltsociety`
--
ALTER TABLE `saltsociety`
  ADD PRIMARY KEY (`saltSocietyID`),
  ADD KEY `societyID` (`societyID`);

--
-- Tablo için indeksler `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`societyID`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsorID`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Tablo için indeksler `writec`
--
ALTER TABLE `writec`
  ADD PRIMARY KEY (`writeCID`),
  ADD KEY `donaterID` (`donaterID`),
  ADD KEY `contactID` (`contactID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `activity`
--
ALTER TABLE `activity`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `city`
--
ALTER TABLE `city`
  MODIFY `cityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Tablo için AUTO_INCREMENT değeri `donate`
--
ALTER TABLE `donate`
  MODIFY `donateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `donatelist`
--
ALTER TABLE `donatelist`
  MODIFY `donateListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `donater`
--
ALTER TABLE `donater`
  MODIFY `donaterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Tablo için AUTO_INCREMENT değeri `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favoriteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614;

--
-- Tablo için AUTO_INCREMENT değeri `follow`
--
ALTER TABLE `follow`
  MODIFY `followID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `iplog`
--
ALTER TABLE `iplog`
  MODIFY `ipLogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `likeblog`
--
ALTER TABLE `likeblog`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `needer`
--
ALTER TABLE `needer`
  MODIFY `neederID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `open`
--
ALTER TABLE `open`
  MODIFY `openID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `resetPasswordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `resetpassworduser`
--
ALTER TABLE `resetpassworduser`
  MODIFY `resetpasswordUserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `salt`
--
ALTER TABLE `salt`
  MODIFY `saltID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Tablo için AUTO_INCREMENT değeri `saltsociety`
--
ALTER TABLE `saltsociety`
  MODIFY `saltSocietyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `society`
--
ALTER TABLE `society`
  MODIFY `societyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `sponsorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `writec`
--
ALTER TABLE `writec`
  MODIFY `writeCID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`societyID`) REFERENCES `society` (`societyID`);

--
-- Tablo kısıtlamaları `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`societID`) REFERENCES `society` (`societyID`);

--
-- Tablo kısıtlamaları `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blog` (`blogID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`donateListID`) REFERENCES `donatelist` (`donateListID`),
  ADD CONSTRAINT `donate_ibfk_2` FOREIGN KEY (`donaterID`) REFERENCES `donater` (`donaterID`);

--
-- Tablo kısıtlamaları `donatelist`
--
ALTER TABLE `donatelist`
  ADD CONSTRAINT `donatelist_ibfk_1` FOREIGN KEY (`societyID`) REFERENCES `society` (`societyID`),
  ADD CONSTRAINT `donatelist_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);

--
-- Tablo kısıtlamaları `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`donateListID`) REFERENCES `donatelist` (`donateListID`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`);

--
-- Tablo kısıtlamaları `iplog`
--
ALTER TABLE `iplog`
  ADD CONSTRAINT `iplog_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `likeblog`
--
ALTER TABLE `likeblog`
  ADD CONSTRAINT `likeblog_ibfk_1` FOREIGN KEY (`commentID`) REFERENCES `comment` (`commentID`),
  ADD CONSTRAINT `likeblog_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `open`
--
ALTER TABLE `open`
  ADD CONSTRAINT `open_ibfk_1` FOREIGN KEY (`neederID`) REFERENCES `needer` (`neederID`),
  ADD CONSTRAINT `open_ibfk_2` FOREIGN KEY (`societyID`) REFERENCES `society` (`societyID`);

--
-- Tablo kısıtlamaları `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`cityID`) REFERENCES `city` (`cityID`);

--
-- Tablo kısıtlamaları `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD CONSTRAINT `resetpassword_ibfk_1` FOREIGN KEY (`societyID`) REFERENCES `society` (`societyID`);

--
-- Tablo kısıtlamaları `resetpassworduser`
--
ALTER TABLE `resetpassworduser`
  ADD CONSTRAINT `resetpassworduser_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `salt`
--
ALTER TABLE `salt`
  ADD CONSTRAINT `salt_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Tablo kısıtlamaları `saltsociety`
--
ALTER TABLE `saltsociety`
  ADD CONSTRAINT `societyID` FOREIGN KEY (`societyID`) REFERENCES `society` (`societyID`);

--
-- Tablo kısıtlamaları `writec`
--
ALTER TABLE `writec`
  ADD CONSTRAINT `writec_ibfk_1` FOREIGN KEY (`donaterID`) REFERENCES `donater` (`donaterID`),
  ADD CONSTRAINT `writec_ibfk_2` FOREIGN KEY (`contactID`) REFERENCES `contact` (`contactID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
