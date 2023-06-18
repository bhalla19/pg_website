<?php

namespace App\Http\Controllers;

use App\Models\Roomie;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class UserController extends Controller
{
    public function homepage(){
        return view("homepage");
    }
    public function about(){
        return view('about');
    }

    public function findRoomie(){
        return view('findYourRoomie');
    }
    public function contactUs(){
        return view ('contact');
    }
    public function home(){
        return view('home');
    }
    public function findYouroom(){
        return view('roomieForm');
    }

    public function fillRoomie(Request $request){
        $request->validate([
            'Name_First'=>'required',
            'Name_Last' =>'required',
            'Email' =>'required',
            'PhoneNumber_countrycode'=>'required',
            'Dropdown' =>'required',
            'Dropdown1' =>'required',
            'Radio'=>'required',
            'Radio1' =>'required'
        ]);
        $roomie = new Roomie;
        $roomie->Name_First = $request['Name_First'];
        $roomie->Name_Last = $request['Name_Last'];
        $roomie->Email = $request['Email'];
        $roomie->PhoneNumber_countrycode = $request['PhoneNumber_countrycode'];
        $roomie->Dropdown = $request['Dropdown'];
        $roomie->Dropdown1 = $request['Dropdown1'];
        $roomie->Radio = $request['Radio'];
        $roomie->Radio1 = $request['Radio1'];
        $roomie->save();
        return redirect('/');
    }

    public function contactform(Request $request){
        $request->validate([
            'name'=>'required',
            'phoneNo'=>'required',
            'email'=>'required'
        ]);
        $contactus = new ContactUs;
        $contactus->name = $request['name'];
        $contactus->phoneNo = $request['phoneNo'];
        $contactus->email = $request['email'];
        $contactus->save();
        return redirect('/');
    }
    public function college(){
        return view('colleges');
    }

    public function tecnia_pg(){
        return view('tecnia_pg');
    }

    // public function pg_info(){
    //     return view('pgInfo');
    // }
    public function pgInfo(){
        return view('pgInfo');
    }
}
