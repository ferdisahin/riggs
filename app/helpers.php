<?php

use App\Models\Setting;

if(!function_exists('get_meta')){
    function get_meta($val){
        return Setting::find(1)->$val;
    }
}
