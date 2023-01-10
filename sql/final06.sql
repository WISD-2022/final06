-- Adminer 4.8.1 MySQL 5.7.11 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `departments` (`id`, `name`) VALUES
(1,	'Nobis sit rem.'),
(2,	'Aut numquam eum.'),
(3,	'Mollitia illo.'),
(4,	'Itaque consequatur.');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `leaves`;
CREATE TABLE `leaves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `application_date` date NOT NULL,
  `leave` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `check` int(11) NOT NULL DEFAULT '0',
  `opinion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_date` date DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `leaves_student_id_foreign` (`student_id`),
  CONSTRAINT `leaves_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `leaves` (`id`, `student_id`, `application_date`, `leave`, `reason`, `picture`, `start_time`, `end_time`, `check`, `opinion`, `check_date`, `remark`) VALUES
(1,	10,	'1989-06-01',	1,	'Qui eos ratione enim ad qui et molestiae. Fuga tenetur est voluptatem necessitatibus fuga aut ipsam. Magnam voluptatem dolor atque mollitia facilis dolorem tempora id.',	'1.jpg',	'1987-01-05',	'2012-09-28',	0,	NULL,	NULL,	'Eius odio delectus et blanditiis sit. Id consequatur ullam qui dolorem magni reiciendis voluptas. Architecto porro maiores hic nam quibusdam eum molestias.'),
(2,	3,	'2003-07-04',	2,	'Nihil aliquid odit reiciendis ducimus fugiat ut quia. Iusto aperiam quidem doloremque deleniti accusamus et nihil quaerat. Ab sapiente itaque et ratione repellat quae cumque.',	'1.jpg',	'1979-05-29',	'2006-12-22',	0,	NULL,	NULL,	'Modi sit recusandae quaerat et. Provident velit harum fugit dolorum consequatur sed. Ut perspiciatis nihil omnis delectus deleniti ut. Eius id est doloribus nihil eos autem.'),
(3,	7,	'1990-06-10',	3,	'Et quia officia ab quidem. Aut dolorem voluptatibus itaque modi. Omnis molestiae qui quas incidunt doloremque tenetur.',	'1.jpg',	'1977-08-06',	'1992-03-22',	0,	NULL,	NULL,	'Quasi similique temporibus vel et. Laborum optio et illo quasi. Ullam quibusdam quia adipisci atque.'),
(4,	2,	'2014-12-27',	2,	'Facilis ad architecto earum. Corporis aliquid ut aut iure praesentium. Tempora voluptas eius quos tempora molestias omnis hic.',	'1.jpg',	'1979-06-26',	'2001-03-01',	0,	NULL,	NULL,	'Tempore est esse nesciunt et ea. Dolorem omnis temporibus eum. In aut natus laborum autem debitis enim. Et voluptas neque ut occaecati.'),
(5,	5,	'1978-05-20',	2,	'Accusamus ducimus sit culpa quisquam porro voluptatibus. Similique quae et quidem ut earum eius inventore. Dolorem qui possimus quam eligendi aut distinctio nam.',	'1.jpg',	'2017-11-12',	'1971-02-01',	0,	NULL,	NULL,	'Doloremque ex magnam ratione et incidunt. Ducimus nihil ex voluptatum quisquam sunt. Consequatur iste dolorum fuga voluptas.'),
(6,	3,	'1979-08-17',	2,	'Sit excepturi magnam similique facere veniam libero. Excepturi libero est in quas minus. Quae dolores beatae tenetur sit voluptatem pariatur et.',	'1.jpg',	'1983-01-12',	'1983-05-25',	0,	NULL,	NULL,	'Dolor veniam qui itaque et ab id. Officia exercitationem aspernatur minima quia occaecati. Sed distinctio tempora quia.'),
(7,	10,	'1987-11-15',	1,	'Accusantium modi et repudiandae eveniet ipsa. Rerum quod vel rem quos et cupiditate nihil molestiae. Sed quia et et molestiae dolorum aspernatur.',	'1.jpg',	'2009-02-25',	'1980-11-03',	0,	NULL,	NULL,	'Facere consectetur asperiores assumenda numquam magnam eius nobis nobis. Incidunt nostrum repellat occaecati dolorem labore nobis quidem dolorum.'),
(8,	7,	'2021-11-16',	1,	'Ea autem expedita animi sed ipsam fugiat rem deleniti. Dolorum cum odio nesciunt magni officiis dolorem delectus incidunt. Voluptas voluptas laborum consequatur sint cupiditate autem sit.',	'1.jpg',	'2018-05-21',	'1988-07-22',	0,	NULL,	NULL,	'Voluptas repellat sed quo est corrupti rerum. Est a pariatur omnis deserunt odio atque eius. Laudantium omnis sed repellat cumque. Dolores tempore sit debitis aliquam.'),
(9,	9,	'2020-05-31',	2,	'Mollitia natus animi fuga voluptatibus sit ut. Qui dolores aut officiis eos. Quo enim et aspernatur cupiditate. Sed esse iure et nemo. Laborum sed quasi eligendi blanditiis libero sunt.',	'1.jpg',	'1985-01-03',	'1978-03-03',	0,	NULL,	NULL,	'Quisquam non similique ipsam voluptates. Voluptates excepturi nam ut architecto eum quasi voluptas nesciunt. Sint ratione pariatur laboriosam non soluta quibusdam suscipit.'),
(10,	10,	'1994-11-25',	1,	'Dolore et soluta quos ad. Quibusdam vel laboriosam quod cum necessitatibus. Deserunt quos accusamus dolore odio dolor. Optio nulla consequatur distinctio culpa quod.',	'1.jpg',	'1986-02-12',	'2021-10-24',	0,	NULL,	NULL,	'Eveniet eum alias quia libero rem. Rem animi commodi sunt placeat nobis at nam. Error enim velit aliquid nisi. Nam qui illum molestiae id maiores sed hic minus.'),
(11,	2,	'2003-02-06',	1,	'Itaque facere et dolores quidem illo. Amet impedit aperiam eum voluptas. Est qui et asperiores nobis. Autem asperiores nesciunt nostrum tempore et.',	'1.jpg',	'1991-01-10',	'1970-08-23',	0,	NULL,	NULL,	'Et recusandae ipsam et corrupti minus aut. Consequatur magni doloremque beatae qui. Sunt aut qui commodi ad qui. Aut distinctio rerum rerum dolorem maiores.'),
(12,	6,	'2001-07-21',	1,	'Nobis et aut non soluta. Eos occaecati est facere illo aut ratione. Consequuntur nisi nihil molestiae sapiente itaque vitae.',	'1.jpg',	'1977-11-15',	'2021-12-14',	0,	NULL,	NULL,	'Aut eligendi aut et aut distinctio ex. Error dicta quod voluptatibus libero et at. Mollitia saepe illo ullam qui alias.'),
(13,	1,	'1984-09-01',	1,	'Est ullam aut quis soluta est velit. Sint consequatur molestiae totam provident magni non ducimus.',	'1.jpg',	'1993-07-10',	'1975-07-23',	0,	NULL,	NULL,	'Quae saepe accusamus reiciendis ipsum. Totam iste saepe sequi nemo est ab. Molestias et consequatur architecto sit. Nemo eveniet reprehenderit harum dolorum.'),
(14,	5,	'2012-10-03',	2,	'Blanditiis dolores aut voluptas adipisci dicta perferendis. Suscipit sed soluta earum quidem quam quia. At quas nostrum eius facere praesentium.',	'1.jpg',	'2007-12-23',	'2018-12-19',	0,	NULL,	NULL,	'Voluptatem aut aspernatur velit repudiandae illo sit quam. Vero nesciunt odit facilis qui sequi quas. Et quidem consequuntur quia quas doloremque voluptate.'),
(15,	8,	'1973-07-28',	2,	'Impedit mollitia optio odio nulla laborum tempore ad tenetur. Ipsa earum pariatur et accusantium. Illum repellat ipsam et consequatur. Quia vitae at consequatur officia officia autem aliquid.',	'1.jpg',	'1983-01-25',	'2017-11-25',	0,	NULL,	NULL,	'Quos suscipit voluptatem et enim. Voluptatibus aperiam vitae sed quo. Laborum et qui tempore voluptate cumque. Nemo aut est fuga fugiat est.'),
(16,	6,	'1995-06-05',	2,	'Quia nam quidem minima dolores labore. Inventore ea minus eligendi illum esse aut dolor. Excepturi natus et fugit vel dignissimos.',	'1.jpg',	'2021-06-29',	'2009-07-22',	0,	NULL,	NULL,	'Nisi distinctio ut nulla totam ut at. Maxime aliquam tempore et dolore.'),
(17,	7,	'2017-12-03',	2,	'Eligendi quia totam est aut provident. Quae ea eius a eos atque. Corrupti enim alias aut voluptas quia ut labore. Ut voluptate amet enim culpa blanditiis. Maxime et id libero magni rerum.',	'1.jpg',	'1987-05-25',	'2018-08-11',	0,	NULL,	NULL,	'Voluptas beatae recusandae impedit numquam fugit est. Et modi ab perferendis qui ut. Reprehenderit et necessitatibus voluptate beatae.'),
(18,	10,	'1985-08-08',	3,	'Eos saepe eligendi labore sit harum molestiae modi consequatur. Culpa laborum alias voluptatem excepturi. Animi nulla et occaecati.',	'1.jpg',	'1989-07-10',	'2015-04-27',	0,	NULL,	NULL,	'Sit voluptas ut nam. Rerum dolorum doloribus dolorem repudiandae. Optio non similique voluptas et sit ut fugit. Qui ut non numquam delectus quia.'),
(19,	11,	'2021-12-03',	3,	'Sequi dignissimos et reiciendis aut. Voluptatem qui sed sit nesciunt omnis. Eaque iure doloribus et debitis consequatur.',	'1.jpg',	'2013-11-24',	'1970-01-16',	0,	NULL,	NULL,	'Eaque vel ut impedit excepturi vel. Enim ut praesentium voluptas autem laboriosam. Rerum cumque aut quo dolor expedita. Culpa quis quia doloremque possimus eum pariatur. Nostrum labore aut nulla.'),
(20,	2,	'1988-01-08',	2,	'Sed esse facere vitae ex dolor quia temporibus dolorem. Corrupti maiores molestiae adipisci. Quod et cumque perspiciatis et consectetur in.',	'1.jpg',	'2018-12-03',	'2016-07-05',	0,	NULL,	NULL,	'Ipsam amet ut id vitae sint eos. Eos numquam iste vel autem dolorum sapiente. Ut voluptas nostrum mollitia asperiores repudiandae et laudantium. Repellat et quod repudiandae ut itaque deleniti.'),
(21,	2,	'1973-11-18',	2,	'Aut ut molestiae ea. Dolores officiis commodi quisquam rerum nostrum inventore. Voluptatum quaerat ut incidunt. Veniam aut quos omnis.',	'1.jpg',	'1978-06-22',	'1985-07-13',	0,	NULL,	NULL,	'Beatae suscipit et soluta quis minus recusandae autem. Et autem eos consequuntur dolor non suscipit. Enim esse labore dolor est sint quia.'),
(22,	4,	'2022-05-18',	1,	'Omnis et perspiciatis voluptate dignissimos sint architecto est ullam. Ut impedit et fugit corrupti ut occaecati omnis. Expedita hic porro sed aut consequatur sed sed quam.',	'1.jpg',	'1971-01-27',	'2014-10-02',	0,	NULL,	NULL,	'Sed et natus veniam dignissimos ut minus. Aut in sit ipsa ut. Ullam voluptatem est vero omnis.'),
(23,	8,	'1990-11-07',	3,	'Reprehenderit eius quia commodi quos non. Non quisquam odio et iure ut ipsam. Nobis officiis dolores quo quos cum. Delectus exercitationem rerum laborum libero soluta.',	'1.jpg',	'2014-08-04',	'1998-08-07',	0,	NULL,	NULL,	'Quam nobis minima nemo assumenda assumenda. A sapiente delectus quidem enim. In officia fugiat id nihil nostrum quidem laboriosam. Porro temporibus nisi distinctio.'),
(24,	6,	'1985-06-01',	3,	'Autem eum labore esse odit. Rerum eaque fugit facilis pariatur eum minus et. Adipisci ea sunt iure cum non. Voluptas voluptas hic harum numquam veritatis corporis.',	'1.jpg',	'2004-08-28',	'2009-10-07',	0,	NULL,	NULL,	'Qui inventore qui voluptatibus culpa voluptatibus ullam est. Illum non autem atque aut voluptas et. Consequatur illo nam a ducimus voluptate corporis eveniet.'),
(25,	10,	'2009-12-13',	3,	'Officia neque eum provident ut et sit voluptates. Et et deleniti quia minima voluptas in.',	'1.jpg',	'2021-03-03',	'2004-10-31',	0,	NULL,	NULL,	'Explicabo et occaecati molestiae rerum. Similique enim facilis molestias voluptatem ut. Quia blanditiis repudiandae dolores voluptate quis. Reprehenderit alias natus sit ut quasi aut soluta in.'),
(26,	4,	'2010-02-23',	3,	'Eum non occaecati aspernatur provident rerum repellendus perspiciatis quibusdam. Consequatur quia vero neque architecto id velit. Ipsam voluptate harum voluptatibus eius sed. Repudiandae ut aut qui.',	'1.jpg',	'1989-01-31',	'1983-02-06',	0,	NULL,	NULL,	'Dignissimos deleniti ipsa veniam occaecati. Cumque voluptatem officiis voluptatibus. Quo consectetur pariatur molestiae ut excepturi.'),
(27,	4,	'1983-06-08',	1,	'Nihil sapiente quasi est perspiciatis eum quas. Sit ex distinctio est aspernatur saepe deserunt. Nihil esse et qui accusamus.',	'1.jpg',	'2002-04-28',	'1989-05-11',	0,	NULL,	NULL,	'Et pariatur facere autem non necessitatibus quos repellat. Voluptates sequi ex autem explicabo. Commodi provident libero ut aut necessitatibus reprehenderit. Alias voluptatem et nihil ut id dolores.'),
(28,	4,	'1976-03-26',	1,	'Consequatur necessitatibus sit et autem delectus laudantium. Fuga rerum est alias rerum. Vitae voluptas omnis dolore assumenda est id. Sit debitis itaque rerum quis.',	'1.jpg',	'2006-04-17',	'1996-10-30',	0,	NULL,	NULL,	'Ut quas soluta minima qui voluptates aperiam vitae. Blanditiis aut id magni ducimus. Fugit aperiam modi commodi vero dolor maxime. Dolorem itaque quos dolores molestiae.'),
(29,	3,	'2010-08-07',	3,	'Quae amet dolores provident. Assumenda dolor repellat maiores necessitatibus voluptatem consequuntur non. Voluptatum magni et enim dignissimos sequi. Repellendus eveniet sed adipisci quia fuga vel.',	'1.jpg',	'2007-03-18',	'2005-07-04',	0,	NULL,	NULL,	'Optio explicabo adipisci aperiam necessitatibus corporis voluptatem. Et eligendi perspiciatis et odit. Velit odit quam aut consequuntur et minima quo.'),
(30,	10,	'1981-01-01',	2,	'In velit explicabo veritatis ullam delectus. Hic sequi et ducimus quos aut. Est et culpa autem sed at necessitatibus. Reprehenderit ut est qui tempore.',	'1.jpg',	'1978-01-04',	'1971-12-19',	0,	NULL,	NULL,	'Optio excepturi sed deleniti et vel. Laboriosam id molestias laborum officia sunt nam voluptas. Sed provident dolorem totam eveniet veniam commodi quia. Reprehenderit aut hic sed voluptatibus.'),
(31,	1,	'2020-01-25',	1,	'Ut blanditiis dolores temporibus ex est est. Qui sequi modi quae qui deleniti voluptatem voluptatem. Quos corrupti iusto aut iste et et consequatur.',	'1.jpg',	'2006-04-17',	'1999-08-15',	0,	NULL,	NULL,	'Fugiat voluptatem aut voluptatibus ad blanditiis numquam. Cupiditate qui sed et voluptate ratione occaecati. Et alias doloremque ut sint fugit.'),
(32,	9,	'2005-03-28',	2,	'Sit dolorem quo perferendis et. Tempore sed omnis amet rerum et. Sint rerum dolore sunt incidunt numquam. Esse et eum animi qui.',	'1.jpg',	'1974-11-16',	'1994-11-14',	0,	NULL,	NULL,	'Sit sit est amet aut sint tempora mollitia. Veniam nobis laboriosam est doloribus porro aut voluptas. Voluptas pariatur debitis perferendis quod et commodi.'),
(33,	8,	'1993-12-01',	2,	'Qui sit odit saepe qui. Qui et quos dolorem odit at. Omnis fugit qui veritatis quod. Sapiente est nobis cum ad.',	'1.jpg',	'2007-11-12',	'1971-11-05',	0,	NULL,	NULL,	'Sapiente optio unde ut consequatur. Excepturi natus quibusdam vel modi.'),
(34,	4,	'1997-06-29',	3,	'Qui ipsum sit ratione expedita deserunt sapiente. Non dolorem enim voluptas. Est et vel aut quaerat. Perferendis sequi architecto recusandae animi vel beatae minus. Reiciendis rerum amet ab.',	'1.jpg',	'2021-07-15',	'1991-08-17',	0,	NULL,	NULL,	'Nulla quo corrupti omnis omnis. Adipisci consequatur est consectetur et tempora. Facilis amet quo sunt quod. Odio mollitia necessitatibus recusandae sunt est cum facere odit.'),
(35,	5,	'1984-04-08',	3,	'Hic aut et et natus id sit pariatur. Iste quod sed eum praesentium qui reprehenderit illum quaerat.',	'1.jpg',	'2013-03-14',	'2020-02-04',	0,	NULL,	NULL,	'Quod quasi cupiditate similique voluptates. Sunt et id sapiente odit maxime. Commodi eos eaque illum eveniet porro.'),
(36,	8,	'1989-06-14',	2,	'Porro eveniet corporis nam adipisci temporibus distinctio ea. Laboriosam esse temporibus dolorem sit harum autem.',	'1.jpg',	'2020-03-10',	'1972-02-23',	0,	NULL,	NULL,	'Nihil nisi rerum ipsum saepe quaerat sit dolore enim. Provident voluptate magnam omnis. Laborum porro cum sequi neque in repellendus. Tempore quasi error labore consequatur.'),
(37,	3,	'1984-01-01',	1,	'Eveniet sunt ducimus eos ut quae alias. Aut voluptate et voluptatem quis quaerat. Quia rerum assumenda possimus doloribus exercitationem et. Iure et qui quo aut commodi sint.',	'1.jpg',	'2007-08-06',	'2010-10-23',	0,	NULL,	NULL,	'Laborum non dicta sed nulla. Aut nemo vel aut et ut ipsa. Quasi eaque architecto et sit atque.'),
(38,	6,	'1972-12-29',	3,	'Aliquid delectus suscipit est veritatis. Porro aut alias quas ut quasi cumque. Et ducimus rerum autem doloremque quam odit. Voluptates dolor aperiam necessitatibus expedita necessitatibus ut.',	'1.jpg',	'1989-12-21',	'1998-09-01',	0,	NULL,	NULL,	'Ratione voluptatum et perspiciatis voluptate et occaecati nisi. Dolor et tenetur temporibus est veniam omnis. Temporibus blanditiis incidunt tempora qui nulla eaque non.'),
(39,	6,	'1970-11-27',	1,	'Consequatur temporibus qui autem molestiae saepe. Accusamus voluptas odit ut delectus non asperiores expedita. Odio maiores et blanditiis exercitationem saepe.',	'1.jpg',	'2017-11-12',	'1987-03-27',	0,	NULL,	NULL,	'Quia quisquam autem quasi sed eligendi. Quia id sed necessitatibus accusamus est dolore. Nesciunt quas nisi molestias nam maiores ea consequatur.'),
(40,	9,	'1986-10-11',	2,	'Ea nisi est est rerum et quo. Totam quae eos nobis sit dicta atque cumque. Quas aspernatur ea mollitia dolorem maxime qui vel. Rerum cum odio aut sequi.',	'1.jpg',	'1981-02-19',	'2014-08-31',	0,	NULL,	NULL,	'Expedita perferendis voluptatibus fuga ut quod animi voluptate. Aut eaque velit est eaque. Ullam eos id et qui quia.'),
(41,	4,	'2011-05-07',	2,	'Amet beatae incidunt eos quo iste. Nihil et quod omnis. Ab vel tenetur maiores quibusdam explicabo est. Magni commodi voluptatem nesciunt magni et.',	'1.jpg',	'1970-04-25',	'2007-09-15',	0,	NULL,	NULL,	'Molestiae excepturi voluptate eaque magni temporibus. Exercitationem voluptas et debitis molestiae temporibus suscipit est deleniti. Consequatur tempora iusto nisi labore iste natus cupiditate.');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2022_12_22_114732_create_sessions_table',	1),
(7,	'2022_12_22_181028_create_departments_table',	1),
(8,	'2022_12_22_181029_create_teams_table',	1),
(9,	'2022_12_22_181030_create_students_table',	1),
(10,	'2023_01_05_165155_create_teachers_table',	1),
(11,	'2023_01_05_170339_create_leaves_table',	1),
(12,	'2023_01_07_152917_add_type_in_users_table',	1),
(13,	'2023_01_08_170352_delete_name_in_students_table',	1),
(14,	'2023_01_08_185548_edit_teachers_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aHlKWYC6a4BHP1024Nxp2dY0AWrzEPOqRgnl3ElV',	3,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicVpwRnJ5OUtKRGNTQnBIWFNLZ0JmVTU1VmlKeWpvS0dWNEYzd1V3WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC90ZWFjaGVycy91bmNoZWNrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRFZkhTbm93WjFTMGdzR0pqVlY0djkueVhCS0g5U1NmR0d2RmdnaFZpMkR0VWFzanUvVVFISyI7fQ==',	1673385104);

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  `team_id` bigint(20) unsigned NOT NULL,
  `student_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  KEY `students_department_id_foreign` (`department_id`),
  KEY `students_team_id_foreign` (`team_id`),
  CONSTRAINT `students_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `students_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `students` (`id`, `user_id`, `department_id`, `team_id`, `student_id`, `sex`, `number`) VALUES
(1,	2,	2,	6,	'4445075',	'1',	'J158227730'),
(2,	4,	4,	12,	'7319317',	'1',	'N181232244'),
(3,	5,	3,	7,	'3690711',	'1',	'I220025017'),
(4,	6,	2,	6,	'3468347',	'1',	'U230588848'),
(5,	7,	3,	7,	'2417860',	'2',	'D260674808'),
(6,	8,	3,	9,	'8152994',	'1',	'O173698810'),
(7,	9,	1,	1,	'4422128',	'2',	'E273232959'),
(8,	10,	1,	1,	'9191953',	'1',	'A144947150'),
(9,	11,	3,	9,	'1486136',	'2',	'M292309597'),
(10,	12,	4,	11,	'6213106',	'1',	'U278928542'),
(11,	13,	1,	3,	'9870254',	'1',	'P191232720');

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  `team_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teachers_user_id_foreign` (`user_id`),
  KEY `teachers_department_id_foreign` (`department_id`),
  KEY `teachers_team_id_foreign` (`team_id`),
  CONSTRAINT `teachers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `teachers_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teachers` (`id`, `user_id`, `department_id`, `team_id`) VALUES
(1,	3,	4,	12),
(2,	14,	1,	3),
(3,	15,	2,	6),
(4,	16,	4,	11),
(5,	17,	2,	5),
(6,	18,	1,	3),
(7,	19,	2,	5),
(8,	20,	3,	9),
(9,	21,	2,	4),
(10,	22,	4,	10),
(11,	23,	2,	6);

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `department_id` bigint(20) unsigned NOT NULL,
  `class` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_department_id_foreign` (`department_id`),
  CONSTRAINT `teams_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `department_id`, `class`, `admission`) VALUES
