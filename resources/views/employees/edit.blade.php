<x-layout>
    <x-customize heading="Editing details for {{$employee->name}}">
    <div>
        <form method="POST" action="/employees/edit/{{$employee->id}}">
                    @csrf
                    @method('PATCH')
                    <x-form.input name="name" :value="old('name', $employee->name)"/>
                    <x-form.input name="position" :value="old('position', $employee->position)"/>
                    <x-form.input name="endDate" :value="old('endDate', $employee->endDate)" placeholder="Y-m-d : h:m:s"/>
                    <x-form.field>
                    <x-form.label name="superior"/>

                    <select name="superior" id="superior">
                    @foreach(\App\Models\Manager::all() as $manager)
                            <option
                                value="{{$manager->id}}"
                                {{ old('superior', $employee->superior) == $manager->id ? 'selected' : '' }}
                            >{{$manager->name}}</option>
                        @endforeach

                    </select>

                        <x-form.error name="superior"/>
                    </x-form.field>
                    <x-form.button>Update</x-form.button>
            </form>
            <x-form.field class="mt-12">
                <form method="POST" action="/employees/{{ $employee->id }}">
                    @csrf
                    @method('DELETE')

                    <x-form.button>Delete from database</x-form.button>

                </form>
            </x-form.field>
        </div>
    </x-customize>
</x-layout>
