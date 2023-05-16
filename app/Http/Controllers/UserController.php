<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Docrequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Twilio;
class UserController extends Controller
{
    function user_show(){
        $data = DB::table('users')->where('role', "user")->get();
        $num = DB::table('users')->where('role', "user")->count();

        $new = DB::table('docrequests')->where('Status', "New")->count();
        $claimed = DB::table('docrequests')->where('Status', "Claimed")->count();
        $ready = DB::table('docrequests')->where('Status', "Ready")->count();
        return view('dashboard',['data'=>$data,'num'=>$num ,'new'=>$new ,'claimed'=>$claimed ,'ready'=>$ready]);
    }
    function user_profile(){
        $data = DB::table('users')->where('student_id', Auth::user()->student_id)->get();
        $pass1 = DB::table('users')->select('password')->where('student_id', Auth::user()->student_id)->get();
        $doc = DB::table('docrequests')->where('stud_id', Auth::user()->student_id)->get();
        // $pass =  $decrypted = Crypt::decryptString($pass1);
        // $encrypted = Crypt::encryptString('123456');
        // $pass = Crypt::decryptString($encrypted);
        $pass = Hash::make($pass1);
        // $pass = Hash::needsRehash(Auth::user()->password);
        return view('UserDash',['data'=>$data,'pass'=>$pass,'doc'=>$doc]);
    }

    public function update_student(Request $request, $id)
    {
        $request->validate([
            'StudentId' => ['required', 'min:7'],
            'FirstName' => ['required', 'string', 'max:255', 'regex:/^([^0-9]*)$/'],
            'LastName' => ['required', 'string', 'max:255','regex:/^([^0-9]*)$/'],
        ]);
        if($request->input('EditMiddleName') == ""){
            $MiddleName = " ";
        }else{
            $MiddleName = $request->input('EditMiddleName');
        }
        if($request->input('EditSuffix') == ""){
            $Suffix = " ";
        }else{
            $Suffix = $request->input('EditSuffix');
        }

            $StudentId = $request->input('StudentId');
            $FirstName = $request->input('FirstName');
            $LastName = $request->input('LastName');
            $MobileNumber = $request->input('EditMobileNumber');
            $Course = $request->input('EditCourse');
            $Year = $request->input('EditYear');

        DB::table('users')
        ->where('id', $id)
        ->update(array(
        'student_id' => $StudentId,
        'First_Name' => $FirstName,
        'Last_Name' => $LastName,
        'Middle_Name' => $MiddleName,
        'suffix' => $Suffix,
        'cp_num' => $MobileNumber,
        'course' => $Course,
        'year' => $Year,
        ));

        return redirect('dashboard')->with('message','Data updated successfully!');;
    }
    public function send_ready(Request $request, $id)
    {

        $Status = "Ready";

        DB::table('docrequests')
        ->where('id', $id)
        ->update(array(
        'Status' => $Status,
        ));


        $cp_num = DB::table('docrequests')->where('id', $id)->value('cp');

        // $basic  = new \Vonage\Client\Credentials\Basic("1efc1891", "zcER9mJiXf9ejx7V");
        // $client = new \Vonage\Client($basic);

        $basic  = new \Vonage\Client\Credentials\Basic("c49a47a9", "B13aOtkqX65resqo");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($cp_num, "RGCC", 'Your document is ready for release!')
        );
        $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }

        return redirect('NewRequest')->with('message','The document is ready!');
    }
    public function claimed(Request $request, $id)
    {

        $Status = "Claimed";


        DB::table('docrequests')
        ->where('id', $id)
        ->update(array(
        'Status' => $Status,
        ));

        return redirect('Unclaimed')->with('message','The document has been claimed!');
    }
}
