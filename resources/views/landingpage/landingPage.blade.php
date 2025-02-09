@extends('../layouts/landingPageLayout/app')
@section('title','الصفحه الرئيسية')
@section('content')
@include('landingpage.sections.header')
@include('landingpage.sections.hero')
@include('landingpage.sections.products')
@include('landingpage.sections.category')
@include('landingpage.sections.howItsWork')
@include('landingpage.sections.ourClients')

@include('landingpage.sections.footer')

@endsection

@section('js')
@auth
    @if (auth()->user()->role=="admin")
    @vite('resources/js/dashborad/landingPageSectionsEdits/editSection.js')
    @endif
@endauth
@endsection
