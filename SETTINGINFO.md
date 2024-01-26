# Settare area di lavoro 

per iniziare a configurare la nostra area di lavoro dobbiamo:
1) installare i pacchetti node per usare -npm- e lo facciamo con il comando **npm install**
2) installare eventualmente scss con **npm i --save-dev sass**
    - dopo aver fatto questo pero dobbiamo cambiare i nostri file, quinid andare in:
        - RESOURCES/CSS/APP.CSS e cambiare il css e app.css con------> SCSS/APP.SCSS
3) successivamente dobbiamo modificare il percorso anche nel file di -vite- che si trova in fondo alle cartelle e file nella cartella di lavoro.
Una volta nel file vite andiamo a cambiare-----> **input: ['resources/scss/app.scss', 'resources/js/app.js'],**  cosi da cambiare la destinazione della vecchia cartella e file da css a scss

- sempre qua in vite dobbiamo eseguire un altra operazione======>
 resolve: {
        alias: {
        '~resources': '/resources/'
        }
    }

    questo codice ci permettera di navigare tra le cartelle per arrivare in resources senza l'uso dei ../ oppure senza scrivere la path completa 

4) dopo aver fatto questo andiamo in---> RESOURCES/JS/APP.JS e andiamo ad importare il scss ----> **import '~resources/scss/app.scss';**  e dopo andiamo ad includere il file APP.JS dove al suo interno abbiamo inserito scss quindi avremo NELLO STESSO POSTO DOVE LINKIAMO CSS IN HTML (VIEW/FILE HTML)-----> **@vite('resources/js/app.js')** 
    - ma nella nostra APP.JS  dobbiamo importare anche:
    ------------------------------
        import.meta.glob([
            '../img/**'
        ]);
        MOLTO IMPORTANTE=======>>>>> QUESTO CI SERVIRA POI PER ANDARE A COMPRIMERE LE IMMAGINI CON VITE QUINDI AVREMO LA CARTELLA IMG IN RESOURCES E CON QUESTO VITE ANDRA AD AGGIUNGERE UN NOME ALLE NOSTRE IMMAGINI LE COMPRIMERA E LE RENDERA VISIBILI IN PUBBLICAZIONE DEL PROGETTO.
        qUANDO ANDIAMO QUINDI AD INCLUDERE UN IMMAGINE USIAMO QUESTA SINTESSI----><img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
        in questo modo verra sempre scritta la path giusta dell'immagine, per il background-img invece si semgue la path normale 
5) INSTALLAZIONE BOOTSTRAP--->
    - prima bisogna installare il pacchetto di bootstrap con il comando---> **npm i --save bootstrap @popperjs/core
    - nel file vite.config.js importiamo ----->IMPORT PATH FROM 'PATH'; che va a gestire la path dei file bootstrap proprio come scritto sopra solamente che qua dobbiamo aggiugere ad alias:
       alias: {
        '~resources': '/resources/',
        '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),<---------------------
        }
    - poi andiamo ad importare bootstrap all'interno del file scss con:
            ----> @import "~bootstrap/scss/bootstrap";

    - in fine se necessario NON OBBLIGATORIO andare ad importare il js di bootstrap:
            ----> import * as bootstrap from 'bootstrap';