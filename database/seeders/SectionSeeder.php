<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run()
    {
        $section1 = Section::create();

        $section1->texts()->create([
            'title_en' => 'Enhance Your Brand Impact',
            'title_ar' => 'عزز تأثير علامتك التجـــــــــارية',
            'description_en' => 'Strong presence on social media\nReal-time advertising campaign data\nDetailed reports on campaign performance',
            'description_ar' => 'وجود قوي على وسائل التواصل الاجتماعي\nتوفير بيانات الحملات الإعلانية بشكل فوري\nتقارير مفصله عن اداء حملاتك الإعلانية',
        ]);
        $section1->points()->create([
            'title_ar' => 'تقارير مفصله عن اداء حملاتك الإعلانية',

        ]);
        $section1->points()->create([
            'title_ar' => 'توفير بيانات الحملات الإعلانية بشكل فوري',

        ]);
        $section1->points()->create([
            'title_ar' =>'وجود قوي على وسائل التواصل الاجتماعي',

        ]);

        $section1->images()->create([
            'path' => '/images/sections/banner-image.png',
        ]);

        $section2 = Section::create();

        $section2->texts()->create([
            'title_en' => 'Our Services',
            'title_ar' => 'خدمــــــــــــــــــاتنا :',
            'description_en' => 'Experience unparalleled service quality.',
            'description_ar' => 'الحصول على الألم من نفسه ، لأنه ألم ، ولكن في بعض الأحيان تحدث ظروف يمكن أن يجلب له فيها الكدح والألم بعض المتعة الكبيرة.',
        ]);

        $section2->texts()->create([
            'title_en' => 'Real-Time Data',
            'title_ar' => 'بيانات فورية',
            'description_en' => 'Providing real-time advertising campaign data in one portfolio.',
            'description_ar' => 'توفير بيانات الحملات الإعلانية بشكل فوري ولحظي في محفظه واحده.',
        ]);

        $section2->images()->create([
            'path' => '/images/sections/section2_image1.png',
        ]);

        $section2->texts()->create([
            'title_en' => 'Ad Performance Analysis',
            'title_ar' => 'تحليل أداء الإعلانات',
            'description_en' => 'We provide detailed reports on your ads’ performance across various marketing channels.',
            'description_ar' => 'نقدم تقارير مفصلة عن أداء إعلاناتك عبر مختلف قنوات التسويق.',
        ]);

        $section2->images()->create([
            'path' => '/images/sections/section2_image2.png',
        ]);

        $section2->texts()->create([
            'title_en' => 'Report Generation',
            'title_ar' => 'انشاء التقارير',
            'description_en' => 'The platform provides detailed reports on your advertising campaign performance.',
            'description_ar' => 'تقدم المنصة تقارير مفصله عن اداء حملاتك الإعلانية.',
        ]);

        $section2->images()->create([
            'path' => '/images/sections/section2_image3.png',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $section2->images()->create([
                'path' => "/images/sections/section2_extra_image{$i}.png",
            ]);
        }

        $section3 = Section::create();
        $section3->texts()->create([
            'title_en' => 'Our Packages',
            'title_ar' => 'بـــــــــــــاقاتنا :',
            'description_en' => '24/7 Support all week\nCancel subscription anytime\n24/7 Support all week',
            'description_ar' => 'دعم 24/24h طيلة ايام الاسبوع\nإلغاء الإشتراك في اي وقت\nدعم 24/24h طيلة ايام الاسبوع',
        ]);
        $section3->points()->create([
            'title_ar' =>'دعم 24/24h طيلة ايام الاسبوع',

        ]);
        $section3->points()->create([
            'title_ar' =>'إلغاء الإشتراك في اي وقت',

        ]);

        $section3->points()->create([
            'title_ar' =>'دعم 24/24h طيلة ايام الاسبوع',

        ]);


        $section4 = Section::create();

        $section4->texts()->create([
            'title_en' => 'Who Are We?',
            'title_ar' => 'من نحن ؟',
            'description_en' => 'Advert is a platform specializing in ad analysis and providing real-time, weekly, monthly, and yearly reports. We help companies and organizations enhance the performance of their ads and minimize financial waste from their marketing budgets.',
            'description_ar' => 'Advert هي منصة متخصصة في تحليل الإعلانات وتقديم تقارير فورية، اسبوعية، شهرية وسنوية. نساعد الشركات والمؤسسات على تحسين قرأة أداء إعلاناتهم وتقليل الهدر المالي من ميزانياتهم التسويقية.',
        ]);

        $section4->images()->create([
            'path' => '/assets/attachment/hero/hero2.jpg',
        ]);

        $socialMediaCompanies = [
            '/assets/attachment/SochialMeadiComapnies/1.png',
            '/assets/attachment/SochialMeadiComapnies/2.png',
            '/assets/attachment/SochialMeadiComapnies/3.png',
            '/assets/attachment/SochialMeadiComapnies/4.png',
            '/assets/attachment/SochialMeadiComapnies/5.png',
        ];

        foreach ($socialMediaCompanies as $path) {
            $section4->images()->create(['path' => $path]);
        }

        // Section 5 (New Section)
        $section5 = Section::create();
        $section5->texts()->create([
            'title_en' => 'Our Vision',
            'title_ar' => 'رؤيتنا :',
            'description_en' => 'Creating a transparent and trustworthy advertising market...',
            'description_ar' => 'خلق سوق إعلانات يتمتع بالشفافية والمصداقية...',
        ]);

        $section5->images()->create([
            'path' => '/assets/attachment/StaticImages/ourVision.png', // Path to the vision image
        ]);

        $section5->texts()->create([
            'title_en' => 'Our Values',
            'title_ar' => 'قيمنا :',
            'description_en' => '', // No description needed for the title, just an empty string
            'description_ar' => '', // Same for Arabic description
        ]);

        $values = [
            ['title_en' => 'Effectiveness', 'title_ar' => 'الفعالية', 'description_en' => 'Helping our clients achieve their marketing goals efficiently.', 'description_ar' => 'نساعد عملائنا على تحقيق أهدافهم التسويقية بكفاءة'],
            ['title_en' => 'Clients', 'title_ar' => 'عملائنا', 'description_en' => 'Putting our clients\' needs first.', 'description_ar' => 'نضع احتياجات عملائنا على رأس أولوياتنا'],
            ['title_en' => 'Innovation', 'title_ar' => 'الابتكار', 'description_en' => 'Constantly developing innovative analytical solutions for our clients.', 'description_ar' => 'نسعى جاهدين لتطوير حلول تحليلية مبتكرة تلبي احتياجات عملائنا'],
            ['title_en' => 'Data', 'title_ar' => 'البيانات', 'description_en' => 'Believing in the power of data for improving decision-making.', 'description_ar' => 'نؤمن بقوة البيانات في تحسين عملية صنع القرار'],
            ['title_en' => 'Transparency', 'title_ar' => 'الشفافية', 'description_en' => 'Providing our clients with transparent and accurate reports on their ad performance.', 'description_ar' => 'نقدم لعملائنا تقارير شفافة ودقيقة عن أداء إعلاناتهم'],
        ];

        foreach ($values as $value) {
            $section5->texts()->create([
                'title_en' => $value['title_en'],
                'title_ar' => $value['title_ar'],
                'description_en' => $value['description_en'],
                'description_ar' => $value['description_ar'],
            ]);
        }


        $section6 = Section::create();

        $section6->texts()->create([
            'title_en' => 'Our Mission',
            'title_ar' => 'رسالتنا',
            'description_en' => 'We aim to build a transparent and fair advertising market that allows all stakeholders to have a clear view and deep understanding of campaign details and performance, boosting trust and economic effectiveness in marketing and advertising.',
            'description_ar' => 'نسعى إلى بناء سوق إعلانات شفاف وعادل يتيح لجميع الأطراف المعنية رؤية واضحة وفهم دقيق لتفاصيل وأداء الحملات الإعلانية، مما يعزز الثقة والفعالية الاقتصادية في مجال التسويق والإعلانات.',
        ]);

        $section6->texts()->create([
            'title_en' => 'Our Goals',
            'title_ar' => 'أهدافنا',
            'description_en' => 'Building trust between stakeholders: Creating an interactive and transparent environment between advertisers, publishers, and the audience.',
            'description_ar' => 'زيـــــــادة الثقة بين الأطراف المعنية: بناء بيئة تفاعلية ومفتوحة بين المعلنين والناشرين والجمهور.',
        ]);

        $section6->texts()->create([
            'title_en' => 'Enhance Transparency',
            'title_ar' => 'تعزيز الشفافية',
            'description_en' => 'Providing accurate and detailed reports on performance and spending on digital advertising campaigns.',
            'description_ar' => 'تعزيز الشفافية: توفير تقارير دقيقة ومفصلة عن الأداء والإنفاق على الحملات الإعلانية الرقمية.',
        ]);

        $section6->texts()->create([
            'title_en' => 'Improve Efficiency and Productivity',
            'title_ar' => 'تحسين الكفاءة والإنتاجية',
            'description_en' => 'Providing advanced analytical tools and technology to increase advertising effectiveness and reduce waste.',
            'description_ar' => 'تحسين الكفاءة والإنتاجية: توفير أدوات تحليلية وتكنولوجيا متقدمة لزيادة فعالية الإعلانات وتقليل الهدر.',
        ]);


        $section7 = Section::create();
        $section7->texts()->create([
            'title_en' => 'Our Partners',
            'title_ar' => 'شركاؤنا',
            'description_en' => 'A strong presence on social media is crucial for business success. At Advert, we specialize in managing social media accounts for companies.',
            'description_ar' => 'وجود قوي على وسائل التواصل الاجتماعي أمر حيوي لنجاح الأعمال. في Advert، نتخصص في إدارة حسابات وسائل التواصل الاجتماعي للشركات.',
        ]);

        $section7->images()->create([
            'path' => '/assets/attachment/OurClients/3.png', // Example image path for the section's banner
        ]);

        $partnerLogos = [
            '/assets/attachment/OurClients/1.png',
            '/assets/attachment/OurClients/2.png',
            '/assets/attachment/OurClients/3.png',
            '/assets/attachment/OurClients/3.png',
            '/assets/attachment/OurClients/1.png',
        ];

        foreach ($partnerLogos as $logoPath) {
            $section7->images()->create(['path' => $logoPath]);
        }
        $section8 = Section::create();
        $section8->texts()->create([
            'title_en' => 'Our customers opinions:',
            'title_ar' => 'آراء عملائـــــــــنا :',
            'description_en' => 'He gets pain from himself, because it is pain, but sometimes circumstances occur in which toil and pain can bring him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?',
            'description_ar' => 'الحصول على الألم من نفسه ، لأنه ألم ، ولكن في بعض الأحيان تحدث ظروف يمكن أن يجلب له فيها الكدح والألم بعض المتعة الكبيرة. لنأخذ مثالا تافها ، أي منا يقوم بتمارين بدنية شاقة ، إلا للحصول على بعض المزايا منها؟'
        ]);
    }
}

