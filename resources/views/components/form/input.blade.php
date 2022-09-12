@props(['name','type' => "text"])
<x-form.field>
                <x-form.label :name="$name"/>

                <input class="border border-gray-200 rounded p-2 w-min"
                        id="{{$name}}"
                        name="{{$name}}"
                        type="{{$type}}"
                        {{$attributes(['value' => old($name)])}}
                        ></input>

                <x-form.error :name="$name"/>
</x-form.field>
