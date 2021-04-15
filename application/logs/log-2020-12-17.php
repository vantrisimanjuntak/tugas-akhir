<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-17 06:31:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  table name &quot;dosen&quot; specified more than once C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 06:31:48 --> Query error: ERROR:  table name "dosen" specified more than once - Invalid query: SELECT *
FROM "tugas_akhir"
JOIN "dosen" ON "tugas_akhir"."dp_satu" = "dosen"."nip"
JOIN "dosen" ON "tugas_akhir"."dp_dua" = "dosen"."nip"
ERROR - 2020-12-17 08:04:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;ANALISIS PENGENDALIAN KUALITAS PRODUKSI PADA PROSES PEMBUATAN JAKET LAFUMA DI PT. TEXTILE REPUBLIC KLATEN RIZKI ADI PRATAMA | 12020031 |Yasrin Zabidi, S.T., M.T | Drs. Suhanto, MT | 23-Aug-2017 &quot;
LINE 3: WHERE &quot;nim&quot; = 'ANALISIS PENGENDALIAN KUALITAS PRODUKSI PADA ...
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 08:04:01 --> Query error: ERROR:  invalid input syntax for type integer: "ANALISIS PENGENDALIAN KUALITAS PRODUKSI PADA PROSES PEMBUATAN JAKET LAFUMA DI PT. TEXTILE REPUBLIC KLATEN RIZKI ADI PRATAMA | 12020031 |Yasrin Zabidi, S.T., M.T | Drs. Suhanto, MT | 23-Aug-2017 "
LINE 3: WHERE "nim" = 'ANALISIS PENGENDALIAN KUALITAS PRODUKSI PADA ...
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'ANALISIS PENGENDALIAN KUALITAS PRODUKSI PADA PROSES PEMBUATAN JAKET LAFUMA DI PT. TEXTILE REPUBLIC KLATEN RIZKI ADI PRATAMA | 12020031 |Yasrin Zabidi, S.T., M.T | Drs. Suhanto, MT | 23-Aug-2017 '
ERROR - 2020-12-17 08:10:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value &quot;1302001513020012&quot; is out of range for type integer
LINE 3: WHERE &quot;nim&quot; = '1302001513020012'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 08:10:08 --> Query error: ERROR:  value "1302001513020012" is out of range for type integer
LINE 3: WHERE "nim" = '1302001513020012'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = '1302001513020012'
ERROR - 2020-12-17 08:48:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;KURNIA HIDAYATULLOH&quot;
LINE 3: WHERE &quot;nim&quot; = 'KURNIA HIDAYATULLOH'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 08:48:41 --> Query error: ERROR:  invalid input syntax for type integer: "KURNIA HIDAYATULLOH"
LINE 3: WHERE "nim" = 'KURNIA HIDAYATULLOH'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'KURNIA HIDAYATULLOH'
ERROR - 2020-12-17 09:58:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;REZKY EKO BAWONO&quot;
LINE 3: WHERE &quot;nim&quot; = 'REZKY EKO BAWONO'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 09:58:37 --> Query error: ERROR:  invalid input syntax for type integer: "REZKY EKO BAWONO"
LINE 3: WHERE "nim" = 'REZKY EKO BAWONO'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'REZKY EKO BAWONO'
ERROR - 2020-12-17 13:58:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;13010009 1&quot;
LINE 3: WHERE &quot;nim&quot; = '13010009 1'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 13:58:23 --> Query error: ERROR:  invalid input syntax for type integer: "13010009 1"
LINE 3: WHERE "nim" = '13010009 1'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = '13010009 1'
ERROR - 2020-12-17 14:40:46 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::details_skripsi_prodi() C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 67
ERROR - 2020-12-17 14:41:14 --> Severity: Notice --> Undefined variable: detail_skripsi_prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 93
ERROR - 2020-12-17 14:41:45 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 93
ERROR - 2020-12-17 14:44:23 --> Severity: error --> Exception: syntax error, unexpected ':', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 93
ERROR - 2020-12-17 14:44:32 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:44:36 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:44:47 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:45:04 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:45:20 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:48:13 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:48:13 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 14:48:27 --> Severity: error --> Exception: Call to a member function result_array() on array C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 92
ERROR - 2020-12-17 14:50:18 --> Severity: error --> Exception: Object of class CI_DB_postgre_result could not be converted to string C:\xampp\htdocs\tugas-akhir\application\modules\control\views\content.php 94
ERROR - 2020-12-17 17:25:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value &quot;1304130400220086&quot; is out of range for type integer
LINE 3: WHERE &quot;nim&quot; = '1304130400220086'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-17 17:25:56 --> Query error: ERROR:  value "1304130400220086" is out of range for type integer
LINE 3: WHERE "nim" = '1304130400220086'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = '1304130400220086'
