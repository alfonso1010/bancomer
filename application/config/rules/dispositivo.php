<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
        'nombre' => [
                'field' => 'nombre',
                'rules' => 'required',
                'errors' => [
                    'required' => 'nombre es requerido',
                ],
        ],
        'descripcion' => [
                'field' => 'descripcion',
                'rules' => 'required',
                'errors' => [
                    'required' => 'descripcion es requerida',
                ],
        ],
        'precio' => [
                'field' => 'precio',
                'rules' => 'required',
                'errors' => [
                    'required' => 'precio es requerido',
                ],
        ],
         'categoria_dispositivo_id' => [
                'field' => 'categoria_dispositivo_id',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'categoria_dispositivo_id es requerido',
                    'integer' => 'Debe ser entero',
                ],
        ],
    ];


$config['update'] = [
	'nombre' => [
            'field' => 'nombre',
            'rules' => 'min_length[0]',
            'errors' => [
                'min_length' => 'Mínimo 2 caracteres',
            ],
    ],
    'descripcion' => [
            'field' => 'descripcion',
            'rules' => 'min_length[0]',
            'errors' => [
                'min_length' => 'Mínimo 2 caracteres',
            ],
    ],
    'precio' => [
            'field' => 'precio',
            'rules' => 'min_length[0]',
            'errors' => [
                'min_length' => 'Mínimo 2 caracteres',
            ],
    ],
    'categoria_dispositivo_id' => [
            'field' => 'categoria_dispositivo_id',
            'rules' => 'integer',
            'errors' => [
                'integer' => 'Debe ser entero',
            ],
    ],
];