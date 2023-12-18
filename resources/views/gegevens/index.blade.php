<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <p>
            <i class="star"></i>
        </p>
        <a href="{{route('product.create')}}">create</a>
        <table class="row-2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>shop name</th>
                    <th>location</th>
                    <th>product name</th>
                    <th>artikel nummer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->shop->shop_name}}</td>
                    <td>{{$product->shop->location}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->artikel_nr}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>