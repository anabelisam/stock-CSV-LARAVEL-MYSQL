<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <header>
        <h1>Stock</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Reference</th>
                    <th>Price</th>
                    <th>Cost</th>
                    <th>Units</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allProducts as $product)
                <tr>
                    <td>{{ $product->idproduct }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->ref }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->cost }}</td>
                    <td>{{ $product->units }}</td>
                    <td>{{ $product->state }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>