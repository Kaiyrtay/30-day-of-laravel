<x-layout>
    <x-slot:heading>
        Jobs listing:
    </x-slot:heading>
    @if (isset($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li>
                    <a href="/jobs/{{ $job['id'] }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><strong>{{ $job['title'] }}</strong></a>
                    Pays $ {{ $job['salary'] * 12 }} USD per year.
                </li>
            @endforeach
        </ul>
    @else
        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <span class="font-medium">Warning alert!</span> Job list empty.
        </div>
    @endif

</x-layout>
