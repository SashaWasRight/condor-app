<x-layout>
    <x-customize heading="Add New Employee">
        <form method="POST" action="/employees/create">
                @csrf
                <x-form.input name="name"/>
                <x-form.input name="position"/>
                <x-form.checkbox/>
                <x-form.input name="startDate" placeholder="Y-m-d : h:m:s"/>
                <x-form.field>
                <x-form.label name="superior"/>

                <select name="superior" id="superior">
                   @foreach(\App\Models\Manager::all() as $manager)
                        <option
                            value="{{$manager->id}}"
                            {{ old('superior') == $manager->id ? 'selected' : '' }}
                        >{{$manager->name}}</option>
                    @endforeach

                </select>

                    <x-form.error name="superior"/>
                </x-form.field>
                <x-form.button>Add</x-form.button>
        </form>
    </x-customize>
</x-layout>
