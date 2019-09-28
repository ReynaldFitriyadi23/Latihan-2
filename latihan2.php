<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Looping</title>
    <style>
    body{
        background-color:lightseagreen;
    }   
    </style>
</head>
<body>
<h1><center>Bilangan 1-100 untuk Bilangan Genap, Bilangan Ganjil dan Bilangan Prima<center></h1>
    <table border="1" cellpadding="10" align=center cellspacing=0 back>
        <tr>
            <td><b><h3>Bilangan Genap </h3></b></td>
            <td><b><h3>Bilangan Ganjil </h3> </b> </td>
            <td><b><h3>Bilangan Prima </h3></b></td>
        </tr> 
        <tr>
            <td align=center>
                <?php 
                    for($i=1; $i<=100; $i++){
                        if($i%2==0){
                            echo "$i<br>";
                        }
                    }
                ?>
            </td>
            <td align=center>
                <?php
                    for($i=1;$i<=100;$i++){
                        if($i%2==1){
                            echo "$i<br>";
                        }
                    }
                ?>
            </td>
            <td align=center valign=top>
                <?php
                    for ($i=1;$i<=100;$i++){     // for 1, adalah bilangan yang akan di cek
                        $t=0; 
                            for($j=1;$j<= $i;$j++){  // for 2, bilangan pembagi
                                if ($i%$j==0){
                                    $t++;
                                }
                            }
                        if ($t==2){   // syarat atau kondisi bilangan prima
                            echo "$i<br>";
                        }
                    }
                ?>                
            </td>
        </tr>
    </table>  
</body>
</html>