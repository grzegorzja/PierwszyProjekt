<html><head><title>PHP Tablice</title></head><body>

        <?php
        echo "<pre>";

        $zm1 = true;
        $zm2 = false;

        var_dump($zm1 and $zm2);
        var_dump($zm1 or $zm2);
        var_dump($zm1 xor $zm2);

        if ($zm1 > $zm2)
            echo 'zm1 jest wieksze od zm2';
        else if ($zm1 < $zm2)
            echo 'jednak 2zm jest wieksza';
        else
            echo 'sa rowne';




        echo "</pre>";
        ?></body></html>


