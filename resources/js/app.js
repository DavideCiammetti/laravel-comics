import './bootstrap';

// inclusione scss 
import '~resources/scss/app.scss';
import '~resources/scss/partials/info.scss';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

// processare immagini
import.meta.glob([
    '../img/**'
   ]);