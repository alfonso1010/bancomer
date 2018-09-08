<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
    'url' => [
        'field' => 'url',
        'rules' => 'required',
        'errors' => [
            'required' => 'url es requerido',
        ],
    ],
    'precio' => [
        'field' => 'precio',
        'rules' => 'required',
        'errors' => [
            'required' => 'precio es requerido',
        ],
    ],
    'tienda' => [
        'field' => 'tienda',
        'rules' => 'required',
        'errors' => [
            'required' => 'tienda es requerido',
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

    'url' => [
        'field' => 'url',
        'rules' => 'min_length[2]',
        'errors' => [
            'min_length' => 'Mínimo 2 caracteres',
        ],
    ],
     'precio' => [
        'field' => 'precio',
        'rules' => 'min_length[2]',
        'errors' => [
            'min_length' => 'Mínimo 2 caracteres',
        ],
    ],
     'tienda' => [
        'field' => 'tienda',
        'rules' => 'min_length[2]',
        'errors' => [
            'min_length' => 'Mínimo 2 caracteres',
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