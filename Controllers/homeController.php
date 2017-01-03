<?php
namespace Controllers;

use \Models\Home as Home;
use \Views\Plantilla as Plantilla;

class homeController
{
    
    private $home;
    private $vista;
    
    public function __construct()
    {
        $this->home  = new Home();
        $this->vista = new Plantilla();
    }
    
    public function __destruct()
    {
    	$this->vista->render('modulos/footer');
    }
    
    public function index()
    {
    	$this->vista->titulo = "Inicio | DevFy Framework";
    	$this->vista->render('modulos/head');
    }
}
?>