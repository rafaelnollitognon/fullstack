@extends('layouts.app')

@section('titulo', 'Dashboard')

@section('conteudo')
    <main class="min-h-screen flex flex-col items-center justify-center p-4">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Área Restrita</h1>
            <p class="text-gray-600 mb-8">Olá, <span class="font-bold text-blue-600">{{ Auth::user()->name }}</span>! Você está logado.</p>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full transition duration-200">
                    Sair do sistema
                </button>
            </form>
        </div>
    </main>
@endsection
