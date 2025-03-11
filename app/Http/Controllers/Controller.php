<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('frontend.home');
    }

    public function whyus(){
        return view('frontend.whyus');
    }

    public function contactus(){
        return view('frontend.contact-us');
    }
    public function software (){
        return view ('frontend.softwares');
    }

    public function cloudes(){
        return view ('frontend.cloude');
    }

    public function fronts(){
        return view('frontend.front');
    }

    public function backends(){
        return view('frontend.backend');
    }

    public function software2(){
        return view('frontend.softIntern');
    }


    public function dataA(){
        return view('frontend.dataAnalysis');
    }

    public function cyberS(){
        return view('frontend.cyber');
    }

    public function mobileApp2(){
        return view('frontend.mobileApp2');
    }

    public function artificial(){
        return view ('frontend.ai');
    }
    
    public function mobile(){
        return view ('frontend.mobileApp');
    }

    public function web(){
        return view ('frontend.webDevelopment');
    }

    public function program(){
        return view ('frontend.learn');
    }
    public function coperate(){
        return view ('frontend.ict');
    }

    public function tech(){
        return view ('frontend.women');
    }



    public function blogs(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(9);
        return view('frontend.blogs', compact('blogs'));
    }

    public function showBlog($id, $title)
    {

        $blog = Blog::where('id', $id)->firstOrFail();

        return view('frontend.blogShow', compact('blog'));
    }

    public function showLogin(){
        return view('backend.login');
    }

    public function dashboard(){
        return view('backend.dashboard');
    }


}
