<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
  /**
   * Détermine si l'utilisateur est autorisé à soumettre le formulaire.
   *
   * @return bool True si la soumission est autorisée
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Règles de validation du formulaire de contact.
   *
   * @return array<string, mixed> Règles de validation Laravel
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'max:255'],
      'phone' => ['required', 'string', 'max:30'],
      'message' => ['required', 'string', 'max:5000'],
    ];
  }

  /**
   * Messages d'erreur personnalisés pour le formulaire.
   *
   * @return array<string, string> Messages traduits
   */
  public function messages(): array
  {
    return [
      'name.required' => __('contact.validation.name_required'),
      'email.required' => __('contact.validation.email_required'),
      'email.email' => __('contact.validation.email_invalid'),
      'phone.required' => __('contact.validation.phone_required'),
      'message.required' => __('contact.validation.message_required'),
    ];
  }
}
