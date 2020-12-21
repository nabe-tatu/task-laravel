<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FolderUserResource;
use App\Models\FolderUser;
use Illuminate\Http\Request;

class FolderUserController extends Controller
{
    public function index()
    {
        $task = FolderUser::all();
        return FolderUserResource::collection($task);
    }
}
