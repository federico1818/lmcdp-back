<?php

return [
    'Laravel\Passport\Exceptions\OAuthServerException' => [
        'response' => [
            'title' => 'Credenciales incorrectas',
            'message' => 'Email o contraseña incorrecta.'
        ],
        'code' => 401
    ],

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
            'message' => 'No se han guardado los datos correctamente.'
        ],
        'code' => 503
    ],
    
    'App\Core\Exception\GameNotOverException' => [
        'response' => [
            'title' => 'No puedes crear el partido',
            'message' => 'Aún tienes un partido sin finalizar. Debes dar por terminado el partido antes de crear uno nuevo.'
        ],
        'code' => 409
    ]

];
