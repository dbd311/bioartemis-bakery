<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Se connecter</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Veuillez vérifier les données saisies.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <?php
                    $loginAttempts = Session::get('loginAttempts');
                    Session::set('loginAttempts', $loginAttempts + 1);
                    ?>
                    @endif

                    <?php echo Form::open(array('method' => 'POST', 'url' => '/auth/login', 'class' => 'form-horizontal', 'role' => 'form')); ?>                    

                         <div class="form-group">
                            <label class="col-md-4 control-label">Adresse email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Mot de passe</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        @if (Session::get('loginAttempts') > 3)
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!-- Captcha image html-->
                                {!! $captchaHtml !!}
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <!-- Captcha code user input textbox -->
                                <input type="text" class="form-control" id="CaptchaCode" name="CaptchaCode" style="width: 276px; margin-top: 5px" />
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Se rappeler de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Connection
                                </button>

                                <a href="{{ URL::to('password/email') }}">Mot de passe oublié ?</a>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
