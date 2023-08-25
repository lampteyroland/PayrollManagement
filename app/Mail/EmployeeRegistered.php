<?php

namespace App\Mail;

use App\Models\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmployeeRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public Employee $employee;

    /**
     * Create a new message instance.
     */
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('lampteyroland8@gmail.com', 'Roland Lamptey'),
            subject: 'New Employee Enrolled',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'Emails.Employees.createemployee',
            with: [
                'employeeName' => $this->employee->first_name,

            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
//            Attachment::fromPath(storage_path('app/public/profile/3GakjrKaBI7WLtNGhnY6NmFL1KzU4GYRh1X27D8V.jpg'))
//                ->as('3GakjrKaBI7WLtNGhnY6NmFL1KzU4GYRh1X27D8V.jpg')
//                ->withMime('image/jpg'),
        ];


    }
}
