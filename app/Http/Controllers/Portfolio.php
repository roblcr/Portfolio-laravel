<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    public function home()
    {
        $about = About::get();
        return view('home')->with('about', $about);
    }

    public function profile()
    {
        $abouts = About::get();

        return view('admin.profile')->with('abouts', $abouts);
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.editprofile')->with('about', $about);
    }

    public function editprofile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthday' => 'required',
            'website' => 'nullable',
            'phone' => 'required',
            'city' => 'required',
            'age' => 'required',
            'degree' => 'required',
            'email' => 'required']);


        $about = About::find($request->input('id'));
        $about->name = $request->input('name');
        $about->birthday = $request->input('birthday');
        $about->website = $request->input('website');
        $about->phone = $request->input('phone');
        $about->city = $request->input('city');
        $about->age = $request->input('age');
        $about->degree = $request->input('degree');
        $about->email = $request->input('email');

        $about->update();

        return redirect('/');
    }
}
