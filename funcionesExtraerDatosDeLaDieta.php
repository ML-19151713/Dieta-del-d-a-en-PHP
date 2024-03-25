<?php


    //PASO 1.- Detectar el tipo de archivo que se esta recibiendo:

    function detectarTipoArchivoDeLaDieta($url) {

        // Obtener los encabezados HTTP de la URL
        $headers = get_headers($url);
    
        // Verificar si se obtuvieron los encabezados correctamente
        if ($headers !== false) {
    
            // Seleccionar el encabezado Content-Type (siempre va estar en la posición 2 de los headers)
    
            $tipoDeArchivo = $headers[2];
    
            if ($tipoDeArchivo == 'Content-Type: text/html; charset=UTF-8'){

                /*
                    Si es un archivo que contiene un objeto json en forma de string entonces
                    devuelve un arreglo con dos valores.

                    El prmero es la url de donde se va a acceder a los datos, y
                    el segundo (true) indica que en efecto es un objeto json en forma de string
                */

                return [$url, true];
    
            }else{
                echo 'Es un otro tipo de archivo';
            }
    
        }else{
            echo 'No sé puede determinar el tipo de archivo';
        }
    
    }

    //PASO 2.- Obtener todos los datos en una estructutra con la que se puda trabajar, en este caso un array asociativo:

    function generarArrayAsociativoConTodosLosDatosDeLaDieta($url){
        /*
            Hacer una solicitud HTTP a una URL, recuperar los datos JSON de 
            esa URL y luego decodificar esos datos en un array asociativo de PHP para 
            que puedan ser manipulados y utilizados en el código:
        */

        $json_data = file_get_contents($url);
        $data = json_decode($json_data, true);

        try {
            if (isset(((($data['json'])['dieta'])[0])['datos'])) {
                $datosDietaJson = ((($data['json'])['dieta'])[0])['datos'];

            } else {

                $dataLayer2 = $data['json'];

                $data = json_decode($dataLayer2, true);

                $datosDietaJson = (($data['dieta'])[0])['datos'];
            }

        } catch (Exception $excepcion) {
            echo 'Error: ' . $excepcion->getMessage();
        }

        // Arreglo asociativo para almacenar los resultados:
        $datosDietaDelDia = [];

        // Procesar los datos de las ingestas:
        foreach ($datosDietaJson as $ingesta) {
            $ingestaNombre = $ingesta['nombre'];
            $datosDietaDelDia['ingestas'][$ingestaNombre]['recetas'] = [];
            foreach ($ingesta['datos'] as $receta) {
                $urlImagen = $receta['img'];

                if ($receta['tipo'] === 'receta') {

                    $recetaNombre = $receta['datos'][0]['valor'];
                    $datosDietaDelDia['ingestas'][$ingestaNombre]['recetas'][$recetaNombre]['img'] = $urlImagen;
                    $datosDietaDelDia['ingestas'][$ingestaNombre]['recetas'][$recetaNombre]['ingredientes'] = [];
                    foreach ($receta['datos'] as $dato) {

                        if ($dato['tipo'] === 'alimento') {

                            $datosDietaDelDia['ingestas'][$ingestaNombre]['recetas'][$recetaNombre]['ingredientes'][] = [
                                'nombre' => $dato['nombre'],
                                'cantidad' => $dato['cantidad'],
                                'caseras' => $dato['caseras'],
                                'equis' => $dato['equis']
                            ];
                        }
                    }
                }
            }
        }

        return $datosDietaDelDia;


    }

    function extraerNumeroDeStringCaseras($string) {
        // Expresión regular para extraer el número
        preg_match('/[\d\.]+/', $string, $coincidencias);
        
        // Obtener el primer valor coincidente
        if(empty($coincidencias)) return 0;
        $numero = $coincidencias[0];
    
        // Convertir el número a punto flotante (float)
        return (float) $numero;
    }

    function extraerElNombreDeCadaIngesta($datosDietaDelDia){

        $nombreDeCadaIngesta = array();

        foreach ($datosDietaDelDia['ingestas'] as $nombreIngesta => $recetasDeEsaIngesta) {
            
            if (!is_array($nombreIngesta)) array_push($nombreDeCadaIngesta, $nombreIngesta);
            
        }

        return $nombreDeCadaIngesta;
    }

    
    