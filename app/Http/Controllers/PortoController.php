<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function portofolio()
    {
        return view('ui.app');
    }

    public function profile()
    {
        $profiles = User::first();
        return view('ui.pages.profile', compact('profiles'));
    }

    public function skill()
    {
        $skills = Skill::get();
        return view('ui.pages.skills', compact('skills'));
    }

    public function educations()
    {
        $edus = Education::get();
        return view('ui.pages.educations', compact('edus'));
    }

    public function experiences()
    {
        $exps = Experience::get();
        return view('ui.pages.experiences', compact('exps'));
    }

    public function links()
    {
        $links = Link::get();
        return view('ui.pages.links', compact('links'));
    }
}
