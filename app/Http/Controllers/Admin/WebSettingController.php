<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\SiteSettings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class WebSettingController extends Controller
{
    public function settings(){
        $users = User::get();
        $roles = Role::orderBy('id')->get();
        $permissions = Permission::get();
        $faqs = Faq::orderBy('category_slug')->orderBy('order')->get();
        return view('admin.settings.settings', compact('roles', 'permissions','users','faqs'));

    }

    public function landing(){
        $logo = SiteSettings::where('key', 'logo')->first();
        $company_name = SiteSettings::where('key', 'company_name')->first()->value ?? '';
        $banner_1 = SiteSettings::where('key', 'banner_1')->first();
        $banner_2 = SiteSettings::where('key', 'banner_2')->first();
        $about_img = SiteSettings::where('key', 'about_image')->first();

        return view('components.landing-resources',compact('logo','company_name','banner_1','banner_2','about_img'));
    }

    public function settingsStore(Request $request)
    {
        
        $this->handleFileUpload($request, 'logo');
        $this->handleFileUpload($request, 'banner_1');
        $this->handleFileUpload($request, 'banner_2');
        $this->handleFileUpload($request, 'about_image');

        $this->updateSetting('company_name', $request->company_name);

        return back()->with('success', 'Settings updated successfully!');
    }

    private function handleFileUpload($request, $field)
    {
        if ($request->hasFile($field)) {
            $path = $request->file($field)->store('public/settings');
            $this->updateSetting($field, Storage::url($path), 'image');
        }
    }

    private function updateSetting($key, $value, $type = 'string')
    {
        SiteSettings::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }

    // FAQ Section
    public function index()
    {
        $faqs = Faq::orderBy('category_slug')->orderBy('order')->get();
        return view('admin.settings.settings', compact('faqs'));
    }

    public function create(){
        $faqs = Faq::orderBy('category_slug')->orderBy('order')->get();
        return view('admin.partials.create-faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_slug' => 'required',
            'category_name' => 'required',
            'category_icon' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $maxOrder = Faq::where('category_slug', $request->category_slug)
                       ->max('order') ?? 0;

        Faq::create([
            'category_slug' => $request->category_slug,
            'category_name' => $request->category_name,
            'category_icon' => $request->category_icon,
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $maxOrder + 1
        ]);

        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ created successfully');
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'category_slug' => 'required',
            'category_name' => 'required',
            'category_icon' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($request->all());
        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ updated successfully');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        
        Faq::where('category_slug', $faq->category_slug)
            ->orderBy('order')
            ->get()
            ->each(function($item, $index) {
                $item->update(['order' => $index + 1]);
            });
            
        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ deleted successfully');
    }

    public function reorder(Request $request)
    {
        $order = 1;
        foreach ($request->order as $id) {
            Faq::where('id', $id)->update(['order' => $order++]);
        }
        
        return response()->json(['success' => true]);
    }

}
