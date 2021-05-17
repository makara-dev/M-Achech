<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class ContactController extends Controller
{
/**
     * Display The Contact Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function Contact() {
        return view('profile_pages.contact');
    }
    
    public function store(Request $request){
        
        //recaptcha
        $output = $this->recaptchaGoogle($request);

        $clientInformation = array(
            "clientName" => $request->input('clientName'), 
            "clientEmail" => $request->input('clientEmail'),
            "clientMessage" => $request->input('clientMessage')
        );
        
        //send mail
        if(strpos($output, '"success": true') !== FALSE) {
            Mail::send(
                'email.emailsend', 
                array('clientInformation'=>$clientInformation),
                function($message){
                    $message->to(env('RECEIVER_EMAIL'), env('MAIL_TO_NAME'))
                    ->subject(env('MAIL_SUBJECT'));
                }
            );
            return redirect()
                ->to('contact')
                ->with('success','Mail Sent Successfully');
        } else {
            return redirect()
                ->to('contact')
                ->with('error','Mail Sending Unsuccessful');
        }
    }

    /**
     * validation of google recaptcha
     * @return Google JSON $output
     */
    private function recaptchaGoogle(Request $request){
        $ch = curl_init();

        curl_setopt_array($ch,[
            CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'secret' => "6LcYyv4UAAAAALnicUBID63FkWLBozmLPr0JV3rr",
                'response' => $request->input('token'),
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);

        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}
