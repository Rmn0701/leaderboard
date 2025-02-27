<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LeaderBoardController extends Controller
{
    public function index() 
    {
        $data = User::withCount('posts')->orderBy('posts_count', 'desc')->limit(15)->paginate();
        return view('leaderboard', compact('data'));
    }
}
