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

<body class="container">
   <form name="formulario" method="post" action="proceso.php">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-12">
               <div class="panel container">
                  <div class="row">
                     <div class="col">
                        <span class="text_title">Factores</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-9">
                        <div class="row">
                           <div class="col">
                              <span class="text_item">Demanda</span>
                           </div>
                           <div class="col">
                              <input type="text" class="box_item" name="demanda" id="demanda">
                           </div>
                           <div class="col">
                              <span class="text_item">&#177;</span>
                           </div>
                           <div class="col">
                              <input type="text" class="box_item" name="desviacionDemanda" id="desviacionDemanda">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <span class="text_item">Bolsas(cant)</span>
                           </div>
                           <div class="col">
                              <input type="text" class="box_item" name="bolsas" id="bolsas">
                           </div>
                           <div class="col">
                              <span class="text_item">&#177;</span>
                           </div>
                           <div class="col">
                              <input type="text" class="box_item" name="desviacionBolsas" id="desviacionBolsas">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <span class="text_item">Dias</span>
                           </div>
                           <div class="col">
                              <input type="text" class="box_item" name="dias" id="dias">
                           </div>
                           <div class="col-6">

                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="col">
                           <button type="submit" class="button">Simular</button>
                        </div>  
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/main.js"></script>

</html>