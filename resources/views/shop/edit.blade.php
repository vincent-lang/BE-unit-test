<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('shop.store')}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="shop_name">
        <input type="text" name="location">
        <button type="submit">submit</button>
    </form>
</body>

</html>