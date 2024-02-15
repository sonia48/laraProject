<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
</head>
<style type="text/css">
    .deg{
        padding: 15px;
    }
</style>
<body>
    <center>
        <br><br>
        <a href="{{url('show_product')}}" class="btn btn-primary" > Show Products </a>
        <br><br>
        <h1>Edit Products</h1>
        <form action="{{url('edit_product',$data->id)}}" method="Post" enctype="multipart/form-data" >
            @csrf
            <div class="deg">
               <label > Title </label>
               <input type="text" name="title" value="{{$data->title}}"> 
            </div>
            <div class="deg">
                <label>Description</label>
                <textarea name="description" value="{{$data->description}}">
                </textarea>
            </div>
            <div class="deg">
               <label > Current Image </label>
               <img weidth="100" height="100" src="/product/{{$data->image}}">
            </div>
            <div class="deg">
                <label>Image</label>
                <input type="file" name="image">
            </div>
            <div class="deg">
                <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
        
        </form>
    </center>
</body>
</html>