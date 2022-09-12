<!doctype html>

<title>Condor Gaming Test App</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<style>
    html{
       scroll-behavior: smooth;
    }
    .clamp{

        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line{
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/" class="flex flex-col">
                    <span class="text-pink-500 font-bold">Condor Gaming</span>
                    <span class="text-xs self-end px-2">Test App</span>
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @guest
                        <a href="/login" class="text-xs font-bold uppercase mr-6">Log In</a>
                        <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @else

                        <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()"
                        class="text-xs font-bold uppercase">Log out</a>
                        <form id="logout-form" class="hidden" method="POST" action="/logout">
                            @csrf
                        </form>
                @endguest
            </div>
        </nav>
    </section>
    {{$slot}}
    <x-flash/>
</body>
