<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


// --- Home page
Route::get('/', function() {
    return view('pages.accueil');
});

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Menu principal
Route::get('painbio', function() {
    return view('pages.painbio');
});

Route::get('nos-pains', function() {
    return view('pages.nos-pains');
});
Route::post('nos-pains', 'PainController@show');

Route::get('acheter', 'Service\ServiceController@acheter');

Route::get('imprimer-mon-panier-pdf', function() {
    // render html content of my cart
    $html = view("/dashboard/espace-client/mon-panier")->render();
    // remove input buttons
    $content = preg_replace("/<input[^>]+\>/i", " ", $html);

////    // build pdf pages from html
//    $filename = "/tmp/tmp.html";
//    $output = "/tmp/tmp.pdf";
////
//    file_put_contents($filename, $content);
////
//    //`wkhtmltopdf --no-stop-slow-scripts --dpi 300 --page-size A4 $filename $output`;
//    $command = shell_exec("xvfb-run -a -s '-screen 0 640x480x16' wkhtmltopdf --javascript-delay 40000 --dpi 300 --page-size A4 $filename $output");


    $pdf = PDF::make(array('disable-javascript'));

    $pdf->addPage($content);

    $pdf->send();
//    return redirect("/dashboard/espace-client/mon-panier")->send();
}
);

//Route::get('imprimer-page', 'Service\ServiceController@printPage');

Route::get('photos-et-videos', function() {
    return view('pages.photos-et-videos');
});

Route::get('points-de-vente', function() {
    return view('pages.points-de-vente');
});

Route::get('contact', function() {
    return view('pages.contact');
});

Route::get('mentions-legales', function() {
    return view('pages.mentions-legales');
});

// example page:
//Route::get('example', 'ExampleController@getExample');
//Route::post('example', 'ExampleController@postExample');
// contact page:
//Route::get('contact', 'ContactController@getContact');
//Route::post('contact', 'ContactController@postContact');

/* * *  Dashboard: *** */
//----- Dashboard (back office) pour admin et manager
Route::get('dashboard', function() {
    return view('dashboard.main');
});

Route::get('dashboard/espace-admin', function() {
    return view('dashboard.espace-admin.welcome');
});

Route::get('dashboard/espace-admin/nos-pains', function() {
    return view('dashboard.espace-admin.nos-pains');
});

Route::get('dashboard/espace-admin/ajouter-pain', function() {
    return view('dashboard.espace-admin.ajouter-pain');
});

Route::get('dashboard/espace-admin/editer-image', function() {
    return view('dashboard.espace-admin.images.edit-image');
});


// gestion des clients
Route::get('dashboard/espace-admin/nos-clients', function() {
    return view('dashboard.espace-admin.nos-clients');
});

// gestion des commandes
Route::get('dashboard/espace-admin/nos-commandes', 'AdminController@showCommandes');
Route::get('dashboard/espace-admin/commandes/show/{commandeID}', 'AdminController@showCommande');
Route::get('dashboard/espace-admin/commandes/modify/{commandeID}', 'AdminController@modify');
Route::get('dashboard/espace-admin/commandes/delete/{commandeID}', 'AdminController@delete');

// Gestion de pains:
// ajouter, modifier un pain
Route::post('pains/ajout', 'PainController@add');
Route::post('pains/modify', 'PainController@modify');

Route::get('dashboard/espace-admin/pains/delete/{painID}', 'PainController@delete');

Route::get('dashboard/espace-admin/pains/modify/{painID}', function ($painID) {
    return view('dashboard.espace-admin.pains.modifier-pain', ['painID' => $painID]);
});


//-----  Espace client ------
Route::get('dashboard/espace-client', function() {
    return view('dashboard.espace-client.welcome');
});


// ajouter/supprimer un pain dans le panier
Route::post('pains/mon-panier/addItem', 'PanierController@addItem');
Route::post('pains/mon-panier/deleteItem', 'PanierController@deleteItem');

// visualiser le panier
Route::get('dashboard/espace-client/mon-panier', function() {
    return view('dashboard.espace-client.mon-panier');
});

// gestion de mes commandes
Route::get('dashboard/espace-client/mes-commandes', 'CommandeController@show');
//Route::post('dashboard/espace-client/mes-commandes', 'CommandeController@checkout');
Route::get('dashboard/espace-client/commandes/show/{commandeID}', 'CommandeController@showCommande');
Route::get('dashboard/espace-client/commandes/modify/{commandeID}', 'CommandeController@modify');
Route::get('dashboard/espace-client/commandes/delete/{commandeID}', 'CommandeController@delete');
Route::get('dashboard/espace-client/commandes/payer/{commandeID}', 'CommandeController@payer');


// sauvegarder mon panier
Route::get('dashboard/espace-client/sauvegarder-mon-panier', 'CommandeController@show');
Route::post('dashboard/espace-client/sauvegarder-mon-panier', 'CommandeController@save');

// gestion des commandes
Route::get('dashboard/espace-client/payer-mes-commandes', 'CommandeController@show');
Route::post('dashboard/espace-client/payer-mes-commandes', 'CommandeController@checkout');

// FAQs

Route::get('pages/faqs/fabrication-pain-bio', function() {
    return view('pages.faqs.fabrication-pain-bio');
});

Route::get('pages/faqs/conservation-pain-bio', function() {
    return view('pages.faqs.conservation-pain-bio');
});

Route::get('pages/faqs/duree-conservation-pain-bio', function() {
    return view('pages.faqs.duree-conservation-pain-bio');
});

Route::get('pages/faqs/pain-au-levain-naturel-bio', function() {
    return view('pages.faqs.pain-au-levain-naturel-bio');
});
