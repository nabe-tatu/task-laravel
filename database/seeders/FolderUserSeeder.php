<?php

namespace Database\Seeders;

use App\Models\FolderUser;
use Illuminate\Database\Seeder;

class FolderUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $folderUser = new FolderUser([
            'id' => 1,
            'user_id' => 1,
            'folder_id' => 1,
            'task_name' => 'メールチェック',
        ]);
        $folderUser->save();


        $folderUser = new FolderUser([
            'id' => 2,
            'user_id' => 1,
            'folder_id' => 1,
            'task_name' => '実装',
        ]);
        $folderUser->save();


        $folderUser = new FolderUser([
            'id' => 3,
            'user_id' => 1,
            'folder_id' => 1,
            'task_name' => 'テスト',
        ]);
        $folderUser->save();


        $folderUser = new FolderUser([
            'id' => 4,
            'user_id' => 1,
            'folder_id' => 1,
            'task_name' => 'リリース',
        ]);
        $folderUser->save();


        $folderUser = new FolderUser([
            'id' => 5,
            'user_id' => 1,
            'folder_id' => 1,
            'task_name' => '修正',
        ]);
        $folderUser->save();
    }
}
