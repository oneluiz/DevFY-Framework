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
<<<<<<< HEAD
 * @package	DevfyFramework
 * @author	Luis Cortes | DevFy
 * @copyright	Copyright (c) 2017, DevFy. (http://www.devfy.net/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://www.devfy.net
 * @since	Version 1.0.0
 * @filesource
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define("CONTROLADOR_DEFECTO", "home");
define("ACCION_DEFECTO", "index");
define('URL', "http://localhost/");
=======
 * @package Luis PHP Framework
 * @author  Luis Cortes | DevFy
 * @copyright   Copyright (c) 2017, DevFy. (http://www.devfy.net/)
 * @license http://opensource.org/licenses/MIT  MIT License
 * @link    http://www.devfy.net
 * @since   Version 1.0.0
 * @filesource
 */


const VERSION = '1.0.0';
const ENTORNO_DESARROLLO = false;
const DS = DIRECTORY_SEPARATOR;
const ROOT = realpath(dirname(__FILE__)) . DS;
const CONTROLADOR_DEFECTO = 'home';
const ACCION_DEFECTO = 'index';
const URL = 'http://localhost/empleo/';
const IMG = URL . 'estatico/img/';
const CSS = URL . 'estatico/css/';
const JS = URL . 'estatico/js/';
const LOGERROR = '';

/**
 * Prevenir que la mayoria de navegadores no puedan
 * manejar con javascript a través del atributo
 * @HttpOnly
 */
ini_set('session.cookie_httponly', 1);

/**
 * Prevenir que la mayoria de navegadores no puedan
 * Utilizar únicamente cookies para la propagación del identificador de sesión.
 */
ini_set('session.use_only_cookies', 1);

/**
 * Establecer la zona horaria predeterminada UTC.
 */
date_default_timezone_set('America/Costa_Rica');

>>>>>>> origin/master
require_once "Config/Autoload.php";
\Config\Autoload::run();
\Config\Enrutador::run(new Config\Request());
\Modelo\Core::ReportarError();
?>
