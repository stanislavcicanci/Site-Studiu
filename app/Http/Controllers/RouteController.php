<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class RouteController extends Controller
{
    public function Home() {
        return view('home');
    
    }

    public function Shop() {
        $products = Product::paginate(4);
        return view('shop', compact('products'));
    
    }

    public function Contact() {
        return view('contact');
    
    }

    public function About() {
        return view('about');
    
    }

    public function showProduct($id) {
        $product = Product::find($id);
        return view('prod', compact('product'));
    }
    

    public function Login() {
        if(Auth::check()) {
            return redirect(route('home'));
        }
        return view('login');
    
    }

    public function Signup() {
        if(Auth::check()) {
            return redirect(route('home'));
        }
        return view('signup');
    }

    public function LoginPost(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->rol == 'admin') {
                return redirect('products');
            }
            return redirect()->intended(route('home'));
        }
        
        return redirect(route('login'))->with("error", "Invalid username or password");
    }
    
    

     public function SignupPost(Request $request) {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
    ], [
        'confirm_password.same' => 'Passwords do not match.',
    ]);

        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
       
        if(!$user) {
            return redirect(route('signup'))->with("error", "Registration failed, try again. ");
        }

        return redirect(route('login'))->with("success", "Registration successful. Please login. ");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    
}
