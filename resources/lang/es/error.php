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
    
    'App\Exceptions\CreateGameUnfinishedException' => [
        'response' => [
            'title' => 'No puedes crear el partido',
            'message' => 'Aún tienes un partido sin finalizar. Debes dar por terminado el partido antes de crear uno nuevo.'
        ],
        'code' => 409
    ],
    
    'App\Exceptions\CreateGameMatchmakingUnfinishedException' => [
        'response' => [
            'title' => 'No puedes crear el partido',
            'message' => 'Aún tienes un partido sin finalizar. Debes borrarlo antes de crear uno nuevo.'
        ],
        'code' => 409
    ],

    'App\Exceptions\GameRequestOwnGameException' => [
        'response' => [
            'title' => 'No puedes crear la solicitud',
            'message' => 'No está permitido crear una solicitud de un partido que tú has creado.'
        ],
        'code' => 409
    ],
    
    'App\Exceptions\GameRequestNotMatchmakingException' => [
        'response' => [
            'title' => 'No puedes crear la solicitud',
            'message' => 'La partido ya no acepta solicitudes.'
        ],
        'code' => 409
    ],

    'App\Exceptions\GameRequestDuplicateException' => [
        'response' => [
            'title' => 'No puedes crear la solicitud',
            'message' => 'Ya has solicitado jugar este partido.'
        ],
        'code' => 409
    ],

    'App\Exceptions\GameRequestAcceptNotOwnGameException' => [
        'response' => [
            'title' => 'No puedes aceptar la solicitud',
            'message' => 'No está permitido aceptar una solicitud de un partido que no has creado.'
        ],
        'code' => 409
    ],
    
    'App\Exceptions\GameRequestAcceptNotMatchmakingException' => [
        'response' => [
            'title' => 'No puedes aceptar la solicitud',
            'message' => 'El partido ya no acepta solicitudes.'
        ],
        'code' => 409
    ],
    
    'App\Exceptions\GameWasNotAcceptedException' => [
        'response' => [
            'title' => 'El partido no puede comenzar',
            'message' => 'Para iniciar el partido debes haber aceptado alguna solicitud.'
        ],
        'code' => 409
    ],

    'App\Exceptions\GameStartedNotByTheirOwnPlayersException' => [
        'response' => [
            'title' => 'No puedes iniciar el partido',
            'message' => 'No eres un jugador de este partido.'
        ],
        'code' => 409
    ],
    
    'App\Exceptions\GameFinishNotByItsUserException' => [
        'response' => [
            'title' => 'No puedes finalizar el partido',
            'message' => 'No puedes dar por finalizado un partido que no creaste.'
        ],
        'code' => 409
    ]

];