(1,	1,	'Ducimus cumque.',	1981),
(2,	1,	'Et voluptas.',	2021),
(3,	1,	'Ullam voluptatem.',	2000),
(4,	2,	'Ut doloribus modi.',	2005),
(5,	2,	'Quis asperiores cum.',	2020),
(6,	2,	'Illum id.',	1987),
(7,	3,	'Praesentium ipsam.',	1990),
(8,	3,	'Et cupiditate.',	2002),
(9,	3,	'Dolore facilis.',	1970),
(10,	4,	'Corporis magni.',	2002),
(11,	4,	'Dignissimos.',	1983),
(12,	4,	'Cum a est earum.',	1970);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `type`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	0,	'admin',	'admin@gmail.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',	NULL,	NULL,	NULL,	'foGU34ZaL0',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(2,	1,	'student',	'student@gmail.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',	NULL,	NULL,	NULL,	'd3wd0XFtda',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(3,	2,	'teacher',	'teacher@gmail.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',	NULL,	NULL,	NULL,	'f9LW0ByJkG',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(4,	1,	'靳佳美',	'ji.yanjia@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'bO7kEuDFWl',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(5,	1,	'欽穎',	'ai.xin@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'eFYohNfj4o',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(6,	1,	'施貞筑',	'ting87@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'1PpO2My2z6',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(7,	1,	'韓儀',	'weijun.yun@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'M3JGoVJL6T',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(8,	1,	'堵慧',	'si14@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'ESZudKEGVF',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(9,	1,	'解文',	'yan.yan@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'NjAfaQOmB4',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(10,	1,	'牧怡穎',	'cen.hui@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'HMtalYIWUC',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(11,	1,	'琴威豪',	'si.gao@example.org',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'tXaGecWg77',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(12,	1,	'莊冠',	'kang.zong@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'zrfmyFqH5z',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(13,	1,	'姬萱',	'wei.tu@example.org',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'E7kkpWwKRf',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(14,	1,	'后家家',	'lsikou@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'KUsm2X2LVP',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(15,	1,	'辛嘉穎',	'shixin.shi@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'2EVsAZVGcl',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(16,	1,	'長孫萱芳',	'mlu@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'y7gHY3G60x',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(17,	1,	'譙雯蓉',	'wei.si@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'eZcjfd0wAD',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(18,	1,	'賀冠',	'xinsi51@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'lkYJri2rcg',	NULL,	NULL,	'2023-01-10 13:51:04',	'2023-01-10 13:51:04'),
(19,	1,	'豐思',	'yi.wei@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'KF4TE2l63n',	NULL,	NULL,	'2023-01-10 13:51:05',	'2023-01-10 13:51:05'),
(20,	1,	'米樺華',	'ting.feng@example.org',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'L4sWyJ5Lqd',	NULL,	NULL,	'2023-01-10 13:51:05',	'2023-01-10 13:51:05'),
(21,	1,	'司徒惠嘉',	'xin90@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'Np2C7dmreq',	NULL,	NULL,	'2023-01-10 13:51:05',	'2023-01-10 13:51:05'),
(22,	1,	'鮑美',	'ya.heng@example.com',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'g9EAbfowq1',	NULL,	NULL,	'2023-01-10 13:51:05',	'2023-01-10 13:51:05'),
(23,	1,	'祿珊如',	'yi52@example.net',	'0',	'2023-01-10 13:51:04',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	NULL,	NULL,	NULL,	'MqqX5dkxbS',	NULL,	NULL,	'2023-01-10 13:51:05',	'2023-01-10 13:51:05');

-- 2023-01-10 21:52:30
