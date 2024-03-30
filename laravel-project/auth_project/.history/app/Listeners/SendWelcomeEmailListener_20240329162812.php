<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Mail\UserCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Listeners\Mail;

class SendWelcomeEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct(public User $user)
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
        // UserCreatedEvent::to('martinaboumonde@gmail.com')->send($event->user->email);
        Mail::to('martinaboumonde@gmail.com')->send(new UserCreatedMail($event->user));
        // dd("Bonjour depuis le listener");
        //SMTP : Simple Mail Transfert Protocol
        //POP:
        //IMAP:
    }
}
