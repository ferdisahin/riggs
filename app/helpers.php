<?php

use App\Models\Setting;
use Illuminate\Support\HtmlString;

if(!function_exists('get_meta')){
    function get_meta($val){
        return Setting::find(1)->$val;
    }
}

if(!function_exists('get_content')){
    function get_content($val){
        return new HtmlString(
            app(\Parsedown::class)->setSafeMode(true)->text($val)
        );
    }
}
