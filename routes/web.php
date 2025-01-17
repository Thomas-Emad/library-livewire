<?php

use App\Livewire\BookPage;
use App\Livewire\HomePage;
use App\Livewire\SectionsPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\{Index, Units, Authors, Publishers};
use App\Livewire\Dashboard\Books\{Books, Operations};
use Illuminate\Support\Facades\Storage;


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/', HomePage::class)->name('home');
Route::get('/sections', SectionsPage::class)->name('sections');
Route::get('/book/{code}', BookPage::class)->name('book.show');


Route::middleware('auth')->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/', Index::class)->name('index');
    Route::get('/units', Units::class)->name('units');
    Route::get('/authors', Authors::class)->name('authors');
    Route::get('/publishers', Publishers::class)->name('publishers');
    Route::get('/books', Books::class)->name('books');
    Route::get('/books/create', Operations::class)->name('books.create');
    Route::get('/books/edit/{id}', Operations::class)->name('books.edit');
});



require __DIR__ . '/auth.php';
