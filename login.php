




<?php

require 'template/header.php'; 
?>

<section class="vh-100 ">
  
<h5 class="robotofont py-4 text-center">INICIO DE SESSIÓN</h5>
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="image/pp.jpeg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email</label>

            <input type="email" id="form1Example13" name="email" placeholder="Email"class="form-control form-control-lg shadow"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Contraseña</label>

            <input type="password" id="form1Example23" name="password" placeholder="Password"  class="form-control form-control-lg shadow"/>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3">Recordar</label>
            </div>
            
            <a href="#!">¿Olvido su contraseña?</a>
          </div>

          <!-- Submit button -->
          <button  type="submit" name="login" value="login" class="btn btn-primary btn-lg btn-block shadow">Iniciar Sesión</button>

         <!--  <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a> -->
         <!--  <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->

        </form>
      </div>
    </div>
  </div>

</section>
<br><br><br><br><br>
<br><br><br>

<?php require 'template/footer.php';
?>
