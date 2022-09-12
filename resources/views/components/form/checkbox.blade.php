@props(['value' => true])

<div class="flex items-center mb-4">
    <label for="Manager" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Employee is a manager</label>
    <input id="Manager" type="checkbox" value="{{$value}}" class="w-4 h-4 rounded-s text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
</div>
