<?php

namespace Database\Seeders;

use App\Models\Box;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $box = new Box([
            'id' => 1,
            'task_id' => 1,
            'box_name' => '最優先',
        ]);
        $box->save();


        $box = new Box([
            'id' => 2,
            'task_id' => 2,
            'box_name' => '優先',
        ]);
        $box->save();


        $box = new Box([
            'id' => 3,
            'task_id' => 3,
            'box_name' => 'ゴミ箱',
        ]);
        $box->save();
    }
}
