<div class="flex justify-center">
    <h1 class="font-bold text-xl mb-4">Following</h1>
</div>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li>
            <div class="flex items-center justify-start text-sm my-4 px-4">
                <a href="profile/{{ $user->id }}">
                    @include('components._avatar', ['user' => $user])
                </a>
                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>
