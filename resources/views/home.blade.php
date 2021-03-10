<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Shoooping Cart</title>

    </head>
    <body>
     <div id="app">
        <nav class="py-5 px-10">
            <ul class="flex">
                <li class="mr-5 font-semibold"><router-link :to="{name : 'products.index'}">Accueil</router-link></li>
                <li class="font-semibold"><router-link :to="{name: 'products.shopping'}">Mon Panier <span v-text="this.$store.state.cart.length"></span></router-link></li>
            </ul>
        </nav>

        <router-view></router-view>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>