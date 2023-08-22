<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // $posts = DB::statement('SELECT * FROM posts'); // return true or false that query can be peform or not. 
        // $posts = DB::select('SELECT * FROM posts'); // return array of values
        // $posts = DB::select('SELECT * FROM posts WHERE id=1 '); // can make sql injection 
        // $posts = DB::select('SELECT * FROM posts WHERE id=? ', [1]); // escape sql injection
        // $posts = DB::select('SELECT * FROM posts WHERE id=:id ', ['id'=>1]); // when we have multiple conditions with escape sql injection

        // $posts  = DB::insert('INSERT INTO posts (title, excerpt, body, min_to_read, is_published ) 
        //           VALUES(?, ?, ?, ?, ?)', ['Test', 'test2', 'test3', true, 3]); // return true if inserted else false

        // $posts  = DB::update('UPDATE  posts SET body = ? WHERE id = ? ', ['Body 2', 12]); // return effected row count

        // $posts  = DB::delete('DELETE  FROM posts WHERE id = ? ', [12]); // return effected row count
        // $posts = db::table('posts')->get(); // select all data
        // $posts = db::table('posts')->select('title', 'body')->get(); // select columns
        // $posts = db::table('posts')->where('id', '>', 5)->get(); // comparison
        // $posts = db::table('posts')->where('id',  5)->get(); // equal to 5
        // $posts = db::table('posts')->where('id', '>', 5)->where('id', '>', 10)->get(); // multiple
        // $posts = db::table('posts')->whereBetween('id', [1, 7])->get();  // range include 1 and 7
        // $posts = db::table('posts')->whereNotBetween('id', [1, 7])->get();  // inverce range 
        // $posts = db::table('posts')->whereIn('id', [1, 7, 5])->get(); // id equal 
        // // whereNull('column_name'), whereNotNull('column_name')
        // $posts = db::table('posts')->select('is_published')->distinct()->get(); // select unique values
        // $posts = db::table('posts')->orderBy('id', 'desc')->get(); // orderBy by detault asc order orderBy('id')
        // $posts = db::table('posts')->skip(5)->take(6)->get(); // pagination skip first 5 and get next 6 values
        // $posts = db::table('posts')->inRandomOrder()->get(); // get random order of id column values
        // $posts = db::table('posts')->where('id', 5)->first();  // get first match value and return object
        // $posts = db::table('posts')->find(5); // id = 5 and returning object of first match
        // $posts = db::table('posts')->where('id', 5)->value('body'); //   return only value of first match
        // $posts = db::table('posts')->where('id', 5)->count(); // selecting value count
        // $posts = db::table('posts')->min('id'); // get min value of id column 
        // $posts = db::table('posts')->max('id'); // get max value of id column 
        // $posts = db::table('posts')->sum('id'); // get sum of id column 
        // $posts = db::table('posts')->avg('id'); // get average of id column 

        // $posts = Post::all(); // get all values can't add method chaining 
        // $posts = Post::get(); // get all
        // $posts = Post::orderBy('id', 'desc')->take(5)->get();
        // $posts = Post::where('min_to_read', '<', 2)->get();
        // $posts = Post::get()->count();
        // $posts = Post::get()->sum('id');
        // Post::chunk(3, function ($posts) {
        //     foreach ($posts as $post) {
        //         echo $post->title . '<br>';
        //     }
        // });

        // $post = new Post();
        // $post->title = $request->title;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->min_to_read = $request->min_to_read;
        // $post->is_published = $request->is_published;
        // $post->save();

        // $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);

        // Post::create([
        //     'title' => $request->title,
        //     'excerpt' => $request->excerpt,
        //     'body' => $request->body,
        //     'min_to_read' => $request->min_to_read,
        //     'is_published' => $request->is_published,

        // ]);

        // return redirect(route('blog.index'));

        return 'index';
    }

    public function show()
    {
        return 'show';
    }

    public function update(Request $request, $id)
    {
        Post::where('id', $id)->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'min_to_read' => $request->min_to_read,
            'is_published' => $request->is_published,
        ]);

        Post::where('id', $id)->update($request->except(['_token', '_method']));
    }
}
