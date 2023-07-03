<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            Post::create([
                'title' => 'Post in ' . $category->name,
                'content' => 'This is a post in ' . $category->name,
                'category_id' => $category->id,
            ]);
        }
    }
}
