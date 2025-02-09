<?php

namespace Database\Seeders;

use App\Modules\Product\Models\Product;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'name' => 'هاتف ذكي X',
                'category_id' => 1,
                'description' => 'هاتف ذكي متطور يتميز بمواصفات متقدمة.',
                'created_by_id' => 1, // Assuming user ID 1 exists
                'video' => 'https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4',
                'images' => [
                    'https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'تيشيرت رجالي',
                'category_id' => 2, // Clothing
                'description' => 'تيشيرت مريح وأنيق للرجال.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'خلاط مطبخ',
                'category_id' => 3, // Home & Kitchen
                'description' => 'خلاط قوي يلبي جميع احتياجات مطبخك.',
                'created_by_id' => 1,
                'video' => 'https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4',
                'images' => [
                    'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
            [
                'name' => 'كتاب البرمجة',
                'category_id' => 4, // Books
                'description' => 'دليل شامل لتعلم البرمجة.',
                'created_by_id' => 1,
                'video' => null,
                'images' => [
                    'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],

            [
                'name' => 'كرة قدم',
                'category_id' => 5, // Sports
                'description' => 'كرة قدم عالية الجودة للاستخدام الاحترافي.',
                'created_by_id' => 1,
                'video' => 'https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4',
                'images' => [
                    'https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                ],
            ],
        ];

        // Insert products into the database
        foreach ($products as $productData) {
            $product = Product::create([
                'name' => $productData['name'],
                'category_id' => $productData['category_id'],
                'description' => $productData['description'],
                'created_by_id' => $productData['created_by_id'],
                'video' => $productData['video'],
            ]);

            // Insert images for the product
            foreach ($productData['images'] as $imageUrl) {
                $product->images()->create([
                    'image_path' => $imageUrl,
                ]);
            }
        }
    }
}
