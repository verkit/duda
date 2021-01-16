<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            [
                'name' => 'pending'
            ], [
                'name' => 'error'
            ], [
                'name' => 'not yet paid'
            ], [
                'name' => 'paid'
            ], [
                'name' => 'process'
            ], [
                'name' => 'done'
            ],
        ]);

        DB::table('banks')->insert([
            [
                'bank_name' => 'BRI',
                'account_number' => 34567,
                'account_owner' => 'Surya',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);


        DB::table('services')->insert([
            [
            	'id' => 1,
                'service_name' => 'Stock Download',
                'slug' => 'backlink',
                'cover' => 'service-2020-04-2023:09:35.jpg',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('services')->insert([
            [
            	'id' => 2,
                'service_name' => 'Backlink & Traffict Website',
                'slug' => 'Backlink-&-Traffict-Website',
                'cover' => 'service-2020-04-2023:09:35.jpg',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('services')->insert([
            [
            	'id' => 3,
                'service_name' => 'SEO',
                'slug' => 'SEO',
                'cover' => 'service-2020-04-2023:09:35.jpg',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::table('sub_services')->insert([
            [
            	'id' => 1,
                'id_service' => 1,
                'sub_service_name' => 'Custom',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 2,
                'id_service' => 1,
                'sub_service_name' => 'Shutterstock',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 3,
                'id_service' => 1,
                'sub_service_name' => 'Freepik',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 4,
                'id_service' => 2,
                'sub_service_name' => 'Premium Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 5,
                'id_service' => 2,
                'sub_service_name' => 'High DA Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 6,
                'id_service' => 2,
                'sub_service_name' => 'SEnuke Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 7,
                'id_service' => 2,
                'sub_service_name' => 'Web 2.0 Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 8,
                'id_service' => 2,
                'sub_service_name' => 'Mix Quality Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 9,
                'id_service' => 2,
                'sub_service_name' => 'Other Quality Backlink',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 10,
                'id_service' => 2,
                'sub_service_name' => 'Website Traffict',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 11,
                'id_service' => 2,
                'sub_service_name' => 'Social Signals',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 12,
                'id_service' => 3,
                'sub_service_name' => 'Starter',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 13,
                'id_service' => 3,
                'sub_service_name' => 'Startup',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 14,
                'id_service' => 3,
                'sub_service_name' => 'Professional',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 15,
                'id_service' => 3,
                'sub_service_name' => 'Bussiness',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('sub_services')->insert([
            [
            	'id' => 16,
                'id_service' => 3,
                'sub_service_name' => 'Enterprise',
                'status' => 'aktif',
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 4,
                'product_name' => 'Edu/Gov + PR 8-9 Backlinks Package',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 5,
                'product_name' => 'DA - 50+ DoFollow Backlinks',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::table('products')->insert([
            [
                'id_subservice' => 6,
                'product_name' => 'Premium SEnuke',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 7,
                'product_name' => 'Exploit Backlinks',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 8,
                'product_name' => 'Mix Edu Backlinks',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 9,
                'product_name' => 'URL Shortener Backlinks',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 10,
                'product_name' => 'Mix WorldWide',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 11,
                'product_name' => 'Facebook',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 12,
                'product_name' => 'Paket 1',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 13,
                'product_name' => 'Paket 1',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 14,
                'product_name' => 'Paket 1',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 15,
                'product_name' => 'Paket 1',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('products')->insert([
            [
                'id_subservice' => 16,
                'product_name' => 'Paket 1',
                'status' => 'aktif',
                'price' => 7500,
                'description' => 'a',
                'icon' => 'fa fa-cubes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@duda.com',
                'password' => bcrypt('a'),
                'role' => 'superadmin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::table('news_categories')->insert([
            [
                'name' => 'tips'
            ], [
                'name' => 'seo'
            ], [
                'name' => 'news'
            ]
        ]);

        DB::table('news')->insert([
            [
                'title' => 'title satu',
                'slug' => 'title-satu',
                'cover' => 'app\public\images\gbr2.png',
                'content' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam magni, eos veritatis veniam! Provident voluptatem a, explicabo temporibus quibusdam omnis facere nisi aliquam inventore voluptate voluptas, dolorum libero hic aspernatur!</p>",
                'isDraft' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        DB::table('portfolio_categories')->insert([
            [
                'name' => 'stock download'
            ], [
                'name' => 'backlink'
            ], [
                'name' => 'traffict web'
            ], [
                'name' => 'social signal'
            ], [
                'name' => 'seo'
            ]
        ]);
    }
}
