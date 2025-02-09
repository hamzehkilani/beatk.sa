<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title> @yield('title')</title>
    @include('layouts.head')

</head>

<body class="bg-white h-full overflow-x-hidden  font-IBM  w-screen   ">


    @yield('content')
    @include('layouts.scripts')
</body>

</html>
