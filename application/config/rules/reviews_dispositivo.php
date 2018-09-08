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
        'url' => [
                'field' => 'url',
                'rules' => 'required',
                'errors' => [
                    'required' => 'url es requerida',
                ],
        ],
        'tipo' => [
                'field' => 'tipo',
                'rules' => 'required',
                'errors' => [
                    'required' => 'tipo es requerido',
                ],
        ],
         'dispositivos_id' => [
                'field' => 'dispositivos_id',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'dispositivos_id es requerido',
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
    'url' => [
            'field' => 'url',
            'rules' => 'min_length[0]',
            'errors' => [
                'min_length' => 'Mínimo 2 caracteres',
            ],
    ],
    'tipo' => [
            'field' => 'tipo',
            'rules' => 'min_length[0]',
            'errors' => [
                'min_length' => 'Mínimo 1 caracteres',
            ],
    ],
    'dispositivos_id' => [
            'field' => 'dispositivos_id',
            'rules' => 'integer',
            'errors' => [
                'integer' => 'Debe ser entero',
            ],
    ],
];