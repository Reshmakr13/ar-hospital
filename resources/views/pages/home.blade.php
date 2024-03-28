<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
        @stack('header_js')
</head>
<body x-data = "{ direction:'ltr' }" :dir="direction" class="max-w-screen-xl mx-auto font-helvetica">
    <div class="">
        <x-header-component />
    </div>
    <div class="mt-8 ml-8">
    <x-button-component  />
    </div>
    <div class="mt-8 ml-8">
    <x-dept-component/>
    </div>

    <div class="mt-8 ml-8">
        <x-blog-card :title="'Our Mission'" :content="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to makelec'" />
    </div>

    <div class="mt-8 ml-8">
        <x-blogcard-bigsc :title="'Our Mission'" :content="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to makelec'" />
    </div>
    <div class="mt-8 ml-8">
        <x-blog-big :title="'Our Mission'" :content="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to makelec'" />
    </div>
    <div class="mt-8 ml-8">
        <x-rblogcard />
    </div>

    <div class="mt-8 ml-8">
        <x-beige-button />
    </div>
    <div class="mt-8 ml-8">
        <x-button-fixed />
    </div>
    <div class="">
        <x-sub-black />
    </div>
    <div class="">
        <x-sub-white />
    </div>
    <div class="">
        <x-ready-component />
    </div>
    

    <div class=>
        <x-footer-component />
    </div>
    
    
</body>
</html>