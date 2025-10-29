@include('header')
    <!-- CANTIDAD ORDENADA ASCENDENTE -->
    <div class="table-responsive">
        <h2 class="text-center">Registro de Productos por CANTIDAD ASCENDENTE</h2>
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
                    @foreach($products_asc as $product_asc)
                        <tr>
                            <th>{{ $product_asc->id }}</th>
                            <td>{{ $product_asc->name }}</td>
                            <td>{{ $product_asc->quantity }}</td>
                            <td>{{ $product_asc->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@include('footer')