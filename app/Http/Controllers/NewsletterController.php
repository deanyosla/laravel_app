<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class NewsletterController extends Controller
{
    public function __invoke()
    {
        request()->validate(['newsletter-email' => 'required|email']);
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
        try {
            // 0571c59f3b is the ID on the Mailchimp API for the newsletter list
            $response = $mailchimp->lists->addListMember('0571c59f3b', [
                'email_address' => request('newsletter-email'),
                'status' => 'subscribed',
            ]);

            return back()->with('success', 'You are now signed up for our newsletter!');

        } catch (\Exception $e) {

            return back()->withErrors(['newsletter-error' => "Sorry that didn't work. Please try again later."]);

        }
    }
}
