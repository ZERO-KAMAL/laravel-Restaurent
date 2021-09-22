<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
    <style>
        .foodmenu-Db{
            position: relative;
            top:60px;
            right: -150px;
        }
        input{
            color: #888
          }

        /* table   */

          .user-foodmenu{
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

     <div class="foodmenu-Db">
         <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            {{-- to upload to database --}}
            @csrf

            <div>
                <label for="">Title</label>
                <input type="text" name="title"  placeholder="Write a title" required>
            </div>
            <div>
                <label for="">Price</label>
                <input type="num" name="price"  placeholder="price" required>
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image" required >
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" name="description" placeholder="Description" required >
            </div>
            <div>
                <input style="color:black " type="submit" value="save" >
            </div>
         </form>

         <div>
             <table class="user-foodmenu">
                 <tr>
                     <th>Food Name</th>
                     <th>Price</th>
                     <th>Description</th>
                     <th>Image</th>
                     <th>Action</th>
                     <th>Action</th>
                 </tr>
                @foreach ($data as $data)
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>
                @endforeach
           
             </table>
         </div>
     </div>
    </div>
     @include('admin.adminjs')
  
  </body>
</html>