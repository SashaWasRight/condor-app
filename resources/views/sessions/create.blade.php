<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <div class="border border-gray-200 p-6 rounded-xl flex flex-col">
                <h1 class="text-center text-xl font-bold">Log in!</h1>
                <form method="POST" action="/login" class="mt-10 self-center">
                    @csrf

                    <x-form.input name="email" autocomplete="username" type="email" required/>

                    <x-form.input name="password" autocomplete="current-password" type="password" required/>

                    <x-form.button>Log In</x-form.button>

                </form>
            </div>
        </main>
    </section>
</x-layout>
