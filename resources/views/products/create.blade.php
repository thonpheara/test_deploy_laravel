<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Product</title>
</head>
<body>
    <h1>Create New Product</h1>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        @method('post')

        <label for="name">Name:</label>
        <input type="text" name="name"> <br><br>

        <label for="price">Price:</label>
        <input type="text" name="price"> <br><br>

        <label for="qty">Quanlity:</label>
        <input type="text" name="qty"> <br><br>
        
        <button type="submit">Create</button>
    </form>
</body>
</html>