<x-app-layout>
    <div class="p-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg md:w-8/12 lg:w-1/2 mx-auto">
                <div class="p-5">
                    <p class="text-xl pb-3">Detalhes da despesa:</p>
                    <div class="p-5 text-xl">
                        <p>Descrição: {{ $expense->description }}</p>
                        <p>Valor: R${{ $expense->cost }}</p>
                        <p>Data: {{ date('d-m-Y', strtotime($expense->created_at)) }}</p>
                        <p>Anexo:
                            @if ($expense->img)
                                <img src="/img/anexos/{{ $expense->img }}" alt="{{'anexo despesa' . $expense->description  }}">
                            @else
                                <span>Nenhum anexo</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
