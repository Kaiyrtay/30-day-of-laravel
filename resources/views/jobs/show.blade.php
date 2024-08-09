<x-layout>
    <x-slot:heading>
        Jobs {{ $job->title }}:
    </x-slot:heading>
    <p>Pays $ {{ $job->salary * 12 }} USD per year.</p>
    <div class="mt-3">
        @can('edit-job', $job)
            <x-button-link href='/jobs/{{ $job->id }}/edit'>
                edit jon
            </x-button-link>
        @endcan
    </div>
</x-layout>
