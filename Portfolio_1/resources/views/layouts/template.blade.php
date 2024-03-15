<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind CSS & AlpineJS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <title>NT Portfolio</title>
</head>
<body>
    @yield('nav')
    <!--Yield to enable styles-->
    @yield('styles')
    @yield('title')
    @yield('content')
    
    <!--Styles go here-->
    <style type="text/tailwindcss">
        /*Body Styles*/
        body {
            @apply bg-slate-600
        }

        /* Header Styles */
        h1 {
            @apply text-4xl font-bold text-white flex justify-center
        }
        h2 {
            @apply text-2xl font-bold text-slate-400 flex justify-center
        }
        h6 {
            @apply text-slate-900 text-xs flex justify-center
        }

        /*Tag Styles*/
        p {
            @apply text-slate-900 flex justify-center
        }
        label {
            @apply  text-black  font-medium 
        }

        /*Footer Styles*/
        footer {
            @apply bg-slate-900 text-white text-center p-3 absolute bottom-0 w-full
        }
        footer > p {
            @apply text-white text-center 
        }
        

        /* Div Styles (#) */
        #checkdiv {
            @apply grid grid-cols-4 text-center 
        } 
        #addForm {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 
        }
        /* Class Styles (.) */
        

        /*Nav Styles*/
        nav {
            @apply text-white text-right pr-5
        }
        nav li {
            display: inline-block;
            margin-left: 40px;
            padding-top: 20px;
            position: relative;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
        nav a:hover {
            color: rgb(187, 162, 116);
        }
        nav a::before {
            content: '';
            display: block;
            height: 5px;
            width: 100%;
            background-color: black;
            position: absolute;
            top: 0;
            width: 0%;
            transition: all ease-in-out 300ms;
        }
        nav a:hover::before {
            width: 100%;
        }
    </style>

    @section('footer')
    <footer>
        <p>&copy; 2021 Noah Taylor</p>
    </footer>
    @endsection
</body>
</html>