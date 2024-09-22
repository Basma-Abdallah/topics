<?php


use App\Http\Controllers\admin\TopicController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\TestimonialController;

// the main route of the website
Route::get('/', [PublicController::class , 'index'])->name('index');
// the main route of adminDashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

                                                 // routes of admin dashborad

// routes of admin dashborad--users--
Route::prefix('users')->middleware('verified')->group(function() {
    Route::get('' ,[UserController::class , 'users'])->name('users');
    Route::get('add' ,[UserController::class , 'adduser'])->name('users.add');
    Route::post('store' ,[UserController::class , 'storeUser'])->name('users.store');
    Route::get('edit/{id}' ,[UserController::class , 'edituser'])->name('users.edit');
    Route::put('update/{id}', [UserController::class, 'updateuser'])->name('users.update');

    });
// routes of admin dashborad--topics--
Route::prefix('topics')->middleware('verified')->group(function() {
    Route::get('' ,[TopicController::class , 'topics'])->name('topics');
    Route::get('add/Form' ,[TopicController::class , 'addTopicForm'])->name('addTopicForm');
    Route::post('add' ,[TopicController::class , 'addTopic'])->name('addTopic');

    Route::get('edit/{id}' ,[TopicController::class , 'editTopic'])->name('editTopic');
    Route::put('update/{id}', [TopicController::class, 'updateTopics'])->name('updateTopics');
    Route::get('delete/{id}', [TopicController::class, 'TopicDelete']  )->name('TopicDelete');


    });
    Route::get('topic/{id}' ,[TopicController::class , 'topicDetails'])->middleware('verified')->name('topicDetails');

// routes of admin dashborad--categories--
Route::prefix('cat')->middleware('verified')->group(function() {
    Route::get('' ,[CategoryController::class , 'cat'])->name('cat');
    Route::get('add/form' ,[CategoryController::class , 'addCatForm'])->name('addCatForm');
    Route::post('add' ,[CategoryController::class , 'addCat'])->name('addCat');
    Route::get('edit/form/{id}' ,[CategoryController::class , 'editCatForm'])->name('editCatForm');
    Route::put('update/{id}' ,[CategoryController::class , 'updateCat'])->name('updateCat');
    Route::get('del/{id}' ,[CategoryController::class , 'delCat'])->name('delCat');

    });

// routes of admin dashborad--testimonials--
Route::prefix('tes')->middleware('verified')->group(function() {

    Route::get('' ,[TestimonialController::class , 'tes'])->name('tes');
    Route::get('add/Form' ,[TestimonialController::class , 'addTesForm'])->name('addTesForm');
    Route::post('add' ,[TestimonialController::class , 'addTes'])->name('addTes');
    Route::get('edit/form/{id}' ,[TestimonialController::class , 'editTesForm'])->name('editTesForm');
    Route::put('update/{id}' ,[TestimonialController::class , 'updateTes'])->name('updateCat');
    Route::get('del/{id}' ,[TestimonialController::class , 'DelTes'])->name('DelTes');


    });
// routes of admin dashborad--messages --gotten through contact us form --
Route::prefix('mess')->middleware('verified')->group(function() {

    Route::get('' ,[MessageController::class , 'mess'])->name('mess');
    Route::get('details/{id}' ,[MessageController::class , 'messDetails'])->name('messDetails');
    Route::get('del/{id}' ,[MessageController::class , 'DelMess'])->name('DelMess');

    });

                                               // routes of publish wesite pages

 // routes of publish wesite pages-- to deispay all testimonials--
Route::get('testimonials' ,[PublicController::class , 'testimonials'])->name('testimonials');

 // routes of publish wesite pages-- to dispaly topics in different pages--
Route::prefix('topics')->group(function() {

    Route::get('list' ,[PublicController::class , 'topicsList'])->name('topicsList');
    Route::get('details/{id}' ,[PublicController::class , 'topicsDetails'])->name('topicsDetails');
    Route::post('{id}/mark', [PublicController::class, 'markAsRead'])->name('topics.mark');
    Route::post('browse/{id}', [PublicController::class, 'browseTopics'])->name('browseTopics');

    });

 // routes of publish wesite pages--contact us form--

Route::prefix('contactus')->group(function() {

    Route::get('/form' ,[ContactUsController::class , 'contactusForm'])->name('contactusForm');
    Route::post('' ,[ContactUsController::class , 'contactUs'])->name('contactUs');
    });



Auth::routes(['verify' => true]);


