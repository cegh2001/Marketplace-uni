<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PublicacionesModel;
use App\Models\UsuarioModel;

class Publicar extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function Principal($categoriaId = null)
{
    $publicacionesModel = new PublicacionesModel();

    if ($categoriaId !== null) {
        $publicaciones = $publicacionesModel->where('id_categorias', $categoriaId)->findAll();
    } else {
        $publicaciones = $publicacionesModel->findAll();
    }

    return view('inicio', ['publicaciones' => $publicaciones]);
}



    public function index()

    {
        // $publicacionesModel = new PublicacionesModel();
        // $publicaciones = $publicacionesModel->findAll(); // Obtiene todas las publicaciones

        // $data['publicaciones'] = $publicaciones;

        return view ('postear');

    }
    

    public function IndexPost($idPublicacion) // El ID de la publicación se pasa como parte de la URL
{
    $publicacionesModel = new PublicacionesModel();
    $publicaciones = $publicacionesModel->findAll();

    // Buscar la publicación seleccionada en el arreglo de publicaciones
    $publicacionSeleccionada = null;
    foreach ($publicaciones as $publicacion) {
        if ($publicacion['id_publicaciones'] == $idPublicacion) {
            $publicacionSeleccionada = $publicacion;
            break;
        }
    }
     // Obtener el ID del usuario asociado a la publicación
     $idUsuario = $publicacionSeleccionada['id_usuarios'];

     // Crear un modelo para los usuarios
     $usuariosModel = new UsuarioModel();
 
     // Obtener los datos del usuario asociado a la publicación
     $usuario = $usuariosModel->find($idUsuario);
 
     return view('post', [
         'publicacion' => $publicacionSeleccionada,
         'usuario' => $usuario,
         'publicaciones' => $publicaciones
     ]);

//     return view('post', [
//         'publicacion' => $publicacionSeleccionada,
//         'publicaciones' => $publicaciones
//     ]);
}







public function publish()
{
    $validation = $this->validate([
        'nombre-producto' => [
            'rules'  => 'required|min_length[8]|max_length[25]',
            'errors' => [
                'required' => 'Se necesita el nombre del producto.',
                'min_length' => 'El nombre del producto debe tener al menos 8 caracteres.',
                'max_length' => 'El nombre del producto no debe tener más de 25 caracteres.',
            ],
        ],
        'precio-producto' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'Se necesita el precio del producto.',
            ],
        ],
        'descripcion-producto' => [
            'rules'  => 'required|min_length[8]|max_length[75]',
            'errors' => [
                'required' => 'Se necesita la descripción del producto.',
                'min_length' => 'La descripción del producto debe tener al menos 8 caracteres.',
                'max_length' => 'La descripción del producto no debe tener más de 75 caracteres.',
            ],
        ],
    ]);

    if (!$validation) {
        return redirect()->to(base_url('postear'))->with('errors', $this->validator->getErrors())->withInput();
    } else {
        // Registro en la base de datos
        $nombreProducto = $this->request->getPost('nombre-producto');
        $precioProducto = $this->request->getPost('precio-producto');
        $descripcionProducto = $this->request->getPost('descripcion-producto');
        $categoriaId = $this->request->getPost('categoriaId');
        $usuario_id = session('usuario')['id_usuarios'];

        // Comprueba si se ha subido una imagen
        if ($imagen = $this->request->getFile('images')) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('public/uploads/', $nuevoNombre);

            $datosImagen = [
                'imagen' => $nuevoNombre
            ];

            // Agrega la información de la imagen al arreglo de datos
            $data = [
                'nombre_public' => $nombreProducto,
                'precio' => $precioProducto,
                'descripcion' => $descripcionProducto,
                'id_categorias' => $categoriaId,
                'imagen_prod' => $datosImagen,
                'id_perfiles' => $usuario_id,
                'id_usuarios' => $usuario_id,
                'likes' => 0,
            ];
        } else {
            // Si no se ha subido una imagen, crea el arreglo de datos sin la información de la imagen
            $data = [
                'nombre_public' => $nombreProducto,
                'precio' => $precioProducto,
                'descripcion' => $descripcionProducto,
                'id_categorias' => $categoriaId,
                'id_perfiles' => $usuario_id,
                'id_usuarios' => $usuario_id,
                'imagen_prod' => 0,
                'likes' => 0,
            ];
        }

        $publicacionesModel = new PublicacionesModel();
        $query = $publicacionesModel->insert($data);

        return redirect()->to(base_url('inicio'));
    }
}
      

}
