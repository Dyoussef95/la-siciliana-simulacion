<?php

require 'Distribuciones.php';


class ControladorProduccion
{

    private $cantidadEmpleados = 0;
    private $totalProduccion = 0; //FALTA INICIALIZAR EN EL DIAGRAMA
    private $produccionDiaria = 0;
    private $bolsasDisponibles = 0;
    private $hora = 0;
    private $banderaAmasado = 0;
    private $cantidadDisponibleEnvasar = 0;
    private $cantidadAFrigorifico = 0;
    private $disponibilidadFrigorifico = 0;
    private $cantidadAsecar = 0;
    private $cantidadDePaquetes = 0;
    private $banderaBolsa = 0;
    private $bolsasUsadas = 0;
    private $cantidadBolsasFaltantes = 0;
    private $cantidadEnvasadaTotal = 0;
    private $cantidadBolsasUsadasTotal = 0;
    private $cantidadBolsasSobrantes = 0;
    private $cantidadTotalFrigorifico = 0;
    private $totalCalabaza = 0;
    private $totalQueso = 0;
    private $totalTernera = 0;
    private $totalEspinaca = 0;
    private $totalRebozador = 0;
    private $armadoTotal = 0;
    private $totalHarina = 0;
    private $totalHuevos = 0;
    private $cantidadEnvasarTotal=0;

    private $bandera1 = 0;
    private $bandera2 = 0;
    private $bandera3 = 0;
    private $bandera4 = 0;
    private $banderaSabor = 0;
    private $banderaSabor2 = 0;
    private $banderaSabor3 = 0;
    private $banderaSabor4 = 0;

    private $harinaPerdida = 0;
    private $huevosPerdidos = 0;
    private $cantidadAamasar = 0;
    private $cantidadHarina = 0;
    private $cantidadHuevos = 0;
    private $cantidadHarinaUsada = 0;
    private $cantidadHuevosUsados = 0;
    private $tiempoAmasado = 0;
    private $cantidadAmasada = 0;
    private $rellenoTotal = 0;
    private $tiempoSecado = 0;
    private $cantidadEnvasadaPorHora = 0;
    private $cantidadCyQ = 0;
    private $cantidadTyE = 0;
    private $cantidadCalabaza = 0;
    private $cantidadQueso = 0;
    private $cantidadTernera = 0;
    private $cantidadEspinaca = 0;
    private $cantidadRebozador = 0;
    private $cantidadArmada = 0;
    private $totalBolsas=0;
    private $bolsasSobrantes=0;
    private $totalFrigorifico=0;
    private $totalRavioles=0;



