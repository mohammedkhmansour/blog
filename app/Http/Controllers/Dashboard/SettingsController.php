<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function edit()
    {
        $settings = Setting::pluck('value', 'name');

        return view('dashboard.settings.settings', [
            'settings' => $settings,
        ]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'settings.app_name' => 'required',

        ]);

        foreach ($request->post('settings') as $key => $value) {
            Setting::updateOrCreate([
                'name' => str_replace('_', '.', $key),
            ], [
                'value' => $value,
            ]);
        }
        event('settings.updated');

        flash()->addSuccess('تم الارسال بنجاح');
        return redirect()->back();
    }

}
