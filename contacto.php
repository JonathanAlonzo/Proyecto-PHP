<?php
require_once "template/header.php";

?>


<section class=" py-4 robotofont" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Contacto</p>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="email">Email</label>
    <div class="input-group mb-3">
        <span class="input-group-text" ><i class="fas fa-envelope"></i></span>
   
        <input type="email" class="form-control shadow" name="email" placeholder="Email">
    </div>

    <div class="mb-3">
      <div class="mb-3">
      <label for="comment" class="form-label">Describa su problema o dudas para que podamos darle una solución</label>
       
        <textarea class="form-control" name="comment" id="" rows="3"></textarea>
      </div>
    </div>
    </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>
<?php
require_once "template/footer.php";

?>