    public function iniciar($datos)
    {
        foreach ($datos as $key => $value) {
            $datos[$key] = intval($datos[$key]);
        }

        $distribucion = new Distribuciones;
       // echo "<table border='1'>";
        for ($dia = 1; $dia <= $datos['dias']; $dia++) {
            $this->produccionDiaria = intval($distribucion->normal($datos['demanda'], $datos['desviacionDemanda']));

            $this->bolsasDisponibles = intval($distribucion->normal($datos['bolsas'], $datos['desviacionBolsas']));

            $u = $distribucion->g();
            $this->cantidadEmpleados = intval(3 + 2 * $u);

            $this->cantidadAamasar = 0;
            $this->cantidadAmasada = 0;
            $this->cantidadEnvasada = 0;
            $this->bandera1 = 0;
            $this->bandera2 = 0;
            $this->bandera3 = 0;
            $this->bandera4 = 0;
            $this->banderaSabor = 0;
            $this->banderaBolsa = 0;
            $this->banderaSabor2 = 0;
            $this->banderaSabor4 = 0;
            
            for ($this->hora = 1; $this->hora <= 10; $this->hora++) {
           // echo "<tr>";
           // echo "<td>Dia:" . $dia . "</td>";
            //echo "<td>Hora:" . $this->hora . "</td>";

                $this->procesoProductivo();
           // echo "</tr>";    
            }

            
            

            $this->harinaPerdida = 0;
            $this->huevosPerdidos = 0;
            $this->cantidadAamasar = 0;
            $this->cantidadHarina = 0;
            $this->cantidadHuevos = 0;
            $this->cantidadHarinaUsada = 0;
            $this->cantidadHuevosUsados = 0;
            $this->cantidadAmasada = 0;
            $this->rellenoTotal = 0;         
            $this->cantidadEnvasadaPorHora = 0;
            $this->cantidadCyQ = 0;
            $this->cantidadTyE = 0;
            $this->cantidadCalabaza = 0;
            $this->cantidadQueso = 0;
            $this->cantidadTernera = 0;
            $this->cantidadEspinaca = 0;
            $this->cantidadRebozador = 0;
            $this->cantidadArmada = 0;
            $this->cantidadAFrigorifico = 0;
            $this->cantidadDisponibleEnvasar = 0;
            $this->cantidadBolsasFaltantes = 0;
            $this->cantidadBolsasSobrantes = 0;
            $this->bolsasUsadas = 0;
            $this->cantidadDePaquetes = 0;

            $this->totalProduccion = $this->totalProduccion + $this->produccionDiaria;
            $this->totalBolsas=$this->totalBolsas+$this->produccionDiaria + random_int(1, 10);//*******************NUEVO */
            $this->bolsasSobrantes=intval(($datos['bolsas']-$datos['demanda'])*$datos['dias']+($this->totalBolsas-$this->totalProduccion));
            $this->totalFrigorifico=$this->totalFrigorifico+intval($this->produccionDiaria/15);//***********NUEVO */
            $this->totalRavioles=$this->totalProduccion+$this->totalFrigorifico;
            $this->tiempoSecado=intval($this->totalRavioles/500);
            $this->tiempoAmasado=$this->totalRavioles/300;
            if($this->tiempoSecado<1){
                $this->tiempoSecado=2;
            }else if($this->tiempoSecado % 2 == 0){
                $this->tiempoSecado=$this->tiempoSecado*2;
            }else{
                $this->tiempoSecado=($this->tiempoSecado+1)*2;
            }

            if(intval($this->tiempoAmasado)<1){
                $this->tiempoAmasado=1;
            }else if($this->tiempoAmasado % 1 < 1){
                $this->tiempoAmasado=intval($this->tiempoAmasado)+1;
            }
            
        }
       // echo "</table>";
        
        
        session_start();
        $_SESSION['totalCalabaza'] = (($this->totalRavioles)/2)* 0.06;//
        $_SESSION['totalQueso'] = (($this->totalRavioles)/2)* 0.06;
        $_SESSION['totalTernera'] = (($this->totalRavioles)/2)*0.08;//
        $_SESSION['totalEspinaca'] = (($this->totalRavioles)/2)*0.05;
        $_SESSION['totalRebozador'] = $this->totalRebozador;
        $_SESSION['totalRavioles'] = $this->cantidadEnvasadaTotal;
        $_SESSION['totalHarina'] = $this->totalHarina;
        $_SESSION['totalHuevo'] = intval($this->totalHuevos/0.05);
       // $_SESSION['totalBolsasUsar'] = $this->cantidadBolsasUsadasTotal;
        $_SESSION['totalBolsasUsar'] = $this->bolsasSobrantes;//******************nuevo */
       // $_SESSION['totalFrigorifico'] = $this->cantidadTotalFrigorifico;
        $_SESSION['totalFrigorifico'] = $this->totalFrigorifico;//******************nuevo */
        $_SESSION['tiempoSecado'] =$this->tiempoSecado;//cada 500 ravioles, 2 horas
        $_SESSION['tiempoAmasado'] = $this->tiempoAmasado;//cada 300 ravioles, 1 hora de amasado
        $_SESSION['totalRavioles'] = $this->totalProduccion;//**aqui era total produccion
        $_SESSION['totalProduccion'] = $this->totalRavioles;//**aqui era total produccion
       /* echo $_SESSION['totalCalabaza'];
        die();*/
        header("Location: mensual2.php"); 

    }

