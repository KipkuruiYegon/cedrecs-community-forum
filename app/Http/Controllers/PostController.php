<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{   //

    public function create_post(Request $request)
    {
        //create the post to the database
        $post  = new Post;
        $post->title_post=$request->title_post;
        $post->category_post=$request->category_post;
        $post->profile_type=$request->profile_type;
        $post->profile_name=$request->profile_name;
        $post->user_email=$request->user_email;
        // $post->body_post=$request->body_post;
        $post->body_post = $request->input('editor_content');

        $post->save();

        return redirect('/');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload'))

        {

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->
            getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('postmedia'), $fileName);

            $url  = asset('postmedia/'. $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1
            , 'url' => $url]);


        }



    }

    //function to diplay all posts from database shared by users in the forum

    public function list_post()
    {
        $data = Post::paginate(10);
        return view('welcome')->with('data', $data);
    }


    public function show_post($postId)
{
    // Retrieve the post from the database using the post ID
    $post = Post::findOrFail($postId);

    // Retrieve the comments related to the post using the post_id foreign key
    $comments = Comment::where('post_id', $postId)->get();

    // Pass the post and comments to the view
    return view('commentpost', compact('post', 'comments', 'postId'));
}









    public function show_postagain($postId)
    {
        // Retrieve the post from the database using the post ID
        $post = Post::findOrFail($postId);

        // Pass the post and $postId to the commentpost view
        return view('commentpost', ['post' => $post, 'postId' => $postId]);
    }

}


