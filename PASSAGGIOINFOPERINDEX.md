# passare le informazioni per inice

in questo caso:

Route::get('/info/{id}', function ($id) {

    $comics = config('comicsDb');
    $comic = $comics[$id];
   
    return view('shared.info',  compact('comic'));
});

--->quando si va poi nella pagina non serviranno i foreach perche noi avremo preso l'id tramite questa route sopra quindi sarà solo necessario specificare il tipo di dato che vogliamo prendere 
- {{$comic['price']}}