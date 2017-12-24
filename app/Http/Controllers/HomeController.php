<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\StoreUsersMessages;
use App\LandingModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'iChores | ' . Auth::user()->name,
            'msg' => 'Welcome ' . Auth::user()->name,
            'active' => 'dashboard'
        ];
        
        return view('userArea.index', $data);
    }

    public function contact()
    {
         $data = [
            'title' => 'iChores | My Services',
            'msg' => 'My Services',
            'active' => 'contact',
        ];

        return view('userArea.contact', $data);
    }

    public function storecontact(StoreUsersMessages $request)
    {
        $message = new LandingModel;

        $message->name = Auth::user()->name;
        $message->email = Auth::user()->email;
        $message->message = $request->message;

        $message->save();

        return redirect(route('contact.index'))->with('info', 'your message has been successfully received. We will get back to you as soon as possible');
    }


    public function signout()
    {
        Auth::logout();
        return redirect(route('home.index'));
    }
}
