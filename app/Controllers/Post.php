<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Post extends BaseController
{
    public function index()
    {
        $post = new PostModel();
        $data['posts'] = $post->where('status', 'published')->findAll();
        return view('post', $data); // <= Harus ada view 'post'
    }

    public function viewPost($slug)
    {
        $post = new PostModel();
        $data['post'] = $post->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('post_detail', $data);
    }
}
