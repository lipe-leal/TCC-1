<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Carrinho extends BaseController
{
    public function index()
    {
        return view('pagina-carrinho');
    }
}
