<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pataint;
use App\Models\doctor;
use App\Models\cabin;
use App\Models\comment;
use App\Models\labtest;
use App\Models\medicin;
use App\Models\Appointment;
use App\Models\booking_cabin;
use App\Models\booking_labtest;


class PatienController extends Controller
{
    // home page
    public function Login()
    {
        return view('pages.login');
    }
    public function LoginCheck(Request $request)
    {
        $p=pataint::where('username',$request->username)
        ->where('password',$request->password)
        ->first();
       if($p)
        {
            session()->put('user',$p);
            return redirect()->route('home');
        }
        return redirect()->route('login');
        
    }

    public function Registration()
    {
        return view('pages.PatientSign');
    }
    public function RegistrationSubmit(Request $request)
    {
        
        $this->validate
        (
            $request,
            [
            'name'=>'required | min: 3',
            'username'=>'required | min: 3 ' ,
            'password'=>'required| min: 3',
            'phone'=>'required |regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required| email|unique:pataint',
            'group'=>'required',
            'dob'=>'required',
            'address'=>'required | min: 5'

           ],
           [
            'name.required'=>'put your name',
             'name.min'=>'name must be gether than  2 charecter'

           ]
        );
        $var=new pataint();
        $var->name=$request->name;
        $var->username= $request->username;
        $var->password= $request->password;
        $var->phone= $request->phone;
        $var->email= $request->email;
        $var->group= $request->group;
        $var->dob= $request->dob;
        $var->address= $request->address;
        $var->save();
         return redirect()-> route('login');

    }
    public function HomePage()
    {
        $p=session('user');
        $doctor = doctor::all();
        $cabin = cabin::all();
        $lab = labtest::all();
        $medicin=medicin::all();
        return view('pages.home')->with('doctor',$doctor)->with('cabin',$cabin)->with('lab',$lab)->with('medicin',$medicin)->with('user',$p);
        
    }

    //Profile

    public function Profile()
    {
       
        $p = session('user');

        $pc= pataint :: where('id',$p->id)->first();

         
        
        return view('pages.profile')->with('profile',$pc);
    }




    // update profile
    public function EditProfile(Request $request)
    {
       
       
        $id= $request->id;
        $p= pataint:: where('id',$id)->first();
        
        return view('pages.ProfileEdit')->with('p',$p); 
    }
    public function UpdateProfile(Request $request)
    {
        $this->validate
        (
            $request,
            [
            'name'=>'required | min: 3',
            'password'=>'required| min: 3',
            'phone'=>'required |regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required| email',
            'address'=>'required | min: 5'

           ]
        );
        
        
        $var= pataint :: where('id',$request->primary_id)->first();
        
        $var->name=$request->name;
        $var->username= $var->username;
        $var->password= $request->password;
        $var->phone= $request->phone;
        $var->email= $request->email;
        $var->group= $var->group;
        $var->dob= $var->dob;
        $var->address= $request->address;
        $var->save();
        return  redirect()->route('profile'); 
    }

    // id recovery

    public function Recovery()
    {
        return view('pages.pass_recovery');
    }
    public function RecoverySubmit(Request $request)
    {
        $this->validate
        (
            $request,
            [
            'username'=>'required | min: 3',
            'password'=>'required| min: 3'

           ]
        );

        
        $var= pataint :: where('username',$request->username)->first();

        if($var)
        {
        $var->name=$var->name;
        $var->username= $var->username;
        $var->password= $request->password;
        $var->phone= $var->phone;
        $var->email= $var->email;
        $var->group= $var->group;
        $var->dob= $var->dob;
        $var->address= $var->address;
        $var->save();
        return  redirect()->route('login'); 
        }
        else
        return "<h1>Enter valid Username</h1>";
        
    }

    //Log Out

    public function Logout()
    {
        session()->flush();
        return redirect()->route('login');
          
    }


    //Comment & Rating

    public function Comment()
    {
        return view ('pages.satisfaction');
    }
    public function CommentSubmit(Request $request)
    {
        $this->validate
        (
            $request,
            [
            'comment'=>'required | min: 3',
            'ratting'=>'required'

           ]
        );

        $p = session('user');

        
        $var= new comment();
        $var->name=$p->name;
        $var->username= $p->username;
        
        $var->comment= $request->comment;
        $var->ratting= $request->ratting;
        $var->save();
        return redirect()->route('home'); 

    }



    public function Admin()
    {
        return view('pages.admin');
    }



    //pataint process:

    //Doctor:
    public function Appointment(Request $request)
    {
        $id= $request->id;
        $p= doctor:: where('id',$id)->first();
        return view('booking.doctor_b')->with('p',$p);

    }

    public function AppointmentSubmit(Request $request)
    {
        $this->validate
        (
            $request,
            [
            'time'=>'required ',
            'date'=>'required'

           ]
        );
        $u=session('user');
        $d= doctor :: where('id',$request->primary_id)->first();

        $var=new Appointment();
        $var->pataint_username=$u->username;
        $var->pataint_name= $u->name;
        $var->doctor_name= $d->doc_name;
        $var->app_time= $request->time;
        $var->app_date= $request->date;
        $var->save();
        return  redirect()->route('home');

        

    }

    //Test

    public function Test(Request $request)
    {
        $id= $request->id;
        $p= labtest:: where('id',$id)->first();
        return view('booking.test_b')->with('p',$p);

    }

    public function TestSubmit(Request $request)
    {
        $this->validate
        (
            $request,
            [
            'time'=>'required ',
            'date'=>'required'

           ]
        );
        $u=session('user');
        $l= labtest :: where('id',$request->primary_id)->first();

        $var=new booking_labtest();
        $var->pataint_username=$u->username;
        $var->pataint_name= $u->name;
        $var->test_name= $l->type;
        $var->time= $request->time;
        $var->date= $request->date;
        $var->save();
        return  redirect()->route('home');

    }

    //Cabin

    public function Cabin(Request $request)
    {
        $id= $request->id;
        $p= cabin:: where('id',$id)->first();
        return view('booking.cabin_b')->with('p',$p);

    }

    public function CabinSubmit(Request $request)
    {
        
        $this->validate
        (
            $request,
            [
            'date'=>'required'

           ]
        );
        $u=session('user');
        $c= cabin :: where('id',$request->primary_id)->first();

        $var=new booking_cabin();
        $var->pataint_username=$u->username;
        $var->pataint_name= $u->name;
        $var->cabin_no= $c->cabin_no;
        $var->date= $request->date;
        $var->save();

        $c->cabin_no=$c->cabin_no;
        $c->slot="booked";
        $c->save();
        return  redirect()->route('home');

    }


    public function Details()
    {
        $p=session('user');
        $a = appointment::all();
        $c = booking_cabin::all();
        $lab = booking_labtest::all();
        $medicin=medicin::all();
        return view('booking.history')->with('user',$p)->with('appointment',$a)->with('cabin',$c)->with('lab',$lab);
        

    }
   

}
