<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Ignited\Pdf\Facades\Pdf as PDF;
use App\Images\FPDF;

class ServiceController extends AuthController {

    /**
     * Acheter du pain
     * @return type
     */
    public function acheter() {
// captcha instance of the login page
        $captcha = $this->getLoginCaptchaInstance();

        $loginAttempts = Session::get('loginAttempts');
        if ($loginAttempts > 3) {
// passing Captcha Html to register view
            return view('auth.login', ['captchaHtml' => $captcha->Html()]);
        } else {
            return view('pages.acheter', ['captchaHtml' => $captcha->Html()]);
        }
    }

    public function printHTML() {
        // render html content of my cart
        $html = view("/dashboard/espace-client/mon-panier")->render();
        // remove img tags from html
//        $content = preg_replace("/<img[^>]+\>/i", " ", $html);
        // remove button
        $content1 = preg_replace("/<input[^>]+\>/i", " ", $html);

        echo "HTML text: " . $content1;

        // print to pdf
        $pdf = PDF::make();
        $pdf->addPage($content1);
        $pdf->send();
    }

    /**
     * Print previous page
     * @return type
     */
    public function printPage() {
        $url = URL::previous();

//        $url = "http://localhost:8000";
//        $pdf = PDF::make();
//        $pdf->addPage($url);
//        $pdf->send();
//
//        $pdf = new \App\Images\HTML2PDF();
//        $pdf->SetFont('Arial', '', 12);
//        $pdf->AddPage();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
//        if (ini_get('magic_quotes_gpc') == '1') {
//            $text = stripslashes($text);
//        }
//        $pdf->WriteHTML($text);
//
//        $pdf->Output("/tmp/output.pdf");
        //redirect($url)->send();
    }

}
