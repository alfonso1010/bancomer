<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//adding config items.
$config['post'] = [
    'pregunta' => [
        'field' => 'pregunta',
        'rules' => 'required',
        'errors' => [
            'required' => 'pregunta es requerido',
        ],
    ],
    'cuestionarios_id' => [
        'field' => 'cuestionarios_id',
        'rules' => 'required|integer',
        'errors' => [
            'required' => 'cuestionarios_id es requerido',
            'integer' => 'Debe ser entero',
        ],
    ],
      
    ];


$config['update'] = [

    'pregunta' => [
        'field' => 'pregunta',
        'rules' => 'min_length[2]',
        'errors' => [
            'min_length' => 'Mínimo 2 caracteres',
        ],
    ],
     'cuestionarios_id' => [
        'field' => 'cuestionarios_id',
        'rules' => 'integer',
        'errors' => [
            'integer' => 'Debe ser entero',
        ],
    ],
];