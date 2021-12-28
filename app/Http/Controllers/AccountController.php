<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Exception;

class AccountController extends Controller
{
    	### Sign In
	/* After submitting the sign-in form */
	public function postSignIn(Request $request) {
		$validator = $request->validate([
				'username' 	=> 'required',
				'password'	=> 'required'

		]);
		if(!$validator) {
			// Redirect to the sign in page
			return Redirect::route('account-sign-in')
				->withErrors($validator)
				->withInput();   // redirect the input

		} else {

			$remember = ($request->has('remember')) ? true : false;
			$auth = Auth::attempt(array(
				'username' => $request->get('username'),
				'password' => $request->get('password')
			), $remember);
		} 

		if($auth) {
			
			return Redirect::intended('home');

		} else {
			
			return Redirect::route('account-sign-in')
				->with('global', 'Sai Tên Đăng Nhập Hoặc Mật Khẩu !');
		}

		return Redirect::route('account-sign-in')
			->with('global', 'Bạn đã kích hoạt tài khoản chưa ?');
	}

	/* Submitting the Create User form (POST) */
	public function postCreate(Request $request) {
		// dd($request->all());
		$validator = $request->validate([
				'username'		=> 'required|max:20|min:3|unique:users',
				'password'		=> 'required',
				'password_again'=> 'required|same:password'
		]);

		if(!$validator) {
			return Redirect::route('account-create')
				->withErrors($validator)
				->withInput();   // fills the field with the old inputs what were correct

		} else {
			// create an account
			$username	= $request->get('username');
			$password 	= $request->get('password');

			$userdata = User::create([
				'username' 	=> $username,
				'password' 	=> Hash::make($password)	// Changed the default column for Password
			]);

			if($userdata) {			


				return Redirect::route('account-sign-in')
					->with('global', 'Tài Khoản đã được tạo. Vào Email để kích hoạt lại Tài Khoản !');				
			}
		}
	}

	public function getSignIn() {
		return view('account.signin');
	}

	/* Viewing the form (GET) */
	public function getCreate() {
		return view('account.create');
	}

	### Sign Out
	public function getSignOut() {
		Auth::logout();
		return Redirect::route('account-sign-in');
	}

}
