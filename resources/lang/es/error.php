<?php

return [

    'Symfony\Component\HttpKernel\Exception\NotFoundHttpException' => [
        'response' => [
            'title' => 'Error de conexión',
            'message' => 'No es posible conectarse con el servidor en estos momentos.'
        ],
        'code' => 503
    ],
    
    'Illuminate\Database\QueryException' => [
        'response' => [
            'title' => 'Error de conexión',
            'message' => 'No es posible conectarse con la base de datos.'
        ],
        'code' => 503
    ]

];
