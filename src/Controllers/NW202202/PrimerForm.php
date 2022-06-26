<?php
namespace Controllers\NW202202;

use Controllers\PublicController;
use Views\Renderer;

class PrimerForm extends PublicController 
{
    public function run() :void 
    {
        $viewData =array();
        $viewData['txtNombre'] = 'fulanito';
        $viewData['txtApellido'] = 'tal';

        if (isset($_POST['btnEnviar'])) {
            $viewData['txtNombre'] = $_POST['nombre'];
        }
        //instancia del controlador
        if($this->isPostBack()){
            $viewData["txtApellido"] = $_POST["apellido"];
        }        
        
        Renderer::render('nw202202/primerform', $viewData);

    }
}
?>