<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-23 07:40:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: fe_sendauth: no password supplied C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-10-23 07:40:45 --> Unable to connect to the database
ERROR - 2020-10-23 07:40:59 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  password authentication failed for user &quot;postgresql&quot; C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-10-23 07:40:59 --> Unable to connect to the database
ERROR - 2020-10-23 08:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; of relation &quot;pecah_kata&quot; violates not-null constraint
DETAIL:  Failing row contains (null, sistem, 7602ab, 1, 0.000000). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-23 08:32:06 --> Query error: ERROR:  null value in column "id" of relation "pecah_kata" violates not-null constraint
DETAIL:  Failing row contains (null, sistem, 7602ab, 1, 0.000000). - Invalid query: INSERT INTO "pecah_kata" ("kata_kata", "no_doc", "total_dokumen", "idf") VALUES ('sistem', '7602ab', 1, 0)
ERROR - 2020-10-23 10:10:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;sample&quot; does not exist
LINE 2: FROM &quot;sample&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-23 10:10:33 --> Query error: ERROR:  relation "sample" does not exist
LINE 2: FROM "sample"
             ^ - Invalid query: SELECT "judul_skripsi", "abstrak", "no_reg", "dp_satu", "dp_dua"
FROM "sample"
ERROR - 2020-10-23 10:10:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;sample&quot; does not exist
LINE 2: FROM &quot;sample&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-23 10:10:40 --> Query error: ERROR:  relation "sample" does not exist
LINE 2: FROM "sample"
             ^ - Invalid query: SELECT "judul_skripsi", "abstrak", "no_reg", "dp_satu", "dp_dua"
FROM "sample"
ERROR - 2020-10-23 10:11:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;sample&quot; does not exist
LINE 2: FROM &quot;sample&quot; &quot;c&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-10-23 10:11:12 --> Query error: ERROR:  relation "sample" does not exist
LINE 2: FROM "sample" "c"
             ^ - Invalid query: SELECT "no_reg", "judul_skripsi", "abstrak", "a"."nama" AS "dp_satu", "b"."nama" AS "dp_dua", "a"."foto" AS "foto_dosen_satu", "b"."foto" AS "foto_dosen_dua"
FROM "sample" "c"
JOIN "dosen" "a" ON "c"."dp_satu" = "a"."nip"
JOIN "dosen" "b" ON "c"."dp_dua" = "b"."nip"
WHERE "no_reg" = 'f085ee'
ERROR - 2020-10-23 10:11:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:145) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
