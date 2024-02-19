<html>
    <body>
        <head><title>Guess Game</title></head>

    <form method="POST">
    <center>
        <h2><b>GUESS GAME</b></h2>
        <input type="text" name="num">
        <button type="submit" name="submit">Guess</button> 
        <button type="reset" name="reset">Resset</button> 
    </form>
    <br>

<?php
$x=rand(1,10);
$num=$_POST['num'];
if (isset($_POST['submit']))
{
    if ($num<$x)
    {
        echo "Your number is lower! <br/>";
    }elseif ($num>$x)
    {
        echo "Your number is higher! <br/>";
    } elseif($num==$x)
    {
        echo "Congratulations! You guessed the write number. <br/>";
    }else
    {
        echo "You didn't set a number! <br/>";
    }
}
?>
</center>
</body>
</html>