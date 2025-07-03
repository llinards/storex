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
        return $mail->hasTo('web_forms@storex.lv') &&
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

test('contact us form handles partial invalid data correctly', function () {
    Mail::fake();

    $partialInvalidData = [
        'fullname'                   => 'Valid Name',
        'email'                      => 'invalid-email', // Invalid email
        'phone'                      => '12345678',
        'message'                    => 'Valid message',
        'agrees-for-data-processing' => true,
    ];

    $response = $this->post(route('contact-us', 'lv'), $partialInvalidData);

    $response->assertSessionHasErrors(['email']);
    $response->assertSessionDoesntHaveErrors(['fullname', 'phone', 'message']);
    Mail::assertNothingSent();
});

test('contact us form requires data processing agreement', function () {
    Mail::fake();

    $dataWithoutAgreement = [
        'fullname' => 'Test User',
        'email'    => 'test@example.com',
        'phone'    => '12345678',
        'message'  => 'This is a test message',
        // Missing agrees-for-data-processing
    ];

    $response = $this->post(route('contact-us', 'lv'), $dataWithoutAgreement);

    $response->assertSessionHasErrors(['agrees-for-data-processing']);
    Mail::assertNothingSent();
});
