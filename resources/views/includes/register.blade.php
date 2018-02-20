<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">S'inscrire</div>
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
                    @endif

                    <?php echo Form::open(array('method' => 'POST', 'url' => '/auth/register', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form')); ?>                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nom</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                        </div>
                        <label class="col-md-1 control-label">Prénom</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Adresse mail</label>
                        <div class="col-md-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <label class="col-md-1 control-label">Avatar</label>
                        <div class="col-md-4">
                            <?php echo Form::file('avatar', array('accept' => 'image/*')) ?>                                                 </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Mot de passe</label>
                        <div class="col-md-3">
                            <input type="password" class="form-control" name="password">
                        </div>
                        <label class="col-md-2 control-label">Confirmer votre mot de passe</label>
                        <div class="col-md-3">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Téléphone fixe</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                        </div>
                        <label class="col-md-1 control-label">Mobile</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="phone_number_mobile" value="{{ old('phone_number_mobile') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Adresse postale (no, rue)</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Code postal</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">
                        </div>
                        <label class="col-md-1 control-label">Ville</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Pays</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <!-- Captcha image html -->
                            {!! $captchaHtml !!}
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <!-- Captcha code user input textbox -->
                            <input type="text" class="form-control" id="CaptchaCode" name="CaptchaCode" style="width: 276px; margin-top: 5px">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
