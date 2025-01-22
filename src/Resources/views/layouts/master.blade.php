<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('master-head')
    @livewireStyles
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('FieldsView::components.toast')
    @livewireScripts
    @yield('master-content')
</body>

</html>
