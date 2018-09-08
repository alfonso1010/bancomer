<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
        'dispositivos_id' => [
            'field' => 'dispositivos_id',
            'rules' => 'required|integer',
            'errors' => [
                'required' => 'dispositivos_id es requerido',
                'integer' => 'Debe ser entero',
            ],
        ],
        'usuarios_id' => [
            'field' => 'usuarios_id',
            'rules' => 'required|integer',
            'errors' => [
                'required' => 'usuarios_id es requerido',
                'integer' => 'Debe ser entero',
            ],
        ],
    ];


$config['update'] = [

    'dispositivos_id' => [
            'field' => 'dispositivos_id',
            'rules' => 'integer',
            'errors' => [
                'integer' => 'Debe ser entero',
            ],
    ],
    'usuarios_id' => [
        'field' => 'usuarios_id',
        'rules' => 'integer',
        'errors' => [
            'integer' => 'Debe ser entero',
        ],
    ],
];