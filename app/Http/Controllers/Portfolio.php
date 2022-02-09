<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    public function home()
    {
        $skills = Skill::get();
        $about = About::get();
        return view('home')->with('about', $about)->with('skills', $skills);
    }

    /*
    START PROFILE
    */


    public function profile()
    {
        $abouts = About::get();

        return view('admin.profile')->with('abouts', $abouts);
    }


    public function edit_profile($id)
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

        return redirect('/profile')->with('status', 'le profil a été modifié avec succés');
    }

    /*
    END PROFILE
    */

    /*
    START SKILLS
    */

    public function skills()
    {
        $skills = Skill::get();

        return view('admin.skills')->with('skills', $skills);
    }

    public function add_skills()
    {
        return view('admin.addskills');
    }

    public function saveskill(Request $request)
    {
        $this->validate($request, [
            'skill_name' => 'required',
            'level' => 'required'
        ]);

        $skill = new Skill();
        $skill->skill_name = $request->input('skill_name');
        $skill->level = $request->input('level');

        $skill->save();

        return redirect('/add_skills')->with('status', 'la compétence ' . $skill->skill_name . ' a bien été ajoutée');
    }

    public function edit_skill($id)
    {
        $skill = Skill::find($id);
        return view('admin.editskill')->with('skill', $skill);
    }

    public function editskill(Request $request)
    {
        $this->validate($request, [
            'skill_name' => 'required',
            'level' => 'required'
        ]);

        $skill = Skill::find($request->input('id'));
        $skill->skill_name = $request->input('skill_name');
        $skill->level = $request->input('level');

        $skill->update();

        return redirect('/skills')->with('status', 'la compétence ' . $skill->skill_name . ' a été modifié avec succés');
    }

    public function delete_skill($id)
    {
        $skill = Skill::find($id);

        $skill->delete();

        return redirect('/skills')->with('status', 'La compétence' . $skill->skill_name . ' a bien été supprimée');
    }
}
