<?php

namespace Database\Seeders;

use App\Modules\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'إلكترونيات',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'sort' => 1,
            ],
            [
                'name' => 'ملابس',
                'image' => 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'sort' => 2,
            ],
            [
                'name' => 'البيت والمطبخ',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'sort' => 3,
            ],
            [
                'name' => 'كتب',
                'image' => 'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'sort' => 4,
            ],
            [
                'name' => 'رياضة',
                'image' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'sort' => 5,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
