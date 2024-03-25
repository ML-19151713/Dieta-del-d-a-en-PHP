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
    <h1>Mostrando la dieta del día: domingo 26 de noviembre</h1>

    <?php
        

        //Extracción de datos:

        $esObjetoJson = detectarTipoArchivoDeLaDieta($urls['domingo 26 de noviembre']);

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
                    
                    mostrarDivQueLlevaELNombreDeLaIngesta($nombreIngesta);

                    $arrayRecetasDeLaIngesta = (($datosDietaDelDia['ingestas'])[$nombreIngesta])['recetas'];

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

    ?>
</body>
</html>


<?php
    //Funciones auxiliares para mostrar la dieta:

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
                            
                            $unidadDeMedida = obtenerUnidadDeMedidaSegunElIngrediente($nombreIngrediente);
                        
                            echo "
                                <div class='alimento w-100 text-left text-secondary  border p-1 '>
                                    <span>$nombreIngrediente $cantidad $unidadDeMedida</span>
                                </div>
                            ";
                        }
            
            echo "
                    </div>

                </div>
            ";
        }

        echo '<br><br>';
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

    function obtenerUnidadDeMedidaSegunElIngrediente($nombreIngrediente){

        $alimentosQueSeMidenEnMililitros = [
            'leche', 'agua', 'jugo', 'zumo', 'aceite', 'licuado', 'malteada', 'choco',
            'crema', 'yogurt', 'café', 'té', 'vino', 'refresco', 'sopa', 'infusión', 
            'gatorade', 'bebida', 'vaso', 'tarro', 'lata', 'botella', 'crema agria, light', 'agua mineral',
            'lala 100 sin lactosa dorada', 'café preparado con agua'
        ];

        if (in_array(strtolower($nombreIngrediente), $alimentosQueSeMidenEnMililitros)){
            return 'ml';
        }else{
            return 'g';
        }

    }

?>



