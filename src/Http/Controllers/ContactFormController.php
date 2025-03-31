<?php 

namespace Laraphant\Contactform\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContactFormController extends BaseController 
{
	public function create() {
		return view('contactform::create');
	}

	public function createPost(Request $request)
	{
		$input = $request->all();
		
		$validated= $request->validate([
			'fname'=> 'required',
			'lname'=> 'required'
		]);
	}
}
