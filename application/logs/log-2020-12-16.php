<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-16 03:38:34 --> Severity: Notice --> Undefined variable: arrayStopwords C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 181
ERROR - 2020-12-16 03:38:34 --> Severity: Warning --> preg_replace(): Parameter mismatch, pattern is a string while replacement is an array C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 181
ERROR - 2020-12-16 03:38:34 --> Severity: Notice --> Undefined variable: kataImbuhan C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 202
ERROR - 2020-12-16 03:38:34 --> Severity: Notice --> Undefined variable: kataDasar C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 203
ERROR - 2020-12-16 03:41:12 --> 404 Page Not Found: /index
ERROR - 2020-12-16 04:09:11 --> Severity: error --> Exception: Call to undefined method Control_model::getAllStopwords() C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 332
ERROR - 2020-12-16 04:09:59 --> 404 Page Not Found: ../modules/control/controllers/Control/stopwords
ERROR - 2020-12-16 04:10:02 --> Severity: Notice --> Undefined variable: allStopwords C:\xampp\htdocs\tugas-akhir\application\modules\control\views\stopwords.php 115
ERROR - 2020-12-16 04:10:02 --> Severity: error --> Exception: Call to a member function result_array() on null C:\xampp\htdocs\tugas-akhir\application\modules\control\views\stopwords.php 115
ERROR - 2020-12-16 04:10:02 --> 404 Page Not Found: /index
ERROR - 2020-12-16 04:14:26 --> Severity: Notice --> Undefined variable: stopwords C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 340
ERROR - 2020-12-16 04:28:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kata_kata&quot; does not exist
LINE 3: WHERE &quot;kata_kata&quot; = 'vlan'
              ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 04:28:39 --> Query error: ERROR:  column "kata_kata" does not exist
LINE 3: WHERE "kata_kata" = 'vlan'
              ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 'vlan'
ERROR - 2020-12-16 04:30:42 --> Severity: error --> Exception: Call to undefined method Control_model::getAllStopwords() C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 61
ERROR - 2020-12-16 04:57:26 --> 404 Page Not Found: ../modules/control/controllers/Control/stopwords
ERROR - 2020-12-16 04:59:10 --> 404 Page Not Found: ../modules/control/controllers/Control/stopwords
ERROR - 2020-12-16 13:56:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;Kebutuhan akan internet yang cepat saat ini perlu didukung dengan infrastruktur yang mumpuni. Penggunaan kabel fiber optik dimaksudkan untuk memenuhi kebutuhan tersebut. Kenyataannya, kabel fiber optik perlu penanganan khusus karena kabel ini terbuat dari kaca. Pada PT. Telkom Akses Area Solo Jawa Tengah, salah satu perbaikan yang dilakukan adalah penyambungan kabel dengan metode fusi yang menghasilkan redaman kecil. Selain itu faktor persiapan dan keselamatan perlu diperhatikan untuk meminimalisir kesalahan saat melakukan penyambungan. Kata Kunci : Fiber optic, Metode Fusi, Internet&quot;
LINE 3: WHERE &quot;nim&quot; = 'Kebutuhan akan internet yang cepat saat ini p...
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 13:56:03 --> Query error: ERROR:  invalid input syntax for type integer: "Kebutuhan akan internet yang cepat saat ini perlu didukung dengan infrastruktur yang mumpuni. Penggunaan kabel fiber optik dimaksudkan untuk memenuhi kebutuhan tersebut. Kenyataannya, kabel fiber optik perlu penanganan khusus karena kabel ini terbuat dari kaca. Pada PT. Telkom Akses Area Solo Jawa Tengah, salah satu perbaikan yang dilakukan adalah penyambungan kabel dengan metode fusi yang menghasilkan redaman kecil. Selain itu faktor persiapan dan keselamatan perlu diperhatikan untuk meminimalisir kesalahan saat melakukan penyambungan. Kata Kunci : Fiber optic, Metode Fusi, Internet"
LINE 3: WHERE "nim" = 'Kebutuhan akan internet yang cepat saat ini p...
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'Kebutuhan akan internet yang cepat saat ini perlu didukung dengan infrastruktur yang mumpuni. Penggunaan kabel fiber optik dimaksudkan untuk memenuhi kebutuhan tersebut. Kenyataannya, kabel fiber optik perlu penanganan khusus karena kabel ini terbuat dari kaca. Pada PT. Telkom Akses Area Solo Jawa Tengah, salah satu perbaikan yang dilakukan adalah penyambungan kabel dengan metode fusi yang menghasilkan redaman kecil. Selain itu faktor persiapan dan keselamatan perlu diperhatikan untuk meminimalisir kesalahan saat melakukan penyambungan. Kata Kunci : Fiber optic, Metode Fusi, Internet'
ERROR - 2020-12-16 20:01:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;stopwords&quot; does not exist
LINE 2: FROM &quot;stopwords&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 20:01:12 --> Query error: ERROR:  relation "stopwords" does not exist
LINE 2: FROM "stopwords"
             ^ - Invalid query: SELECT *
FROM "stopwords"
ERROR - 2020-12-16 20:01:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;stopwords&quot; does not exist
LINE 2: FROM &quot;stopwords&quot;
             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 20:01:43 --> Query error: ERROR:  relation "stopwords" does not exist
LINE 2: FROM "stopwords"
             ^ - Invalid query: SELECT *
FROM "stopwords"
ERROR - 2020-12-16 20:03:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kata_kata&quot; does not exist
LINE 3: WHERE &quot;kata_kata&quot; = 'vlan'
              ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 20:03:33 --> Query error: ERROR:  column "kata_kata" does not exist
LINE 3: WHERE "kata_kata" = 'vlan'
              ^ - Invalid query: SELECT *
FROM "index"
WHERE "kata_kata" = 'vlan'
ERROR - 2020-12-16 20:03:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\system\core\Exceptions.php:271) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-16 20:04:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;stopword&quot; does not exist
LINE 3: WHERE &quot;stopword&quot; = 'vlan'
              ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 20:04:28 --> Query error: ERROR:  column "stopword" does not exist
LINE 3: WHERE "stopword" = 'vlan'
              ^ - Invalid query: SELECT *
FROM "index"
WHERE "stopword" = 'vlan'
ERROR - 2020-12-16 20:04:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\system\core\Exceptions.php:271) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
ERROR - 2020-12-16 20:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;stopword&quot; does not exist
LINE 3: WHERE &quot;stopword&quot; = 'vlan'
              ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-16 20:06:06 --> Query error: ERROR:  column "stopword" does not exist
LINE 3: WHERE "stopword" = 'vlan'
              ^ - Invalid query: SELECT *
FROM "index"
WHERE "stopword" = 'vlan'
ERROR - 2020-12-16 20:06:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\tugas-akhir\system\core\Exceptions.php:271) C:\xampp\htdocs\tugas-akhir\system\core\Common.php 570
