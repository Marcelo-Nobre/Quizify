<x-app-layout>

    <x-slot name="header">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Participante</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        @foreach($quizes as $quiz)
                        <tbody>
                            <tr>

                                <td>{{$quiz->id}}</td>
                                <td>{{$quiz->name_quiz}}</td>
                                <td>{{$quiz->name_participant}}</td>
                                <td> <a href="#"  class="button-visualizar">Visualizar</a></td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
