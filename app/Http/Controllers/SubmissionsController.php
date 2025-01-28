<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsSubmitted;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class SubmissionsController extends Controller
{
    public function submit(ContactUsRequest $request)
    {
        try {
            $data = $request->validated();
            Mail::to('info@storex.lv')->send(new ContactUsSubmitted($data));

            Log::info('Message sent from contact us from');

            return Redirect::to(URL::previous()."#contact-us-form")->with('success',
                __('Paldies! Jūsu ziņa ir nosūtīta! Mēs ar Jums sazināsimies pēc iespējas ātrāk.'));
        } catch (\Throwable $e) {
            Log::error('Message not sent: '.$e->getMessage());

            return Redirect::to(URL::previous()."#contact-us-form")->with('error',
                __('Kļūda! Mēģini vēlreiz vai sazinies ar mums pa tālruni.'));
        }
    }
}
