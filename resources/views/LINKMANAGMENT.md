# Appunti sulla gestione dei collegamenti nella view

nella cartella LAYOUT---> ho inserito **dcShow.blade.php dove nel quale andro ad inserire i miei componenti (header, main, footer) e che a sua volta lo inserisco all'interno di **welcome.blade.php il quale verra mostrato tramite route

nella cartella SHARED---> invece si trova **welcome.blade.php il quale poi tramite route sara linkato alla pagina 

nella cartella COMPONENTS---> ci sono come detto prima i componenti che poi andro ad inserire all'interno di **dcShow.blade.php

--------HEADER---------
nell'header avremo i link del menu, per far si che al click portino alla pagina richiesta useremo le routes

## passaggio dati per main

per le cards del mani uso lo scambio di informazioni tra il **welcome.blade.php e main.blade.php

tramite lo @yield() collegato alla @section('main') in **welcome.blade.php