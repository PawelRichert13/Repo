<form method="GET">
    <input type="text" name="waga">
    <input type="text" name="wzrost">
    <input type="submit" name="xd">
</form>

<?php
    if (isset($_GET['xd']))
    {
        $waga = $_GET['waga'];
        $wzrost = $_GET['wzrost'];
        
        

        $bmi = $waga / ($wzrost * $wzrost);

        echo $bmi;         

        if($bmi < 15)     
        echo 'Wygłodzenie'; 
        elseif($bmi >= 15 && $bmi <= 17.4)     
        echo 'Wychudzenie'; 
        elseif($bmi >= 17.5 && $bmi <= 18.4)     
        echo 'Niedowaga'; 
        elseif($bmi >= 18.5 && $bmi <= 24.9)     
        echo 'Wartość prawidłowa'; 
        elseif($bmi >= 25 && $bmi <= 29.9)     
        echo 'Nadwaga'; 
        elseif($bmi >= 30 && $bmi <= 34.9)     
        echo 'I stopień otyłości'; 
        elseif($bmi >= 35 && $bmi <= 39.9)     
        echo 'II stopień otyłości'; 
        elseif($bmi >= 40)
        echo 'III stopień otyłości (otyłość skrajna)';
    }
?>
      
