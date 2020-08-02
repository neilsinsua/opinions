
@can('edit', $user)
    <form
        method="GET"
        action="/profile/{{ $user->tag }}/edit"
    >
        <button
            type="submit"
            class="shadow btn py-2 text-black px-4 bg-white
                            rounded-full hover:bg-red-200 hover:text-black mx-2">Edit Profile
        </button>
    </form>
@endcan