    public function procesoProductivo()
    {
        $distribucion = new Distribuciones;
        $i = 1;
        while ($i <= $this->cantidadEmpleados) {

            $u = $distribucion->g();
            $proceso = intval(1 + 5 * $u);
           // echo "<tr>";
           // echo "<td> i:" . $i . "</td>";
            if ($proceso == 1) {

                if ($this->produccionDiaria > $this->cantidadAmasada) {
                //    echo "<td>Amasado</td>";
                    $this->amasado();
                    $i++;
                    $this->bandera1 = 1;
                }
            } else if ($proceso == 2) {
                if ($this->produccionDiaria > $this->rellenoTotal) {
                 //   echo "<td>Relleno</td>";
                    $this->relleno();
                    $i++;
                    $this->bandera2 = 1;
                }
            } else if ($proceso == 3 && $this->hora > 1) {
                
                $this->armado();
                
            } else if ($proceso == 4 && $this->bandera3 == 1) {
               
                
                $this->secado();
                $i++;
            } else if ($proceso == 5 && $this->bandera4 == 1) {
                
                $this->envasado();
                $i++;
            }
          //  echo "</tr>";
        }
       
    }

    public function amasado()
    {
        $distribucion = new Distribuciones;
        if ($this->produccionDiaria % 2 == 0) {
            $this->cantidadHarina = $this->produccionDiaria / 2 * (50 / 300);
            $this->cantidadHuevos = $this->produccionDiaria / 2 * (1.5 / 300);
           
            $u = $distribucion->g();
            if ($u <= 0.95) {
                $this->cantidadAamasar = $this->produccionDiaria / 2;
                $this->cantidadHarinaUsada = $this->cantidadHarinaUsada + $this->cantidadHarina;
                $this->cantidadHuevosUsados = $this->cantidadHuevosUsados + $this->cantidadHuevos;
                $this->cantidadAmasada = $this->cantidadAmasada + $this->cantidadAamasar;
            } else {
                $this->harinaPerdida = $this->harinaPerdida + $this->cantidadHarina;
                $this->huevosPerdidos = $this->huevosPerdidos + $this->cantidadHuevos;
            }
            
            $this->tiempoAmasado = $this->tiempoAmasado + 1;
        } else if ($this->banderaAmasado == 0) { //FALTA INICIALIZAR EN EL DIAGRAMA
            $this->cantidadHarina = intval($this->produccionDiaria / 2) * (50 / 300);
            $this->cantidadHuevos = $this->produccionDiaria / 2 * (1.5 / 300);
            $u = $distribucion->g();
            if ($u <= 0.95) {
                $this->cantidadAamasar = $this->produccionDiaria / 2;
                $this->cantidadHarinaUsada = $this->cantidadHarinaUsada + $this->cantidadHarina;
                $this->cantidadHuevosUsados = $this->cantidadHuevosUsados + $this->cantidadHuevos;
                $this->cantidadAmasada = $this->cantidadAmasada + $this->cantidadAamasar;
                $this->banderaAmasado = 1;
            } else {
                $this->harinaPerdida = $this->harinaPerdida + $this->cantidadHarina;
                $this->huevosPerdidos = $this->huevosPerdidos + $this->cantidadHuevos;
            }
            $this->tiempoAmasado = $this->tiempoAmasado + 1;
        } else {
            $this->cantidadHarina = intval($this->produccionDiaria / 2) * (50 / 300);
            $this->cantidadHuevos = intval($this->produccionDiaria / 2) * (1.5 / 300);
            $u = $distribucion->g();
            if ($u <= 0.95) {
                $this->cantidadAamasar = $this->produccionDiaria / 2;
                $this->cantidadHarinaUsada = $this->cantidadHarinaUsada + $this->cantidadHarina;
                $this->cantidadHuevosUsados = $this->cantidadHuevosUsados + $this->cantidadHuevos;
                $this->cantidadAmasada = $this->cantidadAmasada + $this->cantidadAamasar;
            } else {
                $this->harinaPerdida = $this->harinaPerdida + $this->cantidadHarina;
                $this->huevosPerdidos = $this->huevosPerdidos + $this->cantidadHuevos;
            }
            $this->tiempoAmasado = $this->tiempoAmasado + 1;
        }
        $this->totalHarina = $this->totalHarina + $this->cantidadHarinaUsada + $this->harinaPerdida;
        $this->totalHuevos = $this->totalHuevos + $this->cantidadHuevosUsados + $this->huevosPerdidos;
    }

