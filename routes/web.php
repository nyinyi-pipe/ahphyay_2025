<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Supplier\SupplierDashboardController;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return to_route('landing');
});

Route::get('/home', [WebSettingController::class, 'landing'])->name('landing');

Route::get('/about', function () {
    $about_img = SiteSettings::where('key', 'about_image')->first();
    return view('components.about',compact('about_img'));
});

Route::get('/contact', function () {
    return view('components.contact ');
});

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:superadmin']], function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/admin/role/create', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/admin/role/store', [RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/admin/role/edit/{id}', [RoleController::class, 'editRolePage'])->name('admin.roles.edit.page');
        Route::patch('/admin/role/update/{id}', [RoleController::class, 'updateRole'])->name('admin.roles.update');
        Route::get('/admin/role/delete/{id}', [RoleController::class, 'deleteRole'])->name('admin.roles.delete');
        Route::get('/admin/roles/permissions/{id}', [RoleController::class, 'assignPermissions'])->name('admin.roles.permissions');
        Route::patch('/admin/roles/permissions/update/{id}', [RoleController::class, 'assignPermissionsUpdate'])->name('admin.roles.permissions.update');
        Route::get('/admin/settings', [WebSettingController::class, 'settings'])->name('admin.settings');
        Route::post('/admin/settings', [WebSettingController::class, 'settingsStore'])->name('admin.settings.store');

        Route::get('/faqs', [WebSettingController::class, 'index'])->name('admin.faqs.index');
        Route::get('/faq/create', [WebSettingController::class, 'create'])->name('admin.faqs.create');
        Route::post('/faqs', [WebSettingController::class, 'store'])->name('admin.faqs.store');
        Route::put('/faqs/{faq}', [WebSettingController::class, 'update'])->name('admin.faqs.update');
        Route::delete('/faqs/{faq}', [WebSettingController::class, 'destroy'])->name('admin.faqs.destroy');
        Route::post('/faqs/reorder', [WebSettingController::class, 'reorder'])->name('admin.faqs.reorder');
    });

    Route::group(['middleware' => ['role:supplier']], function () {
        Route::get('/supplier/dashboard', [SupplierDashboardController::class, 'dashboard'])->name('supplier.dashboard');
    });

    Route::group(['middleware' => ['role:customer']], function () {
        Route::get('/customer/dashboard', [CustomerDashboardController::class, 'dashboard'])->name('customer.dashboard');
    });

    // Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
