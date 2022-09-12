<aside class="border-r px-2">
                <h4 class="font-semibold mb-4 ">Links:</h4>
                <ul>
                    <li>
                        <a href="/employees/create"  class="{{ request()->is('employees/create') ? 'text-pink-500' : '' }}">Add employee</a>
                    </li>

                    <li>
                        <a href="/employees"  class="{{ request()->is('employees')  ? 'text-pink-500' : '' }}">Employee Database</a>
                    </li>
                </ul>
</aside>
