<?php
    header('Access-Control-Allow-Origin: *');
    $file = "C:\Users\ACER\Desktop\Curso_Maquetacion_Web\Etiquetas_Multimedia_09_11_2021\data.json";
    $open = fopen($file, "w+");
    fwrite($open, json_encode(apache_request_headers(), JSON_PRETTY_PRINT));
    fclose($open);
?>