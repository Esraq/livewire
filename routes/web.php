<?php

use Illuminate\Support\Facades\Route;

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


Route::get('board-of-trustees',function()
{

   return view('bot');

});


Route::get('syndicate',function()
{

   return view('syndicate');

});


Route::get('academic_council',function()

{

   return view('academic_council');

}); 

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

