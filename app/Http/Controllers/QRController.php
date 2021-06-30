<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Book;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function generateQrCode($id) 
    {
        $book = Book::find($id);
        return view('qrcode', compact('book'));
    }
}
