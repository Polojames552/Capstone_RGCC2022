<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
     

        $request->validate([
            'student_id' => ['required', 'min:7'],
            'First_Name' => ['required', 'string', 'max:255', 'regex:/^([^0-9]*)$/'],
            // 'Mname' => ['string', 'max:255'],
            'Last_Name' => ['required', 'string', 'max:255','regex:/^([^0-9]*)$/'],
            // 'email' => ['required', 'string', 'max:255', 'unique:users'],
            // 'password' => ['required'],
            'Cp_number' => ['required', 'min:13','max:13'],
        ]);
        if(is_null($request->suffix)){
            $EXTname = " ";
        }else{
            $EXTname = $request->suffix;
        }
        if(is_null($request->Middle_Name)){
            $Mname = " ";
        }else{
            $Mname = $request->Middle_Name;
        }
        
        $cp = trim($request->Cp_number,"+");
        $user = User::create([
            'student_id'=> $request->student_id,
            'First_Name'=> $request->First_Name,
            'Middle_Name'=> $Mname,
            'Last_Name'=> $request->Last_Name,
            'suffix'=> $EXTname,
            'course'=> $request->course,
            // 'email'=> $request->stud_id,
            // 'password'=> Hash::make($request->stud_id),
            'email'=> $request->UserName,
            'password'=> Hash::make($request->Password),
            'year'=> $request->year,
            'role'=> "user",
            'cp_num'=> $cp,
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::AddU)->with('message','Data added successfully!');
    }
}
