@props(['heading'])

<section class="py-8 max-w-7xl mx-auto">
        <h1 class="text-lg font-bold mb-8 pb-2 border-b "
        >{{$heading}}</h1>

        <div class="flex gap-x-6">
            <x-aside/>
            <main class="flex-1">
                <div class="border border-gray-200 p-6 rounded-xl">
                        {{$slot}}
                </div>
            </main>
        </div>
</section>
