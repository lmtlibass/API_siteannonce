<?php

namespace Database\Seeders;

use App\Models\Comentaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comentaire::create([
            'libelle' => 'nice l\'ordi est de bon qualité',
            'post_id' => 1,
        ]);
        Comentaire::create([
            'libelle' => 'la conférence de dev sera tenu le 15 mars et aura comme theme : comment devenir dev ?',
            'post_id' => 2,
        ]);
    }
}
