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
        'password' => [
                'field' => 'password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'password es necesario.',
                    'min_length'=>'Debe tener minimo 6 caracteres',
                ],
        ],
        'roles_id' => [
                'field' => 'roles_id',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'rol es necesario.',
                    'integer' => 'Debe ser entero',
                ],
        ],
    ];


$config['update'] = [
        'email' => [
                'field' => 'email',
                'rules' => 'valid_email',
                'errors' => [
                    'valid_email'=>'Debe ser un correo valido',
                ],
        ],
        'roles_id' => [
                'field' => 'roles_id',
                'rules' => 'integer',
                'errors' => [
                    'integer' => 'Debe ser entero',
                ],
        ],
    ];