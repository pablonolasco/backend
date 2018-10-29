<div class="login-box">
    <div class="login-logo">
       <img src="view/img/plantilla/logoE.png" alt="Logo" class="img-responsive" style="margin: 0 auto;"/>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingresa al Sistema</p>

        <form  method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="ingEmail">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="ingPassword">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            <?php
                //instancia de tipo AdministradorController
                $adm=new AdministradorController();
                //manda a llamar metodoo login
                $adm->get_login();

            ?>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
