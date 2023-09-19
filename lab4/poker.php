<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .spades, .clubs {
            color: black;
        }
        .hearts, .dlams{
            color: red;
        }
    </style>
</head>
<body>
<?php
$suits = ['spades', 'hearts', 'clubs', 'diams']; // ดอกไพ่
$ranks = explode(',', 'A,2,3,4,5,6,7,8,9,10,J,Q,K'); // เลขไพ่
$decks = []; // สำรับไพ่
foreach ($suits as $suit){
    foreach ($ranks as $rank){
        $deck[]=['suit'=>$suit,'rank'=>$rank];
    }
}
    function deal ($deck){
    $tmp = rand(0, 51);
    $card1 = $deck[$tmp];
    $cardA = "
    <span class='{$card1['suit']}'>
      {$card1['rank']}&{$card1['suit']};
    </span>";
unset($deck[$tmp]);
sort($deck);
$card2 = $deck[rand(0, 50)];
$cardB = "
    <span class='{$card2['suit']}'>
        {$card2['rank']}&{$card2['suit']};
    </span>";
return $cardA. '+'.$cardB;
    }
?>
    <h1>ไพ่ที่ได้</h1>
    <h1><?php echo deal($deck); ?></h1>
</body>
</html>