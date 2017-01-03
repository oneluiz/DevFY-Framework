<?php
/**
 * Copyright (C) 2017 Luis Cortes Juarez
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

namespace Config;

class Request{

	private $controlador;
	private $metodo;
	private $argumento;

	public function __construct(){
		if(isset($_GET['url'])){
			$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$ruta = explode("/", $ruta);
			$ruta = array_filter($ruta);

			if($ruta[0] == "index.php"){
				$this->controlador = CONTROLADOR_DEFECTO;
			}else{
				$this->controlador	= strtolower(array_shift($ruta));
			}
			$this->metodo 		= strtolower(array_shift($ruta));
			
			if(!$this->metodo){
				$this->metodo	= "index";
			}
			$this->argumento	= $ruta;
		}else{
			$this->controlador = CONTROLADOR_DEFECTO;
			$this->metodo = ACCION_DEFECTO;
		}
	}

	public function getControlador(){
		return $this->controlador;
	}

	public function getMetodo(){
		return $this->metodo;
	}

	public function getArgumento(){
		return $this->argumento;
	}
}
?>