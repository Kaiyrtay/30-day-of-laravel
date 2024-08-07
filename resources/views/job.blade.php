<x-layout>
    <x-slot:heading>
        Jobs {{ $job['title'] }}:
    </x-slot:heading>
    <p>Pays $ {{ $job['salary']*12 }} USD per year.</p>
</x-layout>
