<?php


namespace App\Repository;


use App\Contact;

class ContactRepository
{
    public function store(string $name, string $email, string $phone, string $subject, string $message)
    {
        Contact::query()->create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message
        ]);
    }
}
