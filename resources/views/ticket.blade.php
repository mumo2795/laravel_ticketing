<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tickets Information') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">

                    @foreach ($tickets as $ticket)

                    <div class="grid grid-cols-2 gap-4">

                        <x-standard-ticket-list label="{{ __('Ticket ID :') }}" value="{{ $ticket->id }}" />
                        <x-standard-ticket-list label="{{ __('Ticket Type :') }}" value="{{ $ticket->ticket_type }}" />
                        <x-standard-ticket-list label="{{ __('Ticket Location :') }}" value="{{ $ticket->location }}" />
                        <x-standard-ticket-list label="{{ __('Category :') }}" value="{{ $ticket->category }}" />
                        <x-standard-ticket-list label="{{ __('Sub-Category :') }}" value="{{ $ticket->sub_category }}" />
                        <x-standard-ticket-list label="{{ __('Description :') }}" value="{{ $ticket->body }}" />
                        <x-standard-ticket-list label="{{ __('Date Created :') }}" value="{{ $ticket->date_created }}" />

                    </div>
                    <br><hr class="my-custom-style" style="color: #333; border-width: 1px;"><br>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard')">
            {{ __('dashboard') }}
        </x-nav-link>
    </div>

