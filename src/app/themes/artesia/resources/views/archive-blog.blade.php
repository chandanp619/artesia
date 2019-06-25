@extends('layouts.app')

@section('content')
  @include('partials.content-archive-blog')

  {!! get_the_posts_navigation() !!}
@endsection
