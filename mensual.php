
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
   <link href="./css/main.css" rel="stylesheet" />
   <title>Mensual</title>
</head>

<body class="container">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="panel container">
               <fieldset disabled>
                  <div class="row">
                     <div class="col">
                        <span class="text_item">Para elaboración del relleno y la masa</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Ternera(kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                              session_start();
                              echo $_SESSION['totalTernera'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Espinaca(kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                              echo $_SESSION['totalEspinaca'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Calabaza(kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                              echo $_SESSION['totalCalabaza'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Queso(kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                              echo $_SESSION['totalQueso'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Rebozador(Kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                             
                              echo $_SESSION['totalRebozador'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Harina(Kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                              
                              echo $_SESSION['totalHarina'];
                             
                           ?>">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Huevos(kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item" value="<?php
                  
                              echo $_SESSION['totalHuevo']
                             
                           ?>">
                     </div>
                  </div>
               </fieldset>
            </div>
         </div>
         <div class="col container">
            <div class="row">
               <div class="panel container">
                  <fieldset disabled="disabled">
                     <div class="row">
                        <div class="col">
                           <span class="text_item">Para</span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <span class="text_item">Ravioles(paquetes)</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" 
                           value="<?php
                             
                              echo $_SESSION['totalRavioles'];
                             
                           ?>">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <span class="text_item">Bolsas usadas(unidades)</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" value="<?php
                            
                              echo $_SESSION['totalBolsasUsar'];
                             
                           ?>">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <span class="text_item">Cantidad en Frigorifico(paquetes)</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" value="<?php
                              
                              echo $_SESSION['totalFrigorifico'];
                             
                           ?>">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <span class="text_item">Tiempo Secado(h)</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" value="<?php
                              
                              echo $_SESSION['tiempoSecado'];
                             
                           ?>">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-8">
                           <span class="text_item">Tiempo Amasado(h)</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" value="<?php
                              
                              echo $_SESSION['tiempoAmasado'];
                             
                           ?>">
                        </div>
                     </div>
                  </fieldset>
                  <div class="row">
                     <div class="col">
                        <button type="button" class="button" onclick="location.href='index.php'">Regresar</button>
                     </div>
                     <div class="col">
                        <button type="button" class="button">Salir</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </fieldset>

   </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>