<?php

use App\Http\Controllers\BoardOfTrusteesController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\LatestAlumniController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\TeachingController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\BotController;
use App\Http\Controllers\SyndicateController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\AcademicCouncilController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ConvocationController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LatestNoticeController;
use App\Http\Controllers\LatestConvocationController;
use App\Http\Controllers\LatestAcademicCouncilController;
use App\Http\Controllers\LatestSyndicateController;
use App\Http\Controllers\CseFacultyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/cse/faculty', [CseFacultyController::class, 'index'])
    ->name('cse.faculty');

Route::get('/cse/faculty/{id}', [CseFacultyController::class, 'show'])
    ->name('cse.faculty.profile');

Route::view('/undergraduate-programmes', 'undergraduate-programmes')
    ->name('programmes.undergraduate');

Route::view('/postgraduate-programmes', 'postgraduate-programmes')
    ->name('programmes.postgraduate');

Route::get('/notice', [LatestNoticeController::class, 'index'])
    ->name('notice.index');

////Route::get('/cse/faculty', [CseFacultyController::class, 'index'])
    ////->name('cse.faculty');

Route::view('/school-biomedical-life-science', 'school-biomedical-life-science')
    ->name('school-biomedical-life-science');    

Route::get('/alumnis', [LatestAlumniController::class, 'index'])
    ->name('alumnis.index');

Route::get('/alumni/{id}', [LatestAlumniController::class, 'show'])
    ->name('alumnis.show');


Route::get('/convocation', [LatestConvocationController::class, 'index'])
    ->name('convocation');

Route::get('/convocation/{id}', [LatestConvocationController::class, 'show'])
    ->name('convocation.show');



Route::get('/academic-council', [LatestAcademicCouncilController::class, 'index'])
    ->name('academic-council');

Route::get('/syndicate', [LatestSyndicateController::class, 'index'])
    ->name('syndicate');


Route::view('/contact-us', 'contact-us')
    ->name('contact.us');

Route::view('/school-of-business-and-social-science', 'school-business-social-science')
    ->name('school.business.social.science');


Route::get('/', function () {
    return view('welcome');
});


Route::get('overview',function()
{

   return view('about_us');

});


Route::get('vision-mission',function()
{

   return view('vision-mission');

});


Route::get('founder',function()
{

   return view('founder');

});


Route::get('study',function()
{

   return view('study');

});


Route::get('resources',function()
{

   return view('resources');

});


Route::get('/board-of-trustees', [BoardOfTrusteesController::class, 'index'])
    ->name('board.of.trustees');






Route::get('chancellor',function()

{

   return view('chancellor');

});

Route::get('chairman',function()

{

   return view('chairman');

});



Route::get('vc',function()

{

   return view('vc');

});


Route::get('tressurer',function()

{

   return view('tressurer');

});


Route::get('registrar',function()

{

   return view('registrar');

});

Route::get('controller_of_examinations',function()

{

   return view('controller_of_examinations_message');

});

Route::get('registrar_office',function()

{

   return view('registrar_office');

});

Route::get('proctor',function()

{

   return view('proctor');

});

Route::get('information_technology',function()

{

   return view('it_office');

});


Route::get('school_of_science_and_engineering',function()

{

   return view('school_of_science_and_engineering');

});

Route::get('business-social-science',function()

{

   return view('business-social-science');

});

Route::get('school_of_biomedical_life_science',function()

{

   return view('biomedical');

});

Route::get('cse_faculty',function()

{

   return view('cse_faculty');

});

Route::get('Esraq Humayun',function()

{

   return view('esraq');

});

Route::get('cse_department',function()

{

   return view('cse_dapartment');

});

Route::get('Khwaja Enayetpuri Sufism and Skill Development Institute',function()

{

   return view('sufism');

});

Route::get('iqac',function()

{

   return view('iqac');

});


Route::get('academic_calender',function()

{

   return view('academic_calender');

});


Route::get('academic_policy',function()

{

   return view('academic_policy');

});


Route::get('course_catalogue',function()

{

   return view('course_catalogue');

});

Route::get('admission_information',function()

{

   return view('admission_information');

});

Route::get('graduate',function()

{

   return view('graduate');

});


Route::get('admission_requirement',function()

{

   return view('admission_requirement');

});


