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
use Dao\Mnt\Scores as DaoScores;
use Views\Renderer;

/**
 * Scores
 * 
 * @category Public
 * @package  Controllers\Mnt
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @link     http://
 */
class Scores extends PublicController
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
       $viewData["Scores"] = DaoScores::getAll();
       //DaoScores::insert(
         //  "44444", 4,"Prueba 2", "MED", "ACT", 0, 1, "VND"
       //);
       Renderer::render('mnt/Scores',$viewData);
    }

}

?>

