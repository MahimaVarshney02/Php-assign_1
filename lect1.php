<?php 
$units=50;
if ($units<=50 )
{
    echo "$units*3.50";
}
elseif ($units<=150) 
{
    echo "$units*4.00";
}
elseif ($units<=200)
{
    echo "$units*5.20";
}
else ($units>=250)
{
    echo "$units*6.50";
}
?>