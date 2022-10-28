<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>

    <body>
        <h1>Ma page web</h1>
        <?php
        setlocale(LC_TIME, 'fra_fra');
        date_default_timezone_set('Africa/Dakar');
       // echo date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
       // echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
       // echo date('d F Y');        // 11 October 2012
        echo date('d/m/Y');        // 11/10/12
        ?>
        <br>
        <?php  
            setlocale(LC_TIME, 'fra_fra');
            date_default_timezone_set('Africa/Dakar'); 
            echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
        ?>
        <br>
        <?php
            // recuperer la date d'hier 


             $dt = new DateTime("now", new DateTimeZone('Africa/Dakar'));
             echo $dt->format('d/m/yy, H:i:s');
        ?>
        <br>
        <?php 

            setlocale(LC_TIME, 'fra_fra');
            $array= [];
            $day = 0 ;
            while($day <=11 ){
            $hier = new DateTime('+'.$day.' month', new DateTimeZone('Africa/Dakar'));
            $hierEnChiffre = $hier -> format('Y-m').' ';
                echo  $hierEnChiffre;
                $day+=1;
            }

            $hier = new DateTime('-6 day', new DateTimeZone('Africa/Dakar'));
            $hierEnChiffre = $hier -> format('Y-m-d').' ';
                echo  $hierEnChiffre;

        ?>
    </body>

</html>