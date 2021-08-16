<?php
require_once 'modelos/Usuario.php';

class usuarioControlador
{
    public function index(): void
    {
        echo "Bienvenido al controlador usuario";
    }

    public function registrar(): void
    {
        require_once 'vistas/usuarios/registrar.php';
    }

    public function registro()
    {
        if (isset($_POST)) {
            $this->verificacion($_POST);
        }  
        
        //header("Location:".base_url.'usuario/registrar');
        //die();
    }

    protected function verificacion(array ...$post)
    {
        $data = [
            'nombre', 'apellido', 'email', 'pwd', 'cpwd'
        ];
        $error = [];

        for($i = 0; $i < count($post[0]); $i++){
            if(empty($post[0][$data[$i]])) $error[] = $data[$i].'-null';
            elseif($i < 2 &&
                   !is_string($post[0][$data[$i]]) || 
                    preg_match("/[0-9]+/", $post[0][$data[$i]]))
                $error[] = $data[$i].'-num';
            elseif($i == 2 &&
                   !is_string($post[0][$data[$i]]) || 
                   !filter_var($post[0][$data[$i]], FILTER_VALIDATE_EMAIL)) 
                $error[] = $data[$i].'-no-email';
            elseif($i > 2 && 
                   empty($post[0][$data[$i]]) || 
                   strlen($post[0][$data[$i]]) < 8) 
                $error[] = $data[$i].'-min:8&&-null';
            /*
            if($i < 2 && (empty($post[0][$data[$i]]) && !is_string($post[0][$data[$i]]) || preg_match("/[0-9]+/", $post[0][$data[$i]]))){
                $error[] += $data[$i];
            }elseif($i == 3 && (empty($post[0][$data[$i]]) && !is_string($post[0][$data[$i]]) || !filter_var($post[0][$data[$i]], FILTER_VALIDATE_EMAIL))){
                $error[] += $post[0][$data[$i]];
            }elseif($i > 3 && (empty($post[0][$data[$i]]) || strlen($post[0][$data[$i]]) < 8)){
                $error[] += $post[0][$data[$i]];
            }*/
        }
        var_dump($error);
    }
}
/*
public function registro()
    {
        if (isset($_POST)) {    
            if ($_POST['pwd'] == $_POST['cpwd']) {
                $_SESSION['registro'] = 'fallido';
            }else{
                $usuario = new Usuario();

                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellido($_POST['apellido']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['pwd']);

                $guardar = $usuario->guardar();
                
                $_SESSION['registro'] = (!$guardar) ? 'fallido' : 'completo';
            }         
        }else{
            $_SESSION['registro'] = 'fallido';            
        }
        header("Location:".base_url.'usuario/registrar');
        die();
    }

*/