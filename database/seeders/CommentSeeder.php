<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table("comments")->insert([
                'huisdier_id' => 1,
                'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut aliquid omnis reiciendis atque nesciunt deleniti dolore, soluta iste dignissimos, tempore sed, quam possimus ducimus nobis suscipit nam corporis eos odio!",
                'user' => 'Devin',
            ]);

            DB::table("comments")->insert([
                'huisdier_id' => 1,
                'content' => "Test test test comment",
                'user' => 'Devin',
            ]);

            DB::table("comments")->insert([
                'huisdier_id' => 1,
                'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut aliquid omnis reiciendis atque nesciunt deleniti dolore, soluta iste dignissimos, tempore sed, quam possimus ducimus nobis suscipit nam corporis eos odio!",
                'user' => 'Devin',
            ]);
    }
}
