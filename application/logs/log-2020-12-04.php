<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-04 05:18:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  database &quot;uji_cobas&quot; does not exist C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-12-04 05:18:46 --> Unable to connect to the database
ERROR - 2020-12-04 13:34:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE &quot;nip&quot; IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 13:34:31 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE "nip" IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "dosen"
WHERE "nip" IN(196305061990032001)
ERROR - 2020-12-04 13:34:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 13:54:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE &quot;nip&quot; IN(197111112005011001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 13:54:49 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE "nip" IN(197111112005011001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "dosen"
WHERE "nip" IN(197111112005011001)
ERROR - 2020-12-04 13:54:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 13:55:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE &quot;nip&quot; IN(196207061989031004)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 13:55:39 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE "nip" IN(196207061989031004)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "dosen"
WHERE "nip" IN(196207061989031004)
ERROR - 2020-12-04 13:55:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 13:57:45 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 13:57:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 13:57:45 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT "kata_kata", "idf"
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 13:57:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 08:01:27 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 134
ERROR - 2020-12-04 14:02:01 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:02:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:02:01 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT "kata_kata", "idf"
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:02:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:02:31 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:02:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:02:31 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT "kata_kata", "idf"
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:02:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:03:51 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:03:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:03:51 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT "kata_kata", "idf"
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:03:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:07:10 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:07:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:07:10 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT "kata_kata", "idf"
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:07:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:09:15 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:09:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:09:15 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:09:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:12:38 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:12:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:12:38 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:12:59 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:12:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:12:59 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:13:57 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:13:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:13:57 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:14:35 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:14:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:14:35 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:14:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 08:36:05 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 08:36:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 08:36:05 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:39:24 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:39:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:39:24 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:39:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 14:42:17 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 14:42:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 14:42:17 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 14:42:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:95) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 08:44:35 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 08:44:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 08:44:35 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 08:51:33 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 08:51:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 08:51:33 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 09:03:11 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 09:03:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 09:03:11 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 09:07:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(100) C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 09:07:03 --> Query error: ERROR:  value too long for type character varying(100) - Invalid query: INSERT INTO "index" ("kata_kata", "no_doc", "total_dokumen", "idf") VALUES ('rumahmerupakantempatmenyimpanbarangbarangberhargaolehkarenaiturumahharusterhindardaritindakkejahatansepertipencurianterutamaketikarumahditinggalbepergianolehsangpemilikselamainipencurianseringterjadidirumahyangditinggalolehpemiliknyaketikaadaorangasingmemasukirumahseringkalitidakdiketahuiolehorangdisekitarrumahtersebutpadatugasakhiriniakandilakukanpembuatanalatpendeteksidiniadanyapencuriyangmasukrumahyangberjudulrancangbangunpendeteksigerakpadapinturumahberbasisinternetofthingssebagaialatkeamananmenggunakansensorultrasonikyangmenggunakanalarmberupabuzzersertamelaluismartphoneuntukmemonitoringhasilpengujianmenunjukkanbahwasensordapatmendeteksigerakpintudarikondisitertutup0sampaiterbukapintuyaitupadasudut209sampaidengan3137alatakanselalubekerjadanmengirimkannotifikasikesmartphoneapabilasalahsatusensordalamkondisionnoerrordanalattidakakanbekerjadanmengirimkannotifikasikesmartphoneapabilasemuasensordalamkeadaanofferrorberdasarkanhasilujikendalanalatyangdiujialatinimemilikitingkatkeandalan95katakuncipendeteksigerakpintusensorultrasonikinternetofthings', '7db4636b', 1, 1.1139433523068)
ERROR - 2020-12-04 09:58:42 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 09:58:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 09:58:42 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Trying to access array offset on value of type resource C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Trying to access array offset on value of type resource C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Undefined index: stopwords C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Undefined index: stopwords C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Undefined index: stopwords C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Trying to access array offset on value of type int C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 09:59:46 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\tugas-akhir\application\views\test_view.php 7
ERROR - 2020-12-04 10:00:13 --> 404 Page Not Found: Test/index
ERROR - 2020-12-04 10:05:15 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 17
ERROR - 2020-12-04 10:05:59 --> Severity: error --> Exception: syntax error, unexpected '$arrayAbstrak' (T_VARIABLE) C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 14
ERROR - 2020-12-04 10:09:37 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting ';' or ',' C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 16
ERROR - 2020-12-04 10:34:30 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:34:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:34:30 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 10:37:12 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:37:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:37:12 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 10:48:17 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:48:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:48:17 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 10:50:13 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:50:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:50:13 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 10:54:40 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:54:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:54:40 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 10:59:05 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 10:59:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 10:59:05 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 11:08:46 --> Severity: Warning --> pg_escape_literal(): Failed to escape C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 326
ERROR - 2020-12-04 11:08:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 3: WHERE &quot;kata_kata&quot; = 
                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 11:08:46 --> Query error: ERROR:  syntax error at end of input
LINE 3: WHERE "kata_kata" = 
                            ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 
ERROR - 2020-12-04 16:49:51 --> 404 Page Not Found: /index
ERROR - 2020-12-04 23:07:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 3: WHERE &quot;no_reg&quot; = 96448550
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 23:07:01 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 3: WHERE "no_reg" = 96448550
                       ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "no_reg", "judul_skripsi", "abstrak", "dp_satu", "dp_dua"
FROM "tugas_akhir"
WHERE "no_reg" = 96448550
ERROR - 2020-12-04 23:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:120) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-04 17:17:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;DIMAS PANJI ANGGOROJATI&quot;
LINE 3: WHERE &quot;nim&quot; = 'DIMAS PANJI ANGGOROJATI'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 17:17:05 --> Query error: ERROR:  invalid input syntax for type integer: "DIMAS PANJI ANGGOROJATI"
LINE 3: WHERE "nim" = 'DIMAS PANJI ANGGOROJATI'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'DIMAS PANJI ANGGOROJATI'
ERROR - 2020-12-04 17:17:42 --> Severity: Warning --> Use of undefined constant no_reg - assumed 'no_reg' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 112
ERROR - 2020-12-04 17:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;index&quot; violates foreign key constraint &quot;no_doc_const&quot;
DETAIL:  Key (no_doc)=(8e1c45aa) is not present in table &quot;tugas_akhir&quot;. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 17:17:42 --> Query error: ERROR:  insert or update on table "index" violates foreign key constraint "no_doc_const"
DETAIL:  Key (no_doc)=(8e1c45aa) is not present in table "tugas_akhir". - Invalid query: INSERT INTO "index" ("kata_kata", "no_doc", "total_dokumen", "idf") VALUES ('menghitung', '8e1c45aa', 1, 1.3222192947339)
ERROR - 2020-12-04 17:22:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;GUSTY LEONARDY ALUNAT&quot;
LINE 3: WHERE &quot;nim&quot; = 'GUSTY LEONARDY ALUNAT'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 17:22:24 --> Query error: ERROR:  invalid input syntax for type integer: "GUSTY LEONARDY ALUNAT"
LINE 3: WHERE "nim" = 'GUSTY LEONARDY ALUNAT'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'GUSTY LEONARDY ALUNAT'
ERROR - 2020-12-04 17:23:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;IDRIS INDRAWAN&quot;
LINE 3: WHERE &quot;nim&quot; = 'IDRIS INDRAWAN'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-04 17:23:42 --> Query error: ERROR:  invalid input syntax for type integer: "IDRIS INDRAWAN"
LINE 3: WHERE "nim" = 'IDRIS INDRAWAN'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'IDRIS INDRAWAN'
ERROR - 2020-12-04 20:47:14 --> 404 Page Not Found: /index
ERROR - 2020-12-04 20:47:16 --> 404 Page Not Found: /index
ERROR - 2020-12-04 20:47:26 --> 404 Page Not Found: /index
ERROR - 2020-12-04 20:51:28 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\tugas-akhir\application\modules\dashboard\controllers\Home.php 35
