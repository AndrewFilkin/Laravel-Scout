<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class TestRelationshipController extends Controller
{
    public function test()
    {

        $users = User::find(1);

        foreach ($users->posts as $post) {
          dump($post);
        }

    }
}
