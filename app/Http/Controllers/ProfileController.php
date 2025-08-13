<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroStoreRequest;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function createHero()
    {
        if (Auth::user()->hero){
            return back()->withErrors(['error' => 'You already have a hero!']);
        }

        return view('hero-create');
    }

    public function storeHero(HeroStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;

        Hero::create($data);

        return redirect()->route('indexCourse')->with('success', 'Successfully create hero!');
    }

    public function index()
    {
        $hero = Auth::user()->hero;

        return view('profile', compact('hero'));
    }
}