    public function relleno()
    {

        if ($this->produccionDiaria % 2 == 0) {
            if ($this->banderaSabor == 0) {
                $this->cantidadTernera = $this->produccionDiaria / 2 * 0.08;
                $this->cantidadEspinaca = $this->produccionDiaria / 2 * 0.05;
                $this->cantidadRebozador = $this->produccionDiaria / 2 * 0.06;
                $this->banderaSabor = 1;
                $this->cantidadTyE = $this->produccionDiaria / 2;
            } else {
                $this->cantidadCalabaza = $this->produccionDiaria / 2 * 0.06;
                $this->cantidadQueso = $this->produccionDiaria / 2 * 0.06;
                $this->cantidadRebozador = $this->produccionDiaria / 2 * 0.06;
                $this->cantidadCyQ = $this->produccionDiaria / 2;
            }
        } else if ($this->banderaSabor == 0) {
            $this->cantidadTernera = (intval($this->produccionDiaria / 2) + 1) * 0.08;
            $this->cantidadEspinaca = (intval($this->produccionDiaria / 2) + 1) * 0.05;
            $this->cantidadRebozador = (intval($this->produccionDiaria / 2) + 1) * 0.06;
            $this->banderaSabor = 1;
            $this->cantidadTyE = intval($this->produccionDiaria / 2) + 1;
        } else {
            $this->cantidadCalabaza = intval($this->produccionDiaria / 2) * 0.06;
            $this->cantidadQueso = intval($this->produccionDiaria / 2) * 0.06;
            $this->cantidadRebozador = intval($this->produccionDiaria / 2) * 0.06;
            $this->cantidadCyQ = intval($this->produccionDiaria / 2);
        }
        $this->rellenoTotal = $this->cantidadCyQ + $this->cantidadTyE;
        $this->totalCalabaza = $this->totalCalabaza + $this->cantidadCalabaza;
        $this->totalQueso = $this->totalQueso + $this->cantidadQueso;
        $this->totalTernera = $this->totalTernera + $this->cantidadTernera;
        $this->totalEspinaca = $this->totalEspinaca + $this->cantidadEspinaca;
        $this->totalRebozador = $this->totalRebozador + $this->cantidadRebozador;
    }

    public function armado()
    {
        if ($this->produccionDiaria % 2 == 0) {

            if ($this->bandera1 == 1 && $this->bandera2 == 1) {

                if ($this->produccionDiaria > $this->cantidadArmada && $this->cantidadArmada < $this->cantidadAmasada && $this->cantidadArmada < $this->rellenoTotal) {
                //   echo "<td>ArmadoPar</td>";
                    $this->cantidadArmada = $this->cantidadArmada + $this->produccionDiaria / 2;

                    if ($this->banderaSabor3 == 1) {
                        $this->armadoTotal = $this->armadoTotal + $this->cantidadArmada;
                        $this->banderaSabor3 = 0;
                    } else {
                        $this->banderaSabor3 = 1;
                    }
                    $this->bandera3 = 1;
                }
            }
        } else if ($this->bandera1 == 1 && $this->bandera2 == 1) {
            if ($this->produccionDiaria > $this->cantidadArmada && $this->cantidadArmada < $this->cantidadAmasada && $this->cantidadArmada < $this->rellenoTotal) {
          //    echo "<td>ArmadoImpar</td>";
                if ($this->banderaSabor2 == 0) { 
                    $this->cantidadArmada = $this->cantidadArmada + $this->cantidadTyE;
                    $this->banderaSabor2 = 1;
                } else {
                    $this->cantidadArmada = $this->cantidadArmada + $this->cantidadCyQ;
                    $this->armadoTotal = $this->armadoTotal + $this->cantidadArmada;
                }
                $this->bandera3 = 1;
            }
        }
    }

