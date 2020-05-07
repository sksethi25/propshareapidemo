<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("properties")->truncate();
        DB::table('properties')->insert([
            'name' => "london bridge",
            'city' => "bangalore",
            'area' => "electronic city",
            'address' => "plot 311, tower b, electronic it park, bangalore-144001",
            'type' => "commerical",
            'active' => true,

            'space' => 39400,
            'space_metric' => "square feet",

            'image' => "com3.jpg",

            'price' => 11500,
            'price_metric' => "per square feet",
            'min_investment' => 250000,
            'min_ownership'=> '2.8',
            'price_currency'=> "₹",

             'return_target_percentage' =>'14',
             'rental_yield_percentage' =>'7',

            'funding_percentage' =>'29',
            'funding_close_date' =>'2020-06-10',
            'investors'=> 4,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(29),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert(
        [
            'name' => "Roseate berry",
            'city' => "bangalore",
            'area' => "bellandur",
            'address' => "plot 12, tower c, rmz ecospace, bangalore-144002",
            'type' => "commerical",
            'active' => true,

            'space' => 12300,
            'space_metric' => "square feet",

            'image' => "com2.jpg",

            'price' => 9500,
            'price_metric' => "per square feet",
            'min_investment' => 300000,
            'min_ownership'=> '3.8',
            'price_currency'=> "₹",

             'return_target_percentage' =>'18',
             'rental_yield_percentage' =>'12',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-05-01',
            'investors'=> 8,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(10),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
         DB::table('properties')->insert([
            'name' => "marry gold ",
            'city' => "bangalore",
            'area' => "kormangla",
            'address' => "plot 14, kormangla it park, bangalore-144004",
            'type' => "commerical",
            'active' => true,

            'space' => 15200,
            'space_metric' => "square feet",

            'image' => "com1.jpg",

            'price' => 12000,
            'price_metric' => "per square feet",
            'min_investment' => 200000,
            'min_ownership'=> '2.2',
            'price_currency'=> "₹",

             'return_target_percentage' =>'8',
             'rental_yield_percentage' =>'3',

            'funding_percentage' =>'20',
            'funding_close_date' =>'2020-06-01',
            'investors'=> 12,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(20),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "Benentton hill ",
            'city' => "pune",
            'area' => "br park",
            'address' => "tower h, br park, pune-13006",
            'type' => "commerical",
            'active' => true,

            'space' => 19600,
            'space_metric' => "square feet",

            'image' => "com4.jpg",

            'price' => 10000,
            'price_metric' => "per square feet",
            'min_investment' => 120000,
            'min_ownership'=> '10',
            'price_currency'=> "₹",

             'return_target_percentage' =>'31',
             'rental_yield_percentage' =>'6',

            'funding_percentage' =>'89',
            'funding_close_date' =>'2020-06-01',
            'investors'=> 65,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(40),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);

        DB::table('properties')->insert([
            'name' => "cricent ray ",
            'city' => "pune",
            'area' => "tri area",
            'address' => "floor 3, bell tower, techno park, pune-13006",
            'type' => "commerical",
            'active' => true,

            'space' => 13600,
            'space_metric' => "square feet",

            'image' => "com5.jpg",

            'price' => 12000,
            'price_metric' => "per square feet",
            'min_investment' => 260000,
            'min_ownership'=> '13',
            'price_currency'=> "₹",

             'return_target_percentage' =>'26',
             'rental_yield_percentage' =>'12',

            'funding_percentage' =>'14',
            'funding_close_date' =>'2020-06-04',
            'investors'=>56,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(2),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "barry state",
            'city' => "pune",
            'area' => "lajpat nagar",
            'address' => "plot 12, cyber park, pune-13008",
            'type' => "commerical",
            'active' => true,

            'space' => 19800,
            'space_metric' => "square feet",

            'image' => "com6.jpg",

            'price' => 12000,
            'price_metric' => "per square feet",
            'min_investment' => 450000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'15',
             'rental_yield_percentage' =>'9',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-06-012',
            'investors'=> 37,
            'waitlist' => false,
            'created_at'=>Carbon::now()->subDays(22),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "cyber space ",
            'city' => "delhi",
            'area' => "mukhrjee nagar",
            'address' => "plot 22, milestone commerical park, delhi-011004",
            'type' => "commerical",
            'active' => true,

            'space' => 22600,
            'space_metric' => "square feet",

            'image' => "com7.jpg",

            'price' => 13000,
            'price_metric' => "per square feet",
            'min_investment' => 330000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'12',
             'rental_yield_percentage' =>'8',

            'funding_percentage' =>'55',
            'funding_close_date' =>'2020-05-29',
            'investors'=> 35,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(11),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "Helios bay",
            'city' => "delhi",
            'area' => "raja ji nagar",
            'address' => "building 6, plot 13, sis park, delhi-01106",
            'type' => "commerical",
            'active' => true,

            'space' => 18600,
            'space_metric' => "square feet",

            'image' => "com8.jpg",

            'price' => 12000,
            'price_metric' => "per square feet",
            'min_investment' => 220000,
            'min_ownership'=> '13',
            'price_currency'=> "₹",

             'return_target_percentage' =>'19',
             'rental_yield_percentage' =>'2',

            'funding_percentage' =>'75',
            'funding_close_date' =>'2020-05-31',
            'investors'=> 31,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(6),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
         DB::table('properties')->insert([
            'name' => "sellios fair",
            'city' => "delhi",
            'area' => "cannuaght palace",
            'address' => "building 2, plot 18, cp it state, delhi-01109",
            'type' => "commerical",
            'active' => true,

            'space' => 12900,
            'space_metric' => "square feet",

            'image' => "com9.jpg",

            'price' => 14000,
            'price_metric' => "per square feet",
            'min_investment' => 270000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'22',
             'rental_yield_percentage' =>'6',

            'funding_percentage' =>'22',
            'funding_close_date' =>'2020-06-30',
            'investors'=> 35,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(75),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);




         DB::table('properties')->insert([
            'name' => "primati devs",
            'city' => "bangalore",
            'area' => "silk board",
            'address' => "tower b, silk board bangalore-144001",
            'type' => "residential",
            'active' => true,

            'space' => 3400,
            'space_metric' => "square feet",

            'image' => "res1.jpg",

            'price' => 11500,
            'price_metric' => "per square feet",
            'min_investment' => 290000,
            'min_ownership'=> '9',
            'price_currency'=> "₹",

             'return_target_percentage' =>'16',
             'rental_yield_percentage' =>'15',

            'funding_percentage' =>'29',
            'funding_close_date' =>'2020-06-12',
            'investors'=> 9,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(35),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert(
        [
            'name' => "prime space",
            'city' => "bangalore",
            'area' => "BTM",
            'address' => "tower c,prime space towers, btm bangalore-144005",
            'type' => "residential",
            'active' => true,

            'space' => 1300,
            'space_metric' => "square feet",

            'image' => "res2.jpg",

            'price' => 9500,
            'price_metric' => "per square feet",
            'min_investment' => 800000,
            'min_ownership'=> '3',
            'price_currency'=> "₹",

             'return_target_percentage' =>'18',
             'rental_yield_percentage' =>'12',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-06-08',
            'investors'=> 13,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(7),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
         DB::table('properties')->insert([
            'name' => "black ridge",
            'city' => "bangalore",
            'area' => "marathali",
            'address' => "kala bazzar tower, marathali , bangalore-144009",
            'type' => "residential",
            'active' => true,

            'space' => 4000,
            'space_metric' => "square feet",

            'image' => "res3.jpg",

            'price' => 8000,
            'price_metric' => "per square feet",
            'min_investment' => 340000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'11',
             'rental_yield_percentage' =>'4',

            'funding_percentage' =>'40',
            'funding_close_date' =>'2020-07-12',
            'investors'=> 15,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(14),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "brown bays",
            'city' => "pune",
            'area' => "new hill park",
            'address' => "tower c, new hill park, pune-13006",
            'type' => "residential",
            'active' => true,

            'space' => 1900,
            'space_metric' => "square feet",

            'image' => "res4.jpg",

            'price' => 13000,
            'price_metric' => "per square feet",
            'min_investment' => 190000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'22',
             'rental_yield_percentage' =>'12',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-06-23',
            'investors'=> 22,
            'waitlist' => false,
            'created_at'=>Carbon::now()->subDays(27),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);

        DB::table('properties')->insert([
            'name' => "sis towers ",
            'city' => "pune",
            'area' => "tri area",
            'address' => "floor 3,sis towers, pune-13006",
            'type' => "residential",
            'active' => true,

            'space' => 1300,
            'space_metric' => "square feet",

            'image' => "res5.jpg",

            'price' => 11000,
            'price_metric' => "per square feet",
            'min_investment' => 220000,
            'min_ownership'=> '10',
            'price_currency'=> "₹",

             'return_target_percentage' =>'14',
             'rental_yield_percentage' =>'8',

            'funding_percentage' =>'40',
            'funding_close_date' =>'2020-06-09',
            'investors'=>8,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(24),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "iris residentials",
            'city' => "pune",
            'area' => "lajpat nagar",
            'address' => "floor 12, iris residentials, pune-13008",
            'type' => "residential",
            'active' => true,

            'space' => 1800,
            'space_metric' => "square feet",

            'image' => "res6.jpg",

            'price' => 1900,
            'price_metric' => "per square feet",
            'min_investment' => 120000,
            'min_ownership'=> '26',
            'price_currency'=> "₹",

             'return_target_percentage' =>'12',
             'rental_yield_percentage' =>'9',

            'funding_percentage' =>'72',
            'funding_close_date' =>'2020-06-012',
            'investors'=> 33,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(41),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "raheja towers",
            'city' => "delhi",
            'area' => "shahadra",
            'address' => "floor 22,tower 2, raheja towers, delhi-011004",
            'type' => "residential",
            'active' => true,

            'space' => 2600,
            'space_metric' => "square feet",

            'image' => "res7.jpg",

            'price' => 12000,
            'price_metric' => "per square feet",
            'min_investment' => 120000,
            'min_ownership'=> '10',
            'price_currency'=> "₹",

             'return_target_percentage' =>'20',
             'rental_yield_percentage' =>'3',

            'funding_percentage' =>'50',
            'funding_close_date' =>'2020-05-29',
            'investors'=> 5,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(21),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('properties')->insert([
            'name' => "mayfair field",
            'city' => "delhi",
            'area' => "raja ji nagar",
            'address' => "plot 13, mayfair field, delhi-01106",
            'type' => "residential",
            'active' => true,

            'space' => 1600,
            'space_metric' => "square feet",

            'image' => "res8.jpg",

            'price' => 4000,
            'price_metric' => "per square feet",
            'min_investment' => 100000,
            'min_ownership'=> '25',
            'price_currency'=> "₹",

             'return_target_percentage' =>'12',
             'rental_yield_percentage' =>'4',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-06-14',
            'investors'=> 4,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(5),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
         DB::table('properties')->insert([
            'name' => "ferry drake",
            'city' => "delhi",
            'area' => "cannuaght palace",
            'address' => "plot 6, cp residentail state, delhi-01109",
            'type' => "residential",
            'active' => true,

            'space' => 2200,
            'space_metric' => "square feet",

            'image' => "res9.jpg",

            'price' => 8000,
            'price_metric' => "per square feet",
            'min_investment' => 100000,
            'min_ownership'=> '25',
            'price_currency'=> "₹",

             'return_target_percentage' =>'29',
             'rental_yield_percentage' =>'12',

            'funding_percentage' =>'50',
            'funding_close_date' =>'2020-06-12',
            'investors'=> 2,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(51),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);


         DB::table('properties')->insert([
            'name' => "rim warehouse",
            'city' => "delhi",
            'area' => "najafgarth",
            'address' => "13km stone,najafgrth village,delhi-01108",
            'type' => "warehouse",
            'active' => true,

            'space' => 220000,
            'space_metric' => "square feet",

            'image' => "war1.jpg",

            'price' => 2000,
            'price_metric' => "per square feet",
            'min_investment' => 200000,
            'min_ownership'=> '12',
            'price_currency'=> "₹",

             'return_target_percentage' =>'12',
             'rental_yield_percentage' =>'5',

            'funding_percentage' =>'10',
            'funding_close_date' =>'2020-08-12',
            'investors'=> 2,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(120),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);

          DB::table('properties')->insert([
            'name' => "sabbar spaces",
            'city' => "pune",
            'area' => "hinchwadi",
            'address' => "plot- 223, multi space park, himchwadi, pune-13004",
            'type' => "warehouse",
            'active' => true,

            'space' => 280000,
            'space_metric' => "square feet",

            'image' => "war2.jpg",

            'price' => 2500,
            'price_metric' => "per square feet",
            'min_investment' => 400000,
            'min_ownership'=> '18',
            'price_currency'=> "₹",

             'return_target_percentage' =>'19',
             'rental_yield_percentage' =>'7',

            'funding_percentage' =>'80',
            'funding_close_date' =>'2020-08-12',
            'investors'=> 8,
            'waitlist' => true,
            'created_at'=>Carbon::now()->subDays(20),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);

          DB::table('properties')->insert([
            'name' => "M&M spaces",
            'city' => "bangalore",
            'area' => "hebbal",
            'address' => "plot-120, helo commerical park, bangalore-144009",
            'type' => "warehouse",
            'active' => true,

            'space' => 400000,
            'space_metric' => "square feet",

            'image' => "war3.jpg",

            'price' => 3900,
            'price_metric' => "per square feet",
            'min_investment' => 900000,
            'min_ownership'=> '13',
            'price_currency'=> "₹",

             'return_target_percentage' =>'20',
             'rental_yield_percentage' =>'10',

            'funding_percentage' =>'100',
            'funding_close_date' =>'2020-08-12',
            'investors'=> 122,
            'waitlist' => false,
            'created_at'=>Carbon::now()->subDays(33),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);



    }
}
