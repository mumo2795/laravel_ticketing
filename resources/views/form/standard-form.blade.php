<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create a Ticket') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Please make you to fill in all the details to get the best result.") }}
        </p>
    </header>

    <form method="post" action="{{ route('store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <!-- Department -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="department" :value="__('Department')" />
            <x-standard-dropdown :options="['option1' => 'IT Infra', 'option2' => 'Maintenance', 'option3' => 'GWMS']" selected="option1" />
            <x-input-error class="mt-2" :messages="$errors->get('department')" />
        </div>

        <!-- Ticket Type -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="ticket_type" :value="__('Ticket Type')" />
            <x-standard-dropdown name="ticket_type" :options="['Request' => 'Request Type Ticket', 'Incident' => 'Incident Type Ticket', 'Normal' => 'Normal Type Ticket']" selected="Incident" />
            <x-input-error class="mt-2" :messages="$errors->get('ticket_type')" />
        </div>

        <!-- Warehouse -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="warehouse" :value="__('Warehouse/Office')" />
            <x-standard-dropdown name="warehouse" :options="[
                                                    '1' => 'STORE N GO HQ(S32)',
                                                    '2' => 'STORE N GO (TELOK GONG)',
                                                    '3' => 'STORE N GO (BUKIT KEMUNING)',
                                                    '4' => 'STORE N GO (PAK CHUN)',
                                                    '5' => 'STORE N GO (LARKIN)']"
                                                    selected="Incident" />
            <x-input-error class="mt-2" :messages="$errors->get('warehouse')" />
        </div>

        <!-- Location -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" class="mt-1 w-full" type="text" name="location" :value="old('location')" autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        <!-- Category -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="category" :value="__('Category')" />
            <x-standard-dropdown name="category" :options="['option1' => 'IT Infra', 'option2' => 'Maintenance', 'option3' => 'GWMS']" selected="option1" />
            <x-input-error class="mt-2" :messages="$errors->get('category')" />
        </div>

        <!-- Sub-Category -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="sub_category" :value="__('Sub-Category')" />
            <x-standard-dropdown name="sub_category" :options="['option1' => 'IT Infra', 'option2' => 'Maintenance', 'option3' => 'GWMS']" selected="option1" />
            <x-input-error class="mt-2" :messages="$errors->get('sub_category')" />
        </div>

        <!-- Description -->
        <div class="form-group grid grid-cols-2 gap-4">
            <x-input-label for="body" :value="__('Description')" />
            <x-standard-textarea name="body" rows="4">{{ old('body') }}</x-standard-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('body')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Submit') }}</x-primary-button>

        </div>
    </form>
</section>
