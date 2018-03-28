/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50637
Source Host           : localhost:3306
Source Database       : practica

Target Server Type    : MYSQL
Target Server Version : 50637
File Encoding         : 65001

Date: 2018-03-28 14:20:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `about`
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', '<p style=\"text-align: center;\"><em>Финальный проект</em></p>\r\n<pre>                                                               Проект создан при помощи<br />                                                               фреймворка <em>\"Laravel 5.5\"</em></pre>\r\n<pre>                                                               Автор: <strong>Денис Рыбась</strong></pre>', '2018-03-28 10:08:10', '2018-03-28 07:08:10');

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_category_id_foreign` (`category_id`),
  CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('61', 'CS:GO. Fnatic стали чемпионами IEM Katowice 2018', 'CSGO-Fnatic-Katowice-2018', 'Это первое чемпионство для парней за два года', '<p>&nbsp; &nbsp; &nbsp;Шведский коллектив, защищающий цвета&nbsp;<strong>Fnatic</strong>,&nbsp;стал чемпионом&nbsp;<strong>IEM Katowice 2018</strong>, переиграв в гранд-финале&nbsp;<strong>FaZe Clan</strong>&nbsp;со счетом 3:2. Парни обеспечили себе&nbsp;<strong>$253,000</strong>&nbsp;призовых, а второму финалисту досталось лишь&nbsp;<strong>$102,000</strong>. Интересным является тот факт, что прошлое чемпионство для&nbsp;<strong>Fnatic&nbsp;</strong>состоялось в 2016 году в рамках этого же турнира.</p>\r\n<p><strong>Сетка турнира</strong>:</p>\r\n<p><img src=\"http://xsport.ua/upload/news-photos/esports-31-07-2016/%D0%91%D0%B5%D0%B7%D1%8B%D0%BC%D1%8F%D0%BD%D0%BD%D1%8B%D0%B91231%D1%8B%D1%84%D1%8F.png\" alt=\"\" width=\"731\" height=\"237\" /></p>\r\n<figure class=\"image_center\"><strong>Распределение призового фонда</strong>:</figure>\r\n<figure class=\"image_center\"></figure>\r\n<figure class=\"image_center\">1 место:&nbsp;<strong>Fnatic&nbsp;</strong>- $253,000&nbsp;<br />2 место:&nbsp;<strong>FaZe Clan</strong>&nbsp;- $102,000&nbsp;<br />3 место:&nbsp;<strong>Astralis&nbsp;</strong>- $43,000&nbsp;<br />4 место:&nbsp;<strong>Team Liquid</strong>&nbsp;- $42,000</figure>', 'maxresdefault.jpg', '8', '2018-03-05 10:48:03', '2018-03-05 10:48:03');
INSERT INTO `articles` VALUES ('62', 'FaZe Clan выиграли StarSeries i-League PUBG', 'FaZeClan-StarSeries-i-League-PUBG', 'Коллектив заработал $50,000', '<p>&nbsp; &nbsp; &nbsp;Европейский коллектив, защищающий цвета&nbsp;<strong>FaZe Clan</strong>, не нашел себе равных&nbsp;на турнире&nbsp;<strong>StarSeries i-League PUBG</strong>, обойдя своих оппонентов по количеству набранных очков за двадцать карт. Второе место досталось&nbsp;<strong>Team Liuqid</strong>, отставшие от чемпиона на 561 очко.</p>\r\n<p><strong>Итоговое количество очков</strong>:</p>\r\n<p><img src=\"http://xsport.ua/upload/news-photos/esports-31-07-2016/DXd-mdDWsAAFNiX.jpg\" alt=\"\" width=\"895\" height=\"503\" /></p>\r\n<figure class=\"image_center\"><strong>Распределение призового фонда</strong>:</figure>\r\n<figure class=\"image_center\">1 место:&nbsp;<strong>FaZe Clan</strong>&nbsp;- $50,000&nbsp;<br />2 место:&nbsp;<strong>Team Liquid</strong>&nbsp;- $20,000&nbsp;<br />3 место:&nbsp;<strong>Team Vitality</strong>&nbsp;- $9,000&nbsp;<br />4 место:&nbsp;<strong>Cloud9&nbsp;</strong>- $5,000&nbsp;<br />5-8 место:&nbsp;<strong>Tempo Storm</strong>,&nbsp;<strong>AVANGAR</strong>,&nbsp;<strong>OGN Entus Ace</strong>,&nbsp;<strong>Four Angry Men</strong>&nbsp;- $2,000&nbsp;<br />9-16 место:&nbsp;<strong>Team SoloMid</strong>,&nbsp;<strong>MiTH e-Sports</strong>,&nbsp;<strong>Vega Squadron</strong>,&nbsp;<strong>Athletico Esports</strong>,&nbsp;<strong>Ghost Gaming</strong>,&nbsp;<strong>iFTY</strong>,&nbsp;<strong>Luminosity Gaming</strong>,&nbsp;<strong>Game of Life</strong>&nbsp;- $1,000</figure>', '2018-02-19-20.22.22.jpg', '8', '2018-03-05 10:53:28', '2018-03-05 10:53:28');
INSERT INTO `articles` VALUES ('63', '6IX9INE «BILLY»: территория массовых беспорядков', '6IX9INE-BILLY', 'Скандал вокруг клипа ​6IX9INE «BILLY»', '<p>&nbsp; &nbsp; &nbsp;Скандалы окружают <strong>Текаши</strong> даже когда дело касается клипов. Так, съемки видео на набирающий популярность сингл <strong>&laquo;Billy&raquo;</strong> были <em>прерваны</em> полицией из-за <strong>угрозы</strong> <em>массовых беспорядков</em>. И итоговый результат наглядно демонстрирует, что <strong>опасения властей</strong> были небеспочвенны &ndash; Бруклин здесь натурально перевернули вверх дном и устроили маленькую <em>революцию на улицах</em>.</p>\r\n<p style=\"text-align: center;\"><iframe src=\"//www.youtube.com/embed/LJjsm6CVsG8?rel=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '6ix9ine-billy.jpg', '10', '2018-03-05 11:22:18', '2018-03-05 11:56:09');
INSERT INTO `articles` VALUES ('64', 'Cristiano Ronaldo назвал своих кумиров детства', 'Cristiano-Ronaldo-kymiri-detstva', 'Пятикратный обладатель «Золотого мяча» намерен победить на чемпионате мира в России', '<p>&nbsp; &nbsp; &nbsp;Нападающий &laquo;Реала&raquo; и сборной Португалии&nbsp;<strong>Криштиану Роналду</strong>&nbsp;заявил, что он никогда не думал, что его карьера будет такой замечательной. Слова португальца приводит&nbsp;<em>Marca</em>:</p>\r\n<blockquote>\r\n<p>&nbsp;</p>\r\n<em>&laquo;Если вы спросите меня, хочу ли я снова выиграть что-нибудь, отвечу, что хочу одержать победу на&nbsp;чемпионате мира. Но если бы мне пришлось завершить карьеру прямо сейчас, я был бы очень горд и счастлив. Никогда не думал, что моя карьера будет такой замечательной.</em>\r\n<p>&nbsp;</p>\r\n<p><em>Я всегда ассоциирую себя с людьми, которые любят меня, поддерживают и всегда рядом со мной.&nbsp;<strong>Марсело</strong>&nbsp;и&nbsp;<strong>Каземиро</strong>&nbsp;сказали мне, что в Бразилии меня поддерживают многие люди. Это меня радует.</em></p>\r\n<p><em>У меня всегда была цель стать профессиональным футболистом и играть за сборную Португалии. Я смотрел на&nbsp;<strong>Руя Кошту</strong>,&nbsp;<strong>Фернандо Коуту</strong>,&nbsp;<strong>Фигу</strong>&nbsp;и думал, что хочу играть рядом с ними&raquo;.</em></p>\r\n</blockquote>', 'cristiano-ronaldo-net-worth.jpg', '9', '2018-03-05 11:37:56', '2018-03-05 11:56:17');
INSERT INTO `articles` VALUES ('65', 'Гороскоп здоровья-2018', 'goroskop-zdorovia-2018', 'Звезды пророчат много страданий Близнецам и стабильное здоровье Скорпионам', '<p>&nbsp; &nbsp; &nbsp;Влияние планет делает определенные органы нашего тела более уязвимыми, чем остальные. Зная это, важно обращать на их работу внимание, <em>уберегать</em> свой <em>организм</em> от слишком высоких <em>нагрузок</em>. Ведь <em>у каждого</em> из 12 знаков Зодиака есть <em>болезни</em>, которые <em>донимают</em> его представителей <em>чаще других</em>.</p>\r\n<p>&nbsp; &nbsp; &nbsp;Ниже &ndash; подробная информация о болезнях, которые могут возникнуть или обостриться у вас в 2018 году.</p>\r\n<ul>\r\n<li><strong>Овен</strong></li>\r\n</ul>\r\n<p>Вы будете чувствовать себя очень энергично, а ваш организм станет очень выносливым. Любимые люди будут заботиться о вас. Однако период с 17 января по 7 марта 2018 года указывает на возможность лихорадки или травмы. Проблемы с ожирением и желудком могут дать о себе знать к концу года &ndash; после 11 октября. Также в это время высока вероятность заболеть тифом.</p>\r\n<ul>\r\n<li><strong>Телец</strong></li>\r\n</ul>\r\n<p>Вам, возможно, придется часто посещать дерматолога в этом году. Здоровье будет очень стабильным в течение марта, но в августе могут возникнуть проблемы, связанные с желудком. Также существует небольшая возможность развития или обострения астмы или артрита. Поэтому примите меры предосторожности заранее.</p>\r\n<ul>\r\n<li><strong>Близнецы</strong></li>\r\n</ul>\r\n<p>В начале года со здоровьем будет не все в порядке. Вы можете столкнуться с заболеваниями кожи, желудочного тракта (особенно после 11 октября) или неврологическими проблемами. С 3 марта по 9 мая вас могут беспокоить боль в ногах или коленях. В общем, связанные со здоровьем трудности будут по-прежнему создавать неприятности для вас в повседневной жизни.</p>\r\n<ul>\r\n<li><strong>Рак</strong></li>\r\n</ul>\r\n<p>В этом году планета Сатурн может принести Ракам некоторые ревматические или ортопедические проблемы, поэтому будьте осторожны. Также усилятся проблемы с кожей, такие как акне. Возможны также перепады настроения, из-за этого вам лучше сохранять спокойствие и медитировать, чтобы контролировать свои эмоции.</p>\r\n<ul>\r\n<li><strong>Лев</strong></li>\r\n</ul>\r\n<p>Начало года будет не весьма положительным для вас в плане здоровья. Вас могут беспокоить у вас частые головные боли и проблемы, связанные с глазами, желудком и кожей. Сердечное здоровье также требует внимания. Беременным женщинам в этом году необходимо быть особенно осторожными.</p>\r\n<ul>\r\n<li><strong>Дева</strong></li>\r\n</ul>\r\n<p>Июнь и вторая половина сентября будут для вас самыми легкими в плане здоровья. Однако будьте осторожны в течение марта и до первой недели мая. Ведь в этот период могут возникать проблемы, связанные с интимными областями. Весьма вероятно, что любое заболевание, которое вы \"подхватите\" в течение этого года, потребует длительного лечения. Обратите внимание на спину. Могут возникнуть проблемы с экземой, желудком, коленями, суставами.</p>\r\n<ul>\r\n<li><strong>Весы</strong></li>\r\n</ul>\r\n<p>У вас могут возникнуть проблемы в мочевом тракте, вызывая дискомфорт и боль. Будьте осторожны с вашей диетой. Избегайте сахара. Существует высокий риск возникновения камня в желчном пузыре. Поэтому пейте много жидкостей и придерживайтесь здорового питание. В конечном итоге здоровье улучшится в последние несколько месяцев 2018 года.</p>\r\n<ul>\r\n<li><strong>Скорпион</strong></li>\r\n</ul>\r\n<p>В Скорпионов здоровье будет стабильным. Ваш энергетический уровень останется высоким. Однако есть риск возникновения&nbsp; заболеваний желудка, поэтому избегайте употребления острой пищи и большого количества клетчатки, а также слабительных средств в вашем рационе. Избегайте пищевого отравления и высокого кровяного давления. Не погружайтесь в сидячий образ жизни и будьте активнее.</p>\r\n<ul>\r\n<li><strong>Стрелец</strong></li>\r\n</ul>\r\n<p>Ваше здоровье будет колебаться в этом году &ndash; придется постоянно бороться с диспепсиями и дерматологическими проблемами. Кроме этого, важно обратить внимание на здоровья сердца. Было бы неплохо заниматься тренировками и сжигать лишние калории. Важно перейти на здоровое питание. Откажитесь от уличной пищи.</p>\r\n<ul>\r\n<li><strong>Козерог</strong></li>\r\n</ul>\r\n<p>Боль в коленях и дерматологические проблемы могут по-прежнему беспокоить вас в этом году. Вам нужно обратить особое внимание на здоровья. Если вы страдаете от ожирения, то пытайтесь сбросить хотя бы несколько лишних килограммов. Вполне возможны обострение ортопедических заболеваний &ndash; обязательно обратитесь к врачу. С июня по конец августа вам постоянно придется сталкиваться с дрожанием рук, астмой и проблемами с кожей.</p>\r\n<ul>\r\n<li><strong>Водолей</strong></li>\r\n</ul>\r\n<p>Планета Юпитер благословляет вас своим присутствием, особенно до 11 октября. Тем не менее, у вас могут обостриться заболевания, связанные с желудком, кожей, пищеварением, отравлениями и уровнями артериального давления. Проблемы с мышцами голени появятся в середине августа и до середины сентября. В этом году для вас очень важно также бороться с ленью.</p>\r\n<ul>\r\n<li><strong>Рыбы</strong></li>\r\n</ul>\r\n<p>До 11 октября будьте внимательны к болезням, связанным с желудком, кровяным давлением и кожей. Вам также необходимо работать над тем, чтобы предотвратить ожирение, физическую слабость, проблемы с животом. Вас будут беспокоить боли в спине, а также есть риск возникновения проблем со слухом. В питании важно следить за уровнем железа в крови.</p>', 'goroskop-na-2017-god-1.jpg', '11', '2018-03-05 11:47:06', '2018-03-05 11:47:06');
INSERT INTO `articles` VALUES ('66', 'Сингл Eminem`a «LOSE YOURSELF» стал «бриллиантовым»', 'EMINEM-LOSE-YOURSELF-briliant-single', 'Достижение, которым может похвастаться далеко не каждый исполнитель', '<p>&nbsp; &nbsp; &nbsp;Сингл Эминема <strong>&laquo;Lose Yourself&raquo;</strong> получил <strong>&laquo;бриллиантовый&raquo;</strong> статус, перешагнув отметку в <strong>10 миллионов</strong> проданных <strong>копий</strong>. Это уже <em>третья песня</em> в карьере рэпера, которая <em>перешагнула</em> такую <em>отметку</em> &ndash; наряду с &laquo;Love The Way You Lie&raquo; (<em>12 миллионов копий</em>) и &laquo;Not Afraid&raquo; (<em>10 миллионов</em>).</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://www.rap.ru/upload/img/12216.jpg\" alt=\"\" width=\"478\" height=\"638\" /></p>\r\n<p>&nbsp; &nbsp; &nbsp;Также А<em>мериканская ассоциация</em> звукозаписывающших компаний (<strong>RIAA</strong>) <em>поздравила</em> Эминема с преодолением отметки в 100 миллионов (только вдумайтесь в эти цифры!) проданных песен. Всего на счету Маршалла <em>107,5 миллионов</em> копий.&nbsp;</p>\r\n<p>&nbsp; &nbsp; &nbsp;А какая у вас&nbsp;любимая песня Эма?</p>\r\n<p style=\"text-align: center;\"><iframe src=\"//www.youtube.com/embed/_Yhyp-_hX2s?rel=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', 'maxresdefault (1).jpg', '10', '2018-03-05 11:53:02', '2018-03-05 11:59:00');
INSERT INTO `articles` VALUES ('67', 'Dota 2. Определились все участники StarLadder', 'Dota-2-ychasniki-StarLadder', 'Team Kinguin заняли последний вакантный слот', '<figure class=\"image_center\"><strong>Team Kinguin</strong>&nbsp;победили в закрытой европейской квалификации к&nbsp;<strong>StarLadder ImbaTV Invitational Season 5</strong>, получив слот на ЛАН-финалы. В финале отборочного этапа парни из Польши не оставили шансов&nbsp;<strong>Mad Lads</strong>, обыграв последних со счетом 2:0.</figure>\r\n<figure class=\"image_center\"></figure>\r\n<figure class=\"image_center\"><strong>Полный список участников</strong>:</figure>\r\n<figure class=\"image_center\">\r\n<table border=\"0\" cellspacing=\"1\" cellpadding=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<ul>\r\n<li>Natus Vincere&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n<li>VGJ.Thunder</li>\r\n<li>Fnatic</li>\r\n<li>FlyToMoon</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n<li>LGD Gaming</li>\r\n<li>OpTic Gaming</li>\r\n<li>SG e-Sports</li>\r\n<li>Team Kinguin</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<strong>StarLadder ImbaTV Invitational Season 5</strong>&nbsp;пройдёт с 11 по 15 апреля в &laquo;Киев Киберспорт Арене&raquo;, Украина. Участники разыграют между собой&nbsp;<strong>$300,000</strong>&nbsp;и 300 очков Dota Pro Circuit.</figure>', '1047296.jpg', '8', '2018-03-28 11:12:59', '2018-03-28 11:12:59');

