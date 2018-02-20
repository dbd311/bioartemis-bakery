<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
// Importing the BotDetectCaptcha class
use LaravelCaptcha\Integration\BotDetectCaptcha;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Images\ImageProcessing;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar) {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    // get captcha instance to handle for the register page
    private function getRegisterCaptchaInstance() {
        // Captcha parameters:
        $captchaConfig = [
            'CaptchaId' => 'RegisterCaptcha', // a unique Id for the Captcha instance
            'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
            'CaptchaConfigFilePath' => 'captcha_config/RegisterCaptchaConfig.php', // path of the Captcha config file inside your Controllers folder
        ];
        $captcha = BotDetectCaptcha::GetCaptchaInstance($captchaConfig);

        return $captcha;
    }

    public function getRegister() {
        // captcha instance of the register page
        $captcha = $this->getRegisterCaptchaInstance();

        // passing Captcha Html to register view
        return view('auth.register', ['captchaHtml' => $captcha->Html()]);
    }

    public function postRegister(Request $request) {
        $validator = $this->registrar->validator($request->all());

        // captcha instance of the register page
        $captcha = $this->getRegisterCaptchaInstance();

        // validate the user-entered Captcha code when the form is submitted
        $code = $request->input('CaptchaCode');
        $isHuman = $captcha->Validate($code);

        if (!$isHuman || $validator->fails()) {
            if (!$isHuman) {
                $validator->errors()->add('CaptchaCode', 'Wrong code. Try again please.');
            }

            return redirect()
                            ->back()
                            ->withInput()
                            ->withErrors($validator->errors());
        }

        $this->auth->login($this->registrar->create($request->all()));

        $this->updateUser($request);
        return redirect($this->redirectPath());
    }

    /*     * *
     * Update information about the user
     */

    protected function updateUser(Request $request) {
        $user = User::where('email', $request->email)->first();

        //$user->role_id = 2; // client or customer
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

        $user->phone_number = $request->phone_number;
        $user->phone_number_mobile = $request->phone_number_mobile;

        $user->address = $request->home_address;
        $user->code_postal = $request->postal_code;
        $user->city = $request->city;
        $user->country = $request->country;

        // avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            $avatarFileName = ImageProcessing::processPhotoAndResize($avatar, "img/avatars", 30);

            if (!empty($avatarFileName)) {
                $user->avatar = $avatarFileName;
            } else {
                $user->avatar = '/img/avatars/default-small.png';
            }
        }
        $user->save();
    }

    // get captcha instance to handle for the login page
    protected function getLoginCaptchaInstance() {
        // Captcha parameters:
        $captchaConfig = [
            'CaptchaId' => 'LoginCaptcha', // a unique Id for the Captcha instance
            'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
            'CaptchaConfigFilePath' => 'captcha_config/LoginCaptchaConfig.php', // path of the Captcha config file inside your Controllers folder
        ];
        $captcha = BotDetectCaptcha::GetCaptchaInstance($captchaConfig);

        return $captcha;
    }

    /*     * *
     * login
     */

    public function getLogin() {
        // captcha instance of the login page
        $captcha = $this->getLoginCaptchaInstance();

        $loginAttempts = Session::get('loginAttempts');
        if ($loginAttempts > 3) {
            // passing Captcha Html to register view
            return view('auth.login', ['captchaHtml' => $captcha->Html()]);
        } else {
            return view('auth.login', ['captchaHtml' => $captcha->Html()]);
        }
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'CaptchaCode'
        ]);

        // captcha instance of the login page
        $captcha = $this->getLoginCaptchaInstance();

        // validate the user-entered Captcha code when the form is submitted
        $code = $request->input('CaptchaCode');

        $isHuman = true;

        if (Session::get('loginAttempts') > 3) {
            $isHuman = $captcha->Validate($code);
        }

        $errorMessages = [];

        if ($isHuman) {
            $credentials = $request->only('email', 'password');
            if ($this->auth->attempt($credentials, $request->has('remember'))) {
                return redirect()->intended($this->redirectPath());
            } else {
                $errorMessages = 'Identifiant et/ou mot de passe incorrect!';
            }
        } else {
            $errorMessages = ['CaptchaCode' => 'Code de vérification incorrect. Veuillez ré-essayer avec le bon code.'];
        }

        return redirect($this->loginPath())
                        ->withInput($request->only('email', 'remember'))
                        ->withErrors($errorMessages);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout() {
        $this->auth->logout();
        // reset the number of attempts to login
        Session::set('loginAttempts', 0);
        return redirect('auth/login');
    }

}
