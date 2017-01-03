<?php
namespace Models;

class Conexion{

	/**
	* @desc conexión a la base de datos
	* @var $_connection
	* @access private
	*/
	private $con;
	private $datos = array(
		"host"	=> "localhost",
		"user"	=> "root",
		"pass"	=> "1q2w3e4r5t6y",
		"db"	=> "empleo"
	);

	/**
	 * [__construct]
	 */
	public function __construct(){
		$this->con = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
		$this->con->query("SET NAMES 'utf8'");
	}

    /**
     * [__clone Evita que el objeto se pueda clonar]
     * @return [type] [message]
     */
    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

	public function ConsultaSimple($sql){
		$this->con->query($sql);
	}

	public function ConsultaRetorno($sql){
		$datos = $this->con->query($sql);
		return $datos;
	}
}
?>

