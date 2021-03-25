<x-app-layout>
    <div class="p-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg md:w-8/12 lg:w-1/2 mx-auto">
                <div class="p-3 ">
                    <p class="text-xl pb-3">Despesas</p>
                    <ul>
                        @foreach ($expenses as $expense)
                        <div class="shadow-inner grid grid-cols-3 p-5">
                          <div class="">
                            <a href="{{ route('expense.show', ['expense' => $expense->id]) }}">
                              <li class="text-xl">{{ $expense->description }}</li>
                            </a>
                          </div>
                          <div class="justify-self-end -mr-5">
                            <a  href="http://">
                              <i class="fas fa-edit text-yellow-500">Editar</i>
                            </a>
                          </div>
                          <div class="justify-self-end">
                            <a class="" href="">
                              <i class="fas fa-trash-alt text-red-500">Excluir</i>
                            </a>
                          </div>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>