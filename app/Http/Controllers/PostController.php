<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Category;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }


    public function add()
    {
        $cat = Category::all();
        return view('post.add', ['cat' => $cat]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'body' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required'
        ]);
        if(filesize(request()->cover)){
            $cover_img = time() . '_' . request()->cover->getClientOriginalName();
            request()->cover->move(public_path('posts/images'), $cover_img);
        }
        else
            $cover_img = 'no_thumb.png';

        $newPost = Post::Create([
            'title' => request()->title,
            'body' => request()->body,
            'cover_path' => 'posts/images/' . $cover_img,
            'category_id' => request()->category_id,
            'user_id' => request()->user_id
        ]);

        if ($newPost) {
            return redirect()->route('home')
                ->with('success', 'New Post has been added');
        };

        return abort(403);
    }
    public function edit(Post $id)
    {
        $cat = Category::all();
        return view('post.edit', ['post' => $id, 'cat' => $cat]);
    }

    public function update(Post $post)
    {
        $post->update([
            'title' => request()->title,
            'body' => request()->content,
            'category_id' => request()->category_id,
            'user_id' => request()->user_id
        ]);

        return redirect()->route('home')
            ->with('success', 'Post has been updated.');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('home')
            ->with('success', 'Post has been deleted.');
    }
    public function login()
    {
        return view('auth.login');
    }
    //  public function twofactor(){
    //      return view('auth.two-factor-challenge');
    //  }

    public function twofactor()
    {
        return view('auth.2fa');
    }

    public function test(Request $request)
    {
        $users = User::all();
        return view('test', ['users' => $users]);
    }

    public function readPost(Post $id)
    {
        $comments = Comment::all();
        $replies = Reply::all();
        return view('post.read-post', ['post' => $id, 'comments' => $comments,'replies' => $replies]);
    }

    public function comment()
    {
        $newComment = Comment::Create([
            'comment' => request()->comment,
            'post_id' => request()->post_id,
            'user_id' => request()->user_id
        ]);
        if ($newComment) {
            return redirect()->route('readPost', request()->post_id);
        };
    }

    public function reply()
    {
        $newComment = Reply::Create([
            'reply' => request()->reply,
            'comment_id' => request()->comment_id,
            'user_id' => request()->user_id
        ]);
        if ($newComment) {
            return redirect()->route('readPost', request()->post_id);
        };
    }
}
