<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio de Sesión Admin</title>
        <link href="<?php echo base_url().'assets/productos/css/styles.css'?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar sesión</h3></div>
                                    <div class="card-body">
                                        <?php if($this->session->userdata('error')):?>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="alert alert-danger">No coinciden los datos</p>
                                            </div>
                                        </div>

                                        <?php endif; ?>
                                        <form action= "<?php echo base_url().'index.php/login/user/sesion'?>" method='post'>
                                            <div class="row mb-3">
                                                <div class="col-center-6">
                                                <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" name='usuario' placeholder="usuario" required/>
                                                        <label for="inputFirstName">Usuario</label>
                                                    </div>
                                                </div>
                                                <div class="col-center-6">
                                                <div class="form-floating mb-3">
                                                      <input class="form-control"  type="password" name='clave'placeholder="contraseña" required/>
                                                <label for="inputEmail">Clave</label>
                                                         </div>
                                                </div>
                                            </div>
                                                         <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" required/>
                                                <label class="form-check-label" for="inputRememberPassword">Aceptar terminos y condiciones</label>
                                            
                                            </div>
                                                <div class="btn btn-primary"><input type="submit" class="btn btn-primary btn-block"></div>
                                            </div>
                                            </form>
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                            <div class="btn btn-primary"><a class="btn btn-primary btn-block" href="<?php echo base_url().'index.php/login/user/registro'?>">Registrate</a></div>

                                            </div>

                                                </div>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url().'assets/productos/js/scripts.js'?>"></script>
    </body>
</html>
