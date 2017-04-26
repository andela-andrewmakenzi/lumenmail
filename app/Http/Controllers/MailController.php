<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller {

    private $emailaddress = '';
    /**
    * send email
    * @param
    * @return
    */
    public function sendMail(Request $request) {
      $this->emailaddress = $request->emailaddress;
      $notification = array('name' => 'You got a new mentor', 'emailbody' => 'Hey my name is ...');
      Mail::send(['html' => 'email'], $notification, function($msg) {
          $msg->to([$this->emailaddress]);
          $msg->from(['lenken.development@gmail.com']);
      });

      return response(array('message' => 'Sent Successfully'), 200)->header('Content-Type', 'Application/json');
    }

    //
}

?>
