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
   <title>Diario</title>
</head>

<body class="container">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="panel container">
               <div class="row">
                  <div class="subPanel container">
                     <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col">
                           <span class="text_item">Kg</span>
                        </div>
                        <div class="col">
                           <span class="text_item">Bolsas</span>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-4">
                           <span class="text_item">Ravioles de CyQ</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item" placeholder="<?php
                           session_start();
                           echo $_SESSION["tipoDemanda"];
                           ?>">
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-4">
                           <span class="text_item">Ravioles de TyE</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-4">
                           <span class="text_item">A almacenar</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-4">
                           <span class="text_item">Pérdidas</span>
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                        <div class="col">
                           <input type="text" class="box_item">
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Tiempo de Produccion(h)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <span class="text_item">Capacidad del Frigorifico(Kg)</span>
                     </div>
                     <div class="col">
                        <input type="text" class="box_item">
                     </div>
                  </div>
                  
                  <div class="row">
                  
                     <div class="col-8">
                        <span class="text_item">¿Se cumple la Demanda?</span>
                     </div>
                     
                     <div class="col">
                        <input type="text" class="box_item">
                     </div>
                     
                  </div>
                  
               </div>
               
            </div>
            
         </div>
         
         <div class="col container">
            <div class="row">
               <div class="panel container">
                  <div class="row">
                     <div class="col">
                     <span class="text_item">Recomendaciones/Notas</span>   
                     </div>
                  </div>                  
                  <textarea class="panel_observaciones form-control" rows="5">                    
                  </textarea>
               </div>
            </div>
            <div class="row">
               <button onclick="location.href='index.php'" class="text_item">Regresar</button>
               <span class="text_item">SI/NO</span>
               <span class="text_item">Salir</span>
            </div>
         </div>

      </div>

   </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>