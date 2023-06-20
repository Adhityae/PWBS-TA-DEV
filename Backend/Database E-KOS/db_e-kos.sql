/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_e-kos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_e-kos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_e-kos`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_100000_create_password_resets_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2019_12_14_000001_create_personal_access_tokens_table',1),
(4,'2023_05_20_121802_create_user_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`created_at`,`updated_at`) values 
(1,'App\\Models\\User',1,'secret','b054ac62309c11795855efa3e0cd8e7e3bf0adee95a0005fafb86f44d81fe1ef','[\"*\"]',NULL,'2023-05-20 12:35:43','2023-05-20 12:35:43'),
(2,'App\\Models\\User',2,'secret','ebd1acbbe6d23561d3ee5fb5a55487e5f0efedf7fee315fd02151cb6d6ee937e','[\"*\"]',NULL,'2023-05-20 12:38:29','2023-05-20 12:38:29'),
(3,'App\\Models\\User',3,'secret','224bc78bbda2212ed796d850f10c3f742f133b4eaecb9b0e2bd6a1f8ae642e0b','[\"*\"]',NULL,'2023-05-20 14:24:21','2023-05-20 14:24:21'),
(4,'App\\Models\\User',4,'secret','ed67556969a50f658280235634cadeb7609c72d2886be53748cae061cfcc2f40','[\"*\"]',NULL,'2023-05-20 14:53:17','2023-05-20 14:53:17'),
(5,'App\\Models\\User',5,'secret','09a34c2b64726bebc455f9acdd5ed9acce8e2a444b4d0bbfcbeb827bf2e174e2','[\"*\"]',NULL,'2023-05-20 14:53:58','2023-05-20 14:53:58'),
(6,'App\\Models\\User',6,'secret','2db1b46fc7b9b0a04c7d38d002c83a4b07b87ed7c8124ed8ff7dc4eff53f968a','[\"*\"]',NULL,'2023-05-20 16:12:29','2023-05-20 16:12:29'),
(7,'App\\Models\\User',7,'secret','26f83162c8c1ff774d6a403adbbbc1708079410cb038f85df6ac3ccb2460fb82','[\"*\"]',NULL,'2023-05-20 16:13:08','2023-05-20 16:13:08'),
(8,'App\\Models\\User',4,'secret','30de7686dcf0fa5154744cab0bf954ecbd09fe67174265c430a94126621925c4','[\"*\"]',NULL,'2023-05-26 16:56:22','2023-05-26 16:56:22'),
(9,'App\\Models\\User',5,'Bearer-Token','fd5d4e03e70eb877b6ae5d3bc19ba1918feb4a96b5cf405415aa9be03a7e70ba','[\"*\"]',NULL,'2023-05-26 17:08:05','2023-05-26 17:08:05');

/*Table structure for table `tbl_kamar` */

DROP TABLE IF EXISTS `tbl_kamar`;

CREATE TABLE `tbl_kamar` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_kamar` char(8) NOT NULL,
  `nama_kamar` char(20) DEFAULT NULL,
  `lantai` enum('Lantai 1','Lantai 2','Lantai 3') DEFAULT NULL,
  `deskripsi_kamar` char(255) DEFAULT NULL,
  `status` enum('Kosong','Penuh','Booking') DEFAULT NULL,
  `harga` char(10) DEFAULT NULL,
  `foto_kamar` char(20) DEFAULT NULL,
  PRIMARY KEY (`kode_kamar`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_kamar` */

insert  into `tbl_kamar`(`id`,`kode_kamar`,`nama_kamar`,`lantai`,`deskripsi_kamar`,`status`,`harga`,`foto_kamar`) values 
(5,'KMR01','Kamar A01','Lantai 1','Fasilitas Kamar Lengkap : AC,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Penuh','750000','kmr01.jpg'),
(6,'KMR02','Kamar A02','Lantai 1','Fasilitas Kamar Lengkap : AC,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Penuh','750000','kmr02.jpg'),
(7,'KMR03','Kamar A03','Lantai 1','Fasilitas Kamar Lengkap : AC,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Penuh','750000','kmr03.jpg'),
(8,'KMR04','Kamar B01','Lantai 2','Fasilitas Kamar Lengkap : AC,Televisi,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','950000','kmr04.jpg'),
(12,'KMR05','Kamar B02','Lantai 2','Fasilitas Kamar Lengkap : AC,Televisi,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','950000','kmr05.png'),
(11,'KMR06','Kamar B03','Lantai 2','Fasilitas Kamar Lengkap : AC,Televisi,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','950000','kmr06.png'),
(13,'KMR07','Kamar C01','Lantai 3','Fasilitas Kamar Lengkap : AC,Televisi,Kulkas,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','1150000','kmr07.png'),
(14,'KMR08','Kamar C02','Lantai 3','Fasilitas Kamar Lengkap : AC,Televisi,Kulkas,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','1150000','kmr08.png'),
(15,'KMR09','Kamar C03','Lantai 3','Fasilitas Kamar Lengkap : AC,Televisi,Kulkas,Kasur,Lemari,Meja Belajar,Dispenser Air, Dan Kamar Mandi Dalam.','Kosong','1150000','kmr09.png');

/*Table structure for table `tbl_komplain` */

DROP TABLE IF EXISTS `tbl_komplain`;

CREATE TABLE `tbl_komplain` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_komplain` char(8) NOT NULL,
  `kode_user` int(8) DEFAULT NULL,
  `kode_kamar` char(8) DEFAULT NULL,
  `perihal` enum('Token Listrik Habis','Air Tidak Mengalir','Genteng Bocor','Keran Air Macet','Lainnya...') DEFAULT NULL,
  `isi` char(255) DEFAULT NULL,
  `status` enum('Belum','Proses','Sudah') DEFAULT NULL,
  PRIMARY KEY (`kode_komplain`),
  KEY `Id_Kamar` (`kode_kamar`),
  KEY `Id_Member` (`kode_user`),
  KEY `id` (`id`),
  CONSTRAINT `tbl_komplain_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `users` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_komplain_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `tbl_kamar` (`kode_kamar`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_komplain` */

insert  into `tbl_komplain`(`id`,`kode_komplain`,`kode_user`,`kode_kamar`,`perihal`,`isi`,`status`) values 
(13,'KDKMP01',18711001,'KMR01','Air Tidak Mengalir','Pak Air dikamar saya tidak menyala pak','Proses'),
(14,'KDKMP02',18711928,'KMR02','Genteng Bocor','Pak Genteng dikamar saya bocor pak','Proses');

/*Table structure for table `tbl_pesan` */

DROP TABLE IF EXISTS `tbl_pesan`;

CREATE TABLE `tbl_pesan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_pesan` char(8) NOT NULL,
  `kode_kamar` char(8) DEFAULT NULL,
  `kode_user` int(8) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `lama_tinggal` enum('1 Bulan','2 Bulan','3 Bulan','4 Bulan','5 Bulan','6 Bulan','7 Bulan','8 Bulan','9 Bulan','10 Bulan','11 Bulan','12 Bulan') DEFAULT NULL,
  PRIMARY KEY (`kode_pesan`),
  KEY `Id_Kamar` (`kode_kamar`),
  KEY `Id_Member` (`kode_user`),
  KEY `id` (`id`),
  CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `users` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pesan_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `tbl_kamar` (`kode_kamar`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_pesan` */

insert  into `tbl_pesan`(`id`,`kode_pesan`,`kode_kamar`,`kode_user`,`tanggal_masuk`,`lama_tinggal`) values 
(25,'KDPSN01','KMR01',18711001,'2023-06-20','1 Bulan'),
(27,'KDPSN02','KMR02',91972987,'2023-06-20','1 Bulan'),
(28,'KPSN04','KMR03',18711928,'2023-06-20','2 Bulan');

/*Table structure for table `tbl_sewa` */

DROP TABLE IF EXISTS `tbl_sewa`;

CREATE TABLE `tbl_sewa` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_sewa` char(8) NOT NULL,
  `kode_pesan` char(8) DEFAULT NULL,
  `kode_user` int(8) DEFAULT NULL,
  `kode_kamar` char(8) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `pembayaran` char(50) DEFAULT NULL,
  `status` enum('Belum Bayar','DP','DiCicil','Sudah Bayar') DEFAULT NULL,
  PRIMARY KEY (`kode_sewa`),
  KEY `Id_Member` (`kode_user`),
  KEY `Id_Kamar` (`kode_kamar`),
  KEY `Id_Pesan` (`kode_pesan`),
  KEY `id` (`id`),
  CONSTRAINT `tbl_sewa_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `users` (`kode_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_sewa_ibfk_2` FOREIGN KEY (`kode_pesan`) REFERENCES `tbl_pesan` (`kode_pesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_sewa_ibfk_3` FOREIGN KEY (`kode_kamar`) REFERENCES `tbl_kamar` (`kode_kamar`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_sewa` */

insert  into `tbl_sewa`(`id`,`kode_sewa`,`kode_pesan`,`kode_user`,`kode_kamar`,`tanggal_keluar`,`pembayaran`,`status`) values 
(19,'KDSW01','KDPSN01',18711001,'KMR01','2023-06-20','750000','Sudah Bayar'),
(20,'KDSW02','KDPSN02',91972987,'KMR02','2023-07-20','750000','Sudah Bayar'),
(21,'KDSW04','KPSN04',18711928,'KMR03','2023-08-20','750000','DiCicil');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_user` int(8) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `alamat` char(255) DEFAULT NULL,
  `no_telepon` char(13) DEFAULT NULL,
  `status_user` enum('Pelajar/Mahasiswa','Karyawan','Pegawai','Lainya...') DEFAULT NULL,
  `foto_user` char(50) DEFAULT NULL,
  `role` enum('Admin','Customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_user`),
  UNIQUE KEY `user_email_unique` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`kode_user`,`nama`,`email`,`password`,`jk`,`alamat`,`no_telepon`,`status_user`,`foto_user`,`role`,`email_verified_at`,`remember_token`,`created_at`,`updated_at`) values 
(22,10101010,'Admin E-KOS','admin@gmail.com','admin123','Pria','Bandar Lampung','089521937647','Pegawai','admin.jpg','Admin',NULL,NULL,NULL,NULL),
(30,18711001,'Jeki Saragih','jeki@gmail.com','jeki010201','Pria','Jln.Mangga No.123 Bandar Lampung','0897266177278','Karyawan','jeki.png','Customer',NULL,NULL,NULL,NULL),
(32,18711928,'Dani Aditya','dani@gmail.com','dani020102','Pria','Bandar Lampung','0882772829929','Pegawai','dani.png','Customer',NULL,NULL,NULL,NULL),
(31,91972987,'Danang','danang@gmail.com','dnang','Pria','Bandar Lampung','0897266177278','Pelajar/Mahasiswa','danang.png','Customer',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
