<x-layout title="{{ $jobSelected['title'] }}">
    <x-slot:heading>    
        <a href="/jobs" class="hover:underline">{{ $jobSelected['title'] }}'s Job</a>
    </x-slot:heading>
    
    <div class="flex items-center space-x-2">
        <b>{{ $jobSelected['title'] }}</b> 
        <img src="{{ asset('storage/icons/edit.png') }}" alt="edit"> 
    </div>
    <p>This job pays <b>{{ $jobSelected['salary'] }}</b> per year.</p>

    <div>{{ $jobSelected['description'] ?? 'No description setted.'}}</div>

</x-layout>