<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
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

    public function index(Request $request)
    {
        return view('profiles.profileIndex');
    }

    public function edit(Profile $profile)
    {
        return view('profiles.profileForm', compact('profile'));
    }

    public function create()
    {
        return view('profiles.profileForm');
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $this->validatorProfile($request->all())->validate();
        if(isset($request->avatar)){
            $request->avatar->move(public_path('assets/images/avatars'), $request->user()->id.'.'.$request->avatar->getClientOriginalExtension());
            $user->avatar = 'assets/images/avatars/'.$request->user()->id.'.'.$request->avatar->getClientOriginalExtension();
            $user->save();
        }
        if($user->name != $request->name){
            $user->name = $request->name;
            $user->save();
        }
        $profile = new Profile($request->all());
        $user->profile()->save($profile);
        return redirect()->route('profile.index');
    }

    public function update(Request $request, Profile $profile)
    {
        $user = User::find($request->user_id);
        $this->validatorEditProfile($request->all())->validate();
        if(isset($request->avatar)){
            $request->avatar->move(public_path('assets/images/avatars'), $request->user()->id.'.'.$request->avatar->getClientOriginalExtension());
            $user->avatar = 'assets/images/avatars/'.$request->user()->id.'.'.$request->avatar->getClientOriginalExtension();
            $user->save();
        }
        if($user->name != $request->name){
            $user->name = $request->name;
            $user->save();
        }
        /*$profile->date = $request->date;
        $profile->about_me = $request->about_me;
        $profile->cellphone = $request->cellphone;
        $profile->career = $request->career;
        $profile->G = $request->G;*/
        $profile->fill($request->all())->save();
        return back()->with('success','You have successfully updated the profile.');
    }


    protected function validatorProfile(array $data)
    {
        return Validator::make($data, [
            'avatar' => ['image'],
            'name' => ['string', 'min:5', 'max:100'],
            'date' => ['required', 'before:13 years ago'],
            'about_me' => ['required', 'string', 'min:10', 'max:255'],
            'cellphone' => ['required', 'string', 'min:10', 'max:15'],
            'G' => ['required', 'string', 'min:1', 'max:1']
        ]);
    }

    protected function validatorEditProfile(array $data)
    {
        return Validator::make($data, [
            'avatar' => ['image'],
            'name' => ['string', 'min:5', 'max:100'],
            'date' => ['before:13 years ago'],
            'about_me' => ['string', 'min:10', 'max:255'],
            'cellphone' => ['string', 'min:10', 'max:15'],
            'G' => ['string', 'min:1', 'max:1']
        ]);
    }
}
