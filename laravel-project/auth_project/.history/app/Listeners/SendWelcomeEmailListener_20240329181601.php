<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Mail\UserCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class SendWelcomeEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreatedEvent $event): void
    {
        //envoyer les mails
        // $message = new UserCreatedMail($event->user->email);
        // $message->to("martinaboumonde@gmail.com")->send();
        Mail::to($event->user->email)->send(new UserCreatedMail());
        // dd("Bonjour depuis le listener");
        //SMTP : Simple Mail Transfert Protocol
        //POP:
        //IMAP:
    }
}
