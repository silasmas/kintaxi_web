<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * @param array<string, string> $data Données du formulaire de contact
   */
  public function __construct(
    public array $data
  ) {
  }

  /**
   * Configure l'enveloppe du message e-mail.
   *
   * @return Envelope Enveloppe du mail
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: __('contact.mail_subject', ['name' => $this->data['name']]),
      replyTo: [$this->data['email']],
    );
  }

  /**
   * Définit le contenu du message e-mail.
   *
   * @return Content Contenu du mail
   */
  public function content(): Content
  {
    return new Content(
      view: 'emails.contact-message',
    );
  }
}
