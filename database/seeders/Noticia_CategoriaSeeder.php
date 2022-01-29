<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NoticiaCategoria;

class Noticia_CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia_Categoria::create([
            "noticia_id" =>"4",
            "categoria_id" => "1"
        ]);

        Noticia_Categoria::create([
            "noticia_id" =>"4",
            "categoria_id" => "2"
        ]);

        Noticia_Categoria::create([
            "noticia_id" =>"3",
            "categoria_id" => "3"
        ]);

        Noticia_Categoria::create([
            "noticia_id" =>"2",
            "categoria_id" => "1"
        ]);

        Noticia_Categoria::create([
            "noticia_id" =>"2",
            "categoria_id" => "4"
        ]);
    }
}
