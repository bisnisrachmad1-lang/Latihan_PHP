<?php
$hasil1 = true and false;
echo '$hasil1 = ';
echo var_dump($hasil1)."<br/>"; // $hasil1 = bool(true)
$hasil2 = (true and false);
echo '$hasil2 = ';
echo var_dump($hasil2)."<br/>"; // $hasil2 = bool(false)
$hasil3 = (true xor false);
echo '$hasil3 = ';
echo var_dump($hasil3)."<br/>"; // $hasil3 = bool(true)
$hasil4 = (false or true && false);
echo '$hasil4 = ';
echo var_dump($hasil4)."<br/>"; // $hasil4 = bool(false)
$a=true;
$b=false;
$hasil5 = ($a and $b || $a or b);
echo '$hasil5 = ';
echo var_dump($hasil5); // $hasil5 = bool(true)
?>

<?php
$a = "Hello ";
$b = "World!";
$a .= $b;
echo $a; // Hello World!
echo "<br />";
$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil= "Saya sedang ".$a.$b.$c;
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>

<?php
$a = "Hello ";
$hasil = "{$a} World!";
echo $hasil; // Hello World!
echo "<br />";
$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil= "Saya sedang {$a}{$b}{$c}";
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>