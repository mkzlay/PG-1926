<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asal Sayı</title>
    
</head>
<body>
    <div>
    <h1>Asal Sayı</h1>

        
        <form>
            <label>Sayıyı giriniz:</label>
            <input type="number" id="fname" name="sayi" value="Sayıyı Giriniz"><br><br>
            <input type="submit" value="Bu sayı asal sayı mı?">
        </form><br>
            <?php 
                
                $degisken = $_GET["sayi"];

                $asal=0; $i=2;
 
                do
                {
                    if ($degisken % $i == 0)
                    {
                        $asal = 1;
                    }
                    $i++;
                }
                while($i<$degisken);
                 
                if ($asal != 1)
                {
                    $sonuc="Bu sayı asaldır";
                }
                else if ($degisken == 2)
                {
                    $sonuc="Bu sayı asaldır";
                }
                else 
                {
                    $sonuc="Bu sayı asal değildir"; 
                }

                echo $degisken;
                echo $sonuc;
                ?>
                
                
                    
            
     </div>

    </body>
</html>