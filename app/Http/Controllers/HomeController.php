<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function occupationalform()
    {
        return view('occupationalform');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function list()
    {
        $data = User::get();
        return view('admin.alumni-list', compact('data'));
    }
    public function addAlumni()
    {
        return view('admin.add-alumni');
    }

    public function saveAlumni(Request $request)
    {
        $familyName = $request->familyName;
        $firstName = $request->firstName;
        $maidenName = $request->maidenName;
        $middleInitial = $request->middleInitial;
        $email = $request->email;
        $gender = $request->gender;
        $birthday = $request->birthday;
        $civilStatus = $request->civilStatus;
        $presentAddress = $request->presentAddress;
        $yearGraduated = $request->yearGraduated;
        $course = $request->course;
        $examsPassed = $request->examsPassed;
        $awards = $request->awards;

        $alu = new User();
        $alu->familyName = $familyName;
        $alu->firstName = $firstName;
        $alu->maidenName = $maidenName;
        $alu->middleInitial = $middleInitial;
        $alu->email = $email;
        $alu->gender = $gender;
        $alu->birthday = $birthday;
        $alu->civilStatus = $civilStatus;
        $alu->presentAddress = $presentAddress;
        $alu->yearGraduated = $yearGraduated;
        $alu->course = $course;
        $alu->examsPassed = $examsPassed;
        $alu->awards = $awards;
        $alu->save();

        return redirect()->back()->with('success', 'Alumni Added Successfully');
    }
    public function editAlumni($id)
    {
        $data = User::where('id','=', $id)->first();
        return view('admin.edit-alumni',compact('data'));
    }

    public function updateAlumni(Request $request)
    {
        $id = $request->id;
        $familyName = $request->familyName;
        $firstName = $request->firstName;
        $maidenName = $request->maidenName;
        $middleInitial = $request->middleInitial;
        $email = $request->email;
        $gender = $request->gender;
        $birthday = $request->birthday;
        $civilStatus = $request->civilStatus;
        $presentAddress = $request->presentAddress;
        $yearGraduated = $request->yearGraduated;
        $course = $request->course;
        $examsPassed = $request->examsPassed;
        $awards = $request->awards;

        User::where('id', '=', $id)->update([
            'familyName'=>$familyName,
            'firstName'=>$firstName,
            'maidenName'=>$maidenName,
            'middleInitial'=>$middleInitial,
            'email'=>$email,
            'gender'=>$gender,
            'birthday'=>$birthday,
            'civilStatus'=>$civilStatus,
            'presentAddress'=>$presentAddress,
            'yearGraduated'=>$yearGraduated,
            'course'=>$course,
            'examsPassed'=>$examsPassed,
            'awards'=>$awards,
        ]);
        return redirect()->back()->with('succes','Alumni Updated Successfully');
    }

    public function deleteAlumni($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('succes','Alumni Deleted Successfully');
    }    
}
