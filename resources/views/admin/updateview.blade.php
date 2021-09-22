<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
    </style>
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')

    <div class="foodmenu-Db">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            {{-- to upload to database --}}
            @csrf
    
            <div>
                <label for="">Title</label>
                <input type="text" name="title"  value="{{$data->title}}" required>
            </div>
            <div>
                <label for="">Price</label>
                <input type="num" name="price"  value="{{$data->price}}" required>
            </div>
           
            <div>
                <label for="">Description</label>
                <input type="text" name="description"value="{{$data->description}}" required >
            </div>
            <div>
                <label for="">old Image</label>
                <img src="/foodimage/{{$data->image}}" height="100" width="200" alt="">
            </div>
            <div>
                <label for="">New Image</label>
                <input type="file" name="image" required >
            </div>
            <div>
                <input style="color:black " type="submit" value="save" >
            </div>
         </form>
    </div>



    </div>
     @include('admin.adminjs')
    
  </body>
</html>