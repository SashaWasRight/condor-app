<x-layout>
    <x-customize heading="Editing details for {{$manager->name}}">
    <div class="flex justify-between gap-x-10">
        <div>
        <form method="POST" action="/managers/edit/{{$manager->id}}">
                @csrf
                @method('PATCH')
                <x-form.input name="name" :value="old('name', $manager->name)"/>
                <x-form.input name="position" :value="old('name', $manager->position)"/>
                <x-form.input name="endDate" :value="old('name', $manager->endDate)" placeholder="Y-m-d : h:m:s"/>
                <x-form.button>Update</x-form.button>
        </form>
        <x-form.field class="self-end mt-12">
            <form method="POST" action="/managers/{{ $manager->id }}">
                @csrf
                @method('DELETE')

                <x-form.button>Delete from database</x-form.button>
            </form>
        </x-form.field>
        </div>

        <div class="flex flex-col">
            <h6 class="mb-2 font-bold text-xs border-b">{{$manager->name}} currently manages:</h6>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Position
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Start Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            End Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($manager->employees as $employee)

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/managers/edit/{{ $manager->id }}">
                                                        {{ $employee->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <div>{{$employee->position}}</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                             <div>{{$employee->startDate}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                             <div>{{$employee->endDate}}</div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </x-customize>
</x-layout>
