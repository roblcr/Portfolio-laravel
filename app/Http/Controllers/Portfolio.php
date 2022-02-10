<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
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

    public function editskills(Request $request)
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

    /*
    END SKILL
    */

    /*
    START EDUCATION
    */

    public function education()
    {
        $educations = Education::get();

        return view('admin.education')->with('educations', $educations);
    }

    public function add_education()
    {
        return view('admin.addeducation');
    }

    public function saveducation(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'resume' => 'required'
        ]);

        $education = new Education();
        $education->title = $request->input('title');
        $education->date_start = $request->input('date_start');
        $education->date_end = $request->input('date_end');
        $education->place = $request->input('place');
        $education->resume = $request->input('resume');

        $education->save();

        return redirect('/add_education')->with('status', 'la formation ' . $education->title . ' a bien été ajoutée');
    }

    public function edit_education($id)
    {
        $education = Education::find($id);
        return view('admin.editeducation')->with('education', $education);
    }

    public function editeducation(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'resume' => 'required'
        ]);

        $education = Education::find($request->input('id'));
        $education->title = $request->input('title');
        $education->date_start = $request->input('date_start');
        $education->date_end = $request->input('date_end');
        $education->place = $request->input('place');
        $education->resume = $request->input('resume');

        $education->update();

        return redirect('/education')->with('status', 'la formation ' . $education->title . ' a été modifié avec succés');
    }

    public function delete_education($id)
    {
        $education = Education::find($id);

        $education->delete();

        return redirect('/education')->with('status', 'La formation ' . $education->title . ' a bien été supprimée');
    }
}
