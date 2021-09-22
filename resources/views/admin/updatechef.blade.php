<x-app-layout>
    
</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.admincss')

    <style>
        input{
            color: black;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')


     <form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">

        @csrf
        
          <div>
              <label for="">Chef Name</label>
              <input type="text" name="name" required="" value="{{$data->name}}">
          </div>
          <div>
              <label for="">Speciality</label>
              <input type="text" name="speciality" required="" value="{{$data->speciality}}">
          </div>
          <div>
              <label for="">old image</label>
              <img src="/chefimage/{{$data->image}}" width="300px" height="300px" alt="">
          </div>
          <div>
              <label for="">New image</label>
              <input type="file" name="image">
          </div>
          <div>
              
              <input type="submit" value="Update Chef" required="">
          </div>
      </form>
    </div>
     @include('admin.adminjs')
    
  </body>
</html>