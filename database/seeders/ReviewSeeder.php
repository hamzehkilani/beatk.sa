<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'name_en' => 'Osama',
            'name_ar' => 'أسامه',
            'review_en' => 'A strong social media presence is vital to business success. At Advert, we specialize in managing social media accounts for businesses.',
            'review_ar' => 'وجود قوي على وسائل التواصل الاجتماعي أمراً حيوياً لنجاح الأعمال. في Advert، نتخصص في إدارة حسابات وسائل التواصل الاجتماعي للشركات',
            'rating' => 4,
        ]);
        Review::create([
            'name_en' => 'Abdul Samad',
            'name_ar' => 'عبد الصمد',
            'review_en' => 'A strong social media presence is vital to business success. At Advert, we specialize in managing social media accounts for businesses.',
            'review_ar' => 'وجود قوي على وسائل التواصل الاجتماعي أمراً حيوياً لنجاح الأعمال. في Advert، نتخصص في إدارة حسابات وسائل التواصل الاجتماعي للشركات',
            'rating' => 5,
        ]);
        Review::create([
            'name_en' => 'Ibrahim',
            'name_ar' => 'إبراهيم',
            'review_en' => 'A strong social media presence is vital to business success. At Advert, we specialize in managing social media accounts for businesses.',
            'review_ar' => 'وجود قوي على وسائل التواصل الاجتماعي أمراً حيوياً لنجاح الأعمال. في Advert، نتخصص في إدارة حسابات وسائل التواصل الاجتماعي للشركات',
            'rating' => 4,
        ]);

    }
}
