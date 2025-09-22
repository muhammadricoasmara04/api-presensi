<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::select('id', 'name', 'email', 'division', 'work_entry', 'work_end', 'role', 'image')
            ->paginate(10);

        return response()->json($users);
    }
}
