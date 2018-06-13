<?php

// formularz - podaje tam 5 i wyskakuje  12345678910 (a dziesiec bo 10  w zmiennej ponizej) ; - jeden input
// zaznaczamy 10 i 5  - gdzie 10 to ilosc elementow div a 5 to kolejnosc (id) elementu ktory ma byc na czerwono. 

$ilosc = $_POST['ilosc'];
$pozycja = $_POST['pozycja'];



function kolorowanie($ilosc,$pozycja) {
   
   


    for ($i=0; $i<$ilosc; $i++) {
        $dodajKlase = '';
        if($pozycja == $i+1 ) {
            $dodajKlase = 'klasa';
            }
        echo '<div class="'.$dodajKlase.'">paczka'.($i+1).'</div>';
    }

}

echo kolorowanie($ilosc,$pozycja);



















    // echo '<div id="'.$i.'">paczka'.$i.'</div>';





// [paczka1]
// [paczka2]
// [paczka3]
// [paczka4-promocja]
// [paczka5]
// [paczka6]

?>