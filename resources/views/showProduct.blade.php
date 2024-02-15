<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <table border = "2px">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td><img height="100" weidth="100" src="product/{{$data->image}}"></img></td>
                <td><a onclick="return.confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{url('delete_product',$data->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('update_product',$data->id)}}">Update</a></td>
            </tr>
            @endforeach

        </table>
    </center>
</body>
</html>