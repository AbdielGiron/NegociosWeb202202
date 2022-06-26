<?php
/**
 * PHP Version 7.2
 *Mnt
 *
 * @category Controller
 * @package  Controllers\Mnt
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 * @version  CVS:1.0.0
 * @link     http://url.com
 */
namespace Controllers\Mnt;

//---------------------------------------------------------------
// Seccion de imports
//---------------------------------------------------------------
use Controllers\PublicController;
use Dao\Mnt\Productos as DaoProductos;
use Views\Renderer;

/**
 * Productos
 * 
 * @category Public
 * @package  Controllers\Mnt
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @link     http://
 */
class Productos extends PublicController
{
    /**
     * Index run method
     *
     * @return void
     */
    public function run() :void
    {
       //code
       $viewData=array();
       $viewData["Productos"] = DaoProductos::getAll();
       //DaoProductos::insert(
         //  "44444", 4,"Prueba 2", "MED", "ACT", 0, 1, "VND"
       //);
       Renderer::render('mnt/productos',$viewData);
    }

}

?>

