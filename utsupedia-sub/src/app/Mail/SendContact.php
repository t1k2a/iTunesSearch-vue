<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Encyclopedia;
use Illuminate\Support\Facades\DB;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactData)
    {
        $this->name = $contactData['name'];
        $this->content = $contactData['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $this->text('contact.message')
                ->subject('お問い合わせが届きました')
                ->with([
                    'name'    => $this->name,
                    'content' => $this->content
                ]);
    }
}
