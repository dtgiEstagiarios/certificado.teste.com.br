<?php

namespace App\Models;
// Declara a interface 'iTemplate'
interface CrudPesquisa
{
    public function select();
    public function finish();
}