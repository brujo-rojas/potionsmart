<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
      

        $now = date("Y-m-d H:i:s", strtotime('now'));


        DB::table('potions')->insert([
          ['id'=> 1 , 'name' => 'Poción de amor'    , 'created_at' => $now , 'updated_at' => $now] ,
          ['id'=> 2 , 'name' => 'Poción alisadora'  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id'=> 3 , 'name' => 'Poción multijugos' , 'created_at' => $now , 'updated_at' => $now]
        ]);


        DB::table('ingredients')->insert([
          ['id' => 1  , 'name' => 'Petalos'                     , 'price_by_unit' =>  2000 , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 2  , 'name' => 'Sal de mar'                  , 'price_by_unit' => 3000  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 3  , 'name' => 'Vino'                        , 'price_by_unit' => 6000  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 4  , 'name' => 'Polvo magico'                , 'price_by_unit' => 30000 , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 5  , 'name' => 'Cenizas'                     , 'price_by_unit' => 2500  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 6  , 'name' => 'Aloe Vera'                   , 'price_by_unit' => 1500  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 7  , 'name' => 'Lagrima de Gato'             , 'price_by_unit' => 9000  , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 8  , 'name' => 'Jugo magico'                 , 'price_by_unit' => 27000 , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 9  , 'name' => 'Sanguijuelas'                , 'price_by_unit' => 13000 , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 10 , 'name' => 'Polvo de cuerno de bicornio' , 'price_by_unit' => 65000 , 'created_at' => $now , 'updated_at' => $now] ,
        ]);


        DB::table('ingredient_potion')->insert([
          ['potion_id' => 1, 'ingredient_id' => 1, 'proportion' => 0.2],
          ['potion_id' => 1, 'ingredient_id' => 2, 'proportion' => 0.1 ],
          ['potion_id' => 1, 'ingredient_id' => 3, 'proportion' => 0.4 ],
          ['potion_id' => 1, 'ingredient_id' => 4, 'proportion' => 0.3 ],

          ['potion_id' => 2, 'ingredient_id' => 5, 'proportion' => 0.3 ],
          ['potion_id' => 2, 'ingredient_id' => 6, 'proportion' => 0.3 ],
          ['potion_id' => 2, 'ingredient_id' => 7, 'proportion' => 0.1 ],
          ['potion_id' => 2, 'ingredient_id' => 8, 'proportion' => 0.3 ],

          ['potion_id' => 3, 'ingredient_id' => 9, 'proportion' => 0.2 ],
          ['potion_id' => 3, 'ingredient_id' => 7, 'proportion' => 0.3 ],
          ['potion_id' => 3, 'ingredient_id' => 4, 'proportion' => 0.2 ],
          ['potion_id' => 3, 'ingredient_id' => 2, 'proportion' => 0.1 ],
          ['potion_id' => 3, 'ingredient_id' => 5, 'proportion' => 0.1 ],
          ['potion_id' => 3, 'ingredient_id' => 10, 'proportion' => 0.1 ],

        ]);


        DB::table('clients')->insert([
          ['id'=> 1 , 'name' => 'Elly Kedward'     , 'created_at' => $now , 'updated_at' => $now] ,
          ['id'=> 2 , 'name' => 'Alice Kyteler'    , 'created_at' => $now , 'updated_at' => $now] ,
          ['id'=> 3 , 'name' => 'Madame Blavatsky' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id'=> 4 , 'name' => 'Joan Wytte'       , 'created_at' => $now , 'updated_at' => $now]
        ]);


        DB::table('sales')->insert([
          ['id' => 1  , 'client_id' => 1 , 'date' => '2021/10/11 17:04:16' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 2  , 'client_id' => 1 , 'date' => '2021/10/12 18:37:00' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 3  , 'client_id' => 1 , 'date' => '2021/10/06 17:34:33' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 4  , 'client_id' => 1 , 'date' => '2021/10/01 19:35:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 5  , 'client_id' => 1 , 'date' => '2021/09/13 20:48:48' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 6  , 'client_id' => 1 , 'date' => '2021/10/01 19:35:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 7  , 'client_id' => 1 , 'date' => '2021/09/22 20:59:28' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 8  , 'client_id' => 1 , 'date' => '2021/09/15 18:06:10' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 9  , 'client_id' => 1 , 'date' => '2021/09/15 13:28:12' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 10 , 'client_id' => 1 , 'date' => '2021/09/15 13:28:12' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 11 , 'client_id' => 1 , 'date' => '2021/10/18 20:49:23' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 12 , 'client_id' => 1 , 'date' => '2021/10/18 20:49:23' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 13 , 'client_id' => 1 , 'date' => '2021/09/23 18:08:52' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 14 , 'client_id' => 1 , 'date' => '2021/10/17 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 15 , 'client_id' => 1 , 'date' => '2021/10/10 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 16 , 'client_id' => 1 , 'date' => '2021/10/11 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 17 , 'client_id' => 2 , 'date' => '2021/09/15 19:33:24' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 18 , 'client_id' => 2 , 'date' => '2021/09/15 19:33:24' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 19 , 'client_id' => 2 , 'date' => '2021/10/12 18:37:00' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 20 , 'client_id' => 2 , 'date' => '2021/10/14 13:32:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 21 , 'client_id' => 2 , 'date' => '2021/10/11 17:04:16' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 22 , 'client_id' => 2 , 'date' => '2021/10/03 15:22:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 23 , 'client_id' => 2 , 'date' => '2021/10/18 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 24 , 'client_id' => 2 , 'date' => '2021/10/12 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 25 , 'client_id' => 3 , 'date' => '2021/10/06 17:34:33' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 26 , 'client_id' => 3 , 'date' => '2021/10/14 13:32:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 27 , 'client_id' => 3 , 'date' => '2021/09/13 20:48:48' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 28 , 'client_id' => 3 , 'date' => '2021/09/16 19:48:34' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 29 , 'client_id' => 3 , 'date' => '2021/09/22 20:59:28' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 30 , 'client_id' => 3 , 'date' => '2021/10/03 15:22:59' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 31 , 'client_id' => 3 , 'date' => '2021/09/19 21:45:35' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 32 , 'client_id' => 3 , 'date' => '2021/09/27 19:06:41' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 33 , 'client_id' => 3 , 'date' => '2021/09/27 19:06:41' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 34 , 'client_id' => 3 , 'date' => '2021/09/23 18:08:52' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 35 , 'client_id' => 3 , 'date' => '2021/10/09 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 36 , 'client_id' => 3 , 'date' => '2021/10/09 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 37 , 'client_id' => 3 , 'date' => '2021/10/18 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 38 , 'client_id' => 3 , 'date' => '2021/10/10 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 39 , 'client_id' => 3 , 'date' => '2021/10/20 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 40 , 'client_id' => 3 , 'date' => '2021/10/20 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 41 , 'client_id' => 3 , 'date' => '2021/10/12 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 42 , 'client_id' => 4 , 'date' => '2021/09/16 19:48:34' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 43 , 'client_id' => 4 , 'date' => '2021/09/15 18:06:10' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 44 , 'client_id' => 4 , 'date' => '2021/09/19 21:45:35' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 45 , 'client_id' => 4 , 'date' => '2021/09/22 21:33:21' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 46 , 'client_id' => 4 , 'date' => '2021/09/22 21:33:21' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 47 , 'client_id' => 4 , 'date' => '2021/09/23 20:04:55' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 48 , 'client_id' => 4 , 'date' => '2021/09/23 20:04:55' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 49 , 'client_id' => 4 , 'date' => '2021/10/06 18:52:48' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 50 , 'client_id' => 4 , 'date' => '2021/10/06 18:52:48' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 51 , 'client_id' => 4 , 'date' => '2021/10/17 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 52 , 'client_id' => 4 , 'date' => '2021/10/19 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 53 , 'client_id' => 4 , 'date' => '2021/10/19 22:00:03' , 'created_at' => $now , 'updated_at' => $now] ,
          ['id' => 54 , 'client_id' => 4 , 'date' => '2021/10/11 16:43:11' , 'created_at' => $now , 'updated_at' => $now] ,

        ]);


        DB::table('potion_sale')->insert([
          ['sale_id' => 1 , 'potion_id' => 1, 'amount' => 6,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 2 , 'potion_id' => 2, 'amount' => 5,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 3 , 'potion_id' => 1, 'amount' => 3,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 4 , 'potion_id' => 3, 'amount' => 6,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 5 , 'potion_id' => 1, 'amount' => 22,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 6 , 'potion_id' => 1, 'amount' => 21,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 7 , 'potion_id' => 1, 'amount' => 5,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 8 , 'potion_id' => 1, 'amount' => 12,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 9 , 'potion_id' => 2, 'amount' => 5,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 10, 'potion_id' => 2, 'amount' => 13,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 11, 'potion_id' => 2, 'amount' => 54,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 12, 'potion_id' => 1, 'amount' => 95,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 13, 'potion_id' => 2, 'amount' => 21,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 14, 'potion_id' => 3, 'amount' => 27,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 15, 'potion_id' => 1, 'amount' => 22,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 16, 'potion_id' => 1, 'amount' => 9,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 17, 'potion_id' => 2, 'amount' => 12,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 18, 'potion_id' => 1, 'amount' => 5,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 19, 'potion_id' => 1, 'amount' => 18,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 20, 'potion_id' => 1, 'amount' => 30,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 21, 'potion_id' => 2, 'amount' => 1,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 22, 'potion_id' => 2, 'amount' => 13,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 23, 'potion_id' => 3, 'amount' => 7,   'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 24, 'potion_id' => 1, 'amount' => 22,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 25, 'potion_id' => 1, 'amount' => 30,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 26, 'potion_id' => 2, 'amount' => 9 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 27, 'potion_id' => 2, 'amount' => 2 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 28, 'potion_id' => 2, 'amount' => 7 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 29, 'potion_id' => 3, 'amount' => 1 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 30, 'potion_id' => 2, 'amount' => 35,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 31, 'potion_id' => 2, 'amount' => 33,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 32, 'potion_id' => 1, 'amount' => 22,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 33, 'potion_id' => 1, 'amount' => 45,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 34, 'potion_id' => 3, 'amount' => 19,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 35, 'potion_id' => 1, 'amount' => 17,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 36, 'potion_id' => 2, 'amount' => 12,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 37, 'potion_id' => 2, 'amount' => 2 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 38, 'potion_id' => 3, 'amount' => 14,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 39, 'potion_id' => 2, 'amount' => 18,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 40, 'potion_id' => 1, 'amount' => 33,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 41, 'potion_id' => 3, 'amount' => 11,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 42, 'potion_id' => 1, 'amount' => 8 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 43, 'potion_id' => 1, 'amount' => 42,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 44, 'potion_id' => 3, 'amount' => 13,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 45, 'potion_id' => 3, 'amount' => 33,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 46, 'potion_id' => 2, 'amount' => 13,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 47, 'potion_id' => 1, 'amount' => 15,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 48, 'potion_id' => 1, 'amount' => 17,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 49, 'potion_id' => 3, 'amount' => 23,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 50, 'potion_id' => 1, 'amount' => 25,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 51, 'potion_id' => 3, 'amount' => 22,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 52, 'potion_id' => 3, 'amount' => 1 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 53, 'potion_id' => 3, 'amount' => 3 ,  'created_at' => $now, 'updated_at' => $now],
          ['sale_id' => 54, 'potion_id' => 3, 'amount' => 15,  'created_at' => $now, 'updated_at' => $now],
 
        ]);

    }
}
