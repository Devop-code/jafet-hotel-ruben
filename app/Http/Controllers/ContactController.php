<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $data = $request->validated();

        ContactModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'user_agent' => $request->userAgent(),
            'ip_address' => $request->ip()
        ]);

        Session::put('contact.sent', true);
        Session::put('contact.name', $data['name']);
        
        $agent = new Agent(userAgent: $request->userAgent());
        
        $uaData = [
            'device' => sprintf('%s, ', $agent->deviceType(), $agent->device()),
            'os' => $agent->platform(),
            'browser' => $agent->browser()
        ];

        try {
            Mail::to(
                env('COMPANY_MAIL', 'rubenndjengwes@gmail.com'),
                'Jet Hotel'
            )->send(new ContactMail($data, $uaData));
        } catch (\Throwable $e) {
            Log::error(
                sprintf(
                    'Could not send mail while saving the contact form due to: %s',
                    $e->getMessage()
                ), [
                    'phone' => $data['phone'],
                    'email' => $data['email']
                ]
            );
        }

        return to_route('contact');
    }
}
