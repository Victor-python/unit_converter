<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="all elements">   

            <div class="temperature box">
                <form action="temperature.php" method="post">
                    Fahrenheits to Celcius add fahrenheit: <input type="number" name="ftoc"><br> 
                    Celcius to Fahrenheit add Celcius: <input type="number" name="ctof"><br> 
                    <input type="submit">
                </form> 
            </div>
            <div class="speed box">
                <form action="speed.php" method="post">
                    Kilometers per Hour to Meters per Seconds: <input type="number" name="kmhtoms"><br> 
                    Kilometers per Hour to Knots: <input type="number" name="kmhtok"><br> 
                    <input type="submit">
                </form> 
            </div>
            <div class="mass box">
                <form action="mass.php" method="post">
                    Kilograms in grams add kg: <input type="number" name="kgtog"><br>
                    Grams in kg add kg <input type="number" name="gtokg"><br>
                    <input type="submit">
                </form> 
            </div>
        </div>
    </body>
</html>