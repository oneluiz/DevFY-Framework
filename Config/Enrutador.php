<?php
/**
 * Copyright (C) 2017 Luis Cortes Juarez
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2017, DevFy
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	DevfyFramework
 * @author	Luis Cortes | DevFy
 * @copyright	Copyright (c) 2017, DevFy. (http://www.devfy.net/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://www.devfy.net
 * @since	Version 1.0.0
 * @filesource
 */

namespace Config;

class Enrutador{

	public static function run(Request $request){
		$controlador = $request->getControlador(). "Controller";
		$ruta = ROOT . "Controllers". DS . $controlador. ".php";
		$metodo = $request->getMetodo();

		if($metodo == "index.php"){
			$metodo = "index";
		}

		$argumento = $request->getArgumento();

		if(is_readable($ruta)){
			require_once $ruta;
			$mostrar = "Controllers\\". $controlador;
			$controlador = new $mostrar;
			if(!isset($argumento)){
				$datos = call_user_func(array($controlador, $metodo));
			}else{
				$datos = call_user_func_array(array($controlador, $metodo), $argumento);
			}
		}

		/**
		 * Cargar vista
		 */
		$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
		if(is_readable($ruta)){
			require_once $ruta;
		}else{
			echo "<div class='centrado'><p class='text-center'>ERROR<br/>404</p></div>";
		}
	}
}


