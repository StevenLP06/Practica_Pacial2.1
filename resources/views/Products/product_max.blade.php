@include('header')
    <div class="container">
        <h2>Elemento Mayor</h2>
        <span>{{ $product_max->name }}</span>

        <h2>Elemento Mayor - Fila</h2>
        <div class="container">
            <table class="table striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ $product_max->id }}</th>
                        <td>{{ $product_max->name }}</td>
                        <td>{{ $product_max->quantity }}</td>
                        <td>{{ $product_max->price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@include('footer')