<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="xd"></input>
</form>

<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="xd1"></input>
</form>

<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="xd2"></input>
</form>

<form method="Get">
<input name="liczba1"></input>
<input name="liczba2"></input>
<input type="submit" name="xd3"></input>
</form>

<?php
    if(isset($_GET['xd']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2']; //dodawanie
        
        echo $liczba1 + $liczba2;

    }
       
    if(isset($_GET['xd1']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2']; //odejmowanie
        
        echo $liczba1 - $liczba2;
    }
       
    if(isset($_GET['xd2']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2']; //mnożenie
        
        echo $liczba1 * $liczba2;
    }
       
    if(isset($_GET['xd3']))
    {
        $liczba1= $_GET['liczba1'];
        $liczba2= $_GET['liczba2']; //dzielenie
        
        echo $liczba1 / $liczba2;
    }
?>
