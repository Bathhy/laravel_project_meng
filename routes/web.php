<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// auth
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('guest')->group(function(){
    Route::get('/register',[AuthController::class,'showRegister'])->name('show.register');
    Route::get('/login',[AuthController::class,'showLogin'])->name('show.login');
    Route::post('/register',[AuthController::class,'register'])->name('register');
    Route::post('/login',[AuthController::class,'login'])->name('login');

});

Route::middleware('auth')->group(function(){
    //dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    //category
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::get('/category/{category}',[CategoryController::class,'show'])->name('category.show');
    Route::get('/category/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category',[CategoryController::class,'store'])->name('category.store');
    Route::put('/category/{category}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('/category/{category}',[CategoryController::class,'destroy'])->name('category.destroy');

    //author
    Route::get('/author',[AuthorController::class,'index'])->name('author.index');
    Route::get('/author/create',[AuthorController::class,'create'])->name('author.create');
    Route::get('/author/{author}',[AuthorController::class,'show'])->name('author.show');
    Route::get('/author/edit/{author}',[AuthorController::class,'edit'])->name('author.edit');
    Route::post('/author',[AuthorController::class,'store'])->name('author.store');
    Route::put('/author/{author}',[AuthorController::class,'update'])->name('author.update');
    Route::delete('/author/{author}',[AuthorController::class,'destroy'])->name('author.destroy');

    //publisher
    Route::get('/publisher',[PublisherController::class,'index'])->name('publisher.index');
    Route::get('/publisher/create',[PublisherController::class,'create'])->name('publisher.create');
    Route::get('/publisher/{publisher}',[PublisherController::class,'show'])->name('publisher.show');
    Route::get('/publisher/edit/{publisher}',[PublisherController::class,'edit'])->name('publisher.edit');
    Route::post('/publisher',[PublisherController::class,'store'])->name('publisher.store');
    Route::put('/publisher/{publisher}',[PublisherController::class,'update'])->name('publisher.update');
    Route::delete('/publisher/{publisher}',[PublisherController::class,'destroy'])->name('publisher.destroy');

    //member
    Route::get('/member',[MemberController::class,'index'])->name('member.index');
    Route::get('/member/create',[MemberController::class,'create'])->name('member.create');
    Route::get('/member/{member}',[MemberController::class,'show'])->name('member.show');
    Route::get('/member/edit/{member}',[MemberController::class,'edit'])->name('member.edit');
    Route::post('/member',[MemberController::class,'store'])->name('member.store');
    Route::put('/member/{member}',[MemberController::class,'update'])->name('member.update');
    Route::delete('/member/{member}',[MemberController::class,'destroy'])->name('member.destroy');


    //book
    Route::get('/book',[BookController::class,'index'])->name('book.index');
    Route::get('/book/create',[BookController::class,'create'])->name('book.create');
    Route::get('/book/{book}',[BookController::class,'show'])->name('book.show');
    Route::get('/book/edit/{book}',[BookController::class,'edit'])->name('book.edit');
    Route::post('/book',[BookController::class,'store'])->name('book.store');
    Route::put('/book/{book}',[BookController::class,'update'])->name('book.update');
    Route::delete('/book/{book}',[BookController::class,'destroy'])->name('book.destroy');

    //borrow
    Route::get('/borrow',[BorrowController::class,'index'])->name('borrow.index');
    Route::get('/borrow/create',[BorrowController::class,'create'])->name('borrow.create');
    Route::get('/borrow/{borrow}',[BorrowController::class,'show'])->name('borrow.show');
    Route::get('/borrow/edit/{borrow}',[BorrowController::class,'edit'])->name('borrow.edit');
    Route::post('/borrow',[BorrowController::class,'store'])->name('borrow.store');
    Route::put('/borrow/{borrow}',[BorrowController::class,'update'])->name('borrow.update');
    Route::delete('/borrow/{borrow}',[BorrowController::class,'destroy'])->name('borrow.destroy');
});
//return
Route::get('/return',[ReturnController::class,'index'])->name('return.index');
Route::get('/return/{returnmodel}',[ReturnController::class,'show'])->name('return.show');