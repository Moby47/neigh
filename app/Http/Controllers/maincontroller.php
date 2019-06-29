<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//mailing
use Mail;
use App\Mail\Contact;

class maincontroller extends Controller
{
    
    public function contact(Request $request){
        
        $this->validate($request, [
            'fname'=> 'required|string|max:49',
            'lname'=> 'required|string|max:49',
            'mobile'=> 'required|string|max:11',
            'email'=> 'required|email|max:100',
            'message'=> 'required|string|max:254',
        ]);
    
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $message = $request->input('message');
    
        //send mail
        try{
            
            //load intel to session
            session(['fname' => $fname]);
            session(['lname' => $lname]);
            session(['email' => $email]);
            session(['mobile' => $mobile]);
            session(['message' => $message]);
         
            Mail::to('neighenergyltd@gmail.com')->send(new Contact());
          //Mail::to('henryonyemaobi@gmail.com')->send(new Contact());
             //email notification 
             
       }
       catch(\Exception $e){
           return response()->Json('Mail Failed!');
          }
    
        return 1;
    

    }
}
