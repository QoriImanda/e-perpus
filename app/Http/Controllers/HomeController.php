<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newBook = Buku::latest()->limit(4)->get();
        $books = Buku::inRandomOrder()->limit(  10)->get();
        // dd(Buku::count());
        return view('pages.homePage.index', [
            'newBooks' => $newBook,
            'books' => $books,
            'userCounts' => User::count(),
            'bookCounts' => Buku::count(),
            'homePage' => true
        ]);
    }

    public function bukuPage()
    {
        $books = Buku::join('kategori_buku', 'buku.id_kategori', '=', 'kategori_buku.id')
        ->where('buku.judul', 'like', '%' . request('search') . '%')
        ->orwhere('buku.isbn', 'like', '%' . request('search') . '%')
        ->orwhere('buku.pengarang', 'like', '%' . request('search') . '%')
        ->orwhere('buku.tahun_terbit', 'like', '%' . request('search') . '%')
        ->orwhere('buku.sinopsis', 'like', '%' . request('search') . '%')
        ->orwhere('kategori_buku.kategori', 'like', '%' . request('search') . '%')
        ->latest('buku.created_at')->paginate(16);

        return view('pages.homePage.books', [
            'books' => $books,
            'homePage' => false
        ]);
    }

    public function detailBook($id)
    {
        $book = Buku::find($id);
        $relatedBook = Buku::where('id_kategori', $book->id_kategori)->inRandomOrder()->limit(5)->get();
        $randomBook = Buku::inRandomOrder()->limit(10)->get();

        return view('pages.homePage.detail-book', [
            'book' => $book,
            'relatedBook' => $relatedBook,
            'randomBooks' => $randomBook,
            'homePage' => false
        ]);
    }

    public function contact()
    {
        return view('pages.homePage.contact-us', [
            'homePage' => false
        ]);
    }
}
