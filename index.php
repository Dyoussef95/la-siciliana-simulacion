<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
   <link href="./css/main.css" rel="stylesheet" />
   <title>Simulación</title>
</head>

<body class="text-center">
   <main class="form-signin border border-dark border-2 rounded-3 bg-light bg-gradient">
   <?php
    session_start();
      if (isset($_SESSION['validación'])) {
         if($_SESSION['validación']==0){
            echo '<p class="text-danger">Las desviaciones deben ser menores a la 3ra parte de la normal</p>';
         }else if($_SESSION['validación']==2){
            echo '<p class="text-danger">La cantidad de bolsas no debe ser menor a la demanda diaria</p>';
         }       
     }             
      
                             
   ?>

      <form name="formulario" method="post" action="proceso.php" >
         <div class="row-auto">
            <div class="col-auto">
            <img class="mb-4" src="../images/logo.jpg" alt="" width="100" height="100">
               <h2 class="display-4 text-center">Factores</h2>
            </div>
         </div>
         <div class="row-auto">
            <div class="col-auto">
               <div class="row">
                  <div class="col">
                     <span class="">Demanda</span>
                  </div>
                  <div class="col">
                     <input type="number" class="form-control" name="demanda" id="demanda" required>
                  </div>
                  <div class="col">
                     <span class="">&#177;</span>
                  </div>
                  <div class="col">
                     <input type="number" class="form-control" name="desviacionDemanda" id="desviacionDemanda" required>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col">
                     <span class="">Bolsas(cant)</span>
                  </div>
                  <div class="col">
                     <input type="number" class="form-control" name="bolsas" id="bolsas" required>
                  </div>
                  <div class="col">
                     <span class="">&#177;</span>
                  </div>
                  <div class="col">
                     <input type="number" class="form-control" name="desviacionBolsas" id="desviacionBolsas" required>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col">
                     <span class="">Dias</span>
                  </div>
                  <div class="col">
                     <input type="number" class="form-control" name="dias" id="dias" required>
                  </div>
                  <div class="col-6">

                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col">
               <button type="submit" class="w-100 btn btn-lg btn-secondary">Simular</button>
            </div>
         </div>
      </form>


   </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/main.js"></script>

</html>