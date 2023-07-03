<?php
namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showPosts($id)
    {
        $category = Category::with('posts')->findOrFail($id);

        return view('categories.posts', ['category' => $category]);
    }
    public function latestPost($id)
    {
        $category = Category::findOrFail($id);

        $latestPost = $category->latestPost();

        return view('categories.latest_post', ['category' => $category, 'latestPost' => $latestPost]);
    }
    public function latestPosts()
    {
        $categories = Category::all();

        return view('categories.latest_posts', ['categories' => $categories]);
    }
}
