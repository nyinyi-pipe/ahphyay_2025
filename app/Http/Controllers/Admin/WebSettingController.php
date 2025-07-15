<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\SiteSettings;
use App\Models\User;
use App\Repositories\WebSettingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class WebSettingController extends Controller
{
    protected $webSettingRepo;

    public function __construct(WebSettingRepository $webSettingRepo)
    {
        $this->webSettingRepo = $webSettingRepo;
    }

    public function settings()
    {
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];
        $banner_1 = $this->webSettingRepo->getLandingAttributes()['banner_1'];
        $banner_2 = $this->webSettingRepo->getLandingAttributes()['banner_2'];
        $banner_3 = $this->webSettingRepo->getLandingAttributes()['banner_3'];
        $about_img = $this->webSettingRepo->getLandingAttributes()['about_img'];

        return view('admin.settings.settings', compact('logo','company_name','banner_1','banner_2','banner_3','about_img'));
    }

    public function landing()
    {
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];
        $banner_1 = $this->webSettingRepo->getLandingAttributes()['banner_1'];
        $banner_2 = $this->webSettingRepo->getLandingAttributes()['banner_2'];
        $banner_3 = $this->webSettingRepo->getLandingAttributes()['banner_3'];
        $about_img = $this->webSettingRepo->getLandingAttributes()['about_img'];


        return view('components.landing-resources', compact('logo', 'company_name', 'banner_1', 'banner_2','banner_3', 'about_img'));
    }

    public function settingsStore(Request $request)
    {
        request()->validate([
            'logo' => 'nullable|image|max:25600',
            'banner_1' => 'nullable|image|max:25600',
            'banner_2' => 'nullable|image|max:25600',
            'banner_3' => 'nullable|image|max:25600',
            'about_image' => 'nullable|image|max:25600',
            'company_name' => 'nullable|string'
        ]);

        $this->handleFileUpload($request, 'logo');
        $this->handleFileUpload($request, 'banner_1');
        $this->handleFileUpload($request, 'banner_2');
        $this->handleFileUpload($request, 'banner_3');
        $this->handleFileUpload($request, 'about_image');

        $this->updateSetting('company_name', $request->company_name);

        return back()->with('success', 'Settings updated successfully!');
    }

    private function handleFileUpload($request, $field)
    {
        if ($request->hasFile($field)) {
            $existing = SiteSettings::where('key', $field)->first();

            if ($existing && $existing->value) {
                $this->deleteOldFile($existing->value);
            }

            $path = $request->file($field)->store('public/settings');
            $this->updateSetting($field, Storage::url($path), 'image');
        }
    }

    private function deleteOldFile($fileUrl)
    {
        $filePath = str_replace('/storage/', '', $fileUrl);
        $fullPath = "public/{$filePath}";

        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }
    }

    private function updateSetting($key, $value, $type = 'string')
    {
        SiteSettings::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }

    public function about()
    {
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];
        $about_img = $this->webSettingRepo->getLandingAttributes()['about_img'];

        return view('components.about', compact('logo', 'company_name', 'about_img'));
    }

    public function contact()
    {
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];

        return view('components.contact', compact('logo', 'company_name'));
    }


    // FAQ Section
    public function index()
    {
        $faqs = Faq::orderBy('category_slug')->orderBy('order')->get();
        return view('admin.settings.settings', compact('faqs'));
    }

    public function create()
    {
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
            ->each(function ($item, $index) {
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
