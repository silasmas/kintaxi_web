@extends('layouts.guest', ['page_title' => 'KinTaxi / ' . __('miscellaneous.menu.terms_of_use')])

@section('guest-content')

                <div class="row gx-5 my-lg-4 my-5">
                    <div class="col-lg-4 col-md-5 col-sm-5 col-12">
                        <div id="tableOfContent" class="card mb-lg-0 mb-4">
                            <div class="card-header">
                                <h4 class="m-0">@lang('messages.table_of_content')</h4>
                            </div>
                            <div class="card-body">
                                <ul>
@forelse ($titles as $title)
                                    <li><a href="#{{ $title['ref'] }}">{{ $title['title'] }}</a></li>
@empty
@endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="privacyContent" class="col-lg-8 col-md-7 col-sm-7 col-12">
                        <h1>@lang('messages.terms.title')</h1>
                        <p>@lang('messages.terms.description')</p>

@forelse ($titles as $title)
                        <h3 id="{{ $title['ref'] }}">{!! $title['title'] !!}</h3>

    @forelse ($title['contents'] as $content)
                        <p>{!! $content['content'] !!}</p>

        @if (count($content['dashes']) > 0)
                        <ul>
            @foreach ($content['dashes'] as $dash)
				@if (!empty($dash['title']))
                            <li>{!! $dash['title'] !!}</li>

							<ul>
					@foreach ($dash['subdashes'] as $subdash)
								<li style="list-style-type: square; margin-bottom: 5px;">{!! $subdash !!}</li>
					@endforeach
							</ul>
				@else
                            <li>{!! $dash !!}</li>
				@endif
            @endforeach
                        </ul>
        @endif
    @empty
    @endforelse
@empty
@endforelse
                    </div>
                </div>

@endsection
