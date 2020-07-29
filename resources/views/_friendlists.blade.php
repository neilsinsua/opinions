<div class="flex justify-center">
    <h1 class="font-bold text-xl mb-4">Following</h1>
</div>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li>
            <div class="flex items-center justify-center text-sm my-4">
                <img
                    src={{ $user->avatar }}
                    alt="Avatar"
                    class="rounded-full mr-2"
                >
                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>
