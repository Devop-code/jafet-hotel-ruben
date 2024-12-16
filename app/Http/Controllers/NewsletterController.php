<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Mail\NewsletterMail;
use App\Models\NewsletterModel;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function register(NewsletterRequest $request): JsonResponse
    {
        $key = 'newsletter:' . $request->ip();

        // Managing requests...
        if (RateLimiter::tooManyAttempts($key, $perMinute=5))
        {
            return response()->json(status: 429)
            ->header('X-Retry-After', RateLimiter::availableIn($key));
        }

        RateLimiter::increment($key);

        // Insert subscriber
        NewsletterModel::create([
            'email' => $request->validated('email'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);

        // set success flag
        Session::put('newsletter.registred', true);

        // send mail
        
        try {
            Mail::to(env('COMPANY_MAIL', 'rubenndjengwes@gmail.com'), 'Jet Hotel')
            ->send(new NewsletterMail($request->validated('email')));
        } catch (\Throwable $e) {
            Log::error(
                'Could not send mail due to: ', $e->getMessage(), 
                [
                    'subscriber_email' => $request->validated('email')
                ]
            );
        }

        return response()->json([
            'message' => 'inscription reussie.'
        ], 200);
    }
}
