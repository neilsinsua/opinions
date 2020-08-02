@if(! auth()->user()->is($user))
    <form
        method="POST"
        action="/profile/{{ $user->tag }}/follow"
    >
        @csrf
        <button type="submit"
                class="shadow btn py-2 text-white px-4 bg-red-500
                            rounded-full hover:bg-red-200 hover:text-black mx-2">
            {{ auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form>
@endif
