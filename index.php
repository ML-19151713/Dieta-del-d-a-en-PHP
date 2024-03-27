<?php
    include 'funcionesExtraerDatosDeLaDieta.php';
    include 'arreglosAuxiliares.php';

    


    //Arreglo para probar de los json (Dietas del paciente):

    $urls = [
        'domingo 4 de febrero' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=21325201',
        'sábado 3 de febrero' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=21324968',
        'jueves 1 de febrero' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=21126708',
        'miércoles 10 de enero' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20871274',
        'viernes 8 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285691',
        'jueves 7 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285689',
        'miércoles 6 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285646',
        'martes 5 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285642',
        'paciente_1 (24 de febrero)' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=vsxzxwxdvurzv&tbl=dinamica&id=21677929',
        'lunes 4 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285638',
        'domingo 3 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20285633',
        'jueves 30 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20017853',
        'miércoles 29 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20017851',
        'martes 28 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20017843',
        'lunes 27 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20017839',
        'domingo 26 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20017835',
        'sábado 25 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=20149347',
        'miércoles 8 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=19744391',
        'lunes 6 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=1f615b69dc55545e953d&tbl=dinamica&id=19644525',
        'Sábado 2 de diciembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=xtzzxxtauqurt&tbl=dinamica&id=19979849',
        'Lunes 27 de noviembre' => 'https://www.minutrimind.net/epco/acciones.php?q=cargar_consulta&t=px&a=xtzzxxtauqurt&tbl=dinamica&id=19979862'
    ];


?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>

    <?php
        
        //Extracción de datos:

        $esObjetoJson = detectarTipoArchivoDeLaDieta($urls['viernes 8 de diciembre'], $urls);

        if(!$esObjetoJson[1]) return;

        $datosDietaDelDia = generarArrayAsociativoConTodosLosDatosDeLaDieta($esObjetoJson[0]);

        $arrayConNombreDeCadaIngesta = extraerElNombreDeCadaIngesta($datosDietaDelDia);


        //Proyección de datos:

        echo '
            <div class="ver_dieta row col-12 p-0 m-0">';

            /*
                Vamos a tomar '$arrayConNombreDeCadaIngesta' para poder
                imprimir el número correcto de divs necesarios para mostrar la dieta
                del día:
            */

            for ($i=0; $i < count($arrayConNombreDeCadaIngesta); $i++) { 

                //Div que cubre toda la ingesta:
                echo '
                    <div class="col-12 ingesta">
                ';
                    $nombreIngesta = $arrayConNombreDeCadaIngesta[$i];
                    
                    $arrayRecetasDeLaIngesta = (($datosDietaDelDia['ingestas'])[$nombreIngesta])['recetas'];
                    
                    if(empty($arrayRecetasDeLaIngesta)) continue;

                    mostrarDivQueLlevaELNombreDeLaIngesta($nombreIngesta);

                    mostrarRecetasDeLaIngesta($arrayRecetasDeLaIngesta);
                    
                    echo "<br><br>";
                
                //Fin del Div que cubre toda la ingesta:
                echo '
                    </div>
                ';


            }

        echo '
            </div>
        ';

        //Aqui empieza la tabla general de equivalentes:

        $valoresEnCeroTablaEquivalentes = [
            
            "Fruta" => 0,
            "Verdura" => 0, 
            "Cereales y tubérculos" => 0, 
            "Cereales con grasa" => 0,
            "Leguminosas" => 0,
            "O.A. muy bajo en grasa" => 0,
            "O.A. bajo en grasa" => 0,
            "O.A. moderado en grasa" => 0,
            "O.A. alto en grasa" => 0,
            "Leche descremada" => 0,
            "Leche semidescremada" => 0,
            "Leche entera" => 0,
            "Azúcar" => 0,
            "Grasa" => 0,
            "Azúcar con grasa" => 0,
            "Grasa con proteina" => 0,
            "Suplemento de proteína" => 0
        ];

        $valoresAInsertarEnTablaEquivalentes = obtenerValoresTablaEquivalentes($datosDietaDelDia);

        foreach ($valoresEnCeroTablaEquivalentes as $clave => $valor) {

            foreach ($valoresAInsertarEnTablaEquivalentes as $siglas => $cantidad) {
                
                if($clave == $siglas){
                    $valoresEnCeroTablaEquivalentes[$clave] = round($cantidad, 1);
                }
            }
        }

        $valoresTablaEquivalentes = &$valoresEnCeroTablaEquivalentes;

        echo '<h2>Tabla general de equivalentes</h2>';

        echo '
            <table class="table mx-auto my-3">

                <thead class="bg-light text-center font-weight-bold">
                    <tr>
                        <td colspan="2" style="font-weight: bold;">Equivalentes</td>
                    </tr>
                </thead>

                <tbody>
        ';

        
        foreach ($valoresTablaEquivalentes as $alimento => $cantidad) {
            echo "
                <tr>
                    <td>$alimento<td>
                    <td>$cantidad<td>
                </tr>
            ";
        }
        
            
        echo '
                </tbody>
            </table>
        ';


        /*
        echo "
            <table>
                <thead>
                    <tr>
                        <td colspan='2'>Equivalentes</td>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Fruta</td>
                        <td>2</td>
                    </tr>
            
                    <tr>
                        <td>Verdura</td>
                        <td>4.4</td>
                    </tr>
            
                </tbody>

            </table>

        ";
        */

    ?>
