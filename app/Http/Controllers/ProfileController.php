<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroStoreRequest;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $currentUser = Auth::user();

        $hero = Hero::query()->where('user_id', $currentUser->id)->first();

        return view('profile', compact('hero'));
    }

    public function createHero()
    {
        return view('hero-create');
    }

    public function storeHero(HeroStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;

        Hero::create($data);
    }
}
