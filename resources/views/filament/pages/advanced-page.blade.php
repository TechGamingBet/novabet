<x-filament-panels::page>
    <div class="w-full p-4 bg-gray-500 shadow-lg" style="background-color: #51515163;border-radius: 5px;">
        <h2 class="mb-5 text-3xl">World Slot</h2>
        <hr style="border-color: #4b4b4b8c;padding-bottom: 10px">
        <div class="flex justify-between w-full gap-4">
            <div class="flex flex-col gap-4 w-full justify-between">
                <button wire:click="loadProvider('slot')" class="bg-primary-600 px-3 py-2 w-full text-center">
                    <div wire:loading wire:target="loadProvider('slot')">Carregando Provedores</div>
                    <div wire:loading.remove wire:target="loadProvider('slot')">Carregar Provedor (Slot)</div>
                </button>
                <button wire:click="loadProvider('casino')" class="bg-primary-600 px-3 py-2 w-full">
                    <div wire:loading wire:target="loadProvider('casino')">Carregando Provedores</div>
                    <div wire:loading.remove wire:target="loadProvider('casino')">Carregar Provedor (Casino)</div>
                </button>
                <button wire:click="loadProvider('pachinko')" class="bg-primary-600 px-3 py-2 w-full">
                    <div wire:loading wire:target="loadProvider('pachinko')">Carregando Provedores</div>
                    <div wire:loading.remove wire:target="loadProvider('pachinko')">Carregar Provedor (Pachinko)</div>
                </button>
            </div>
            <button wire:click="loadGames" class="bg-primary-500 px-3 py-2 w-full">
                <div wire:loading wire:target="loadGames">Carregando Jogos</div>
                <div wire:loading.remove wire:target="loadGames">Carregar Jogos</div>
            </button>
        </div>
    </div>


{{--    <form wire:submit="submit">--}}
{{--        {{ $this->form }}--}}

{{--        <br>--}}
{{--        <x-filament::button type="submit" form="submit">--}}
{{--            Carregar Arquivo--}}
{{--        </x-filament::button>--}}
{{--    </form>--}}
</x-filament-panels::page>
