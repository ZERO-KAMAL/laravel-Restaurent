<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    
    </x-app-layout>
    
    
    {{-- admin --}}
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        
        @include('admin.admincss')
        <style>
          .user-table{
            position: relative; 
            top:60px; 
            right:-200px;            
          }
          table{
              border-radius: 3px; 
              border:1px solid #00d25b ;
          }
          th , td{
            border:1px solid #00d25b ;
            padding: 18px
          }
           
        </style>
      </head>
      <body>
        <div class="container-scroller">
         @include('admin.navbar')
          

        <div class="user-table">
          <table>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>

            @foreach ($data as $data)            
            <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>

              @if ($data->usertype=="0")
              <td> <a href="{{url('/deleteuser', $data->id)}}">Delete</a> </td>
              @else
              <td> <a href="">Not Allowed</a> </td>
              @endif
            </tr>
            @endforeach
          </table>
        </div>
         
         @include('admin.adminjs')
      </div>
      </body>
    </html>
</body>
</html>