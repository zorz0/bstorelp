<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\settingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Utils\ImageUpload;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }
    public function update(settingUpdateRequest $request, Setting $setting)
    {
        $setting->update($request->validated());
        if ($request->has('logo')) {
            $logo = ImageUpload::uploadImage($request->logo, null, null, 'setting/');
            $setting->update(['logo' => $logo]);
        }
        if ($request->has('favicon')) {
            $favicon = ImageUpload::uploadImage($request->favicon, null, null, 'setting/');
            $setting->update(['favicon' => $favicon]);
        }
        if ($request->has('panerImgs')) {
            $panerImgs = ImageUpload::uploadImage($request->panerImgs, null, null, 'setting/');
            $setting->update(['panerImgs' => $panerImgs]);
        }
        $success_edit = trans('admin_.successfully_change_settings_message');
        $success_return_message = trans('admin_.return_change_settings_message');
        Alert::success($success_edit);
        return redirect()->route('dashboard.settings.index')->with('success', $success_return_message);
    }
}
