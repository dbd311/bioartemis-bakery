<?php

if (!Auth::check()) {
    // echo 'user is not logged in!';
    Redirect::to('auth/login')->send();
} else {
    // get user role    
    $user = Auth::user();
//    echo $user;
    switch ($user->role_id) {
        case 0: // admin            
            Redirect::to('dashboard/espace-admin')->send();
            break;
        case 1: // secretaire
            // include espace secretaire
            Redirect::to('dashboard/espace-secretariat')->send();
            break;
        case 2: // client        
            // include espace client
            Redirect::to('dashboard/espace-client')->send();
            break;
        default: // visitor
            // Redirect to home page
            Redirect::to('/')->send();
            break;
    }
}