<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10  border border-gray-200 p-6 rounded-xl">
            <div class="flex flex-col">
            <h1 class="text-center text-xl font-bold">Register new account</h1>
            <form method="POST" action="/register" class="mt-10 self-center" >
                @csrf

                <x-form.input name="name" required/>

                <x-form.input name="email" autocomplete="username" type="email" required/>

                <x-form.input name="password" autocomplete="new-password" type="password" required/>

                <x-form.button>Submit</x-form.button>

            </form>
            </div>
        </main>

    </section>
</x-layout>
