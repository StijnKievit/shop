<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 29-12-2017
 * Time: 14:22
 */

        ?>

<html>
    <head>
        @include('manage.layout.head')
    </head>
    <body>
        <header>
          @include('manage.layout.header')
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            @include('manage.layout.footer')
        </footer>
    </body>
</html>