-- ----------------------------
-- Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `article_tag_article_id_index` (`article_id`),
  KEY `article_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_tag
-- ----------------------------
INSERT INTO `article_tag` VALUES ('61', '4', '2018-03-05 12:16:31', '2018-03-05 12:16:31');
INSERT INTO `article_tag` VALUES ('61', '9', '2018-03-05 12:16:31', '2018-03-05 12:16:31');
INSERT INTO `article_tag` VALUES ('61', '10', '2018-03-05 12:16:31', '2018-03-05 12:16:31');
INSERT INTO `article_tag` VALUES ('62', '5', '2018-03-05 12:21:31', '2018-03-05 12:21:31');
INSERT INTO `article_tag` VALUES ('62', '9', '2018-03-05 12:21:31', '2018-03-05 12:21:31');
INSERT INTO `article_tag` VALUES ('63', '6', '2018-03-05 12:21:51', '2018-03-05 12:21:51');
INSERT INTO `article_tag` VALUES ('63', '12', '2018-03-05 12:21:51', '2018-03-05 12:21:51');
INSERT INTO `article_tag` VALUES ('64', '8', '2018-03-05 12:22:16', '2018-03-05 12:22:16');
INSERT INTO `article_tag` VALUES ('65', '7', '2018-03-05 12:22:28', '2018-03-05 12:22:28');
INSERT INTO `article_tag` VALUES ('66', '6', '2018-03-05 12:22:44', '2018-03-05 12:22:44');
INSERT INTO `article_tag` VALUES ('66', '11', '2018-03-05 12:22:44', '2018-03-05 12:22:44');
INSERT INTO `article_tag` VALUES ('67', '13', '2018-03-28 11:12:59', '2018-03-28 11:12:59');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('8', 'Киберспорт', '2018-02-26 12:04:04', '2018-02-26 12:04:04', 'kibersport');
INSERT INTO `categories` VALUES ('9', 'Спорт', '2018-02-26 12:04:21', '2018-02-26 12:04:21', 'sport');
INSERT INTO `categories` VALUES ('10', 'Музыка', '2018-02-26 12:08:10', '2018-02-26 12:08:10', 'muzika');
INSERT INTO `categories` VALUES ('11', 'Здоровье', '2018-02-26 12:10:20', '2018-02-26 12:10:20', 'zdorovie');

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_article_id_foreign` (`article_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('8', '2018_02_06_110730_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('9', '2018_02_06_110744_create_atricles_table', '1');
INSERT INTO `migrations` VALUES ('10', '2018_02_06_110905_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('11', '2018_02_06_110907_create_article_tag_table', '1');
INSERT INTO `migrations` VALUES ('12', '2018_02_06_110939_create_users_table', '1');
INSERT INTO `migrations` VALUES ('13', '2018_02_06_111000_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('14', '2018_02_06_113350_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for `password_resets;`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets;`;
CREATE TABLE `password_resets;` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets;
-- ----------------------------

-- ----------------------------
-- Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`,`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('4', 'CS:GO', '2018-03-05 12:09:11', '2018-03-05 12:09:11', 'csgo');
INSERT INTO `tags` VALUES ('5', 'PUBG', '2018-03-05 12:09:17', '2018-03-05 12:09:17', 'pubg');
INSERT INTO `tags` VALUES ('6', 'Rap', '2018-03-05 12:09:34', '2018-03-05 12:09:34', 'rap');
INSERT INTO `tags` VALUES ('7', 'Гороскоп', '2018-03-05 12:10:02', '2018-03-05 12:10:02', 'goroskop');
INSERT INTO `tags` VALUES ('8', 'Футбол', '2018-03-05 12:10:13', '2018-03-05 12:10:13', 'fytbol');
INSERT INTO `tags` VALUES ('9', 'Faze Clan', '2018-03-05 12:11:12', '2018-03-05 12:11:12', 'fazaClan');
INSERT INTO `tags` VALUES ('10', 'Fnatic', '2018-03-05 12:11:21', '2018-03-05 12:11:21', 'fnatic');
INSERT INTO `tags` VALUES ('11', 'Eminem', '2018-03-05 12:11:42', '2018-03-05 12:11:42', 'eminem');
INSERT INTO `tags` VALUES ('12', '6IX9INE', '2018-03-05 12:11:55', '2018-03-05 12:11:55', '6ix9ine');
INSERT INTO `tags` VALUES ('13', 'Dota 2', '2018-03-28 11:08:15', '2018-03-28 11:08:15', 'dota2');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` bigint(20) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Денис', 'den@den.den', '$2y$10$DC7qCpWgb6dOn3STeKwDNeptVAAlv4mAeyTAFEzttg.gEriWbLaxG', '1', '0jYEPFuozHHHOl5cABDxUfFHmhGs8CX1wUmAL8U43CDj2oD59IJuoRImXxKl', '2018-02-13 18:44:05', '2018-02-19 13:34:29');
INSERT INTO `users` VALUES ('3', 'Admin', 'admin@gmail.com', '$2y$10$LmNYpuJww9Z8CAW36gsbmuz/XmVyookhCOdCKlQMC/APw6meU2M12', '1', null, '2018-03-28 11:19:32', '2018-03-28 11:19:32');
