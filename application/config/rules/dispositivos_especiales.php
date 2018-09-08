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
        'caracteristicas_especiales_id' => [
            'field' => 'caracteristicas_especiales_id',
            'rules' => 'required|integer',
            'errors' => [
                'required' => 'caracteristicas_especiales_id es requerido',
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
    'caracteristicas_especiales_id' => [
        'field' => 'caracteristicas_especiales_id',
        'rules' => 'integer',
        'errors' => [
            'integer' => 'Debe ser entero',
        ],
    ],
];