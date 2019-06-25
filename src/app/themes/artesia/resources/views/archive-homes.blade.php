@extends('layouts.app')

@section('content')
  @include('partials.content-archive-homes')

  {!! get_the_posts_navigation() !!}
@endsection
