<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ['huisdier_default.jpg', 'huisdier_hond_dexter.jpg', 'huisdier_hond_jackie.jpg', 'huisdier_hond_lindsey.jpg', 'huisdier_hond_soof.jpg', 'huisdier_hond_tony.jpg', 'huisdier_kater_bammie.jpg', 'huisdier_kater_chucky.jpg', 'huisdier_kater_gizmo.jpg', 'huisdier_kater_leco.jpg', 'huisdier_kater_max.jpg', 'huisdier_cavia_babbel.jpg', 'huisdier_cavia_knabbel.jpg', 'huisdier_cavia_kikki.jpg', 'huisdier_cavia_snufje.jpg', 'huisdier_cavia_valentino.jpg', 'huisdier_slang_salmari.jpg', 'huisdier_slang_calypso.jpg', 'huisdier_slang_norbert.jpg', 'huisdier_slang_tak.jpg', 'huisdier_slang_pluto.jpg', 'huisdier_papegaai_coco.jpg', 'huisdier_papegaai_croky.jpg', 'huisdier_papegaai_google.jpg', 'huisdier_papegaai_eevee.jpg', 'huisdier_papegaai_jinx.jpg'];
        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
