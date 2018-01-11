<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function generateSKU($last_id){

        $section_1 = $this->name;
        $section_2 = $last_id + 1;
        $section_3 = $this->created_by;

        $section_1 = strtoupper( substr(trim(str_replace(' ', '', $section_1)), 0, 2));
        $section_2 = sprintf('%07d', $section_2);
        $section_3 = strtoupper( substr(trim(str_replace(' ', '', $section_3)), 0, 2));

        return $section_1 . $section_2 . $section_3;
    }
}
