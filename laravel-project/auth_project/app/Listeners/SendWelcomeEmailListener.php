<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        // UserCreatedEvent::to($event->user->);
        // dd("Bonjour depuis le listener");
        //SMTP : Simple Mail Transfert Protocol
        //POP:
        //IMAP:
    }
}
