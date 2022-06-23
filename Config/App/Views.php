<?php
class Views 
{
    public function getView($controlador, $vista, $data="")
    {
        $controlador = get_class($controlador);
        if ($controlador == 'Home') {
            $vista = 'Views/Home/'.$vista.'.php';
        }else{
            $vista = 'Views/'.$controlador.'/'.$vista.'.php';
        }
        require $vista;
    }
}