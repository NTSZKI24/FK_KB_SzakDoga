<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Esemenyek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ( $events as $event )
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($event->image) }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->eventname }}</h5>
                                <p class="card-text">{{ $event->eventdesc }}</p>
                                <p class="card-text">{{ $event->eventdate }} {{$event->eventtime}}</p>
                                <p class="card-text">{{ $event->eventplace }}</p>
                                <p class="card-text">{{ $event->eventage }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>