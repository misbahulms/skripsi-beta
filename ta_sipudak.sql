/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : ta_sipudak

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 15/10/2021 21:25:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bentuk_kekerasan
-- ----------------------------
DROP TABLE IF EXISTS `bentuk_kekerasan`;
CREATE TABLE `bentuk_kekerasan`  (
  `id_bentuk_kekerasan` int NOT NULL AUTO_INCREMENT,
  `jenis_kekerasan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bentuk_kekerasan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bentuk_kekerasan
-- ----------------------------
INSERT INTO `bentuk_kekerasan` VALUES (1, 'Fisik');
INSERT INTO `bentuk_kekerasan` VALUES (2, 'Penelantaran');
INSERT INTO `bentuk_kekerasan` VALUES (3, 'Seksual');
INSERT INTO `bentuk_kekerasan` VALUES (4, 'Trafficking');
INSERT INTO `bentuk_kekerasan` VALUES (5, 'Psikis');
INSERT INTO `bentuk_kekerasan` VALUES (6, 'Eksploitasi');
INSERT INTO `bentuk_kekerasan` VALUES (7, 'Lainnya');

-- ----------------------------
-- Table structure for desa
-- ----------------------------
DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa`  (
  `id_desa` int NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_kecamatan` int NULL DEFAULT NULL,
  `jumlah_kasus` int NULL DEFAULT NULL,
  `tahun` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_desa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 199 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of desa
-- ----------------------------
INSERT INTO `desa` VALUES (1, 'Galing', 1, 0, '2017', '109.26843723', '1.67781730293');
INSERT INTO `desa` VALUES (2, 'Ratu Sepudak', 1, 0, '2017', '109.356247753', '1.50520817792');
INSERT INTO `desa` VALUES (3, 'Sagu', 1, 2, '2017', '109.398221049', '1.57899998176');
INSERT INTO `desa` VALUES (4, 'Sijang', 1, 1, '2017', '109.421690437', '1.56005320879');
INSERT INTO `desa` VALUES (5, 'Sungai Palah', 1, 0, '2017', '109.386203139', '1.55927549577');
INSERT INTO `desa` VALUES (6, 'Teluk Pandan', 1, 0, '2017', '109.351893273', '1.55904074394');
INSERT INTO `desa` VALUES (7, 'Tempapan Hulu', 1, 0, '2017', '109.331496858', '1.612127352');
INSERT INTO `desa` VALUES (8, 'Tempapan Kuala', 1, 0, '2017', '109.33775587', '1.55008561696');
INSERT INTO `desa` VALUES (9, 'Tri Gadu', 1, 0, '2017', '109.340095538', '1.52259543113');
INSERT INTO `desa` VALUES (10, 'Tri Kembang', 1, 0, '2017', '109.344856521', '1.47697487689');
INSERT INTO `desa` VALUES (11, 'Bakau', 2, 0, '2017', '109.061308165', '1.34750579965');
INSERT INTO `desa` VALUES (12, 'Dungun Laut', 2, 0, '2017', '109.042447007', '1.30659385192');
INSERT INTO `desa` VALUES (13, 'Lambau', 2, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (14, 'Mutus Darussalam', 2, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (15, 'Parit Setia', 2, 0, '2017', '109.067372357', '1.35891272314');
INSERT INTO `desa` VALUES (16, 'Pelimpaan', 2, 0, '2017', '109.070300321', '1.3712575496');
INSERT INTO `desa` VALUES (17, 'Sarang Burung Danau', 2, 1, '2017', '109.068662619', '1.46117076682');
INSERT INTO `desa` VALUES (18, 'Sarang Burung Kolam', 2, 0, '2017', '109.06114113', '1.42041173262');
INSERT INTO `desa` VALUES (19, 'Sarang Burung Kuala', 2, 0, '2017', '109.075487504', '1.38949068625');
INSERT INTO `desa` VALUES (20, 'Sarang Burung Usrat', 2, 1, '2017', '109.078456355', '1.40661893921');
INSERT INTO `desa` VALUES (21, 'Sentebang', 2, 0, '2017', '109.048304956', '1.31753020426');
INSERT INTO `desa` VALUES (22, 'Sungai Nilam', 2, 0, '2017', '109.076446188', '1.43636588468');
INSERT INTO `desa` VALUES (23, 'Sungai Nyirih', 2, 0, '2017', '109.059429101', '1.33789259916');
INSERT INTO `desa` VALUES (24, 'Jawai Laut', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (25, 'Jelu Air', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (26, 'Matang Terap', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (27, 'Sabaran', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (28, 'Sarilaba A', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (29, 'Sarilaba B', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (30, 'Semperiuk A', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (31, 'Semperiuk B', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (32, 'Suah Api', 3, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (33, 'Kalimantan', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (34, 'Malek', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (35, 'Matang Danau', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (36, 'Mentibar ', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (37, 'Nibung', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (38, 'Sebubus', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (39, 'Tanah Hitam', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (40, 'Temajuk', 4, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (41, 'Gugah Sejahtera', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (42, 'Harapan', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (43, 'Jelutung', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (44, 'Lonam', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (45, 'Pemangkat Kota', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (46, 'Penjajap', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (47, 'Perapakan', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (48, 'Sebatuan', 5, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (49, 'Beringin', 6, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (50, 'Jirak', 6, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (51, 'Mekar Jaya', 6, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (52, 'Tengguli', 6, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (53, 'kaliau', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (54, 'Sanatab', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (55, 'Santaban', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (56, 'Sebunga', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (57, 'Sei Bening', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (58, 'Sei Bening', 7, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (59, 'Parit Baru', 8, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (60, 'Salatiga', 8, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (61, 'Serumpun', 8, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (62, 'Serunai ', 8, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (63, 'Sungai Toman', 8, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (64, 'Dalam Kaum', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (65, 'Durian', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (66, 'Gapura', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (67, 'Jagur', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (68, 'Kartiasa', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (69, 'Lorong', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (70, 'Lubuk Dagang', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (71, 'Lumbang', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (72, 'Pasar Melayu', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (73, 'Pendawan', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (74, 'Saing Rambi', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (75, 'Sebayan', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (76, 'Sei Rambah', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (77, 'Semangau', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (78, 'Sumber Harapan', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (79, 'Tanjung Bugis', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (80, 'Tanjung Mekar', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (81, 'Tumuk Manggis', 9, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (82, 'Sebangun', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (83, 'Sebawi', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (84, 'Semanjang', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (85, 'Semanjang', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (86, 'Sempelai Sebedang', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (87, 'Sepuk Tanjung', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (88, 'Tebing Batu ', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (89, 'Tempatan', 10, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (90, 'Parit', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (91, 'Parit Raja', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (92, 'Penakalan', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (93, 'Perigi Landu', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (94, 'Perigi Limus', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (95, 'Piantus', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (96, 'Sekuduk', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (97, 'Semanga', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (98, 'Sendoyan', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (99, 'Senujuh', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (100, 'Sepantai', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (101, 'Setalik', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (102, 'Sulung', 11, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (103, 'Bentunai', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (104, 'Gayung Bersambut', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (105, 'Kuala', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (106, 'Pangkalan Bemban', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (107, 'Parit Baru', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (108, 'Parit Kongsi', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (109, 'Semelagi Besar', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (110, 'Sungai Daun', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (111, 'Sungai Nyirih', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (112, 'Sungai Rusa', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (113, 'Twi Mentibar', 12, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (114, 'Buduk Sempadang', 13, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (115, 'Gelik', 13, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (116, 'Selakau Tua', 13, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (117, 'Seranggam', 13, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (118, 'Seburing', 14, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (119, 'Semparuk', 14, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (120, 'Sepadu', 14, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (121, 'Sepinggan', 14, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (122, 'Singaraya', 14, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (123, 'Balai Gemuruh', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (124, 'Bukit Mulya', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (125, 'Karaban Jaya', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (126, 'Madak', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (127, 'Mensade', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (128, 'Mukti Raharja', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (129, 'Sabung', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (130, 'Sei Deden', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (131, 'Sempurna', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (132, 'Sungai Sapak', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (133, 'Tebuah Elok', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (134, 'Upt Xxxvi Keraban', 15, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (135, 'Arung Medang', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (136, 'Arung Parak', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (137, 'Merabuan', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (138, 'Merpati', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (139, 'Pancur', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (140, 'Semata', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (141, 'Simpang Empat', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (142, 'Tangaran', 16, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (143, 'Batu Makjage', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (144, 'Bekut', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (145, 'Bukit Segoler', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (146, 'Dungun Perapakan', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (147, 'Mak Rampai', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (148, 'Mak Tangguk', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (149, 'Maribas', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (150, 'Matang Labung', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (151, 'Mekar Sekuntum', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (152, 'Mensere', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (153, 'Pangkalan Kongsi', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (154, 'Pusaka', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (155, 'Seberkat', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (156, 'Segarau Parit', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (157, 'Segedong', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (158, 'Sejiram', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (159, 'Sempalai', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (160, 'Seret Ayon', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (161, 'Serindang', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (162, 'Serempun Buluh', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (163, 'Sungai Kelambu', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (164, 'Tebas Kuala', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (165, 'Tebas Sungai', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (166, 'Tebas Sungai', 17, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (167, 'Cepala', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (168, 'Matang Segarau', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (169, 'Merubong', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (170, 'Rambayan', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (171, 'Sari Makmur', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (172, 'Sempadian', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (173, 'Tekarang', 18, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (174, 'Berlimang', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (175, 'Kuala Pangkalan Keramat', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (176, 'Kubangga', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (177, 'Lela', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (178, 'Matang Segantar', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (179, 'Mekar Sekuntum', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (180, 'Mulia', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (181, 'Pedada', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (182, 'Pipit Teja', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (183, 'Puringan', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (184, 'Sabing', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (185, 'Samustida', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (186, 'Sayang Sedayu', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (187, 'Sebagu', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (188, 'Sekura', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (189, 'Sengawang', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (190, 'Sepadu', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (191, 'Sungai Baru', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (192, 'Sungai Kumpai', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (193, 'Sungai Serabek', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (194, 'Tambatan', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (195, 'Tanjung Keracut', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (196, 'Teluk Kaseh', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (197, 'Teluk Kembang', 19, NULL, NULL, NULL, NULL);
INSERT INTO `desa` VALUES (198, 'Tri Mandayan', 19, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan`  (
  `id_kecamatan` int NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `geojson_kecamatan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `warna_kecamatan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES (1, 'Galing', 'galing.geojson', '#f34a12');
INSERT INTO `kecamatan` VALUES (2, 'Jawai', 'jawai.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (3, 'Jawai Selatan', 'jawai_selatan.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (4, 'Paloh', 'paloh.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (5, 'Pemangkat', 'pemangkat.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (6, 'Sajad', 'sajad.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (7, 'Sajingan Besar', 'sajingan_besar.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (8, 'Salatiga', 'salatiga.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (9, 'Sambas', 'sambas.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (10, 'Sebawi', 'sebawi.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (11, 'Sejangkung', 'sejangkung.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (12, 'Selakau', 'selakau.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (13, 'Selakau Timur', 'selakau_timur.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (14, 'Semparuk', 'semparuk.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (15, 'Subah', 'subah.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (16, 'Tangaran', 'tangaran.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (17, 'Tebas', 'tebas.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (18, 'Tekarang', 'tekarang.geojson', '#42f312');
INSERT INTO `kecamatan` VALUES (19, 'Teluk Keramat', 'teluk_keramat.geojson', '#42f312');

-- ----------------------------
-- Table structure for korban
-- ----------------------------
DROP TABLE IF EXISTS `korban`;
CREATE TABLE `korban`  (
  `id_korban` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tanggal_lahir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_desa` int NULL DEFAULT NULL,
  `agama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pendidikan_terakhir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jumlah_saudara` int NULL DEFAULT NULL,
  `nik` bigint NULL DEFAULT NULL,
  `id_pengaduan` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_korban`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of korban
-- ----------------------------
INSERT INTO `korban` VALUES (1, 'febri', 'Galing', '2016-02-14', 'Perempuan', 'Galing', 1, 'Islam', 'Belum Kawin', '-', 'Sahran', 'muna', 'SD', 0, 2147483647123245, 1, '2021-07-15 06:26:25');
INSERT INTO `korban` VALUES (2, 'farhan', 'Galing', '2010-06-28', 'Laki-Laki', 'Tanjung Raya 2', 1, 'Islam', 'Belum Kawin', '-', '-', '-', 'SD', 0, 3321110902070007, 1, '2021-07-28 01:44:22');

-- ----------------------------
-- Table structure for pelaku
-- ----------------------------
DROP TABLE IF EXISTS `pelaku`;
CREATE TABLE `pelaku`  (
  `id_pelaku` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tanggal_lahir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_desa` int NULL DEFAULT NULL,
  `agama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pendidikan_terakhir` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jumlah_saudara` int NULL DEFAULT NULL,
  `rekam_jejak` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nik` bigint NULL DEFAULT NULL,
  `id_pengaduan` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelaku`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelaku
-- ----------------------------
INSERT INTO `pelaku` VALUES (1, 'Rendi', 'Galing', '1996-03-18', 'Laki-Laki', 'Seburuan', 1, 'Islam', 'Belum Kawin', '-', '-', '-', 'SD', 0, 'Tidak Pernah', 2147483647123246, 1, '2021-07-18 10:24:45');
INSERT INTO `pelaku` VALUES (2, 'farhan', 'Galing', '2010-06-28', 'Laki-Laki', 'Tanjung Raya 2', 1, 'Islam', 'Belum Kawin', '-', '-', '-', 'SD', 0, 'Pernah', 3321110902070007, 1, '2021-07-28 01:42:10');

-- ----------------------------
-- Table structure for pelaporan
-- ----------------------------
DROP TABLE IF EXISTS `pelaporan`;
CREATE TABLE `pelaporan`  (
  `id_pelapor` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `alamat_pelapor` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `no_hp` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `korban_kekerasan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tanggal_pelaporan` datetime NULL DEFAULT NULL,
  `tempat_kejadian` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_kejadian` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kronologis_kejadian` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `hubungan_dengan_korban` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_desa` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelapor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelaporan
-- ----------------------------
INSERT INTO `pelaporan` VALUES (1, 1, 'Galing', '08981385790', 'Anak', '2021-07-15 00:00:00', 'Rumah', 'Galing', 'Telah terjadi kekerasan terhadap anak dibawah umur', 'graduate-icon-png-28-2.png', 2, 'Tetangga', 1, '2021-07-15 03:47:31');
INSERT INTO `pelaporan` VALUES (2, 1, 'Teluk Durian', '08981385795', 'Anak', '2021-08-09 00:00:00', 'Rumah', 'Teluk Durian', 'Kekerasan terhadap anak', 'default.png', 2, 'Tetangga', 190, '2021-08-09 12:17:14');
INSERT INTO `pelaporan` VALUES (3, 1, 'tanjung bakau dalam', '08981385790', 'Perempuan', '2021-08-31 00:00:00', 'dikebun', 'dusun tanjung bakau', 'sejak saat itu langit senja tak lagi sama. pada jam 4 sore suami istri itu pergi ke kebun, awal nya tidak terjadi apa-apa lalu jam saya mendengar suara pertengkaran pada jam 16:50 lalu saya mendekati mereka, sekitar 200 meter saya melihat suaminya lansung', 'default.png', 2, 'selingkuhan', 194, '2021-08-09 12:40:05');
INSERT INTO `pelaporan` VALUES (4, 3, 'Teluk Durian', '08981385790', 'Anak', '2021-09-13 10:18:37', 'Rumah', 'Teluk Durian', 'Telah terjadi kekerasan terhadap anak oleh orang tua nya sendiri', 'default.png', 2, 'Tetangga', 190, '2021-09-13 10:18:37');
INSERT INTO `pelaporan` VALUES (5, 3, 'Tanjung bakau dalam', '08981385790', 'Anak', '2021-09-13 10:11:00', 'Rumah', 'Tanjung Bakau', 'kekerasan fisik terhadap anak', 'default.png', 1, 'Tetangga', 194, '2021-09-13 10:11:00');

-- ----------------------------
-- Table structure for pengaduan_kasus
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan_kasus`;
CREATE TABLE `pengaduan_kasus`  (
  `id_pengaduan` int NOT NULL AUTO_INCREMENT,
  `no_registrasi` int NULL DEFAULT NULL,
  `tanggal_pengaduan` date NULL DEFAULT NULL,
  `cara_datang` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `korban_kekerasan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kategori_kekerasan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_sub_bentuk_kekerasan` int NULL DEFAULT NULL,
  `alamat_kejadian` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `waktu_kejadian` datetime NULL DEFAULT NULL,
  `tempat_kejadian` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_desa` int NULL DEFAULT NULL,
  `tahun_pengaduan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kronologis_kejadian` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat_pelapor` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hubungan_dengan_korban` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_pelapor` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengaduan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengaduan_kasus
-- ----------------------------
INSERT INTO `pengaduan_kasus` VALUES (1, 1, '2021-09-13', 'Datang Sendiri', 'Anak', 'Kdrt', 1, 'Teluk Durian', '2021-09-13 10:19:18', 'Rumah', 190, '2021', NULL, NULL, 'Telah terjadi kekerasan terhadap anak oleh orang tua nya sendiri', 'default.png', 'Teluk Durian', 'Tetangga', 4);

-- ----------------------------
-- Table structure for status_laporan
-- ----------------------------
DROP TABLE IF EXISTS `status_laporan`;
CREATE TABLE `status_laporan`  (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status_laporan
-- ----------------------------
INSERT INTO `status_laporan` VALUES (1, 'Diproses');
INSERT INTO `status_laporan` VALUES (2, 'Diterima');
INSERT INTO `status_laporan` VALUES (3, 'Ditolak');

-- ----------------------------
-- Table structure for sub_bentuk_kekerasan
-- ----------------------------
DROP TABLE IF EXISTS `sub_bentuk_kekerasan`;
CREATE TABLE `sub_bentuk_kekerasan`  (
  `id_sub_bentuk_kekerasan` int NOT NULL AUTO_INCREMENT,
  `sub_jenis_kekerasan` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_bentuk_kekerasan` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub_bentuk_kekerasan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sub_bentuk_kekerasan
-- ----------------------------
INSERT INTO `sub_bentuk_kekerasan` VALUES (1, 'Kekerasan Fisik', 1);
INSERT INTO `sub_bentuk_kekerasan` VALUES (2, 'Persetubuhan', 3);
INSERT INTO `sub_bentuk_kekerasan` VALUES (3, 'EXPL Seksual', 4);
INSERT INTO `sub_bentuk_kekerasan` VALUES (4, 'Kenakalan Anak', 7);
INSERT INTO `sub_bentuk_kekerasan` VALUES (5, 'Saksi Anak', 5);
INSERT INTO `sub_bentuk_kekerasan` VALUES (6, 'Penelantaran Anak', 2);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `no_hp` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_active` int NULL DEFAULT NULL,
  `role` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'munir sy', 'sy.munir@gmail.com', 'graduate-icon-png-28-2.png', '$2y$10$IXlQRxWmlgJo/vZegjUZzOUaiIJj/cVt6BtaOSx/g0Tvyby.jN8xi', '08981385795', 'Tanjung Raya 2', 1, 'User', '2021-07-15 02:48:08');
INSERT INTO `users` VALUES (3, 'misbahulms', 'misbahulms@gmail.com', 'graduate-icon-png-28-2.png', '$2y$10$KtzYCotGlxwfnspz5rcmVuEQS8h/rP8S0eCSyMVffyLvxIKXgABpG', '08981385790', 'Sungai Jawi', 1, 'Admin', '2021-07-15 03:19:11');

SET FOREIGN_KEY_CHECKS = 1;
