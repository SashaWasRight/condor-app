@props(['heading'])

<section class="py-22 max-w-7xl mx-auto">
        <h1 class="text-lg font-bold mb-8 pb-2 border-b"
        >{{$heading}}</h1>

        <div class="flex gap-x-6">
            <x-aside/>
            {{$slot}}
        </div>
</section>
