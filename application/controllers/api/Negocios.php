<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Negocios extends Api {

  public $table_name = "Cliente";
  public $coulumna_id = "idCliente";

  public function __construct() {
      parent::__construct();
  }

  public function index_get($id = 0){
  	$query = $this->db->query("
      SELECT * 
      FROM Negocios
    ");
    $negocio = $query->result_array();
    $negocios = [];
    if(!is_null($negocio) && !empty($negocio)){
      foreach ($negocio as $key => $value) {
        $nombreBd = $value['nameBD'];
        $db1 = array(
            'dsn' => 'mysql:host=localhost;dbname='.$nombreBd,
            'hostname' => 'localhost',

            'username' => 'root',
            'password' => '7h8j9k0l!!abc',
            'database' => $nombreBd,
            'dbdriver' => 'pdo',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
          );
          $this->negociobd = $this->load->database($db1,true);
          $query = $this->negociobd->query("
            SELECT * 
            FROM Negocio
          ");
          $ne = $query->result_array();
          $latitud = "";
          $longitud = "";
          if( isset($ne[0]) ){
            $arr = explode(',',$ne[0]['ubicacion']);
            $latitud = $arr[0];
            $longitud = $arr[1];
            $ne = $ne[0];
            $ne['latitud'] = $latitud;
            $ne['longitud'] = $longitud;

          }

          
          $negocios[] = $ne;
      }
    }
  	$this->response($negocios, 200);
  }

   
}