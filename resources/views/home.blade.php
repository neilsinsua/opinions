@extends('layouts.app')

@section('content')
 <div class="lg:flex lg:justify-between">
     <div class="w-1/6 bg-white rounded-lg">
         @include('_sidebar-links')
     </div>

     <div class="lg:flex-1 mx-6">
         @include('_tweetbox')
         @include('_timeline')
     </div>

     <div class="lg:w-1/6 bg-white rounded-lg py-4">@include('_friendlists')</div>
 </div>
@endsection
