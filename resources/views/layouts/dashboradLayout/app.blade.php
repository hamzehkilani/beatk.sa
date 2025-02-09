<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>@yield('title')</title>
    <style>
        html, body {
            height: 100%;
        }
        button.swal2-confirm.swal2-styled {
    background: black;
}
    </style>
    @include('layouts.head')
</head>

<body class="bg-white  font-noor w-full overflow-x-hidden">

    <div class=" w-full h-full bg-white fixed inset-0 z-50 flex items-center justify-center main-loader hidden">

        <div class="loader  ">
            <div class="loader_cube loader_cube--color"></div>
            <div class="loader_cube loader_cube--glowing"></div>
        </div>
    </div>

    <!-- Sidebar -->
    @include('layouts.dashboradLayout.Sections.sidebar')

    <!-- Main Content Area -->
    <div class="lg:w-[calc(100%-250px)] h-full md:mr-auto">
        @include('layouts.dashboradLayout.Sections.header')

        <!-- Page Content -->
        <div class="p-6 bg-gray-200 min-h-[calc(100%-85.5px)]  w-full overflow-x-hidden">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')
    <script>
        $('#sidebarToggle').on('click', function () {
            const sidebar = $('#sidebar');

            // Check if sidebar currently has the hidden class
            if (sidebar.hasClass('-translate-x-full')) {
                sidebar.removeClass('-translate-x-full hidden'); // Remove hidden and -translate-x-full
                sidebar.addClass('translate-x-0'); // Add translate-x-0 to make it visible
            } else {
                sidebar.addClass('-translate-x-full hidden'); // Add hidden and -translate-x-full
                sidebar.removeClass('translate-x-0'); // Remove translate-x-0
            }
        });
    </script>

</body>

</html>
