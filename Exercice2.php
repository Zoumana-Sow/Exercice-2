<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <form action="" method="post">
    <label for="choix">Choose(Choix)</label>
    <select name="Select" id="">
    <option value="0">Français</option>
    <option value="1">English</option>
    </select>
    <input type="submit" name="button" value="Valide">
    </form>
    <?php
            
    if (isset($_POST['button'])) {
        $i=0;
        $Tab=array( 
            'Français'=>array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"),
            'English'=>array("January","February","March","April","May","June","July","August","September","October","November","December")
                 );
        if ($_POST['Select']=='0') 
        {   $t=0;
            echo "<table style='border-collapse: collapse; width: 80%; height: 300px;text-align: center;'><br>";
            while($t<12){   
            for ($i=0; $i <3 ; $i++) { 
                echo "<tr>";
                for ($j=0; $j <4 ; $j++) { 
                    echo "<td style='border :1px solid black'>";
                    echo $Tab['Français'][$t];
                    $t++;
                    echo "</td>";
                }
                echo "</tr>";                
            }
        }
        echo "</table>";
    }
        if ($_POST['Select']=='1') {
            $t=0;
            echo "<table style='border-collapse: collapse; width: 80%; height: 300px;text-align: center;'><br>";
            while ($t<12) {
                for ($i=0; $i <3 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j <4 ; $j++) { 
                        echo "<td style='border :1px solid black'>";
                        echo $Tab['English'][$i];
                        $t++;
                        echo "</td>";
                    }
                   echo "</tr>";
                }
                echo "</table>";
            }
            
        }
        
        echo '</table>';
    }
    
    
    ?> 
    
</body>
</html>