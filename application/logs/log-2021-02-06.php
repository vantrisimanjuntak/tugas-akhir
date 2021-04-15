<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-06 09:26:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; of relation &quot;index&quot; violates not-null constraint
DETAIL:  Failing row contains (null, virtual, a882ac39, 1, 0.000000). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-06 09:26:49 --> Query error: ERROR:  null value in column "id" of relation "index" violates not-null constraint
DETAIL:  Failing row contains (null, virtual, a882ac39, 1, 0.000000). - Invalid query: INSERT INTO "index" ("term", "no_doc", "total_dokumen", "idf") VALUES ('virtual', 'a882ac39', 1, 0)
ERROR - 2021-02-06 09:27:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;tugas_akhir_pkey&quot;
DETAIL:  Key (no_reg)=(a882ac39) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-06 09:27:34 --> Query error: ERROR:  duplicate key value violates unique constraint "tugas_akhir_pkey"
DETAIL:  Key (no_reg)=(a882ac39) already exists. - Invalid query: INSERT INTO "tugas_akhir" ("no_reg", "mahasiswa", "judul_skripsi", "abstrak", "dp_satu", "dp_dua", "ta_program_studi") VALUES ('a882ac39', '15030006', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO', 'VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', '011611143', '010904068', 'TF')
ERROR - 2021-02-06 16:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;hasil_pencarian&quot; does not exist
LINE 1: INSERT INTO &quot;hasil_pencarian&quot; (&quot;id&quot;, &quot;keyword&quot;, &quot;dosen&quot;, &quot;sk...
                    ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-06 16:53:43 --> Query error: ERROR:  relation "hasil_pencarian" does not exist
LINE 1: INSERT INTO "hasil_pencarian" ("id", "keyword", "dosen", "sk...
                    ^ - Invalid query: INSERT INTO "hasil_pencarian" ("id", "keyword", "dosen", "skor") VALUES ('9a43670307b015a5cc45', 'google speech', '010209011', 11.111111111111)
ERROR - 2021-02-06 16:53:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:99) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2021-02-06 17:03:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE &quot;nip&quot; IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-06 17:03:39 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE "nip" IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "dosen"
WHERE "nip" IN(196305061990032001)
ERROR - 2021-02-06 17:03:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:99) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2021-02-06 11:05:22 --> Severity: error --> Exception: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) C:\xampp\htdocs\tugas-akhir\application\modules\dashboard\controllers\Home.php 28
ERROR - 2021-02-06 17:07:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE &quot;nip&quot; IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-02-06 17:07:01 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 3: WHERE "nip" IN(196305061990032001)
                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "dosen"
WHERE "nip" IN(196305061990032001)
ERROR - 2021-02-06 17:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php:99) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
