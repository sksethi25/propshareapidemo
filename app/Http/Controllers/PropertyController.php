<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends BaseController
{



    public function getProperties(Request $request){

        //Input
        $city =trim($request->query("city", ""));
        $type =trim($request->query("type", ""));
        $sort =intval(trim($request->query("sort", 1)));

        $filtered_properties= Property::getFilteredProperties($city, $type, $sort);
        $property_tiles= self::getPropertyTiles($filtered_properties);


        $array= [
            'properties'=>$property_tiles,
            'filters'=>[
                'city'=>Property::select('city')->groupBy('city')->get(),
                'type'=>Property::select('type')->groupBy('type')->get(),
                'sort'=>Property::getSortingAvailable(),
                'selected'=>[
                    'city'=>$city,
                    'type'=>$type,
                    'sort'=>$sort
                ]
            ],


        ];
        return  json_encode($array);
    }

    private static function getPropertyTiles($filtered_properties){
        $tiles = [];
        foreach ($filtered_properties as $property) {
            $tiles[] = self::getpropertyTile($property);
        }
        return $tiles;
    }

    private static function getpropertyTile($property){
        $tile = [];
        $tile['id'] = $property->id;
        $tile['name'] = ucwords($property->name);
        $tile['address'] = ucwords($property->address);
        $tile['type'] = ucwords($property->type);
        $tile['space'] = number_format($property->space);
        $tile['space_metric'] = ucwords($property->space_metric);

        $tile['currency'] = $property->price_currency;
        $tile['price'] = number_format($property->price);
        $tile['price_metric'] = ucwords($property->price_metric);


        $tile['image'] = $property->image;

        $tile['min_investment'] = number_format($property->min_investment);
        $tile['ownership'] = $property->min_ownership;
        $tile['return_target'] = $property->return_target_percentage ."%";
        $tile['rental_yield'] = $property->rental_yield_percentage ."%";
        $tile['funding'] = $property->funding_percentage ."%";
        $tile['investors'] = $property->investors;
        $tile['days_left'] = \Carbon\Carbon::createFromFormat('Y-m-d', $property->funding_close_date)->diffInDays();

        $property['funding_status']= "" ;
        if($property->funding_percentage>=100 &&  $property->waitlist ==0 ){
           $tile['funding_status']= "Fully Funded" ;
       }else if($property->funding_percentage>=100 && $property->waitlist ===1){
           $tile['funding_status']= "Join Waitlist" ;
       }  
       return $tile;
   }
}
