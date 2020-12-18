<?php

namespace Database\Seeders;

use App\Models\Folder;
use Illuminate\Database\Seeder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $folder = new Folder([
            'id' => 1,
            'user_id' => 1,
            'folder_name' => '仕事',
        ]);
        $folder->save();


        $folder = new Folder([
            'id' => 2,
            'user_id' => 1,
            'folder_name' => 'プライベート',
        ]);
        $folder->save();


        $folder = new Folder([
            'id' => 3,
            'user_id' => 1,
            'folder_name' => '雑用',
        ]);
        $folder->save();


        $folder = new Folder([
            'id' => 4,
            'user_id' => 1,
            'folder_name' => '生活',
        ]);
        $folder->save();


        $folder = new Folder([
            'id' => 5,
            'user_id' => 1,
            'folder_name' => 'その他',
        ]);
        $folder->save();
    }
}
