<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderUser extends Model
{
    use HasFactory;

    protected $table = 'folder_user';

    public function box()
    {
        return $this->hasOne(Box::class);
    }
}
