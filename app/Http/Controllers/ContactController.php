<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
  /**
   * Affiche la page de contact avec le formulaire.
   *
   * @return View Vue du formulaire de contact
   */
  public function create(): View
  {
    return view('contact');
  }

  /**
   * Traite l'envoi du message de contact.
   *
   * @param ContactRequest $request Données validées du formulaire
   * @return RedirectResponse Redirection avec message de confirmation
   */
  public function store(ContactRequest $request): RedirectResponse
  {
    $data = $request->validated();

    Mail::to(config('mail.contact_address'))
      ->send(new ContactMessageMail($data));

    return redirect()
      ->route('contact')
      ->with('contact_success', true);
  }
}
