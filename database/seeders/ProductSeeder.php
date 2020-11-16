<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
	        	'name' => 'Oppo mobile',
	        	'price' => '12,500',
	        	'category' => 'mobile',
	        	'description' => 'smartphone with 3gb ram',
	        	'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SL1500_.jpg'
	        ],
	        [
	        	'name' => 'Acer Laptop',
	        	'price' => '24,999',
	        	'category' => 'laptop',
	        	'description' => 'laptop with 4gb ram',
	        	'gallery' => 'https://i.gadgets360cdn.com/products/laptops/large/1525205892_635_aspire-3-a315-51-3004.jpg'
	        ],
	        [
	        	'name' => 'Benq Monitor',
	        	'price' => '8,499',
	        	'category' => 'monitor',
	        	'description' => 'amoled screen monitor',
	        	'gallery' => 'https://cdn.shopify.com/s/files/1/2227/7667/products/BenQ10_grande.jpg?v=1583393041'
	        ],
	        [
	        	'name' => 'Asus Laptop',
	        	'price' => '35,999',
	        	'category' => 'laptop',
	        	'description' => 'laptop with 16gb ram',
	        	'gallery' => 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/4/2/8102433/8102433_eef817a6-eab5-476f-90fd-b19f504e9f6d_1080_1080.jpg'
	        ],
        ]);
    }
}
