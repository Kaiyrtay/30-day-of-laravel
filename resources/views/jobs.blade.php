<x-layout>
    <x-slot:heading>
        Jobs listing:
    </x-slot:heading>
    @if (isset($jobs))
        <div class="space-y-2">
            @foreach ($jobs as $job)
                <div class="block m-3 px-4 p-2 border border-grey-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                    <div>
                        <a href="/jobs/{{ $job['id'] }}"
                            class="font-medium hover:underline"><strong>{{ $job['title'] }}</strong></a>
                        Pays $ {{ $job['salary'] * 12 }} USD per year.
                    </div>
                </div>
            @endforeach
            <div>{{ $jobs->links() }}</div>
        </div>
    @else
        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <span class="font-medium">Warning alert!</span> Job list empty.
        </div>
    @endif

</x-layout>
