<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>

    <body>
        <h1>Ma page web</h1>
        <?php
            date_default_timezone_set('Africa/Dakar');
            echo date('Y-m-d H:i:s');  // 2012-10-11 15:35:53
            echo date('l j F Y, H:i'); // Thursday 11 October 2012, 15:35
            echo date('d F Y');        // 11 October 2012
            echo date('d/m/Y');  
            echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));       // 11/10/12
            function Dates($date){

                $jour=substr($date,0,2);
                $mois =substr($date,3,2);
                $annee = substr($date,6,4);
                $formatAnglais = $annee.'-'.$mois.'-'.$jour;
                return $formatAnglais;
            }
            echo Dates();

        ?>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </body>

</html>