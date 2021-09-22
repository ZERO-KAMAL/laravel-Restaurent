<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')

    <style>
         table{
              border-radius: 3px; 
              border:1px solid #00d25b ;
          }
          th , td{
            border:1px solid #00d25b ;
            padding: 18px
          }
          td img{
           width: 200px;
           height: 200px;
          }
    </style>
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')


     <div>
         <table>
             <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <th>guest</th>
                 <th>Date</th>
                 <th>Time</th>
                 <th>Message</th>
             </tr>
             @foreach ($data as $data)
             <tr>
                 <td>{{$data->name}}</td>
                 <td>{{$data->email}}</td>
                 <td>{{$data->phone}}</td>
                 <td>{{$data->guest}}</td>
                 <td>{{$data->date}}</td>
                 <td>{{$data->time}}</td>
                 <td>{{$data->message}}</td>
                 
             </tr>
             @endforeach
         </table>
     </div>
    </div>
     @include('admin.adminjs')
    
  </body>
</html>