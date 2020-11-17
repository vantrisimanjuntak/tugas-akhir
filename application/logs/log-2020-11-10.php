<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-10 17:18:02 --> Query error: Table 'ta.kata_imubhan' doesn't exist - Invalid query: SELECT `kata_imbuhan`, `kata_dasar`
FROM `kata_imubhan`
ERROR - 2020-11-10 17:18:45 --> Severity: error --> Exception: Cannot use object of type mysqli as array C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 134
ERROR - 2020-11-10 17:25:46 --> Severity: Notice --> Undefined variable: arrayKataDasar C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 169
ERROR - 2020-11-10 17:25:46 --> Severity: Warning --> array_merge(): Expected parameter 2 to be an array, null given C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 169
ERROR - 2020-11-10 17:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 170
ERROR - 2020-11-10 17:27:46 --> Severity: Notice --> Undefined variable: arrayKataDasar C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 169
ERROR - 2020-11-10 17:27:46 --> Severity: Warning --> array_merge(): Expected parameter 2 to be an array, null given C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 169
ERROR - 2020-11-10 17:27:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\tugas-akhir\application\models\Main_model.php 170
ERROR - 2020-11-10 17:44:50 --> Query error: Unknown column 'where' in 'where clause' - Invalid query: SELECT *
FROM `index`
WHERE `where` = 'sistem'
