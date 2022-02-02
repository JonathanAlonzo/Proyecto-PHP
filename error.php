<?php
require('template/header.php')
?>
<!-- <div class=" py-5" style="height: 500px;">
    <p class=" py-5 text-center" style="font-size: 90px;">
    Error 500 
    </p>
</div> -->
<style>

.animated-shadow {
  color: #ffffff;
  font: normal 140px Varela Round, sans-serif;
  height: 140px;
  left: 0;
  letter-spacing: 5px;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
  animation: move linear 2000ms infinite;
  z-index: 2
}
/*Animación para rotar las sombras*/
@keyframes move {
  0% {
    text-shadow:
      4px -4px 0 #da0641,
      3px -3px 0 #da0641,
      2px -2px 0 #da0641,
      1px -1px 0 #da0641,
      -4px 4px 0 #13f1fc,
      -3px 3px 0 #13f1fc,
      -2px 2px 0 #13f1fc,
      -1px 1px 0 #13f1fc
    ;
  }
  25% {
    text-shadow:
      -4px -4px 0 #13f1fc,
      -3px -3px 0 #13f1fc,
      -2px -2px 0 #13f1fc,
      -1px -1px 0 #13f1fc,
      4px 4px 0 #da0641,
      3px 3px 0 #da0641,
      2px 2px 0 #da0641,
      1px 1px 0 #da0641
    ;
  }
  50% {
    text-shadow:
      -4px 4px 0 #da0641,
      -3px 3px 0 #da0641,
      -2px 2px 0 #da0641,
      -1px 1px 0 #da0641,
      4px -4px 0 #13f1fc,
      3px -3px 0 #13f1fc,
      2px -2px 0 #13f1fc,
      1px -1px 0 #13f1fc
    ;
  }
  75% {
    text-shadow:
      4px 4px 0 #13f1fc,
      3px 3px 0 #13f1fc,
      2px 2px 0 #13f1fc,
      1px 1px 0 #13f1fc,
      -4px -4px 0 #da0641,
      -3px -3px 0 #da0641,
      -2px -2px 0 #da0641,
      -1px -1px 0 #da0641
    ;
  }
  100% {
    text-shadow:
      4px -4px 0 #da0641,
      3px -3px 0 #da0641,
      2px -2px 0 #da0641,
      1px -1px 0 #da0641,
      -4px 4px 0 #13f1fc,
      -3px 3px 0 #13f1fc,
      -2px 2px 0 #13f1fc,
      -1px 1px 0 #13f1fc
    ;
  }
}

</style>
<div class="bg-black py-5" style="height: 500px;">
      <h1 class="animated-shadow py-5">ERROR 500</h1>
</div>
<?php
require('template/footer.php')
?>