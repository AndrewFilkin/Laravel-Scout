<?php

namespace App\Http\Controllers;

use App\Models\Post;

class SearchController extends Controller
{
    public function query()
    {
        // queries to Algolia search index and returns matched records as Eloquent Models
        $posts = Post::search('Content Post')->get();

        // do the usual stuff here
        $i = 1;
        foreach ($posts as $post) {
            echo $i;
            dump($post->content);
            $i++;
        }
    }
    public function add()
    {
        // this post should be indexed at Algolia right away!
        $post = new Post;
        $post->setAttribute('title', 'Another Post');
        $post->setAttribute('content', 'Content Post 123432qwerasdf');
        $post->setAttribute('user_id', '1');
        $post->save();
    }

    public function delete()
    {
        // this post should be removed from the index at Algolia right away!
        $post = Post::find(10002);
        $post->delete();
    }
}
