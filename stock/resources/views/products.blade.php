<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        header {
            text-align: center;
        }
        table {
            width: 100%;
            margin: 0px;
            border-collapse: collapse;
        }
        table, tr, td, th {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid gray;
        }
    </style>
</head>
<body>
    <header>
        <h1>Stock</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th colspan=7>
                        <h3>All Products</h3>
                    </th>
                </tr>
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
            <tfoot>
                <tr>
                    <td colspan=7>
                        Footer table
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>
</body>
</html>