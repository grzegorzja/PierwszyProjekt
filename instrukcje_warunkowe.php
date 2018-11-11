<html><head><title>PHP Tablice</title></head><body>

        <?php
        echo "<pre>";

        $a = 10;
        
        switch($a)
        {
            case 0:
                echo "a jest równe 0";
                break;
            case 25:
                echo "a jest równe 25" ;
                break;
            case 50:
                echo "a jest równe 50";
                 break;
            default:
                echo "a na pewno nie jest równe 0, 25, 50 \n";
                 break;
        }
        
        $b=50;
        // (warunek) ? jesli prawda to wykonaj : gdy false to wykonaj
        $wiadomosc = ($a>$b) ? "a jest wieksze od b" : "a jest mniejsze badz równe b";
        echo "$wiadomosc \n";
        
        echo ($a>$b) ? $a : $b +15;
        echo "<br/>";
        $isGreenChecked = true;
        echo "<input type='checkbox' name='kolor' value='green' ".($isGreenChecked ? "checked" :"")." /> Green <br/>";
            





        echo "</pre>";
        ?></body></html>


