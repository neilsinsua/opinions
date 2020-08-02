<div class="bg-white rounded-lg mt-2 px-6 py-6">
    @foreach($tweets as $tweet)
        @include('components._tweet')
    @endforeach
</div>
