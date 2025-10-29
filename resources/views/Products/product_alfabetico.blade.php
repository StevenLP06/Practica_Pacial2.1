@include('header')
    <!-- NOMBRE ORDENADO DESCENDENTE -->
    <div class="table-responsive">
        <h2 class="text-center">Registro de Productos por NOMBRE DESCENDENTE</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products_name as $product_name)
                        <tr>
                            <th>{{ $product_name->id }}</th>
                            <td>{{ $product_name->name }}</td>
                            <td>{{ $product_name->quantity }}</td>
                            <td>{{ $product_name->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@include('footer')