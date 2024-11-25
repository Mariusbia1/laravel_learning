<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    <ul>
    <div class="space-y-4">
        @foreach ( $jobs as $job )
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                 <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                      <li><strong>{{$job['title'] }}:</strong> pays {{ $job['salary'] }} per year .</li>
                 </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
    </ul>

</x-layout>
