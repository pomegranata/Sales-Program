/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : penjualan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-03-28 02:21:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `Barcode` varchar(15) NOT NULL,
  `Nama` varchar(15) NOT NULL DEFAULT '',
  `Satuan` varchar(15) NOT NULL DEFAULT '',
  `Harga` varchar(15) NOT NULL DEFAULT '',
  `Stok` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1110', 'Paku', 'Box', '15000', '50');
INSERT INTO `barang` VALUES ('1111', 'Palu', 'PCS', '20000', '100');
INSERT INTO `barang` VALUES ('1112', 'Cat Tembok', 'Kaleng', '50000', '125');
INSERT INTO `barang` VALUES ('1113', 'Semen', 'Pack', '75000', '135');
INSERT INTO `barang` VALUES ('1114', 'Gunting Kawat', 'PCS', '35000', '75');
INSERT INTO `barang` VALUES ('1115', 'Cat Kayu', 'Kaleng', '40000', '200');
INSERT INTO `barang` VALUES ('1116', 'Gergaji Mesin', 'PCS', '800000', '500');
INSERT INTO `barang` VALUES ('1117', 'Cat Besi', 'Kaleng', '45000', '360');

-- ----------------------------
-- Table structure for `satuan`
-- ----------------------------
DROP TABLE IF EXISTS `satuan`;
CREATE TABLE `satuan` (
  `Satuan` varchar(15) NOT NULL,
  PRIMARY KEY (`Satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of satuan
-- ----------------------------
INSERT INTO `satuan` VALUES ('Box');
INSERT INTO `satuan` VALUES ('Kaleng');
INSERT INTO `satuan` VALUES ('Pack');

-- ----------------------------
-- Table structure for `supplier`
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `Barcode` varchar(15) NOT NULL,
  `NamaPT` text NOT NULL,
  `Barang` varchar(15) NOT NULL,
  `Alamat` longtext NOT NULL,
  `Telepon` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('0001', 'PT. Kemajuan Utama', 'Cat Kayu', 'Jl. Antosari, Denpasar', '+6287922987324');
INSERT INTO `supplier` VALUES ('0002', 'PT. ClayPlay', 'Cat Besi', 'Jl. Kertoagung, Bandung', '083748627934');
INSERT INTO `supplier` VALUES ('0003', 'PT. Bintang Kejora', 'Gergaji Mesin', 'Jl. Kademangan, Surabaya', '087922987324');
INSERT INTO `supplier` VALUES ('0004', 'PT. Kemajuan Utama', 'Solder', 'Jl. Antosari, Denpasar', '+6287922987324');
