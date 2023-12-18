<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('put')
        <input type="number" name="shop_id">
        <input type="text" name="product_name">
        <input type="text" name="artikel_nr">
        <button type="submit">submit</button>
    </form>
</body>

</html>