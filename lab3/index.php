<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen"PHP Fundamental 1"</title>
</head>
<body>
<?php
$a = 10;
$b = 2.5;
$c = 'Hello';
$d = 'World';
$words = 'apple banana orange';
$space1 = strpos($words, ' ');
$space2 = strpos($words, ' ', $space1+1);
?>
<h3>ผลการทำงานใน </h3>
<pre>
<?php
echo '$a = '.$a,';'
?>

$b = <?php echo $b?>;
$c = '<?=$c?>';
$d = '<?php echo $d?>';
##########
$a + $b จะมีค่าเป็น <?php echo $a+$b;?>

$c.' '.$d จะมีค่าเป็น <? echo $c.' '.$d;?> 
##########
$words คำที่ 1 คือ <?php echo substr($words, 0, $space1);?> 
$words คำที่ 2 คือ <?php 
echo substr($words, $space1+1, $space2-($space1+1));?> 
$words คำที่ 3 คือ <?php echo substr($words, $space2+1);?> 
ตัวอักษรที่สุ่มได้จาก $words คือ "<?php
echo $words[rand(0, strlen($words)-1)]?>"
</pon>
</body>
</html>