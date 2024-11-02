<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class ProdutoController extends BaseController
{
    public function index()
    {
        $produtoModel = new ProdutoModel();
        $dados = array();
        $dados["produtos"] = $produtoModel->findAll();
        return view("pagina_produtos", $dados);
    }

    public function novo(){
        return view("produto/novo");
    }

    public function salvar(){
        $tamanhoMaximo = 2 * 1024 * 1024;
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");
        if($imagem->getSize() > $tamanhoMaximo){
            session()->setFlashdata("aviso", "o tamanho da imagem deve ser até 2MB");
            return;
        }
        else{
            $nomeAleatorio = $imagem->getRandomName(); 
            $dados["imagem"] = $nomeAleatorio; 
            $imagem->move("../public/upload", $nomeAleatorio);
            $produtoModel = new ProdutoModel();
            $produtoModel->save($dados);
            session()->setFlashdata("aviso", "Produto salvo com sucesso");
        }

        return redirect()->to(base_url("/novo"));
    }

    public function excluir($id){

    }
}
