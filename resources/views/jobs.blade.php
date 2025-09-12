<x-layout title="Home">
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <ul class="list-none">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-slate-400 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays Salary: {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>