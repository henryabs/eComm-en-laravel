<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login(Request $request){
    	$user = User::where(['email' => $request->email])->first();
    	
    	if(!$user || !Hash::check($request->password, $user->password)){
    		return 'not match';
    	}else{
    		$request->session()->put('user', $user);
    		return redirect('/');

    	}
    }

    public function register(Request $request){
        // return $request->input();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('login');
    }
}
