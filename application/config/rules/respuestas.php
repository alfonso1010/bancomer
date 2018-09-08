<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
        'respuesta' => [
                'field' => 'respuesta',
                'rules' => 'required',
                'errors' => [
                    'required' => 'respuesta es requerida',
                ],
        ],
    ];


$config['update'] = [
	'respuesta' => [
            'field' => 'respuesta',
            'rules' => 'min_length[2]',
            'errors' => [
                'min_length' => 'Mínimo 2 caracteres',
            ],
    ]
];