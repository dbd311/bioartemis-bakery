@extends('layouts.default')
@section('content')
<div class="row">
    <div class="wrap">
        Vous pouvez trouver nos pains bio dans les points de vente suivants :
        <div style="padding-left:20px;padding-top:10px">
            <ul class="service">

                <?php
                $locations = DB::select("SELECT * from selling_points");

                $len = count($locations);
                $googleMapURI = "https://www.google.fr/maps/place/";
                for ($i = 0; $i < $len; $i++) {
                    echo "<li><a href=\"" . $googleMapURI . $locations[$i]->number . "+" . $locations[$i]->street . "+" . $locations[$i]->city . "\">&nabla; " . $locations[$i]->name . "</a></li>";
                }
                ?>

            </ul>
        </div>
    </div>
    <div class="clear"> </div>
</div>

<div id="points_de_vente" style="display: none">
    <?php
    //$locations = DB::select("SELECT * from selling_points");
    foreach ($locations as $loc) {
        echo "$loc->name|$loc->latitude|$loc->longitude::";
    }
    ?>
</div>

@include('includes.points-de-vente')

@stop
