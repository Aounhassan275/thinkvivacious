<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [ 'name' => 'aounhassan1',
            'email' => 'admin1@mail.com',
            'type' => '1',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            
            ['name' => 'Aounhassan2',
            'email' => 'admin2@mail.com',
            'type' => '1',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);       
        DB::table('categories')->insert([
            [ 'name' => 'Health',
            'image' => '/category/111614798634.jpg'],
            ['name' => 'Motivation',
            'image' => '/category/491614798648.jpg'],          
            ['name' => 'Technology',
            'image' => '/category/901614798619.jpg'],   
        ]);
    
        DB::table('blogs')->insert([
            [ 'title' => 'Natural Salt',
             'name' => 'Natural Salt',
              'category_id' => '1' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/791606323367.jpg' , 
              'admin_id' => '1'  ],       
              [ 'title' => 'Grooom Road',
               'name' => 'Natural Salt',
              'category_id' => '2' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/871606330073.jpg' , 
              'admin_id' => '1'  ],    
              [ 'title' => 'Web Developer',
              'name' => 'Web Developer' , 
              'category_id' => '3' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/721606330121.jpg' , 
              'admin_id' => '1'  ],         
              [ 'title' => 'ROYAL UNITED TRADERS',
              'name' => 'ROYAL UNITED TRADERS' , 
              'category_id' => '1' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/531606330208.png' , 
              'admin_id' => '1'  ],       
              [ 'title' => 'Pink Mine',
               'name' => 'Pink Mine',
              'category_id' => '1' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/111606330266.png' , 
              'admin_id' => '1'  ],   
              [ 'title' => 'SOmehting',
              'name' => 'SOmehting',
              'category_id' => '3' , 
              'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' , 
              'image' => '/blog/11606330170.png' , 
              'admin_id' => '1'  ], 
        ]);
        DB::table('tags')->insert([
            [ 'tag' => 'Deliet',
              'blog_id' => '1'  ], 
              [ 'tag' => 'NEW',
              'blog_id' => '1'  ], 
              [ 'tag' => 'Spouse',
              'blog_id' => '1'  ], 
              [ 'tag' => 'Came',
              'blog_id' => '1'  ], 
              [ 'tag' => 'Don',
              'blog_id' => '1'  ], 
              [ 'tag' => 'Sum',
              'blog_id' => '2'  ], 
              [ 'tag' => 'Run',
              'blog_id' => '2'  ], 
              [ 'tag' => 'Ran',
              'blog_id' => '2'  ], 
              [ 'tag' => 'Groom',
              'blog_id' => '3'  ], 
              [ 'tag' => 'Pro',
              'blog_id' => '3'  ], 
              [ 'tag' => 'Game',
              'blog_id' => '3'  ],
        ]);
        DB::table('information')->insert([
            [ 'phone' => '923030672683',
             'email' => 'aounhassan275@gmail.com',
             'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
             'address' => '337 M-Dubai Tower, Lehtrar Road, khanna pul, Islamabad, Pakistan',
             'hdescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'bcdescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'cdescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'adescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'pdescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'bdescription' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'fb' => 'https://www.facebook.com/codestown/',
             'insta' => 'https://www.instagram.com/codestownofficial/',
             'twitter' => 'https://twitter.com/TownCodes',
             'pt' => 'https://twitter.com/TownCodes', 
             'image' => '/information/581606414650.png' ], 
        ]);
    }
}
