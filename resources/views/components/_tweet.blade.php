<div class="flex mb-3 border-b border-b-gray-300 py-3">
    <div class="mr-4">

        @include('components._avatar', ['user' => $tweet->user])

    </div>

    <div class="flex-1">
        <h4 class="font-bold mb-3">{{ $tweet->user->name }}</h4>
        <p class="mb-3 text-sm">{{ $tweet->body }}</p>
        <div class="flex">
            <button class="bg-green-500 rounded-full px-2 py-1 shadow text-white w-8 mr-2">T</button>
            <button class="bg-red-500 rounded-full px-2 py-1 shadow text-white w-8 mr-2">T</button>
        </div>
    </div>
</div>
