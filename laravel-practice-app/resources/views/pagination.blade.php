<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Created Time</th>
                    <th>Updated Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>

                    <td>{{$product['created_at']}}</td>
                    <td>{{$product['updated_at']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span>
        {{$products->links()}}
        </span>
    </div>

    <style>
    .w-5{
        display: none;
    }
    </style>

</body>

</html>