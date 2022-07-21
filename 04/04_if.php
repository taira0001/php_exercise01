<?php

echo '$score_mathの値を入力して下さい: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力して下さい: ';
$score_english = trim(fgets(STDIN));

if ($score_math >= 80 && $score_english >= 80) {
    echo '合格です';
} elseif ($score_math >= 70 && $score_english >= 50) {
    echo '再試験';
} else{
    echo '不合格';
}

