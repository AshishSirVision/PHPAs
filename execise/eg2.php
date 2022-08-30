<?php
function cnt_vowels($a, $l)
{
    $v_cnt = 0;

    for ($i = 0;$i < $l;$i++)
    {
        if (($a[$i] == 'a') || ($a[$i] == 'e') || ($a[$i] == 'i') || ($a[$i] == 'o') || ($a[$i] == 'u') || ($a[$i] == 'A') || ($a[$i] == 'E') || ($a[$i] == 'I') || ($a[$i] == 'O') || ($a[$i] == 'U')) $v_cnt++;
    }
    return $v_cnt;
}
function occur_vowels($a, $l)
{
    $av = $ev = $iv = $ov = $uv = $cnt = 0;
    for ($i = 0;$i < $l;$i++)
    {
        if (($a[$i] == 'a') || ($a[$i] == 'A')) $av++;
        else if (($a[$i] == 'e') || ($a[$i] == 'E')) $ev++;
        else if (($a[$i] == 'i') || ($a[$i] == 'I')) $iv++;
        else if (($a[$i] == 'o') || ($a[$i] == 'O')) $ov++;
        else if (($a[$i] == 'u') || ($a[$i] == 'U')) $uv++;
        else $cnt++;
    }

    echo "<br> Total 'a' : $av";
    echo "<br> Total 'e' : $ev";
    echo "<br> Total 'i' : $iv";
    echo "<br> Total 'o' : $ov";
    echo "<br> Total 'u' : $uv";
    echo "<br> Total consenents are : $cnt";

    $tot = $av + $ev + $iv + $ov + $uv;
    return $tot;
}

$str = $_POST['str'];
$op = $_POST['op'];
$l = strlen($str);
switch ($op)
{
    case 1:
        echo "string is ::  $str<br>";
        $v_cnt = cnt_vowels($str, $l);
        echo "Total vowels are  ::  $v_cnt<br>";
    break;
    case 2:
        echo "string is ::  $str<br>";
        $v_occ = occur_vowels($str, $l);
        echo "lenght is  ::  $v_occ<br>";
    break;
}

$str1 = strrev($str);
$a = strlen($str);
$f = 0;
for ($j = 0;$j < $a;$j++)
{
    if ($str1[$j] == $str[$j])
    {
        $f = 0;
    }
    else
    {
        $f = 1;
        break;
    }
}
if ($f == 0)
{
    echo "string is palindrome";
}
else
{
    echo "string is not palindrome";
}
?>
