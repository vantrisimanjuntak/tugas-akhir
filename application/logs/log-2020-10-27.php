<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-27 06:19:09 --> Severity: Notice --> Undefined index: HTTP_IP_CLIENT C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 312
ERROR - 2020-10-27 06:19:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; of relation &quot;pencarian&quot; violates not-null constraint
DETAIL:  Failing row contains (null, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., ASTIKA AYUNING TYAS, S.KOM.,M.Cs, SUDARYANTO, S.T.,M.Eng). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-27 06:19:09 --> Query error: ERROR:  null value in column "id" of relation "pencarian" violates not-null constraint
DETAIL:  Failing row contains (null, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., ASTIKA AYUNING TYAS, S.KOM.,M.Cs, SUDARYANTO, S.T.,M.Eng). - Invalid query: INSERT INTO "pencarian" ("id", "judul", "dosen_1", "dosen_2") VALUES (NULL, 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PRO', 'ASTIKA AYUNING TYAS, S.KOM.,M.Cs', 'SUDARYANTO, S.T.,M.Eng')
ERROR - 2020-10-27 06:19:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:182) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-10-27 06:21:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pencarian_pkey&quot;
DETAIL:  Key (id)=(::1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-27 06:21:38 --> Query error: ERROR:  duplicate key value violates unique constraint "pencarian_pkey"
DETAIL:  Key (id)=(::1) already exists. - Invalid query: INSERT INTO "pencarian" ("id", "judul", "dosen_1", "dosen_2") VALUES ('::1', 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT', 'ASIH PUJIASTUTI, S.KOM., M.CS.', 'HARUNO SAJATI, S.T., M.Eng')
ERROR - 2020-10-27 06:21:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:182) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-10-27 06:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pencarian_pkey&quot;
DETAIL:  Key (id)=(false) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-27 06:22:43 --> Query error: ERROR:  duplicate key value violates unique constraint "pencarian_pkey"
DETAIL:  Key (id)=(false) already exists. - Invalid query: INSERT INTO "pencarian" ("id", "judul", "dosen_1", "dosen_2") VALUES (FALSE, 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT', 'ASIH PUJIASTUTI, S.KOM., M.CS.', 'HARUNO SAJATI, S.T., M.Eng')
ERROR - 2020-10-27 06:22:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:182) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-10-27 06:23:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pencarian_pkey&quot;
DETAIL:  Key (id)=(false) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-27 06:23:04 --> Query error: ERROR:  duplicate key value violates unique constraint "pencarian_pkey"
DETAIL:  Key (id)=(false) already exists. - Invalid query: INSERT INTO "pencarian" ("id", "judul", "dosen_1", "dosen_2") VALUES (FALSE, 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT', 'ASIH PUJIASTUTI, S.KOM., M.CS.', 'HARUNO SAJATI, S.T., M.Eng')
ERROR - 2020-10-27 06:23:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:182) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
