<?php

use App\Http\Livewire\CommentsSection;
use App\Http\Livewire\ContactForm;
use App\Http\Livewire\DataTables;
use App\Http\Livewire\PostDetail;
use App\Http\Livewire\PostsSection;
use App\Http\Livewire\Welcome;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', Welcome::class)->name('home');

Route::get('/form', ContactForm::class)->name('form');
Route::get('/posts', PostsSection::class)->name('posts');
Route::get('/posts/{post}', PostDetail::class)->name('post-detail');
Route::get('/datatables', DataTables::class)->name('datatables');


Route::post('/post/{post}/comment', CommentsSection::class)->name('comments.store');
