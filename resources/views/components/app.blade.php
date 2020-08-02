<x-master>

    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <div class="w-1/6 bg-white rounded-lg">
                    @include('components._sidebar-links')
                </div>

                <div class="lg:flex-1 mx-6">
                    {{ $slot }}
                </div>

                <div class="lg:w-1/6 bg-white rounded-lg py-4">
                    @include('components._friendlists')</div>
            </div>
        </main>
    </section>

</x-master>
