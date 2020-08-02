<div class="bg-white rounded-lg py-6 px-6">
    <form method="post" action="/tweets">
        @csrf

         <textarea
             name="body"
             class="w-full"
             placeholder="What say you?"
             required
         ></textarea>

        @error('body')
        <span class="alert bg-yellow-100 border border-yellow-700 text-yellow-700 px-2 rounded-lg">
            <strong>
                Oops!
            </strong> {{ $message }}
        </span>
        @enderror

        <hr class="my-4">

        <div class="flex justify-between">

            @include('components._avatar', ['user' => auth()->user()])

            <button
                type="submit"
                class="bg-red-500 rounded-lg px-4 shadow text-white hover:bg-red-100 hover:text-black"
            >Say Something
            </button>

        </div>

    </form>
</div>

