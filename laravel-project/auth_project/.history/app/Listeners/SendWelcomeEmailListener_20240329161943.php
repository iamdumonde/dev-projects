<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
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
        App\Listeners\UserCreatedMail::to("martinaboumonde@gmail.com")->send(new User($event->user->email));
        // UserCreatedEvent::dispatch($event->user->email);
        // dd("Bonjour depuis le listener");
        //SMTP : Simple Mail Transfert Protocol
        //POP:
        //IMAP:
    }
}
