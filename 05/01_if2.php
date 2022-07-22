<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は1000円です';

while ($poket_money >= $fund_raising ) {
    $poket_money = $poket_money - $fund_raising;
    echo '101円貯金しました' . PHP_EOL;
    echo '残高は' . $poket_money . '円です' . PHP_EOL;
}

echo 'あなたはこれ以上募金できません';
