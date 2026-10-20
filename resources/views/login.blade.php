{{-- Avisa que essa tela usa o layout mestre --}}
@extends('layouts.app')

{{-- Diz o que vai aparecer no título da aba --}}
@section('titulo', 'Login')

{{-- Diz o que vai entrar no buraco do @yield('conteudo') --}}
@section('conteudo')
    {{-- Centraliza o card no meio da tela --}}
    <main class="min-h-screen flex items-center justify-center p-4">

        {{-- O Card branco com sombra --}}
        <section class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Bem-vindo</h1>
            <p class="text-gray-500 mb-6">Faça login para continuar</p>

            {{-- Caixa de erro vermelha do Laravel --}}
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="seu@email.com"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-6">
                    <label for="senha" class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="********"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Entrar
                </button>
            </form>
        </section>
    </main>
@endsection
