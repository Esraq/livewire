<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
        <script src="{{asset('js/app.js')}}"></script>
        @livewireStyles
    </head>
    <body>
        <a href="/">Home</a>
        <a href="/about_us">About Us</a>
        <p>I am from home page</p>

        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        @livewireScripts
    </body>
</html>