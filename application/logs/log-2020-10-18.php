<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-18 19:39:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '3)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_...' at line 2 - Invalid query: SELECT `no_reg`, `judul_skripsi`, `abstrak`, `a`.`nama` AS `dp_satu`, `b`.`nama` AS `dp_dua`
FROM (`sample` `c`, 3)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_dua` = `b`.`nip`
WHERE `no_reg` = 'dd5d7e'
ERROR - 2020-10-18 19:39:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_...' at line 2 - Invalid query: SELECT `no_reg`, `judul_skripsi`, `abstrak`, `a`.`nama` AS `dp_satu`, `b`.`nama` AS `dp_dua`
FROM (`sample` `c`, 1)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_dua` = `b`.`nip`
WHERE `no_reg` = 'dd5d7e'
ERROR - 2020-10-18 19:39:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_...' at line 2 - Invalid query: SELECT `no_reg`, `judul_skripsi`, `abstrak`, `a`.`nama` AS `dp_satu`, `b`.`nama` AS `dp_dua`
FROM (`sample` `c`, 1)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_dua` = `b`.`nip`
WHERE `no_reg` = 'c8c265'
ERROR - 2020-10-18 19:40:30 --> Query error: Column 'no_reg' in field list is ambiguous - Invalid query: SELECT `no_reg`, `judul_skripsi`, `abstrak`, `a`.`nama` AS `dp_satu`, `b`.`nama` AS `dp_dua`
FROM (`sample` `c`, `sample`)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_dua` = `b`.`nip`
WHERE `no_reg` = 'dd5d7e'
 LIMIT 1
ERROR - 2020-10-18 19:40:33 --> Query error: Column 'no_reg' in field list is ambiguous - Invalid query: SELECT `no_reg`, `judul_skripsi`, `abstrak`, `a`.`nama` AS `dp_satu`, `b`.`nama` AS `dp_dua`
FROM (`sample` `c`, `sample`)
JOIN `dosen` `a` ON `c`.`dp_satu` = `a`.`nip`
JOIN `dosen` `b` ON `c`.`dp_dua` = `b`.`nip`
WHERE `no_reg` = 'c8c265'
 LIMIT 1
ERROR - 2020-10-18 19:56:17 --> Severity: Warning --> array_slice() expects at least 2 parameters, 1 given C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 219
ERROR - 2020-10-18 19:56:17 --> Severity: Warning --> arsort() expects parameter 1 to be array, null given C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 220
ERROR - 2020-10-18 19:56:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 221
