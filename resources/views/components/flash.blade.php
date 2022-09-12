@if (session()->has('success'))
        <div x-data = "{show: true}"
            x-init="setTimeout(() => show = false,4000)"
            x-show="show"
            class="fixed bottom-3 right-3 py-2 px-4 bg-pink-500 rounded-xl text-sm text-white"

        >

                <p>{{session('success')}}</p>


        </div>

@elseif (session()->has('error'))

<div x-data = "{show: true}"
            x-init="setTimeout(() => show = false,4000)"
            x-show="show"
            class="fixed bottom-3 right-3 py-2 px-4 bg-red-500 rounded-xl text-sm text-white"

        >

                <p>{{session('error')}}</p>


        </div>
@endif
