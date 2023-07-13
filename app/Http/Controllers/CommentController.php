<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
class CommentController extends Controller
{
    //

        public function displayComments($postId)
    {
        // Retrieve the post from the database using the post ID
        $post = Post::findOrFail($postId);

        // Retrieve the comments related to the post
        $comments = Comment::where('parent_comment_id', $postId)->get();

        // Pass the post and comments to the view
        return view('commentpost', ['post' => $post, 'comments' => $comments]);
    }





    public function create(Request $request, $postId)
{
    // Find the post
    $post = Post::findOrFail($postId);

    // Create the comment
    $comment = new Comment();
    $comment->post_id = $postId; // Set the post ID as the value for the post_id column
    $comment->profile_type = $request->input('profile_type');
    $comment->profile_name = $request->input('profile_name');
    $comment->user_email = $request->input('user_email');
    $comment->comment_body = $request->input('comment_body');

    // Save the comment
    $comment->save();

    // Associate the comment with the post
    $post->comments()->save($comment);

    // Flash a success message to the session
    $request->session()->flash('success', 'Reply submitted successfully');

    // Redirect to the route that displays the post with comments
    return redirect()->route('show_post', ['postId' => $postId]);
}








}
