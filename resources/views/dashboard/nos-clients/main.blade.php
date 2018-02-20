<?php

use App\User;

// $pains = Pain::all();
//$clients = User::paginate(10);
$clients = User::where('role_id', '>', 1)->paginate(10);
?>

@foreach ($clients as $client)
<div class="post-container">
    <h3 class="post-title">{{$client->name}}</h3>
    <div class="post-thumb-avatar"><?php echo HTML::image($client->avatar, 'avatar') ?></div>
    <div class="post-content-user">
        <p><strong>{{$client->first_name}} {{$client->last_name}}</strong></p>
        <p>Email : <a href="mailto:{{$client->email}}">{{$client->email}}</a></p>
        @if ($client->phone_number)
        <p>Fixe : {{$client->phone_number}}</p>
        @endif
        @if ($client->phone_number_mobile)
        <p>Mobile : {{$client->phone_number_mobile}}</p>
        @endif
        <div><a href="https://www.google.fr/maps/place/{{$client->address}}+{{$client->city}}">{{$client->address}}</a></div>
        <div>{{$client->code_postal}} - {{$client->city}}</div>
        <div>{{$client->country}}</div>
        <?php User::displayActions(Auth::user(), $client) ?>
    </div>
</div>

@endforeach

{!! $clients->render() !!}
