<html>
<body>
    <?php

//2.1 - for loop
    echo '<u>for loop:</u><br>';
    
    for($i=1;$i<=10;$i++)
    {
        echo $i.' x 5 = '.($i*5).'<br>';
    }

//2.4 - de..while loop
    $i=1;
    
    echo'<br><br><u>do..while loop:</u><br>';
    
    do{
        echo $i.' x 5 = '.($i*5).'<br>';
        $i++;
    }while($i<=10)
        
    ?>  
</body>
</html>
