<p><strong>{{ __('contact.fields.name') }} :</strong> {{ $data['name'] }}</p>
<p><strong>{{ __('contact.fields.email') }} :</strong> {{ $data['email'] }}</p>
<p><strong>{{ __('contact.fields.phone') }} :</strong> {{ $data['phone'] }}</p>
<p><strong>{{ __('contact.fields.message') }} :</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>
