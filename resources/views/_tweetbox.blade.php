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

            <img
                src={{ auth()->user()->avatar }}
                    alt="Avatar"
                class="rounded-full mr-2"
            >

            <button
                type="submit"
                class="bg-red-500 rounded-lg p-2 shadow text-white"
            >Say Something
            </button>

        </div>

    </form>
</div>

