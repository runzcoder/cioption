<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public static function getSetting($setting)
    {
        $settings = Setting::where("name", $setting)->get();
        $setting = "0";
        if (count($settings) > 0) {
            $setting = $settings[0]->value;
        }
        return $setting;
    }
}
