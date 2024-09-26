<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.css" rel="stylesheet">
 
    <script src="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <a href="{{url('user/list/add')}}" class="btn btn-primary">Add</a>

        <div class="row">
            <div class="col">
                <table id="datatable">
                    <thead>
                        <th>id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($user as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->gender}}</td>
                            <td>{{$users->address}}</td>
                            <td>
                                <a href="{{url('user/list/edit',$users->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('user/list/delete',$users->id)}}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
})
</script>

</html>