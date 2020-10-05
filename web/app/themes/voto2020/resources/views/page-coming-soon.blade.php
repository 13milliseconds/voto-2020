@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <img src="@asset('images/voto2020-logo.png')" />
    <h1>{{ the_title() }}</h1>
    {!! the_content() !!}
  @endwhile
@endsection
