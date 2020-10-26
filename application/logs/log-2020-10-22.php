<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-22 05:47:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 05:47:50 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(1) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (1, 'identifikasi', 'ae601e', 1, 0)
ERROR - 2020-10-22 05:49:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 05:49:49 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(1) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (1, 'identifikasi', '2cfb43', 1, 0)
ERROR - 2020-10-22 05:50:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 05:50:04 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(1) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (1, 'asdsad', 'ebb792', 1, 0.30102999566398)
ERROR - 2020-10-22 06:13:59 --> Severity: error --> Exception: syntax error, unexpected ''kata_kata'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 105
ERROR - 2020-10-22 06:22:29 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 105
ERROR - 2020-10-22 06:22:31 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 105
ERROR - 2020-10-22 06:34:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; of relation &quot;pecah_kata&quot; violates not-null constraint
DETAIL:  Failing row contains (null, sistem, 8fc935, 1, 0.000000). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 06:34:11 --> Query error: ERROR:  null value in column "id" of relation "pecah_kata" violates not-null constraint
DETAIL:  Failing row contains (null, sistem, 8fc935, 1, 0.000000). - Invalid query: INSERT INTO "pecah_kata" ("kata_kata", "no_doc", "total_dokumen", "idf") VALUES ('sistem', '8fc935', 1, 0)
ERROR - 2020-10-22 06:37:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(2) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 06:37:36 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(2) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (2, 'identifikasi', 'b7878e', 1, 0)
ERROR - 2020-10-22 06:38:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 06:38:55 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(1) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (1, 'identifikasi', '429382', 1, 0)
ERROR - 2020-10-22 06:41:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;pecah_kata_pkey&quot;
DETAIL:  Key (id)=(1) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-22 06:41:03 --> Query error: ERROR:  duplicate key value violates unique constraint "pecah_kata_pkey"
DETAIL:  Key (id)=(1) already exists. - Invalid query: INSERT INTO "pecah_kata" ("id", "kata_kata", "no_doc", "total_dokumen", "idf") VALUES (1, 'pemanfaatan', '7d180f', 1, 0.30102999566398)
ERROR - 2020-10-22 18:43:24 --> Query error: Duplicate entry '10209011' for key 'PRIMARY' - Invalid query: INSERT INTO `dosen` (`nip`, `nama`, `program_studi`, `pendidikan_terakhir`, `foto`) VALUES ('10209011', 'Anton Setiawan H, S.Kom., MT', 'TF', 'S2', '102090111.jpeg')
ERROR - 2020-10-22 18:44:30 --> Query error: Column 'foto' cannot be null - Invalid query: INSERT INTO `dosen` (`nip`, `nama`, `program_studi`, `pendidikan_terakhir`, `foto`) VALUES ('Anton Setiawan H, S.Kom., MT', 'Anton Setiawan H, S.Kom., MT', 'TF', 'S2', NULL)
ERROR - 2020-10-22 18:46:41 --> Query error: Column 'foto' cannot be null - Invalid query: INSERT INTO `dosen` (`nip`, `nama`, `program_studi`, `pendidikan_terakhir`, `foto`) VALUES ('', '', 'TP', '', NULL)
