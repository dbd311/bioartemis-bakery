<div>
    <?php

    use App\Concepts\Category;

//
    echo Form::open(array('action' => 'PainController@add', 'files' => true));
    
    echo Form::label('categorie_du_pain', 'Catégorie : ') . Form::select('categories', Category::lists('category_name', 'id')) . "<br>";

    echo Form::label('lb_nom_du_pain', 'Nom du pain : ') . Form::text('nom_du_pain') . "<br>";

    echo Form::label('lb_description_du_pain', 'Description: ') . Form::textarea('description_du_pain', null, ['class' => 'form-control', 'rows' => 5, 'cols' => 49]) . "<br>";

    echo Form::label('lb_prix_du_pain_au_kilo', 'Prix au kilo: ') . Form::input('number', 'prix_du_pain_au_kilo', null, ['step' => 'any']) . "<br>";

    echo Form::label('lb_poids_du_pain', 'Poids (grs): ') . Form::number('poids_du_pain') . "<br>";

    echo Form::label('lb_prix_du_pain', 'Prix (euros): ') . Form::input('number', 'prix_du_pain', null, ['step' => 'any']) . "<br>";

    echo Form::label('lb_photo1_du_pain', 'Photo 1: ') . Form::file('photo1_du_pain') . "<br>";

    echo Form::label('lb_photo2_du_pain', 'Photo 2: ') . Form::file('photo2_du_pain') . "<br>";

    echo Form::label('lb_photo3_du_pain', 'Photo 3: ') . Form::file('photo3_du_pain') . "<br>";
    echo Form::submit('Enregistrer');
    
    echo Form::close();
    ?>

</div>