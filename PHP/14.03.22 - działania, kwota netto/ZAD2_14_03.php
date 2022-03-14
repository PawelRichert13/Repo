<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="xd"></input>
</form>

<?php
    if(isset($_GET['xd']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2'];
        $podatek= $liczba1 * $liczba2/100;
        $wynik= $liczba1 - $podatek;

        echo "zostanie ci $wynik";

    }
    ?>