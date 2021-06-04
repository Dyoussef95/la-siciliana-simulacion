<?php
class ControladorDiario
{
    // Declaración de un método
    public function iniciar(array $datos)
    {

        //convierto los string en float
        foreach ($datos as $key => $value) {
            $datos[$key] = floatval($datos[$key]);
        }
        var_dump($datos);
        die();

        $cantMasa = $this->cantPosibleMasa($datos['harina'], $datos['huevos'], $datos['salMasa']);
        $cantRelleno = $this->cantPosibleRelleno($datos['ternera'], $datos['espinaca'], $datos['calabaza'], $datos['queso'], $datos['rebozador'], $datos['salRelleno']);

        $multRelleno = 300 / 100;



        session_start();
        $_SESSION['tipoDemanda'] = $cantTernera;
        echo $_SESSION['tipoDemanda'];

        header("Location: diario.php");
    }

    public function cantPosibleMasa($harina, $huevos, $sal)
    {
        //calculo los multiplicadores
        $multHarina = 300 / 50;
        $multHuevos = 300 / 30;
        $multSal = 300 / 0.7;
        //calculo las cantidades maximas por cada ingrediente
        $cantHarina = $harina * $multHarina;
        $cantHuevos = $huevos * $multHuevos; //<<<<<<<<<<------------ULTIMA MODIFICACIÓN
        $cantSal = $sal * $multSal;
        //encuentro el mas chico de las cantidades maximas
        $cant = min($cantHarina, $cantHuevos, $cantSal);

        //encuentro lo que sobra de cada ingrediente
        $sobraHarina = ($cantHarina - $cant) / $multHarina;
        $sobraHuevos = ($cantHuevos - $cant) / $multHuevos;
        $sobraSal = ($cantSal - $cant) / $multSal;


        return $cant;
    }

    public function cantPosibleRelleno($ternera, $espinaca, $sal)
    {
        //calculo los multiplicadores
        $multTernera = 100 / 8;
        $multEspinaca = 100 / 5;
        $multRebozadoTYE = 100 / 5;
        $multCalabaza = 100 / 6;
        $multQueso = 100 / 6;
        $multRebozadoCYQ = 100 / 6;
        $multSalRelleno = 100 / 0.75;
        //calculo las cantidades maximas por cada ingrediente
        $cantTernera = $ternera * $multHarina;
        $cantHuevos = $huevos * $multHuevos;
        $cantSal = $sal * $multSal;
        //encuentro el mas chico de las cantidades maximas
        $cant = min($cantHarina, $cantHuevos, $cantSal);

        //encuentro lo que sobra de cada ingrediente
        $sobraHarina = ($cantHarina - $cant) / $multHarina;
        $sobraHuevos = ($cantHuevos - $cant) / $multHuevos;
        $sobraSal = ($cantSal - $cant) / $multSal;



        return $cant;
    }
}
