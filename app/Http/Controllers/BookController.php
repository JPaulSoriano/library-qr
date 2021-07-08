<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all();
        $books = Book::all();
        return view('books.index',compact('books', 'categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'publisher' => 'required',
            'year' => 'required',
            'ac_no' => 'required',
            'quantity' => 'required'
        ]);
        $book = Book::create($request->all());
        return redirect()->route('books.index')
        ->with('success','Book added successfully.');
    }

    public function show(Book $book){
        return view('books.show',compact('book'));
    }

    public function edit(Book $book){
        $categories = Category::all();
        return view('books.edit',compact('book', 'categories'));
    }

    public function update(Request $request, Book $book){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'publisher' => 'required',
            'year' => 'required',
            'ac_no' => 'required',
            'quantity' => 'required'
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success','Book updated successfully');
    }
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index')->with('success','Book deleted successfully');
    }
}
