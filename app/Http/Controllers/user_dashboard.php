<?php

namespace App\Http\Controllers;

use App\Models\Mod_post_ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_dashboard extends Controller
{
    public function user_dashboard()
    {
        return view('pages.accounts.dashboard');
    }
    public function user_ads()
    {
        $ads                 = Mod_post_ad::where('user',Auth::user()->id)->get();
        return view('pages.accounts.my_ads',[
            'ads'        => $ads
        ]);
    }
    public function user_favorites()
    {
        return view('pages.accounts.my_favorite');
    }
    public function messages()
    {
        $contacts                     = User::whereHas('messages', function($q) {
            $q->where('user_id','=',Auth::user()->id)
                ->orwhere('receiver_id','=',Auth::user()->id);
        })->where('id','!=',Auth::user()->id)->get();
        return view('pages.accounts.messages',[
            'contacts'    => $contacts
        ]);
    }
    public function profile(Request $request)
    {
        $input              = $request->all();
        $user               = User::whereId(Auth::user()->id)->first();
        $user->name         = $input['name'];
        $user->email        = $input['email'];
        $user->phone_no     = $input['phone_no'];
        if($request->hasFile('pic'))
        {
            $image = $request->pic->getClientOriginalName();
            $request->pic->move(base_path('images/user/'.Auth::user()->id),$image);
            $user->pic          = $image;
        }
        $user->address      = $input['address'];
        $user->city         = $input['city'];
        $user->I_m          = $input['I_m'];
        $user->save();

        return redirect('user/dashboard');
    }
}
