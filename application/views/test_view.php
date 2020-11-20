<?php
$clean = "Yang boleh yang kusayang adanya";
$test = preg_replace(array('/\badanya\b/', '/\boleh\b/', '/\bini\b/', '/\bitu\b/', '/\byang\b/', '/\bsebagai\b/', '/\bsebuah\b/', '/\byaitu\b/', '/\bdi\b/', '/\bselain\b/', '/\badalah\b/', '/\bdengan\b/'), array(''), $clean);


foreach ($stopwords as $row) {
    $c[] =  '/\b' . $row['stopwords'] . '\b/';
}

$m = array('/\badanya\b/', '/\boleh\b/', '/\bini\b/', '/\bitu\b/', '/\byang\b/', '/\bsebagai\b/', '/\bsebuah\b/', '/\byaitu\b/', '/\bdi\b/', '/\bselain\b/', '/\badalah\b/', '/\bdengan\b/');
print_r($m);

// $gas = preg_replace('/\b$c\b/', array(''), $clean);

echo "<br><br><br>";

print_r($c);

echo "<br><br>";
echo preg_replace($c, array(''), $clean);
// print_r(array('1', 'GFG', '2'));
// echo $test;
// echo $gas;
