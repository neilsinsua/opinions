<header class="rounded-lg mb-4">

    <div class="relative mb-2">
        <img
            src="{{ route('banner') }}"
            alt=""
            class="rounded-lg w-full lg:h-auto"
        >

        <img
            src="https://i.pravatar.cc/180?u={{ $user->email }}"
            alt="Avatar"
            class="rounded-full
            shadow absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%;"
        >
    </div>



    <div class="flex justify-between items-center px-2 pb-6">
        <div class="flex-column">
            <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
            Joined 2 days ago
        </div>
        <div class="flex">
            <x-edit-button :user="$user"></x-edit-button>
            <x-follow-button :user="$user"></x-follow-button>
        </div>

    </div>

    <div>
        <p>

        </p>
    </div>


</header>
