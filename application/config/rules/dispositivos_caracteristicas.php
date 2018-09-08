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
        'caracteristicas_dispositivo_id' => [
            'field' => 'caracteristicas_dispositivo_id',
            'rules' => 'required|integer',
            'errors' => [
                'required' => 'caracteristicas_dispositivo_id es requerido',
                'integer' => 'Debe ser entero',
            ],
        ],
         'descripcion' => [
            'field' => 'descripcion',
            'rules' => 'required',
            'errors' => [
                'required' => 'descripcion es requerido',
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
    'caracteristicas_dispositivo_id' => [
        'field' => 'caracteristicas_dispositivo_id',
        'rules' => 'integer',
        'errors' => [
            'integer' => 'Debe ser entero',
        ],
    ],
    'descripcion' => [
        'field' => 'descripcion',
        'rules' => 'min_length[2]',
        'errors' => [
            'min_length' => 'Mínimo 2 caracteres',
        ],
    ],
];