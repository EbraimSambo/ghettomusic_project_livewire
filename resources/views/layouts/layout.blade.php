<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$title ? $title . ' Ghetto Music' : 'Ghetto Music'}} </title>
    <link rel="stylesheet" href="{{ asset('assets/styles/css/global.css') }}">
</head>
<body> 
    {{-- AppLayout --}}
    <div id="appLayout">
        {{-- Parte Direita do Layout --}}
        <div id="rigtLayout">
            <livewire:layout.header-global>
            <livewire:components.header-placeholder>
        </div>
        {{-- Parte Esquerda do Layout --}}
        <div id="leftLayout">
            <main id="main">
                {{ $slot }}
            </main>
            <livewire:layout.footer-global>            
        </div>
    </div>
</body>
</html>