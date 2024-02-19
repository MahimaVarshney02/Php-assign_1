<?php
$num=70;
$num1=89;
$num2=95;
$number=$num+$num1+$num2;
if ($number>=250)
{
    echo "A Grade";
}
elseif ($number>=200)
{
    echo "B Grade";
}
elseif ($number>=150)
{
    echo "C Grade";
}
elseif ($number>=100)
{
    echo "D Grade";
}
else
{
    echo "Fail";
}
?>