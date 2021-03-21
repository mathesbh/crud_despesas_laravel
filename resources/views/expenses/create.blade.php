<x-app-layout>
    <div class="p-5">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-3 md:w-11/12 lg:w-1/2 mx-auto" action="{{ route('expense.store') }}" method="POST">
                  @csrf
                    <div class="mt-4">
                        <x-jet-label for="description" value="{{ __('Descrição') }}" />
                        <x-jet-input id="description" class="block mt-1 w-11/12" type="text" name="description"
                            :value="old('description')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="cost" value="{{ __('Valor') }}" />
                        <x-jet-input id="cost" class="block mt-1 w-11/12" type="number" name="cost" step=".01" required/>
                    </div>

                    <div class="mt-4">
                      <x-jet-label for="img" value="{{ __('Anexo de imagem') }}" />
                      <x-jet-input id="img" class="block mt-1 w-11/12" type="file" name="img"/>
                  </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="">
                            {{ __('Criar') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
