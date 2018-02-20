<?php

namespace App\Http\Controllers;

use App\Concepts\Pain;
use Illuminate\Http\Request;
use App\Images\ImageProcessing;
use Illuminate\Support\Facades\File;

class PainController extends Controller {

    /**
     * Ajouter un nouveau pain
     */
    public function add(Request $request) {
        $row = $this->buildRowFromRequest($request);
        Pain::insert($row);
        //printf("<script language=\"javascript\">alert(\"Le pain %s a été ajouté avec succès!\")</script>", $row['name']);
        return redirect('/dashboard/espace-admin/nos-pains');
    }

    /**
     * Supprimer un pain
     * @param type $painID
     * @return type
     */
    public function delete($painID) {
        // remove all photos
        $pain = Pain::find($painID);
        File::delete($pain->photo1, $pain->photo2, $pain->photo3);
        $pain->delete();

        // redirect to the dashboard
        return redirect('/dashboard/espace-admin/nos-pains');
    }

    /**
     * Modifier un pain à partir de Request
     * @param type $painID
     * @return type
     */
    public function modify(Request $request) {

        $row = $this->buildRowFromRequest($request);
//        print_r($row);
        //echo $row["id"];
        $pain = Pain::find($row["id"]);
        if ($pain != null) {
            $pain->category_id = $row["category_id"];
            $pain->name = $row["name"];
            $pain->description = $row["description"];
            $pain->price_per_kilo = $row["price_per_kilo"];
            $pain->weight = $row["weight"];
            $pain->price = $row["price"];

            if (!empty($row["photo1"])) {
                // delete old photo1
                File::delete($pain->photo1);
                $pain->photo1 = $row["photo1"];
            }
            if (!empty($row["photo2"])) {
                // delete old photo2
                File::delete($pain->photo2);
                $pain->photo2 = $row["photo2"];
            }
            if (!empty($row["photo3"])) {
                // delete old photo3
                File::delete($pain->photo3);
                $pain->photo3 = $row["photo3"];
            }

            // finally save the model
            $pain->save();
        }
        return redirect('/dashboard/espace-admin/nos-pains');
    }

    public function buildRowFromRequest(Request $request) {

        $categoryID = $request->get('categories');
        $name = $request->get('nom_du_pain');
        $description = $request->get('description_du_pain');
        $prix_au_kilo = $request->get('prix_du_pain_au_kilo');
        $poids = $request->get('poids_du_pain');
        $prix = $request->get('prix_du_pain');

        $photo1 = $request->file('photo1_du_pain');
        $photo1FileName = ImageProcessing::processPhoto($photo1, Pain::getImagePath());

        $photo2 = $request->file('photo2_du_pain');
        $photo2FileName = ImageProcessing::processPhoto($photo2, Pain::getImagePath());

        $photo3 = $request->file('photo3_du_pain');
        $photo3FileName = ImageProcessing::processPhoto($photo3, Pain::getImagePath());

        // create a row for pain
        $pain = array('category_id' => $categoryID, 'name' => $name, 'description' => $description, 'price_per_kilo' => $prix_au_kilo, 'weight' => $poids, 'price' => $prix);

        if ($photo1FileName != null) {
            $pain["photo1"] = $photo1FileName;
        }
        if ($photo2FileName != null) {
            $pain["photo2"] = $photo2FileName;
        }
        if ($photo3FileName != null) {
            $pain["photo3"] = $photo3FileName;
        }

        $pain_id = $request->get('pain_id'); // hidden field

        if ($pain_id != null) {
            $pain["id"] = $pain_id;
        }
        return $pain;
    }

    public function show() {
        return view('pages.nos-pains');
    }

}
