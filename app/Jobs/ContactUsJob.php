<?php

namespace App\Jobs;

use App\Mail\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactUsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)

    {

        $this->data = $data;
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
{
    // Create a new instance of the Enquiry mailable with the data passed to the job
    $maillable = new Enquiry($this->data);

    // Send the email using the Mail facade to the email address configured in your .env file
    Mail::to(env('MAIL_TO_ADDRESS'))->send($maillable);
}

}
