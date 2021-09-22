<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')
    </div>
     @include('admin.adminjs')
    
  </body>
</html>