Route::get('admission_faq',function()

{

   return view('admission_faq');

});

Route::get('admission_eligibility',function()

{

   return view('admission-eligibility');

});



Route::get('admission_process',function()

{

   return view('admission_process');

});




Route::get('admission_checklist',function()

{

   return view('admission-checklist');

});



Route::get('credit_transfer',function()

{

   return view('credit_transfer');

});


Route::get('payment-guideline',function()

{

   return view('payment-guideline');

});


Route::get('guideline-for-guardians',function()

{

   return view('guideline-for-guardians');

});




Route::get('tution_fees',function()

{

   return view('tution_fees');

});


Route::get('tuition-fee-waiver',function()

{

   return view('tuition-fee-waiver');

});


Route::get('research_division',function()

{

   return view('research_division');

});


Route::get('research_group',function()

{

   return view('research_group');

});

Route::get('research-project',function()

{

   return view('research-project');

});



Route::get('research_facilation',function()

{

   return view('research_facilation');

});


Route::get('scopus-journal',function()

{

   return view('scopus_journal');

});

Route::get('research-collaboration',function()

{

   return view('research-collaboration');

});




Route::get('source-of-funding',function()

{

   return view('source-of-funding');

});



Route::get('research-lab',function()

{

   return view('research-lab');

});

Route::get('cafeteria',function()

{

   return view('cafeteria');

});

Route::get('library',function()

{

   return view('library');

});


Route::get('transport',function()

{

   return view('transport');

});




Route::get('medical_center',function()

{

   return view('medical_center');

});


Route::get('prayer_room',function()

{

   return view('prayer_room');

});


Route::get('culture',function()

{

   return view('culture');

});

Route::get('sports',function()

{

   return view('sports');

});

Route::get('career',function()

{

   return view('career');

});


Route::get('news-events',function()

{

   return view('news-events');

});

Auth::routes();

Route::post('/admin/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('admin.logout');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::middleware('auth')->group(function () {
 
   Route::resource('results', ResultController::class);


   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('trainings', TrainingController::class)->except(['show', 'create']);

Route::resource('subjects', TeachingController::class)->except(['show', 'create']);

Route::resource('researches', ResearchController::class)->except(['show', 'create']);

Route::resource('publications', PublicationController::class)->except(['show', 'create']);

Route::resource('awards', AwardController::class)->except(['show', 'create']);

Route::resource('members', MemberController::class);

Route::resource('experiences', ExperienceController::class);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::post('/profile/image', [ProfileController::class, 'updateImage'])->name('profile.image');


Route::get('update-password', [PasswordController::class, 'edit'])
    ->name('update-password.edit');

Route::put('update-password', [PasswordController::class, 'update'])
    ->name('update-password.update');

 
});
 






    Route::middleware(['auth', IsAdmin::class])->group(function () {
    
   Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


   Route::resource('banners', BannerController::class)
    ->only(['index', 'store', 'update', 'destroy']);

Route::resource('notices', NoticeController::class)
    ->only(['index', 'store', 'update', 'destroy']);
 



// routes/web.php  (inside your admin auth middleware group)



// parameters() keeps the route parameter named {alumni}, so model binding
// works with the controller's "Alumni $alumni" argument.
Route::resource('alumni', AlumniController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->parameters(['alumni' => 'alumni']);

    Route::resource('convocations', ConvocationController::class)
    ->except(['create', 'show', 'edit']);
 
    Route::resource('news-events', NewsEventController::class)
    ->parameters(['news-events' => 'newsEvent'])
    ->except(['create', 'show', 'edit']);


    Route::resource('bots', BotController::class)
    ->except(['create', 'show', 'edit']);


 Route::resource('syndicates', SyndicateController::class)
    ->except(['create', 'show', 'edit']);   


    Route::resource('academic-councils', AcademicCouncilController::class)
    ->parameters(['academic-councils' => 'academicCouncil'])
    ->except(['create', 'show', 'edit']);
 

    Route::get('change-password', [ChangePasswordController::class, 'edit'])
    ->name('change-password.edit');
 
Route::put('change-password', [ChangePasswordController::class, 'update'])
    ->name('change-password.update');
 
    Route::resource('users', UserController::class)
    ->except(['create', 'show', 'edit']);












});