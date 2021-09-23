<x-app-layout>

</x-app-layout>


{{-- admin --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')

    <style>
        table {
            border-radius: 3px;
            border: 1px solid #00d25b;
        }

        th,
        td {
            border: 1px solid #00d25b;
            padding: 18px
        }

        tr {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container">


            <form action="{{url('/search')}}" method="get" >
              @csrf

                <input type="text" name="search" style="color: blue;">
                <input type="submit" value="search" class="btn btn-success">
            </form>

            <table>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Foodname</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total price</td>
                </tr>

                @foreach ($data as $data)


                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->foodname }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->price * $data->quantity }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
    @include('admin.adminjs')

</body>

</html>
