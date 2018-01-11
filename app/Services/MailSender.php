<?php 
namespace App\Services;

use Mail;

/**
 * A service class to send email
 *
 * @author louie
 * @package App\Services
 * @return boolean
 */
class MailSender
{
    /**
     * Send e-mail.
     *
     * @param string $view
     * @param string $subject
     * @param array $data
     * @param array $opt
     * @return void
     */
    public function send($view, $subject, $data, $opt = array())
    {
        $sendMail = Mail::send($view, ['data' => $data], function ($message) use ($data, $subject) {
            $message->from('info@e-lawyersonline.com', 'E-LawyersOnline.com')->subject($subject);
            $message->to($data['email'], $data['first_name'] . ' ' . $data['last_name'])->subject($subject);
        });
        
        return $sendMail;
    }
}