</body>
</html>


<?php
    //Funciones auxiliares para mostrar la primera parte de la dieta:

    function mostrarDivQueLlevaELNombreDeLaIngesta($nombreIngesta){

        echo "
            <div class='w-100 h4 in1 text-white py-2'>
                <span class='ingesta'>
                    <i class='iconmedio_dia mr-2'></i>
                    $nombreIngesta
                </span>
            </div>
        ";
    }

    function mostrarRecetasDeLaIngesta($arrayRecetasDeLaIngesta){

        foreach ($arrayRecetasDeLaIngesta as $nombreReceta => $arrayConDatosDeLaReceta) {

            $srcImagenSinFormato =($arrayRecetasDeLaIngesta[$nombreReceta])['img'];
            $srcImagen = formatearUrlDelaImagen($srcImagenSinFormato);
            
            echo "
                <div class='w-100 bg-white p-1 text-secondary border m-0 my-1 row elemento'>

                    <div class='col-12 col-md-4 p-2 text-center'>
                        <img class='img-fluid rounded li_img' src='$srcImagen'/>
                    </div>

                    <div class='col-12 col-md-8 p-0 p-md-2 row m-0'>

                        <div class='w-100'>
                            <span class='ingesta'>
                                <strong>$nombreReceta</strong>
                            </span>
                        </div>";

                        //$in = ingrediente
                        for ($in=0; $in < count($arrayConDatosDeLaReceta['ingredientes']); $in++) {
                            
                            $nombreIngrediente = (($arrayConDatosDeLaReceta['ingredientes'])[$in])['nombre'];
                            $cantidad = (($arrayConDatosDeLaReceta['ingredientes'])[$in])['cantidad'];
                            $stringCaseras =  (($arrayConDatosDeLaReceta['ingredientes'])[$in])['caseras'];
                            $cantidadDeCaseras = obtenerCantidadDeCaseras($stringCaseras);

                            global $alimentosQueSeMidenEnMililitros;

                            $unidadDeMedida = obtenerUnidadDeMedidaSegunElIngrediente($nombreIngrediente, $alimentosQueSeMidenEnMililitros);


                            if ($cantidadDeCaseras == 0){
                                echo "
                                    <div class='alimento w-100 text-left text-secondary  border p-1 '>
                                        <span>$nombreIngrediente $cantidad $unidadDeMedida</span>
                                    </div>
                                ";
                                continue;
                            }
                                 
                            $proporcional = $cantidad /$cantidadDeCaseras;
                            (($arrayConDatosDeLaReceta['ingredientes'])[$in])['proporcional'] = $proporcional;
                            
                            global $valoresUniCode;

                            if ($proporcional < 1){
                            
                                $medidaProporcional = encontrarValorUnicodeMasAdecuado($valoresUniCode, $proporcional);
   
                            }else{

                                $diferencia = $proporcional-intval($proporcional);

                                if($diferencia == 0) $medidaProporcional = $proporcional;

                                $enterosDeLaMedidaProporcional = $proporcional - $diferencia;

                                $parteFraccionaria = encontrarValorUnicodeMasAdecuado($valoresUniCode, $diferencia);

                                $medidaProporcional = "$enterosDeLaMedidaProporcional $parteFraccionaria";
                                
                            }
                            
                            $unidadMedidaCaseras = obtenerUnidadDeMedidaCaseras($stringCaseras, $proporcional);
                        
                            echo "
                                <div class='alimento w-100 text-left text-secondary  border p-1 '>
                                    <span>$nombreIngrediente $cantidad $unidadDeMedida , $medidaProporcional $unidadMedidaCaseras</span>
                                </div>
                            ";
                        }
            
            echo "
                    </div>

                </div>
            ";
        }

    }

    function formatearUrlDelaImagen($srcImagenSinFormato){
    
        $urlFormateada = str_replace("%2F", "/", $srcImagenSinFormato);
        $urlFormateada = str_replace("%3A", ":", $urlFormateada);
    
        //la subString es la parte que se va a remover de la url.
        $subString = "https://cdn.minutrimind.net/";
    
        //strpos encuentra la posición de la primera aparición de una subcadena en una cadena.
    
        if (strpos($urlFormateada, $subString) !== false) {
    
            $urlModificada = substr($urlFormateada, strpos($urlFormateada, $subString) + strlen($subString));
            $urlFormateada = "https://archivos-nutrimind.s3.amazonaws.com/". $urlModificada;
            return $urlFormateada;
    
        } elseif (str_starts_with($urlFormateada, "/epco/images")){
    
            // Encontrar en la url la posición de "plate"
            $posicion = strpos($urlFormateada, "plate");
    
            // Extraer el path a partir de "plate"
            $urlFormateada = substr($urlFormateada, $posicion);
            
            return "./".$urlFormateada;
    
        }
    }

    function obtenerUnidadDeMedidaSegunElIngrediente($nombreIngrediente, $alimentosQueSeMidenEnMililitros){


        if (in_array(strtolower($nombreIngrediente), $alimentosQueSeMidenEnMililitros)){
            return 'ml';
        }else{
            return 'g';
        }

    }

    function obtenerCantidadDeCaseras($stringCaseras) {

        if(!is_string($stringCaseras)) return;

        // Buscar la posición del primer signo igual (=)
        $posicion_igual = strpos($stringCaseras, '=');
        
        // Verificar si se encontró el signo igual
        if ($posicion_igual !== false) {
            // Obtener la parte de la cadena después del signo igual
            $cantidad_string = substr($stringCaseras, $posicion_igual + 1);
            
            // Remover cualquier guion bajo (_) al final de la cadena
            $cantidad_string = rtrim($cantidad_string, '_');
            
            // Convertir la cadena a un número de punto flotante (float)
            $cantidad_float = (float)$cantidad_string;
            
            return $cantidad_float;
        } else {
            // Si no se encuentra el signo igual en la cadena, devolver null o mostrar un mensaje de error según sea necesario
            return null;
        }
    }


    function encontrarValorUnicodeMasAdecuado($valoresUniCode, $proporcional){

        //echo $proporcional;
        if($proporcional> 0.39 && $proporcional<0.60) return $valoresUniCode['0.5'];

        if($proporcional> 0.24 && $proporcional<0.3) return $valoresUniCode['0.25'];

        if($proporcional> 0.29 && $proporcional<0.4) return $valoresUniCode['0.3333'];

        if($proporcional>0.9 && $proporcional<1) return $valoresUniCode['0.95'];

        if($proporcional >0.14 && $proporcional < 0.25) return $valoresUniCode['0.2'];

        if($proporcional > 0.7 && $proporcional < 0.85) return $valoresUniCode['0.75'];

        if($proporcional >0 && $proporcional < 0.15) return 0.1;

        if($proporcional > 0.59 && $proporcional < 0.71) return $valoresUniCode['0.66'];
        
    }

    function obtenerUnidadDeMedidaCaseras($stringCaseras, $proporcional){

        global $siglasCaseras;  $todasLasSiglas = &$siglasCaseras;
        // Divide la cadena en función del signo de igual (=)
        $arrayConSubStringsDeCaseras = explode('=', $stringCaseras);
        
        // Devuelve la primera parte (antes del signo de igual)
        $siglas = $arrayConSubStringsDeCaseras[0];

        foreach ($todasLasSiglas as $arrayConUnaSigla) {
            
            if($arrayConUnaSigla['id'] == $siglas || $arrayConUnaSigla['id2'] == $siglas){
                
                //Es un array porque da el significado en singular y en plural:

                $arrayConSignificadoSiglas = $arrayConUnaSigla['n'];

            }
        }

        return $proporcional <= 1 ? $arrayConSignificadoSiglas[0] : $arrayConSignificadoSiglas[1];

        /*
            La linea anterior equivale a esto:
        if($proporcional <= 1){
            return $arrayConSignificadoSiglas[0];
        }else{
            return $arrayConSignificadoSiglas[1];
        }*/


    } // Hasta aquí llegan las funciones auxiliares para mostrar la primera parte de la dieta:
        
    //Funciones para la tabla general de equivalentes (la que no usa íconos):

    function obtenerValoresTablaEquivalentes($datosDietaDelDia){
        
        $valoresFinalesTablaEquivalentes = ['VE' => 0];
        global $todasLasSiglasTablaEquivalentes;

        foreach ($datosDietaDelDia as $arrayEnNivelDeIngestas) {

            foreach ($arrayEnNivelDeIngestas as $nivelRecetas) {
                
                foreach ($nivelRecetas as $nivelReceta) {

                    foreach ($nivelReceta as $nivelIngredientes) {
                        
                        foreach ($nivelIngredientes as $nivelIngrediente) {
                            
                            if(is_string($nivelIngrediente)) continue;

                            foreach ($nivelIngrediente as $nivelAtributos) {
                                
                                $stringEquis = $nivelAtributos['equis'];

                                $valoresEquis = explode('=', $stringEquis);
                                $siglasEquis = strtoupper($valoresEquis[0]);
                                $cantidadEquis = number_format((float)$valoresEquis[1], 2);

                                if(array_key_exists($siglasEquis, $valoresFinalesTablaEquivalentes)){
                                    
                                    $valoresFinalesTablaEquivalentes[$siglasEquis] += $cantidadEquis;
                                    
                                }else{
                                    $valoresFinalesTablaEquivalentes[$siglasEquis] = $cantidadEquis;
                                }
                            
                            }

                        }

                    }
                }

            }
        }//Aquí acaba el foreach principal

        $valoresParaImprimirTabla = array();

        foreach ($todasLasSiglasTablaEquivalentes as $arregloCategoriaAlimento) {
            
            foreach ($valoresFinalesTablaEquivalentes as $claveCategoria => $cantidadFinal) {

                if ($claveCategoria == $arregloCategoriaAlimento['id']) {

                    $valoresParaImprimirTabla[$arregloCategoriaAlimento['n']] = $cantidadFinal;
    

                }elseif(is_array($arregloCategoriaAlimento['id2'])){
                    
                    foreach ($arregloCategoriaAlimento['id2'] as $siglasId2) {
                        
                        if ($claveCategoria == $siglasId2){

                            if (key_exists($arregloCategoriaAlimento['n'], $valoresParaImprimirTabla)){

                                $valoresParaImprimirTabla[$arregloCategoriaAlimento['n']] += $cantidadFinal;
                            }else {
                                $valoresParaImprimirTabla[$arregloCategoriaAlimento['n']] = $cantidadFinal;
                            }

                        }
                    }
                }
            }

        }

        return $valoresParaImprimirTabla;

    }


?>



