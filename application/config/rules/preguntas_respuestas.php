<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
        'preguntas_id' => [
                'field' => 'preguntas_id',
                'rules' => 'required',
                'errors' => [
                    'required' => 'preguntas_id es requerida',
                ],
        ],
        'respuestas_id' => [
                'field' => 'respuestas_id',
                'rules' => 'required',
                'errors' => [
                    'required' => 'respuestas_id es requerida',
                ],
        ],
        'cuestionarios_id' => [
                'field' => 'cuestionarios_id',
                'rules' => 'required',
                'errors' => [
                    'required' => 'cuestionarios_id es requerida',
                ],
        ],
        'usuarios_id' => [
                'field' => 'usuarios_id',
                'rules' => 'required',
                'errors' => [
                    'required' => 'usuarios_id es requerida',
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