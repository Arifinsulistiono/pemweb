<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.partials.head')
</head>
<body>
    @include('components.partials.nav')

    {{ $slot }}

    @include('components.partials.bottom')
   
</body>
    @include('components.partials.script')
</html>