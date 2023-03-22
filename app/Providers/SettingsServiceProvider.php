<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
                // Get settings from the cache
                $settings = Cache::get(Setting::CACHE_KEY);
                if (!$settings) {
                    $settings = Setting::pluck('value', 'name');
                    Cache::put(Setting::CACHE_KEY, $settings);
                }

                foreach ($settings as $key => $value) {
                    Config::set($key, $value);
                }
    }
}
