<?php
namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();

        return view('posts.index', compact('posts'));
    }

    public function totalPostInCategory($id)
    {
        $postCount = Post::where('category_id', $id)->count();
        return $postCount;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully']);
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }

    public function showDeletedPosts()
    {
        $posts = Post::onlyTrashed()->get();

        return view('posts.deleted', compact('posts'));
    }
}
