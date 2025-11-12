<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowService;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowBlog;
use App\Livewire\BlogDetail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}',ShowService::class)->name('servicePage');
Route::get('/team',ShowTeamPage::class)->name('teamPage');

Route::get('/blog',ShowBlog::class)->name('blog');  
Route::get('/blogDetail/{id}',BlogDetail::class)->name('blogDetail');   
// Route::get('/faq',ShowFAQ::class)->name('faq'); 
