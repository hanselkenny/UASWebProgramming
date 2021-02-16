<?php


namespace App\Http\Controllers\User;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController
{
    public function getprofile(){
        $profile = Auth::id();
        if(!is_null($profile)){
            $profile = User::find($profile);
            return view('profile.profile', [
                'profile' => $profile
            ]);
        }
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'name'    => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|numeric|min:8'
        ];

        //validate the request.
        $request->validate($rules);
    }
    public function saveprofile(Request $request)
    {

        $this->validator($request);
        if (!is_null(Auth::user())) {
            $shoe= User::where('id',"$request->id")->update([
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'phone'=>$request->get('phone')
            ]);
            return back()->with('success', 'Your Profile has been edited successfully.');
        }else{

            return back()->with('error', 'You must be logged in.');
        }
    }
}
