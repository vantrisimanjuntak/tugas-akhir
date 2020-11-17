<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-04 14:56:15 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:00:00 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:01:26 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:03:00 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:08:06 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:12:24 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:12:35 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:13:30 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:13:41 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 15:14:11 --> Could not find the language line "form_validation_reqiured"
ERROR - 2020-11-04 17:19:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kata_imbuhan&quot; of relation &quot;kata_imbuhan&quot; violates not-null constraint
DETAIL:  Failing row contains (71fe, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:19:18 --> Query error: ERROR:  null value in column "kata_imbuhan" of relation "kata_imbuhan" violates not-null constraint
DETAIL:  Failing row contains (71fe, null, null). - Invalid query: INSERT INTO "kata_imbuhan" ("id", "kata_imbuhan", "kata_dasar") VALUES ('71fe', NULL, NULL)
ERROR - 2020-11-04 17:19:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kata_imbuhan&quot; of relation &quot;kata_imbuhan&quot; violates not-null constraint
DETAIL:  Failing row contains (a74a, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:19:29 --> Query error: ERROR:  null value in column "kata_imbuhan" of relation "kata_imbuhan" violates not-null constraint
DETAIL:  Failing row contains (a74a, null, null). - Invalid query: INSERT INTO "kata_imbuhan" ("id", "kata_imbuhan", "kata_dasar") VALUES ('a74a', NULL, NULL)
ERROR - 2020-11-04 17:20:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kata_imbuhan&quot; of relation &quot;kata_imbuhan&quot; violates not-null constraint
DETAIL:  Failing row contains (39e9, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:20:03 --> Query error: ERROR:  null value in column "kata_imbuhan" of relation "kata_imbuhan" violates not-null constraint
DETAIL:  Failing row contains (39e9, null, null). - Invalid query: INSERT INTO "kata_imbuhan" ("id", "kata_imbuhan", "kata_dasar") VALUES ('39e9', NULL, NULL)
ERROR - 2020-11-04 17:30:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kata_dasar&quot; of relation &quot;kata_imbuhan&quot; violates not-null constraint
DETAIL:  Failing row contains (39ea, memakan, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:30:48 --> Query error: ERROR:  null value in column "kata_dasar" of relation "kata_imbuhan" violates not-null constraint
DETAIL:  Failing row contains (39ea, memakan, null). - Invalid query: INSERT INTO "kata_imbuhan" ("id", "kata_imbuhan", "kata_dasar") VALUES ('39ea', 'memakan', NULL)
ERROR - 2020-11-04 17:30:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kata_imbuhan&quot; of relation &quot;kata_imbuhan&quot; violates not-null constraint
DETAIL:  Failing row contains (8c61, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:30:54 --> Query error: ERROR:  null value in column "kata_imbuhan" of relation "kata_imbuhan" violates not-null constraint
DETAIL:  Failing row contains (8c61, null, null). - Invalid query: INSERT INTO "kata_imbuhan" ("id", "kata_imbuhan", "kata_dasar") VALUES ('8c61', NULL, NULL)
ERROR - 2020-11-04 17:39:38 --> 404 Page Not Found: ../modules/another/controllers/Another/delete
ERROR - 2020-11-04 17:50:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE &quot;no_reg&quot; = 879259
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:50:43 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE "no_reg" = 879259
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "no_reg", "judul_skripsi", "abstrak", "a"."nama" AS "dp_satu", "b"."nama" AS "dp_dua", "a"."foto" AS "foto_dosen_satu", "b"."foto" AS "foto_dosen_dua"
FROM "tugas_akhir" "c"
JOIN "dosen" "a" ON "c"."dp_satu" = "a"."nip"
JOIN "dosen" "b" ON "c"."dp_dua" = "b"."nip"
WHERE "no_reg" = 879259
ERROR - 2020-11-04 17:50:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:228) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-11-04 17:53:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE &quot;no_reg&quot; = 879259
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-11-04 17:53:42 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE "no_reg" = 879259
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "no_reg", "judul_skripsi", "abstrak", "a"."nama" AS "dp_satu", "b"."nama" AS "dp_dua", "a"."foto" AS "foto_dosen_satu", "b"."foto" AS "foto_dosen_dua"
FROM "tugas_akhir" "c"
JOIN "dosen" "a" ON "c"."dp_satu" = "a"."nip"
JOIN "dosen" "b" ON "c"."dp_dua" = "b"."nip"
WHERE "no_reg" = 879259
ERROR - 2020-11-04 17:53:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:228) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-11-04 17:58:10 --> Severity: Notice --> Undefined variable: hitungkoma_akhir C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 253
ERROR - 2020-11-04 17:58:10 --> Severity: Notice --> Undefined index: idf C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 254
ERROR - 2020-11-04 18:00:46 --> Severity: Notice --> Undefined variable: hitungkoma_akhir C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 253
ERROR - 2020-11-04 18:00:46 --> Severity: Notice --> Undefined index: idf C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 254
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:25 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:26 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:27 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:27 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:27 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:03:27 --> Severity: Warning --> substr_count(): Empty substring C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 251
ERROR - 2020-11-04 18:05:17 --> Severity: Notice --> Undefined variable: hitungkoma_akhir C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 253
ERROR - 2020-11-04 18:05:17 --> Severity: Notice --> Undefined index: idf C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 254
ERROR - 2020-11-04 18:08:01 --> Severity: Notice --> Undefined variable: hitungkoma_akhir C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 253
ERROR - 2020-11-04 18:08:01 --> Severity: Notice --> Undefined index: idf C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 254
