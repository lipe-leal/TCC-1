<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        $dados = array();
        $dados['nome'] = "";
        $dados['idade'] = "";
        $dados['categorias'] = $categoriaModel->findAll();
        
        return view("categoria/formulario_cadastro", $dados);
    }

    public function cadastrar()
    {
        $dados = $this->request->getPost();
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert($dados);
        session()->setFlashdata("aviso", "Sucesso ao cadastrar categoria");
        
        return redirect()->to(base_url("/categoria"));
    }

    public function excluir($id)
    {
        $categoriaModel = new CategoriaModel(); 
        $categoriaModel->delete($id);
        session()->setFlashdata("aviso", "Sucesso ao Excluir Categoria");
        
        return redirect()->to(base_url("/categoria"));
    }
}
