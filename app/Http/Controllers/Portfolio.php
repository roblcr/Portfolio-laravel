<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Portfolio as ModelsPortfolio;
use App\Models\ProfessionalExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

     /*
    END EDUCATION
    */

    /*
    START PROFESSIONAL EXPERIENCE
    */

    public function professional_experience()
    {
        $professionalExps = ProfessionalExperience::get();

        return view('admin.professionalexperience')->with('professionalExps', $professionalExps);
    }

    public function add_professionalexp()
    {
        return view('admin.addprofessionalexp');
    }

    public function saveprofessionalexp(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'resume_one' => 'required'
        ]);

        $professionalexp = new ProfessionalExperience();
        $professionalexp->title = $request->input('title');
        $professionalexp->date_start = $request->input('date_start');
        $professionalexp->date_end = $request->input('date_end');
        $professionalexp->place = $request->input('place');
        $professionalexp->resume_one = $request->input('resume_one');
        $professionalexp->resume_two = $request->input('resume_two');
        $professionalexp->resume_three = $request->input('resume_three');
        $professionalexp->resume_four = $request->input('resume_four');

        $professionalexp->save();

        return redirect('/add_professionalexp')->with('status', 'l\'expérience professionnel ' . $professionalexp->title . ' a bien été ajoutée');
    }

    public function edit_professionalexp($id)
    {
        $professionalExp = ProfessionalExperience::find($id);
        return view('admin.editprofessionalexp')->with('professionalExp', $professionalExp);
    }

    public function editprofessionalexp(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'resume_one' => 'required'
        ]);

        $professionalExp = ProfessionalExperience::find($request->input('id'));
        $professionalExp->title = $request->input('title');
        $professionalExp->date_start = $request->input('date_start');
        $professionalExp->date_end = $request->input('date_end');
        $professionalExp->place = $request->input('place');
        $professionalExp->resume = $request->input('resume_one');
        $professionalExp->resume = $request->input('resume_two');
        $professionalExp->resume = $request->input('resume_three');
        $professionalExp->resume = $request->input('resume_four');

        $professionalExp->update();

        return redirect('/professionalexperience')->with('status', 'l\'expérience professionnelle ' . $professionalExp->title . ' a été modifié avec succés');
    }

    public function delete_professionalexp($id)
    {
        $professionalExp = ProfessionalExperience::find($id);

        $professionalExp->delete();

        return redirect('/education')->with('status', 'L\'expérience professionnelle ' . $professionalExp->title . ' a bien été supprimée');
    }

     /*
    END PROFESSIONAL EXPERIENCE
    */

    /*
    START PORTFOLIO
    */

    public function portfolio()
    {
        $portfolios = ModelsPortfolio::get();

        return view('admin.portfolio')->with('portfolios', $portfolios);
    }

    public function add_portfolio()
    {
        return view('admin.addportfolio');
    }

    public function saveportfolio(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image')){
            $fileNameWithExtension = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'. time() .'.'. $extension;

            // upload de l'image

            $path = $request->file('image')->storeAs('public/app_images', $fileNameToStore);

        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }

        $portfolio = new ModelsPortfolio();
        $portfolio->title = $request->input('title');
        $portfolio->subtitle = $request->input('subtitle');
        $portfolio->link = $request->input('link');
        $portfolio->image = $fileNameToStore;

        $portfolio->save();

        return redirect('/add_portfolio')->with('status', 'L\'application ' . $portfolio->title . ' a bien été ajoutée');
    }

    public function edit_portfolio($id)
    {
        $portfolio = ModelsPortfolio::find($id);
        return view('admin.editportfolio')->with('portfolio', $portfolio);
    }

    public function editportfolio(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
            'image' => 'image|nullable|max:1999']);


            $portfolio = ModelsPortfolio::find($request->input('id'));
            $portfolio->title = $request->input('title');
            $portfolio->subtitle = $request->input('subtitle');
            $portfolio->link = $request->input('link');

            if($request->hasFile('image')){
                $fileNameWithExtension = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'. time() .'.'. $extension;

                // upload de l'image

                $path = $request->file('image')->storeAs('public/app_images', $fileNameToStore);

                if($portfolio->image != 'noimage.jpg'){
                    Storage::delete('public/app_images/' .$portfolio->image);
                }

                $portfolio->image = $fileNameToStore;
            }

            $portfolio->update();

            return redirect('/portfolio')->with('status', 'le portfolio ' . $portfolio->title . ' a été modifié avec succés');
    }

    public function delete_portfolio($id)
    {
        $portfolio = ModelsPortfolio::find($id);

        if($portfolio->image != 'noimage.jpg'){
            Storage::delete('public/app_images/' .$portfolio->image);
        }

        $portfolio->delete();

        return redirect('/portfolio')->with('status', 'Le portfolio '.$portfolio->title.' a bien été suprimée');
    }

}
