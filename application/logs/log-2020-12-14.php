<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-14 03:26:42 --> 404 Page Not Found: /index
ERROR - 2020-12-14 03:26:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value &quot;15323321121&quot; is out of range for type integer
LINE 3: WHERE &quot;nim&quot; = '15323321121'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 03:26:49 --> Query error: ERROR:  value "15323321121" is out of range for type integer
LINE 3: WHERE "nim" = '15323321121'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = '15323321121'
ERROR - 2020-12-14 03:29:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;http://127.0.0.1:57353/?key=b1b6d27d-710b-4f68-9a78-5c5bbd30b5c1&quot;
LINE 3: WHERE &quot;nim&quot; = 'http://127.0.0.1:57353/?key=b1b6d27d-710b-4f6...
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 03:29:33 --> Query error: ERROR:  invalid input syntax for type integer: "http://127.0.0.1:57353/?key=b1b6d27d-710b-4f68-9a78-5c5bbd30b5c1"
LINE 3: WHERE "nim" = 'http://127.0.0.1:57353/?key=b1b6d27d-710b-4f6...
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'http://127.0.0.1:57353/?key=b1b6d27d-710b-4f68-9a78-5c5bbd30b5c1'
ERROR - 2020-12-14 03:31:53 --> Severity: error --> Exception: Too few arguments to function Control::editLecture(), 0 passed in C:\xampp\htdocs\tugas-akhir\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 107
ERROR - 2020-12-14 03:34:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;prodi&quot; of relation &quot;dosen&quot; does not exist
LINE 1: UPDATE &quot;dosen&quot; SET &quot;nama&quot; = 'agggg', &quot;prodi&quot; = NULL, &quot;pendid...
                                             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 03:34:31 --> Query error: ERROR:  column "prodi" of relation "dosen" does not exist
LINE 1: UPDATE "dosen" SET "nama" = 'agggg', "prodi" = NULL, "pendid...
                                             ^ - Invalid query: UPDATE "dosen" SET "nama" = 'agggg', "prodi" = NULL, "pendidikan_terakhir" = 'S2', "foto" = '747.gif'
