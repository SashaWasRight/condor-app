<x-layout>

    <section class="mt-40 mx-auto flex flex-col">
            <h1 class="text-4xl text-center mb-4">Welcome to the <span class="text-pink-500"> Condor Gaming </span> test app!</h1>
            @guest
            <h5 class="text-xl text-center"> Please log in using: tester@zmail.com and 'password' (without quotes) for password.</h5>
            <button type=""
            class="bg-pink-500 text-white font-semibold text-xs rounded-2xl hover:bg-pink-600 py-2 px-10 uppercase self-center mt-10"
            ><a href="/login">Log In</a>
            </button>
            @else
            <h3 class="text-2xl text-center"> What do you wish to do?</h3>
        </section>
        <section class=" flex flex-col px-6 py-8">
            <button type=""
            class="bg-pink-500 text-white font-semibold text-xs rounded-2xl hover:bg-pink-600 py-2 px-10 uppercase self-center mt-10"
            ><a href="/employees/create">Add new employee</a></button>
            <button type=""
            class="bg-pink-500 text-white font-semibold text-xs rounded-2xl hover:bg-pink-600 py-2 px-10 uppercase self-center mt-10"
            ><a href="/employees">Search employee database</a></button>
            @endguest
        </section>
</x-layout>
