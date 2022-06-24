<div>
    <x-jet-dialog-modal wire:model="show">
        <x-slot name="title">

        </x-slot>

        <x-slot name="content">
            {{ $sound }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button class="ml-2" wire:click="doClose">
                {{ __('Close') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
