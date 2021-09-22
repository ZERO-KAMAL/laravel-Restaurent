<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')


    <style>
        input{
            color: black;
        }

        /* table   */

        .chefs{
            position: relative; 
            top:60px; 
            right:0px;  
          }
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
            {{-- for image image multipart/formdata is used --}}
          <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">

            @csrf
            
              <div>
                  <label for="">Name</label>
                  <input type="text" name="name" required="" placeholder="Enter Name">
              </div>
              <div>
                  <label for="">Speciality</label>
                  <input type="text" name="speciality" required="" placeholder="Enter the speciality">
              </div>
              <div>
                  
                  <input type="file" name="image" required="">
              </div>
              <div>
                  
                  <input type="submit" value="save" required="">
              </div>
          </form>

          <table class="chefs">
            <tr>
                <th>Chef Name</th>
                <th>Speciality</th>
                <th>Image</th>
                <th>Action</th>
                <th>Action</th>
              
            </tr>
           @foreach ($data as $data)
           <tr>
               <td>{{$data->name}}</td>
               <td>{{$data->speciality}}</td>
               <td><img src="/chefimage/{{$data->image}}" width="50px"></td>
               
               <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
               <td><a href="{{url('/deletechef',$data->id)}}"  >Delete</a></td>
           </tr>
           @endforeach
      
        </table>
     
    </div>
     @include('admin.adminjs')
    
  </body>
</html>