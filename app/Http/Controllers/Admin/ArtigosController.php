<?php

namespace App\Http\Controllers\Admin;
use App\Artigo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Jobs\ArtigoFormFields;

class ArtigosController extends Controller
{
     /**
   * Display a listing of the posts.
   */
  public function index()
  {
    return view('admin.artigo.index')
      ->withArtigos(Artigo::all());
  }

  /**
   * Show the new post form
   */
  public function create()
  {
    $data = $this->dispatch(new ArtigoFormFields());

    return view('admin.artigo.create', $data);
  }

  /**
   * Store a newly created Post
   *
   * @param PostCreateRequest $request
   */
  public function store(PostCreateRequest $request)
  {
    $post = Post::create($request->postFillData());
    $post->syncTags($request->get('tags', []));

    return redirect()
        ->route('admin.post.index')
        ->withSuccess('New Post Successfully Created.');
  }

  /**
   * Show the post edit form
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $data = $this->dispatch(new PostFormFields($id));

    return view('admin.post.edit', $data);
  }

  /**
   * Update the Post
   *
   * @param PostUpdateRequest $request
   * @param int  $id
   */
  public function update(PostUpdateRequest $request, $id)
  {
    $post = Post::findOrFail($id);
    $post->fill($request->postFillData());
    $post->save();
    $post->syncTags($request->get('tags', []));

    if ($request->action === 'continue') {
      return redirect()
          ->back()
          ->withSuccess('Post saved.');
    }

    return redirect()
        ->route('admin.post.index')
        ->withSuccess('Post saved.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    $post->tags()->detach();
    $post->delete();

    return redirect()
        ->route('admin.post.index')
        ->withSuccess('Post deleted.');
  }
}
