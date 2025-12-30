<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
public function send(Request $request)
{
    // 1. Validasi Input Biasa
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
        'g-recaptcha-response' => 'required' 
    ]);

    // 2. Validasi ke Google Server
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => 'MASUKKAN_SECRET_KEY_ANDA_DISINI',
        'response' => $request->input('g-recaptcha-response'),
    ]);

    // 3. Cek apakah valid
    if (!$response->json()['success']) {
        return back()->withErrors(['captcha' => 'Silakan centang CAPTCHA terlebih dahulu.']);
    }

}

    public function index() {
        return view('beranda');
    }

    public function detail($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('detail', compact('product'));
    }

    public function contact() {
        return view('kontak');
    }

    public function services() {
        return view('layanan');
    }

    public function about() {
        return view('tentang');
    }

    public function sendEmail(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Mail::to('sherryn.ptr9@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function priceList(Request $request) {
        $query = Product::query();

        // Logika Pencarian
        if ($request->has('search') && $request->search != null) {
            $keyword = $request->search;
            
            $query->where('name', 'LIKE', '%' . $keyword . '%');
        }
        
        $products = $query->oldest()->paginate(12); 

        // Logika AJAX (Live Search)
        if ($request->ajax()) {
            return view('partials.product-grid', compact('products'))->render();
        }
        
        return view('priceList', compact('products'));
    }

    
}