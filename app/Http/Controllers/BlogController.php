<?php

namespace App\Http\Controllers;


use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
  {
    $tag = $request->get('tag');
    $data = $this->dispatch(new BlogIndexData($tag));
    $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    return view($layout, $data);
  }

  public function showPost($slug, Request $request)
  {
    $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
    $tag = $request->get('tag');
    //$tag = $request->tag;
    if ($tag) {
        $tag = Tag::whereTag($tag)->firstOrFail();
    }

    return view($post->layout, compact('post', 'tag'));
  }
}


