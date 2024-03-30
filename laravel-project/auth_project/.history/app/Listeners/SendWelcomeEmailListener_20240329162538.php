<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Mail\UserCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

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
        UserCreatedEvent::dispatch($event->user->email);
        // dd("Bonjour depuis le listener");
        //SMTP : Simple Mail Transfert Protocol
        //POP:
        //IMAP:
    }
}