    public function secado()
    {
        if ($this->hora <= 7) {

            if ($this->cantidadDisponibleEnvasar < $this->cantidadArmada) {
                if ($this->banderaSabor4 == 0) {
                    $this->cantidadDisponibleEnvasar = $this->cantidadDisponibleEnvasar + $this->cantidadTyE; 
                    $this->tiempoSecado = $this->tiempoSecado + 2;
                    $this->banderaSabor4 = 1;
                    
                } else {
                    $this->cantidadDisponibleEnvasar = $this->cantidadDisponibleEnvasar + $this->cantidadCyQ; 
                    $this->tiempoSecado = $this->tiempoSecado + 2;
                }
              // echo "<td>Secado</td>";
                $this->bandera4 = 1;    
            }
        } else if ($this->cantidadAsecar < $this->produccionDiaria || $this->bolsasDisponibles < $this->produccionDiaria) {
            $this->cantidadAsecar = $this->produccionDiaria-$this->cantidadDisponibleEnvasar;
            $this->cantidadAFrigorifico = $this->cantidadAFrigorifico + $this->cantidadAsecar;
            $this->cantidadTotalFrigorifico = $this->cantidadTotalFrigorifico + $this->cantidadAFrigorifico; 
         //  echo "<td>SecadoFrigorifico</td>";
        }


    }

    public function envasado()
    {
        if ($this->produccionDiaria % 2 == 0 && $this->hora<8) {
            if($this->cantidadEnvasadaTotal<$this->cantidadDisponibleEnvasar){
                $this->cantidadDePaquetes = $this->produccionDiaria / 2;
            //    echo "<td>EnvasadoPar</td>";
            }         
        } else if ($this->cantidadEnvasadaTotal<$this->cantidadDisponibleEnvasar && $this->hora<8 ) { 
            if($this->banderaBolsa == 0){
                $this->cantidadDePaquetes = $this->cantidadTyE;
                $this->banderaBolsa = 1;
            }else{
                $this->cantidadDePaquetes = $this->cantidadCyQ;
            }
           // echo "<td>EnvasadoImpar</td>";
        } 

        $this->bolsasUsadas = $this->bolsasUsadas + $this->cantidadDePaquetes; 
        if ($this->bolsasDisponibles > $this->bolsasUsadas) {
            $this->cantidadEnvasadaPorHora = $this->cantidadEnvasadaPorHora + $this->cantidadDePaquetes;
            $this->cantidadEnvasadaTotal = $this->cantidadEnvasadaTotal + $this->cantidadEnvasadaPorHora; 
            $this->cantidadBolsasUsadasTotal = $this->cantidadEnvasadaTotal; 
          //  if ($this->cantidadBolsasUsadasTotal < $this->bolsasDisponibles && $this->cantidadDisponibleEnvasar == $this->cantidadEnvasadaTotal) {
           //     $this->cantidadBolsasSobrantes = $this->cantidadBolsasSobrantes + ($this->bolsasDisponibles - $this->cantidadBolsasUsadasTotal);
            //}
       // }else{
        //    $this->cantidadBolsasFaltantes = $this->cantidadBolsasFaltantes + ($this->cantidadDisponibleEnvasar - $this->bolsasDisponibles);
       }
    }
}
