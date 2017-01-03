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

namespace Views;

class Plantilla
{
    private $vars = array();

    /**
     * @var
     */
    const VIEWS_PATH = "Views/";

    /**
     * @var
     */
    const EXTENSION_TEMPLATES = ".php";

    public function __get($nombre)
    {
        return $this->vars[$nombre];
    }

    public function __set($nombre, $valor)
    {
        if ($nombre == 'view_template_file') {
            throw new Exception("No se puede enlazar la variable llamada 'view_template_file'");
        }
        $this->vars[$nombre] = $valor;
    }

    public function render($plantilla)
    {
        if (array_key_exists('view_template_file', $this->vars)) {
            throw new Exception("No se puede enlazar la variable llamada 'view_template_file'");
        }
        extract($this->vars);
        ob_start();
        include(self::VIEWS_PATH . $plantilla . self::EXTENSION_TEMPLATES);
        $str = ob_get_contents();
        ob_end_clean();
        echo $str;
    }
}