WHERE "nip" = 'agggg'
ERROR - 2020-12-14 04:13:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (07, Agung Prakoso, S2, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:13:14 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (07, Agung Prakoso, S2, null, null). - Invalid query: UPDATE "dosen" SET "nama" = 'Agung Prakoso', "program_studi" = NULL, "pendidikan_terakhir" = 'S2', "foto" = NULL
WHERE "nip" = '07'
ERROR - 2020-12-14 04:15:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (07, Agung Prakoso, S2, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:15:56 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (07, Agung Prakoso, S2, null, TF). - Invalid query: UPDATE "dosen" SET "nama" = 'Agung Prakoso', "program_studi" = 'TF', "pendidikan_terakhir" = 'S2', "foto" = NULL
WHERE "nip" = '07'
ERROR - 2020-12-14 04:39:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;nama&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (, null, S1, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:39:59 --> Query error: ERROR:  null value in column "nama" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (, null, S1, null, null). - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('', NULL, NULL, 'S1', NULL)
ERROR - 2020-12-14 04:40:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;nama&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (07, null, null, null, null). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:40:36 --> Query error: ERROR:  null value in column "nama" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (07, null, null, null, null). - Invalid query: UPDATE "dosen" SET "nama" = NULL, "program_studi" = NULL, "pendidikan_terakhir" = NULL, "foto" = NULL
WHERE "nip" = '07'
ERROR - 2020-12-14 04:45:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (0196207061989031004, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:45:08 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (0196207061989031004, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '0196207061989031004'
ERROR - 2020-12-14 04:47:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:47:22 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:49:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:49:47 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:52:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:52:41 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:56:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:56:26 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:57:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:57:38 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:58:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:58:14 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 04:59:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 04:59:17 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:00:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:00:26 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:02:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (4534523423, dfsdfdsf, S3, null, TI). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:02:54 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (4534523423, dfsdfdsf, S3, null, TI). - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('4534523423', 'dfsdfdsf', 'TI', 'S3', NULL)
ERROR - 2020-12-14 05:05:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:05:18 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:19:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:19:53 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:20:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:20:35 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:22:53 --> Severity: error --> Exception: Call to undefined method Control_model::_uploadImage() C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 86
ERROR - 2020-12-14 05:23:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:23:33 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:24:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:24:34 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:27:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:27:15 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:32:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:32:10 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:34:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:34:38 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:35:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:35:01 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 05:36:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 05:36:27 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TD). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TD', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 06:17:38 --> Severity: error --> Exception: syntax error, unexpected '<' C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 240
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:35:56 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\dosen.php 272
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:10 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:11 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:50 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:42:51 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:43:08 --> 404 Page Not Found: /index
ERROR - 2020-12-14 06:48:54 --> Severity: error --> Exception: Too few arguments to function Control::deleteLecture(), 0 passed in C:\xampp\htdocs\tugas-akhir\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 127
ERROR - 2020-12-14 06:57:02 --> 404 Page Not Found: ../modules/control/controllers/Control/POST
ERROR - 2020-12-14 06:57:44 --> Severity: error --> Exception: Call to undefined method Control_model::deleteLecture() C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 129
ERROR - 2020-12-14 06:58:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;id&quot; does not exist
LINE 2: WHERE &quot;id&quot; = '011611143'
              ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 06:58:11 --> Query error: ERROR:  column "id" does not exist
LINE 2: WHERE "id" = '011611143'
              ^ - Invalid query: DELETE FROM "dosen"
WHERE "id" = '011611143'
ERROR - 2020-12-14 06:58:36 --> Severity: Warning --> unlink(./assets/images/dosen_profile/011611143): No such file or directory C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 93
ERROR - 2020-12-14 07:20:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (bf3c23c1ca23ffeea1caff62dde9fe4a4d257759, Gasss, S3, null, TE). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 07:20:42 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (bf3c23c1ca23ffeea1caff62dde9fe4a4d257759, Gasss, S3, null, TE). - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('bf3c23c1ca23ffeea1caff62dde9fe4a4d257759', 'Gasss', 'TE', 'S3', NULL)
ERROR - 2020-12-14 07:26:40 --> Severity: Notice --> Undefined property: Test::$encrypt C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:26:40 --> Severity: error --> Exception: Call to a member function decode() on null C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:28:57 --> Severity: Notice --> Undefined property: Test::$encrypt C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:28:57 --> Severity: error --> Exception: Call to a member function decode() on null C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:29:30 --> Severity: Notice --> Undefined property: Test::$encrypt C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:29:30 --> Severity: error --> Exception: Call to a member function decode() on null C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 15
ERROR - 2020-12-14 07:30:56 --> Severity: Notice --> Undefined property: Test::$encrypt C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 16
ERROR - 2020-12-14 07:30:56 --> Severity: error --> Exception: Call to a member function decode() on null C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 16
ERROR - 2020-12-14 07:38:07 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\tugas-akhir\application\controllers\Test.php 12
ERROR - 2020-12-14 08:27:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (/U1qjSSLFEmAF9TBUzGdKg==, saad, S3, null, TM). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 08:27:37 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (/U1qjSSLFEmAF9TBUzGdKg==, saad, S3, null, TM). - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('/U1qjSSLFEmAF9TBUzGdKg==', 'saad', 'TM', 'S3', NULL)
ERROR - 2020-12-14 08:32:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (34345, sdfdf, S2, null, TI). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 08:32:43 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (34345, sdfdf, S2, null, TI). - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('34345', 'sdfdf', 'TI', 'S2', NULL)
ERROR - 2020-12-14 08:51:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;dosen_pkey&quot;
DETAIL:  Key (nip)=(2343243) already exists. C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 08:51:20 --> Query error: ERROR:  duplicate key value violates unique constraint "dosen_pkey"
DETAIL:  Key (nip)=(2343243) already exists. - Invalid query: INSERT INTO "dosen" ("nip", "nama", "program_studi", "pendidikan_terakhir", "foto") VALUES ('2343243', 'dfgfd', 'TE', 'S3', 'Halo2.jpg')
ERROR - 2020-12-14 09:17:42 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 138
ERROR - 2020-12-14 09:31:30 --> Severity: error --> Exception: Call to undefined function 04.jpg() C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 89
ERROR - 2020-12-14 09:34:28 --> Severity: error --> Exception: Too few arguments to function Control_model::uploadImageNewDosen(), 0 passed in C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php on line 73 and exactly 1 expected C:\xampp\htdocs\tugas-akhir\application\modules\control\models\Control_model.php 116
ERROR - 2020-12-14 09:36:58 --> 404 Page Not Found: /index
ERROR - 2020-12-14 12:43:01 --> 404 Page Not Found: /index
ERROR - 2020-12-14 13:01:39 --> 404 Page Not Found: ../modules/control/controllers/Control/dosen
ERROR - 2020-12-14 13:02:01 --> 404 Page Not Found: ../modules/control/controllers/Control/dosen
ERROR - 2020-12-14 13:02:22 --> 404 Page Not Found: ../modules/control/controllers/Control/dosen
ERROR - 2020-12-14 15:59:52 --> 404 Page Not Found: /index
ERROR - 2020-12-14 16:16:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;wer3545345&quot;
LINE 3: WHERE &quot;nim&quot; = 'wer3545345'
                      ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 16:16:00 --> Query error: ERROR:  invalid input syntax for type integer: "wer3545345"
LINE 3: WHERE "nim" = 'wer3545345'
                      ^ - Invalid query: SELECT "nim"
FROM "mahasiswa"
WHERE "nim" = 'wer3545345'
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:11:48 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 170
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:24:47 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:25:43 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:29:36 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:32:39 --> Severity: Notice --> Undefined variable: selected C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:33:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 185
ERROR - 2020-12-14 17:50:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;program_studi&quot; of relation &quot;mahasiswa&quot; does not exist
LINE 1: UPDATE &quot;mahasiswa&quot; SET &quot;nama&quot; = 'Dennn', &quot;program_studi&quot; = '...
                                                 ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 17:50:55 --> Query error: ERROR:  column "program_studi" of relation "mahasiswa" does not exist
LINE 1: UPDATE "mahasiswa" SET "nama" = 'Dennn', "program_studi" = '...
                                                 ^ - Invalid query: UPDATE "mahasiswa" SET "nama" = 'Dennn', "program_studi" = 'TD'
WHERE "nim" = '15030006'
ERROR - 2020-12-14 18:05:05 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\tugas-akhir\application\modules\control\controllers\Control.php 252
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:11:38 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:11:39 --> 404 Page Not Found: ../modules/control/controllers/Control/%3Cdiv%20style=
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 208
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 218
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 220
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 226
ERROR - 2020-12-14 18:12:59 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 242
ERROR - 2020-12-14 18:13:00 --> 404 Page Not Found: ../modules/control/controllers/Control/%3Cdiv%20style=
ERROR - 2020-12-14 18:13:01 --> 404 Page Not Found: ../modules/control/controllers/Control/%3Cdiv%20style=
ERROR - 2020-12-14 18:13:13 --> 404 Page Not Found: ../modules/control/controllers/Control/%3Cdiv%20style=
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: foto C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 219
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 225
ERROR - 2020-12-14 18:14:16 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 18:14:16 --> 404 Page Not Found: ../modules/control/controllers/Control/%3Cdiv%20style=
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:14:41 --> Severity: Notice --> Undefined index: program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:50:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;prodi&quot; of relation &quot;mahasiswa&quot; does not exist
LINE 1: INSERT INTO &quot;mahasiswa&quot; (&quot;nim&quot;, &quot;nama&quot;, &quot;prodi&quot;) VALUES ('15...
                                                ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 18:50:35 --> Query error: ERROR:  column "prodi" of relation "mahasiswa" does not exist
LINE 1: INSERT INTO "mahasiswa" ("nim", "nama", "prodi") VALUES ('15...
                                                ^ - Invalid query: INSERT INTO "mahasiswa" ("nim", "nama", "prodi") VALUES ('15030006', 'DENO DASEFTRA CESSARA', 'TF')
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 138
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:51:41 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 18:52:01 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 19:00:06 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 19:03:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;ta_prodi&quot; of relation &quot;tugas_akhir&quot; does not exist
LINE 1: ... &quot;judul_skripsi&quot;, &quot;abstrak&quot;, &quot;dp_satu&quot;, &quot;dp_dua&quot;, &quot;ta_prodi&quot;...
                                                             ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 19:03:34 --> Query error: ERROR:  column "ta_prodi" of relation "tugas_akhir" does not exist
LINE 1: ... "judul_skripsi", "abstrak", "dp_satu", "dp_dua", "ta_prodi"...
                                                             ^ - Invalid query: INSERT INTO "tugas_akhir" ("no_reg", "mahasiswa", "judul_skripsi", "abstrak", "dp_satu", "dp_dua", "ta_prodi") VALUES ('00709d08', '15030006', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO', 'VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.
', NULL, NULL, 'TE')
ERROR - 2020-12-14 19:23:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;dp_satu&quot; of relation &quot;tugas_akhir&quot; violates not-null constraint
DETAIL:  Failing row contains (f5441d81, 15030006, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., VLAN merupakan salah satu teknologi komputer yang saat ini sanga..., null, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 19:23:22 --> Query error: ERROR:  null value in column "dp_satu" of relation "tugas_akhir" violates not-null constraint
DETAIL:  Failing row contains (f5441d81, 15030006, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., VLAN merupakan salah satu teknologi komputer yang saat ini sanga..., null, null, TF). - Invalid query: INSERT INTO "tugas_akhir" ("no_reg", "mahasiswa", "judul_skripsi", "abstrak", "dp_satu", "dp_dua", "ta_program_studi") VALUES ('f5441d81', '15030006', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO', 'VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', NULL, NULL, 'TF')
ERROR - 2020-12-14 19:27:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;dp_dua&quot; of relation &quot;tugas_akhir&quot; violates not-null constraint
DETAIL:  Failing row contains (eec0fe39, 15030006, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., VLAN merupakan salah satu teknologi komputer yang saat ini sanga..., 011210095, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 19:27:37 --> Query error: ERROR:  null value in column "dp_dua" of relation "tugas_akhir" violates not-null constraint
DETAIL:  Failing row contains (eec0fe39, 15030006, VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALY..., VLAN merupakan salah satu teknologi komputer yang saat ini sanga..., 011210095, null, TF). - Invalid query: INSERT INTO "tugas_akhir" ("no_reg", "mahasiswa", "judul_skripsi", "abstrak", "dp_satu", "dp_dua", "ta_program_studi") VALUES ('eec0fe39', '15030006', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO', 'VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', '011210095', NULL, 'TF')
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:25:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:28:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 20:28:21 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TF', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 20:29:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 20:29:45 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TF', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 20:31:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 20:31:30 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TF', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 20:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;foto&quot; of relation &quot;dosen&quot; violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 20:32:05 --> Query error: ERROR:  null value in column "foto" of relation "dosen" violates not-null constraint
DETAIL:  Failing row contains (011611144, , S1, null, TF). - Invalid query: UPDATE "dosen" SET "nama" = '', "program_studi" = 'TF', "pendidikan_terakhir" = 'S1', "foto" = NULL
WHERE "nip" = '011611144'
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:42:32 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:42:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;prodi&quot; of relation &quot;mahasiswa&quot; does not exist
LINE 1: UPDATE &quot;mahasiswa&quot; SET &quot;nama&quot; = '', &quot;prodi&quot; = 'TE'
                                            ^ C:\xampp\htdocs\tugas-akhir\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-14 20:42:39 --> Query error: ERROR:  column "prodi" of relation "mahasiswa" does not exist
LINE 1: UPDATE "mahasiswa" SET "nama" = '', "prodi" = 'TE'
                                            ^ - Invalid query: UPDATE "mahasiswa" SET "nama" = '', "prodi" = 'TE'
WHERE "nim" = '15030006'
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:27 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:30 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:43:36 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:44:54 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:00 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:11 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:22 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:45:37 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:46:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:50:52 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:56:02 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:57:37 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:58:33 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 20:59:44 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:01:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:03:43 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: fack C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 187
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:24 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:05:51 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 240
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:07:34 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 197
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:10:40 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 251
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: kd_program_studi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 186
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 21:15:14 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 241
ERROR - 2020-12-14 21:16:39 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 236
ERROR - 2020-12-14 21:16:39 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 236
ERROR - 2020-12-14 21:16:39 --> Severity: Notice --> Undefined index: prodi C:\xampp\htdocs\tugas-akhir\application\modules\control\views\mahasiswa.php 236
