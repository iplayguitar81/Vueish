<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraVue Test</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">


    </head>
    <body class="font-sans">

    <div id="app">


        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <h1><router-link class="text-black"  to="/" exact><img alt="Laravue" src="/images/alien-logo.png" style="height:75px;"></router-link></h1>
            </header>

                <main class="flex">
                    <aside class="w-1/5">

                        <section class="mb-8">

                            <h5 class="uppercase font-bold mb-4">The Brand</h5>
                            <ul class="list-reset">

                                <li class="text-sm leading-loose"><router-link class="text-black"  to="/logo" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link> </li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link> </li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link> </li>

                            </ul>

                        </section>

                        <section class="mb-8">

                            <h5 class="uppercase font-bold mb-4">Doodles</h5>
                            <ul class="list-reset">

                                <li class="text-sm leading-loose"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/illustrations">Illustrations</router-link> </li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/loaders-and-animations">Loaders & Animations</router-link> </li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link> </li>


                            </ul>

                        </section>




                    </aside>

                    <div class="primary flex-1">

                        {{--think of this (router-view) as the yield concept in rails or laravel...--}}
                        <router-view> </router-view>

                    </div>

                </main>

        </div>


    </div>

    <script src="/js/app.js"></script>

    </body>
</html>

