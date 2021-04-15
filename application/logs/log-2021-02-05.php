<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-05 23:08:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;login_time&quot; does not exist
LINE 1: INSERT INTO &quot;login_time&quot; (&quot;id&quot;, &quot;login_id&quot;, &quot;time_login&quot;, &quot;i...
                    ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 23:08:54 --> Query error: ERROR:  relation "login_time" does not exist
LINE 1: INSERT INTO "login_time" ("id", "login_id", "time_login", "i...
                    ^ - Invalid query: INSERT INTO "login_time" ("id", "login_id", "time_login", "ip_address") VALUES ('29513d80', '1', '2021-02-05 23:08:54', '::1')
ERROR - 2021-02-05 17:15:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;kata_imbuhan&quot; does not exist
LINE 2: FROM &quot;kata_imbuhan&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:15:46 --> Query error: ERROR:  relation "kata_imbuhan" does not exist
LINE 2: FROM "kata_imbuhan"
             ^ - Invalid query: SELECT *
FROM "kata_imbuhan"
ERROR - 2021-02-05 17:15:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;kata_imbuhan&quot; does not exist
LINE 2: FROM &quot;kata_imbuhan&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:15:56 --> Query error: ERROR:  relation "kata_imbuhan" does not exist
LINE 2: FROM "kata_imbuhan"
             ^ - Invalid query: SELECT *
FROM "kata_imbuhan"
ERROR - 2021-02-05 23:18:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;login_time&quot; does not exist
LINE 1: INSERT INTO &quot;login_time&quot; (&quot;id&quot;, &quot;login_id&quot;, &quot;time_login&quot;, &quot;i...
                    ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 23:18:28 --> Query error: ERROR:  relation "login_time" does not exist
LINE 1: INSERT INTO "login_time" ("id", "login_id", "time_login", "i...
                    ^ - Invalid query: INSERT INTO "login_time" ("id", "login_id", "time_login", "ip_address") VALUES ('6746a791', '1', '2021-02-05 23:18:28', '::1')
ERROR - 2021-02-05 17:21:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;kata_imbuhan&quot; does not exist
LINE 2: FROM &quot;kata_imbuhan&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:21:38 --> Query error: ERROR:  relation "kata_imbuhan" does not exist
LINE 2: FROM "kata_imbuhan"
             ^ - Invalid query: SELECT *
FROM "kata_imbuhan"
ERROR - 2021-02-05 17:23:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;stopword&quot; does not exist
LINE 2: FROM &quot;stopword&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:23:43 --> Query error: ERROR:  relation "stopword" does not exist
LINE 2: FROM "stopword"
             ^ - Invalid query: SELECT *
FROM "stopword"
ERROR - 2021-02-05 17:25:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;tugas_akhir&quot; does not exist
LINE 2: FROM &quot;tugas_akhir&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:25:10 --> Query error: ERROR:  relation "tugas_akhir" does not exist
LINE 2: FROM "tugas_akhir"
             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM "tugas_akhir"
ERROR - 2021-02-05 17:28:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;dosen&quot; does not exist
LINE 2: FROM &quot;dosen&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:28:11 --> Query error: ERROR:  relation "dosen" does not exist
LINE 2: FROM "dosen"
             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM "dosen"
ERROR - 2021-02-05 17:30:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;mahasiswa&quot; does not exist
LINE 2: FROM &quot;mahasiswa&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:30:04 --> Query error: ERROR:  relation "mahasiswa" does not exist
LINE 2: FROM "mahasiswa"
             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM "mahasiswa"
ERROR - 2021-02-05 17:31:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;index&quot; does not exist
LINE 2: FROM &quot;index&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:31:08 --> Query error: ERROR:  relation "index" does not exist
LINE 2: FROM "index"
             ^ - Invalid query: SELECT COUNT(*) AS "numrows"
FROM "index"
ERROR - 2021-02-05 17:34:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_studi&quot; does not exist
LINE 3: JOIN &quot;program_studi&quot; ON &quot;program_studi&quot;.&quot;kd_program_studi&quot; =...
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-05 17:34:36 --> Query error: ERROR:  relation "program_studi" does not exist
LINE 3: JOIN "program_studi" ON "program_studi"."kd_program_studi" =...
             ^ - Invalid query: SELECT *
FROM "dosen"
JOIN "program_studi" ON "program_studi"."kd_program_studi" = "dosen"."program_studi"
ORDER BY "nama" ASC
