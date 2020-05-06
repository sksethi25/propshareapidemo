<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{


    public static function getSortingAvailable(){
        return 
        [
            ["sort"=>"Most Recent", 'id'=>1],
            ["sort"=>"Return target", 'id'=>2],
            ["sort"=>"Rental Yield", 'id'=>3]
        ];
    }

    public function scopeCity($query, $city)
    {
        return $query->where('city', $city);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeSortByLatest($query, $type)
    {
        return $query->orderBy('created_at', 'DESC');
    }

    public function scopeSortByReturn($query, $type)
    {
        return  $query->orderBy('return_target_percentage', 'DESC');
    }

    public function scopeSortByRentalYield($query, $type)
    {
        return $query->orderBy('rental_yield_percentage', 'DESC');
    }


    public static function getFilteredProperties($city, $type, $sort){
      $query = self::select();  

        if($city!==""){
            $query->city($city);
        }
        if($type!==""){
           $query->type($type);
        }

        if($sort==1){
           $query->sortByLatest('created_at', 'DESC');
        }else if($sort==2){
            $query->sortByLatest('return_target_percentage', 'DESC');
        }else if($sort==3){
            $query->sortByLatest('rental_yield_percentage', 'DESC');
        }
        return $query->get();

    }
}
