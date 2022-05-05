<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'titre'         => 'ordinateur hp',
            'description'   => 'ordinateur hp qualité haute à bas prix',
            'image'         => 'ordinateur.jpg',
            'validite'      => '2020-01-01',
            'region'        => 'Dakar',
            'categories_id'  => 1,
        ]);
        Post::create([
            'titre'         => 'conférence dev',
            'description'   => 'la conférence de dev sera tenu le 15 mars et aura comme theme : comment devenir dev ?',
            'image'         => 'desc.jpg',
            'validite'      => '2020-01-01',
            'region'        => 'Dakar',
            'categories_id'  => 2,
        ]);
    }
}
