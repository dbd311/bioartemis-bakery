<div>
    <?php

    use App\Concepts\Category;
    use App\Concepts\Pain;

// retrieve pain from painID
    $pain = Pain::find($painID);
    echo Form::open(array('action' => 'PainController@modify', 'files' => true));
    echo Form::hidden('pain_id', $painID);
    echo Form::label('categorie_du_pain', 'Catégorie : ') . Form::select('categories', Category::lists('category_name', 'id'), $pain->category_id) . "<br>";

    echo Form::label('lb_nom_du_pain', 'Nom du pain : ') . Form::text('nom_du_pain', $pain->name
    ) . "<br>";

    echo Form::label('lb_description_du_pain', 'Description: ') . Form::textarea('description_du_pain', $pain->description, ['class' => 'form-control', 'rows' => 5, 'cols' => 49]) . "<br>";

    echo Form::label('lb_prix_du_pain_au_kilo', 'Prix au kilo: ') . Form::input('number', 'prix_du_pain_au_kilo', $pain->price_per_kilo, ['step' => 'any']) . "<br>";

    echo Form::label('lb_poids_du_pain', 'Poids (grs): ') . Form::number('poids_du_pain', $pain->weight) . "<br>";

    echo Form::label('lb_prix_du_pain', 'Prix (euros): ') . Form::input('number', 'prix_du_pain', $pain->price, ['step' => 'any']) . "<br>";

    echo Form::label('lb_photo1_du_pain', 'Photo 1: ') . Form::file('photo1_du_pain') . "<br>";

    echo Form::label('lb_photo2_du_pain', 'Photo 2: ') . Form::file('photo2_du_pain') . "<br>";

    echo Form::label('lb_photo3_du_pain', 'Photo 3: ') . Form::file('photo3_du_pain') . "<br>";
    echo Form::submit('Sauvegarder');
    echo Form::close();
    ?>

</div>