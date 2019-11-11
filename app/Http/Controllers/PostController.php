<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Post;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;
use Crypt;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id','DESC')->paginate(5);
        return view('posts.index',compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }
 

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'url_img' => 'required',
            'content' => 'required',
        ]);

        DB::beginTransaction();

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url_img = "";
        $post->post_file = "";
        $post->save();

        if (!$post) {
            DB::rollBack();
            return redirect()->route('posts.create')->with('alert-danger', 'Error Creando Post');
        }

        $post1 = Post::find($post->id);

        $filename = 'posts/'.$post1->id.'_'.$request->url_img->getClientOriginalName();

        Storage::disk('imagenes')->put($filename, File::get($request->url_img));

        $route = 'imagenes/'.$filename;

        $post1->url_img = $route;

        $post1->save();


        if (Input::hasFile('post_file')) {
            if (Input::file('post_file')->isValid()) {

                DB::beginTransaction();
        
                $post1 = Post::find($post->id);

                $filename = 'posts/'.$post1->id.'_'.$request->post_file->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->post_file));

                $route = 'imagenes/'.$filename;

                $post1->post_file = $route;

                $post1->save();

                if (!$post1) {
                    DB::rollBack();
                    return redirect()->route('posts.create')->with('alert-danger', 'Error Creando Post');
                }

                DB::commit();
            }
        }

        DB::commit();

        return redirect()->route('posts.index')->with('message', 'Post Creado Exitosamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);

        return view('banners.show',compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function post_view($id)
    {
        $post = Post::find($id);
        return view('posts.post',compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($request->id);

        if (Input::hasFile('url_img')) {
            if (Input::file('url_img')->isValid()) {

                Storage::disk('imagenes')->delete(substr($post->url_img, strpos($post->url_img, '/'), strlen($post->url_img)));

                DB::beginTransaction();

                $post->title = $request->title;
                $post->content = $request->content;

                $filename = 'posts/'.$post->id.'_'.$request->url_img->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->url_img));

                $route = 'imagenes/'.$filename;

                $post->url_img = $route;

                $post->save();

                if (!$post) {
                    DB::rollBack();
                    return redirect()->route('posts.edit', ['id' => $id])->with('mensage', 'Error Modificando Post');
                }

                DB::commit();
            }
        } 

        if (Input::hasFile('post_file')) {
            if (Input::file('post_file')->isValid()) {

                Storage::disk('imagenes')->delete(substr($post->post_file, strpos($post->post_file, '/'), strlen($post->post_file)));

                DB::beginTransaction();

                $post->title = $request->title;
                $post->content = $request->content;

                $filename = 'posts/'.$post->id.'_'.$request->post_file->getClientOriginalName();

                Storage::disk('imagenes')->put($filename, File::get($request->post_file));

                $route = 'imagenes/'.$filename;

                $post->post_file = $route;

                $post->save();

                if (!$post) {
                    DB::rollBack();
                    return redirect()->route('posts.edit', ['id' => $id])->with('mensage', 'Error Modificando Post');
                }

                DB::commit();
            }
        } 
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post Modificado Exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("posts")->where('id',$id)->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post Eliminado con Éxito');
    }
}