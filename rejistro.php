<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
   
<h1  class="d-flex justify-content-center">INICIO DE SESION.</h1>
                <div class="container d-flex justify-content-center">
                <form method="post">
                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">CORREO</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" class="form-control" name="correo" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">CONTRASEÑA</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">*</span>
                          <input type="password" name="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label" for="invalidCheck">
                           No soy un robot
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary" name="enter" type="submit">INICIAR.</button>
                      </div>
                </form>
                </div>
                <?php
                    include("user.php");
                  ?>
                  <?php
$ruta_proyecto = dirname(__FILE__);
echo "La ruta de tu proyecto es: " . $ruta_proyecto;
?>




</body>
</html>