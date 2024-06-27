<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DesignationContoller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Landing\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LIController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\Test\TestController;
use App\Mail\SendEnquiryMail;
use App\Models\File;
use App\Models\Inquiry;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| Created On : 15-05-2024
| Created By : Test
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/**
 * | Route for testing 
 * | Used to test the view route 
 */
Route::controller(TestController::class)->group(function () {
    Route::get('test1', 'testVersion');
});

/**
 * | Route for the dashboard 
 * | Use for the Dashboard sections
 */
Route::controller(DashboardController::class)->group(function () {
    Route::get('', 'index');
    Route::get('about-us', 'aboutUs');
    Route::get('our-destination', 'ourDestination');
    Route::get('littile-inspiration', 'littileInspiration');
    Route::get('our-servic', 'ourServic');
    Route::get('responsible-travel', 'responsibleTravel');
    Route::get('blogs', 'blogs');
    Route::get('contact-us', 'contactUs');
    Route::get('privacy-policy', 'privacyPolicy');
    Route::get('thank-you', 'thankYou');
    Route::get('hero', 'hero');
});

Route::controller(FormController::class)->group(function () {
    Route::get('admin/inquiry', 'viewInquiry')->name('admin.inquiry');
    Route::post('admin/save/inquiry', 'saveInquiry')->name('admin.save.inquiry');

    Route::get('admin/subscription', 'viewSubscription')->name('admin.subscription');
    Route::post('admin/save/subscription', 'savesubscription')->name('admin.save.subscription');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin-dashboard', function () {

        $pageData       = array();
        $inspiration    = File::where('file_type', 'photo')->count();
        $inq            = Inquiry::where('status', 1)->count();
        $subscription   = Subscription::where('status', 1)->count();
        $pageData["inspiration"]    = $inspiration;
        $pageData["inquire"]        = $inq;
        $pageData["subscription"]   = $subscription;

        return view('admin.dashboard', $pageData);
    })->name('dashboard');

    Route::controller(LandingPageController::class)->group(function () {
        Route::get('landing-page', 'landingPage');
        Route::post('section1/update', 'sectionUpdate')->name('section1.update');
        Route::post('section2/update', 'sectionUpdate2')->name('section2.update');
        Route::post('section3/update', 'sectionUpdate3')->name('section3.update');
        Route::post('section4/update', 'sectionUpdate4')->name('section4.update');


        Route::post('section6/update', 'sectionUpdate6')->name('section6.update');
    });

    // Designation
    Route::controller(DesignationContoller::class)->group(function () {
        Route::get('admin/destination/{id?}', 'viewAdminDesignation')->name('admin.designation');
        // Route::post('admin/designation/update-section', 'updateSections')->name('admin.designation.updatesection');

        Route::post('destination/section1/update', 'sectionUpdate1')->name("destination.section1.update");
        Route::post('destination/section2/update', 'sectionUpdate2')->name("destination.section2.update");
        Route::post('destination/section3/update', 'sectionUpdate3')->name("destination.section3.update");
        Route::get('file/destination/delete/{id}', 'deleteFile');
        Route::get('file/destination/active/{id}', 'activeFile');
        Route::get('file/destination/deactive/{id}', 'deactiveFile');
    });


    Route::controller(AboutUsPageController::class)->group(function () {
        Route::get('aboutus-page', 'aboutusPage')->name("admin.aboutUs");

        Route::post('about/section1/update', 'sectionUpdate1')->name("about.section1.update");
        Route::post('about/section2/update', 'sectionUpdate2')->name("about.section2.update");
        Route::post('about/section3/update', 'sectionUpdate3')->name("about.section3.update");
        Route::post('about/section4/update', 'sectionUpdate4')->name("about.section4.update");
        Route::post('about/section5/update', 'sectionUpdate5')->name("about.section5.update");
        Route::post('about/section6/update', 'sectionUpdate6')->name("about.section6.update");
    });

    // Responsible Travel
    Route::controller(ResponsibleController::class)->group(function () {
        Route::get('admin/responsible', 'viewResponsible')->name('admin.responsible');
        Route::post('admin/responsible/update-section', 'updateSections')->name('admin.responsible.updatesection');
    });



    // Little Inspirations
    Route::controller(LIController::class)->group(function () {
        Route::get('little/view', 'littleView')->name('little.inspirations');
        Route::post('little/update-section', 'updateSection')->name('admin.little.updatesection');
        Route::post('little-uploadfile', 'uploadFile')->name('little.upload.file');
        Route::get('file/delete/{id}', 'deleteFile');
        Route::get('file/view-edit/{id}', 'editFile');
        Route::post('file/process-edit/{id}', 'editFileProcess')->name('little.update.file');
    });

    Route::controller(OurServicesController::class)->group(function () {
        Route::get('services/view/{id?}', 'viewService')->name('admin.service');
        Route::post('services/saveServices', 'saveServices')->name('admin.save.services');
        Route::post('services/saveServices1', 'updateSection1')->name('admin.save.services1');

        Route::get('multi-service/delete/{id}', 'deleteMultiService')->name('admin.delete.services');

        Route::get('multi-service/active/{id}', 'activeMultiService');
        Route::get('multi-service/deactive/{id}', 'deactiveMultiService');
    });


    // Use for the SCO
    Route::controller(CollectionController::class)->group(function () {
        Route::get('collection/destination', 'viewDestination')->name('admin.view.destination');
        Route::get('collection/seo', 'viewSeo')->name('admin.view.seo');
        Route::post('collection/save-seo', 'saveSeo')->name('admin.save.seo');
    });
});
