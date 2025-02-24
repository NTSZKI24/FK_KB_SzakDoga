<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Esemenyek') }}
        </h2>
        <form method="GET" action="{{ route('events.search') }}" class="mt-4">
            <input type="text" name="search" placeholder="Search events" class="px-4 py-2 border rounded-md">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Search</button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($events as $event)
                            <x-card 
                                :image="asset($event->image)"
                                :title="$event->eventname"
                                :description="$event->eventdesc"
                                :date="$event->eventdate"
                                :time="$event->eventtime"
                                :place="$event->eventplace"
                                :age="$event->eventage"
                            />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>