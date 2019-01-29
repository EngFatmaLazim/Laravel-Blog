<!DOCTYPE html>
<html lang="en">

  <!-- Start head -->
  <head>
  @include('includes._head')
  </head>
  <!-- End head -->

    <body>

        <!-- Start navebar -->
        @include('includes._nav')
        <!-- End navebar -->
        
        <!-- Start Container -->
        <div class="container">

          @include('includes._messages')

            @yield('content')

        </div>
        <!-- End Container -->
      
        <!-- Start Footer -->
        @include('includes._footer')
        <!-- End Footer -->

        <!-- Start JS -->
        @include('includes._js')
        <!-- End JS -->

    </body>

</html>