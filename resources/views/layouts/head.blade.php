<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="{{ asset('assets/attachment/logo/logo.png')}}" class="h-32" type="image/x-icon"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="referrer" content="origin-when-cross-origin">
<meta name="facebook-domain-verification" content="jwece203habndjbjn5hwucdqtwkz6t" />
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.11.2/css/all.css" >
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

<meta name="referrer" content="origin-when-crossorigin">

<style>
    /* Adding a scale animation to each swiper slide */
.swiper-slide {
    transition: transform 0.3s ease-in-out;
}

/* Hover effect */
.swiper-slide:hover {
    transform: scale(1.1); /* Scale the slide up by 10% */
}

.dircationLeft{
    direction: ltr;
    text-align: start

}

</style>
@vite('resources/css/app.css')
