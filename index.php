
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="some.css">
   
    <title>Document </title>
    <!-- Vinculacion con bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body class="fondo">
   <!-- Esto son las secciones que se muestran (que somos, etc) -->
    <div class="container-sm-4 fondo2">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">¿QUE SOMOS?</button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">¿DONDE NOS PUEDES ENCONTRAR?</button>
              <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>PROXIMAMENTE...</button>
              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">INICIO DE SESION.</button>
              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">REGISTRO.</button>
            </div>
<!-- Este es el apartado de ¿Que somos? -->
            <div class="tab-content  col-sm-10 col-md-10 col-lg-10 col-xl-10" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0" style="background-color:#ffff;">
                <h1 class="d-flex justify-content-center">Bienvenido a papeleria cady</h1>
                <p>Aqui una breve descripcion de lo que es la papeleria cady o lo que se tu escenario real, vacea todos los datos por favor...</p>
                <img src="/foto/54344.jpg" class="mx-auto d-block" width="500px">
                <p>Y bueno.. aqui puedes continuar con tu escritura.. wtf</p>
            </div>
            
<!-- Esta es la ubicacion donde se encuentra el escenario -->
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

              </div>

<!-- Aqui no muevas nada -->
              <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0" style="background-color: #fff;">
                
              </div>

<!-- Aqui esta el inicio de sesion -->
              <div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0" style="background-color: #fff;">
                <div  class="container d-flex justify-content-center">
                <form action="rejistro.php">
                <h1  class="d-flex justify-content-center">INICIAR SESION .</h1>
                
                <button class="btn btn-primary" name="enter" type="submit">INICIAR.</button>
                </form>
                </div>
              </div>


<!-- Aqui creas una nueva cuenta -->
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0" style="background-color: #fff;">
                <h1  class="d-flex justify-content-center">CREAR CUENTA NUEVA.</h1>
                <div class="container d-flex justify-content-center">
                  <form method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                      <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">No compartas tu correo con nadie</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre de usurio.</label>
                      <input type="text" name="user" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" name="passwor" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">No soy un robot.</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enter">Crear</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>

    <?php
    include("lojin.php");
    ?>
</body>
</html>