<?php

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('properties')->insert([
            'name' => "london bridge",
            'city' => "bangalore",
            'area' => "electronic city",
            'address' => "plot 311, tower b, kormangla it park",
            'type' => "commerical",
            'active' => true,

            'space' => 39400,
            'space_metric' => "square feet",

            'image' => "grid.jpg",

            'price' => 11500,
            'price_metric' => "per square feet",
            'min_investment' => 250000,
            'min_ownership'=> '2.8',
            'price_currency'=> "$",

             'return_target_percentage' =>'25',
             'rental_yield_percentage' =>'25',

            'funding_percentage' =>'25',
            'funding_close_date' =>'2020-04-07',
            'investors'=> 4,
            'waitlist' => true,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
    }
}
