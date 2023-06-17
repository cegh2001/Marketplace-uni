<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
class CRUD extends BaseController
{
   
    // users list
    public function Vista_CRUD(){
        $UsuarioModel = new UsuarioModel();
        $data['usuario'] = $UsuarioModel->orderBy('id_usuarios')->findAll();
        return view('admin', $data);
    }

    // delete user
    public function delete($id_usuarios = null){
        $UsuarioModel = new UsuarioModel();
        $data['usuario'] = $UsuarioModel->where('id_usuarios', $id_usuarios)->delete();
        return $this->response->redirect(site_url('/users-list'));
    }
    
    // view single user
    public function singleUser($id_usuarios = null) {
        $UsuarioModel = new UsuarioModel();
        $data['user_obj'] = $UsuarioModel->where('id_usuarios', $id_usuarios)->first();
        $data['roles'] = ['1' => 'Super-Usuario', '0' => 'Usuario']; // Agrega esta línea para pasar los roles al formulario
        return view('edit_view', $data);
    }
    
    
    // Actualizar usuarios
    public function update()
    {
        $UsuarioModel = new UsuarioModel();
        $id_usuarios = $this->request->getVar('id_usuarios');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'cedula' => $this->request->getVar('cedula'),
            'usuario' => $this->request->getVar('usuario'),
            'telefono' => $this->request->getVar('telefono'),
            'roles' => $this->request->getVar('roles'), // Cambia "rol" por "roles"
        ];

        // Actualizar los datos del usuario en la base de datos
        $UsuarioModel->update($id_usuarios, $data);

        // Redirigir a la lista de usuarios
        return redirect()->to(base_url('users-list'));
    }

    

// user form
public function create(){
    return view('add_user');
}

// insert data into database
public function store()
{
    $UsuarioModel = new UsuarioModel();

    // Obtener la contraseña sin encriptar
    $password = $this->request->getVar('password');

    // Encriptar la contraseña
    $contrasenaEncriptada = password_hash($password, PASSWORD_DEFAULT);

    $data = [
        'nombre' => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'cedula' => $this->request->getVar('cedula'),
        'usuario' => $this->request->getVar('usuario'),
        'telefono' => $this->request->getVar('telefono'),
        'password' => $contrasenaEncriptada, // Guardar la contraseña encriptada en la base de datos
    ];

    $UsuarioModel->insert($data);
    return $this->response->redirect(base_url('users-list'));
}


    
}






