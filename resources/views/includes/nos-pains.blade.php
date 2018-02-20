<?php

use App\Concepts\Pain;
use App\Concepts\Category;

$categoryID = Request::input('categories');
if (empty($categoryID)) {
    $categoryID = 12; // tous les pains
}
echo Form::open(array('method' => 'POST', 'url' => '/nos-pains'));
echo Form::label('categorie_du_pain', 'Catégorie : ') . Form::select('categories', Category::lists('category_name', 'id'), $categoryID);
echo Form::submit('Chercher');
echo Form::close();


if ($categoryID == 12) {
    $pains = Pain::paginate(5);
} else {
    $pains = Pain::where('category_id', '=', $categoryID)->paginate(5);
}
//echo 'categorie: ' . $category;

if (sizeof($pains) > 0) {
    ?>

    @foreach ($pains as $pain)
    <div class="post-container">
        <h3 class="post-title">{{$pain->name}}</h3>
        <div class="post-thumb"><img src="{{ asset($pain->photo1) }}" alt="{{ $pain->name }}"></div>
        <div class="post-thumb-top"><img src="{{ asset('/img/icons/logo-ab-eu-france.png') }}" alt="agriculture biologique"></div>
        <div class="post-content">
            <p>{{ $pain->description }}</p>                                
            <p><b>Prix :</b> {{ $pain->price }} euros / {{ $pain->weight }} gr</p>
            <p><b>Prix au kilo :</b> {{ $pain->price_per_kilo }} euros</p>
            <div class="post-thumb-bottom-right"><img src="{{ asset('img/icons/nature_et_progres_label_bio.jpg') }}" alt="nature et progres" ></div>
            {{ Pain::displayActions(Auth::user(), $pain) }}
        </div>
    </div>
    @endforeach

    {!! $pains->render() !!}

    <?php
} else {
    echo '<div class="tab-content">Les pains de la catégorie "' . Category::find($categoryID)->category_name . '" sont momentanément indisponible.</div>';
}
?>