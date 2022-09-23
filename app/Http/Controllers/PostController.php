<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        /*$posts=[
            'Mon Super 1er Titre' ,
            'Mon Super 2 Titre'
        ];*/

        //$post=Post::find(12);

       /* $post->update([
            'title'=>'title edité'
        ]);*/
       /* $post->delete();
        dd('delte');
        $posts=Post::orderBy('title')->get();*/
        //dd($posts);
        /*$title='Mon Super 1er Titre';
        $title2='Mon Super 2 Titre';*/
        $posts=Post::all();
        return view(
            'articles',[
                'posts'=>$posts
            ]
            //compact('posts')

        ) ;
    }

    public function show ($id)
    {
        $post=Post::findOrfail($id);
        //dd($post);
  /*      $posts=[
            1=>'montite n1',
            2=>'montite n2'
        ];
            $post=$posts[$id] ?? 'pas de titre';*/

        //$post=Post::where('title','Aut dolor placeat qui consequatur vel.')->firstOrfail();
       //dd($post);

        return view ('article',[
           'post'=> $post
        ]);

    }
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        //dd($request->contenu);
  /*     $post=new Post();
       $post->title=$request->title;
       $post->content=$request->contenu;
       $post->save();
       dd('poste crééer');*/
//$request->title;
        Post::create([
            'title'=>$request->title,
            'content'=>$request->contenu
            ]

        );
       $post->Update([
            'title'=>$request->title,
            'content'=>$request->contenu
            ]

        );

    }
        public function contact ()
    {

        return view ('contact');

    }

}
