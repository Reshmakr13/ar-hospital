<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    @stack('header_js')
</head>
<body class="max-w-screen-xl mx-auto font-helvetica">
    <div>
        <x-header-component />
        <div>
            <p>Harness your well-being</p>
        </div>



    </div>
    
</body>
</html>