<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Iniciar Sesión</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <br>
    <div class="alert alert-danger errors">
    {!! Html::ul($errors->all())!!}
    <button class="close" data-close="alert"></button>
    </div>
    {!! Form::open(array('url' => 'login','class'=>'login-form')) !!}
    <div class="form-group">
    {!! Form::label('email','Email', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
    {!! Form::text('email', null, array('class' => 'form-control form-control-solid placeholder-no-fix','placeholder' => 'ejemplo@gmail.com')) !!}
    </div>
    <div class="form-group">
    {!! Form::label('password', 'Contraseña', array('class' => 'control-label visible-ie8 visible-ie9') ) !!}
    {!! Form::password('password', array('class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder'=> 'Contraseña'))!!}
    </div>
    <div class="form-actions">
    {!! Form::submit('Iniciar Sesión' , array('class' => 'btn green uppercase')) !!}
    {!! Form::label('rememberme', 'Recordarme', array('class' => 'rememberme check') ) !!}
    {{ Form::checkbox('remember', 'Remember-me') }}
    </div>
    <div class="login-options">
        <h4>O inicia sesión con:</h4>
            <ul class="social-icons">
                <li>
                    <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                </li>
            </ul>
    </div>
    <div class="create-account">
        <p>
            <a href="javascript:;" id="register-btn" class="uppercase">Crear una cuenta</a>
        </p>
    </div>
    {!! Form::close() !!}
    <!-- END LOGIN FORM -->
    {!! Form::open(array('url' => 'register','class'=>'register-form')) !!}
        <h3 class="font-green">Registro</h3>
        <div class="form-group">
            {!! Form::label('name', 'Nombre', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
            {!! Form::text('name', null, array('class' => 'form-control placeholder-no-fix','placeholder' => 'Nombre Completo')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
            {!! Form::text('email', null, array('class' => 'form-control placeholder-no-fix','placeholder' => 'Email')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('user_name', 'Useario', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
            {!! Form::text('user_name', null, array('class' => 'form-control placeholder-no-fix','placeholder' => 'Usuario')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
            {!! Form::password('password', array('class' => 'form-control placeholder-no-fix', 'id' => 'register_password', 'placeholder'=> 'Contraseña'))!!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirme su contraseña', array('class' => 'control-label visible-ie8 visible-ie9')) !!}
            {!! Form::password('password_confirmation',['class'=>'form-control placeholder-no-fix', 'placeholder'=> 'Confirme su contraseña']) !!}
        </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <div id="register_tnc_error">
                {!! Html::ul($errors->all())!!}
            </div>
        </div>
        <div class="form-actions">
            {!! Html::link('login', 'Atrás', array('class' => 'btn btn-default', 'id' => 'register-back-btn')) !!}
            {!! Form::submit('Registrarse' , array('class' => 'btn btn-success uppercase pull-right', 'id' => 'register-submit-btn')) !!}
        </div>
    </form>
</div>

<div class="copyright"> 2016 © Pavimentos de Colombia S.A.S. </div>
<!--[if lt IE 9]>
<script src="global/plugins/respond.min.js"></script>
<script src="global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>