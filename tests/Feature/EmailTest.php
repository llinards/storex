<?php

use App\Mail\ContactUsSubmitted;
use Illuminate\Support\Facades\Mail;

it('sends email when contact form submitted with valid data', function () {
    Mail::fake();

    $validData = [
        'fullname' => 'Test User',
        'email' => 'test@example.com',
        'phone' => '12345678',
        'message' => 'This is a test message',
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

it('validates contact form with invalid data', function () {
    Mail::fake();

    $invalidData = [
        'fullname' => '',
        'email' => 'not-an-email',
        'phone' => '',
        'message' => '',
        'agrees-for-data-processing' => false,
    ];

    $response = $this->post(route('contact-us', 'lv'), $invalidData);

    $response->assertSessionHasErrors(['fullname', 'email', 'phone', 'agrees-for-data-processing']);
    Mail::assertNothingSent();
});

it('validates contact form with partial invalid data', function () {
    Mail::fake();

    $partialInvalidData = [
        'fullname' => 'Valid Name',
        'email' => 'invalid-email',
        'phone' => '12345678',
        'message' => 'Valid message',
        'agrees-for-data-processing' => true,
    ];

    $response = $this->post(route('contact-us', 'lv'), $partialInvalidData);

    $response->assertSessionHasErrors(['email']);
    $response->assertSessionDoesntHaveErrors(['fullname', 'phone', 'message']);
    Mail::assertNothingSent();
});

it('requires data processing agreement on contact form', function () {
    Mail::fake();

    $dataWithoutAgreement = [
        'fullname' => 'Test User',
        'email' => 'test@example.com',
        'phone' => '12345678',
        'message' => 'This is a test message',
    ];

    $response = $this->post(route('contact-us', 'lv'), $dataWithoutAgreement);

    $response->assertSessionHasErrors(['agrees-for-data-processing']);
    Mail::assertNothingSent();
});

it('handles email sending error gracefully', function () {
    Mail::shouldReceive('to')
        ->andThrow(new \Exception('Mail server error'));

    $validData = [
        'fullname' => 'Test User',
        'email' => 'test@example.com',
        'phone' => '12345678',
        'message' => 'This is a test message',
        'agrees-for-data-processing' => true,
    ];

    $response = $this->post(route('contact-us', 'lv'), $validData);

    $response->assertRedirect();
    $response->assertSessionHas('error');
});
