<?php

use App\Mail\ContactUsSubmitted;
use Illuminate\Support\Facades\Mail;

test('contact us form sends email when submitted with valid data', function () {
    Mail::fake();

    $validData = [
        'fullname'                   => 'Test User',
        'email'                      => 'test@example.com',
        'phone'                      => '12345678',
        'message'                    => 'This is a test message',
        'agrees-for-data-processing' => true,
    ];

    $response = $this->post(route('contact-us', 'lv'), $validData);

    $response->assertRedirect(url()->previous().'#contact-us-form');
    $response->assertSessionHas('success');

    Mail::assertSent(ContactUsSubmitted::class, function ($mail) use ($validData) {
        return $mail->hasTo('info@storex.lv') &&
               $mail->data['fullname'] === $validData['fullname'] &&
               $mail->data['email'] === $validData['email'] &&
               $mail->data['phone'] === $validData['phone'] &&
               $mail->data['message'] === $validData['message'];
    });
});

test('contact us form validation triggers with invalid data', function () {
    Mail::fake();

    $invalidData = [
        'fullname'                   => '',
        'email'                      => 'not-an-email',
        'phone'                      => '',
        'message'                    => '',
        'agrees-for-data-processing' => false,
    ];

    $response = $this->post(route('contact-us', 'lv'), $invalidData);

    // Verify we're redirected back with errors
    $response->assertSessionHasErrors(['fullname', 'email', 'phone', 'agrees-for-data-processing']);

    // Make sure no email was sent
    Mail::assertNothingSent();
});

