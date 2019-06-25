{{--
  Template Name: ShowHomes New
--}}
@extends('layouts.app')

@section('content')
  @include('partials.content-archive-homes-new')

  {!! get_the_posts_navigation() !!}
@endsection
