@include('header')
    <!-- NOMBRE ORDENADO DESCENDENTE -->
    <div class="container">
        <form action="{{ route('products.product_search') }}" method="get">
            <input type="text" name="name" class="form-control">
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>
    </div>
    
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
                    @foreach($products_search as $product_search)
                        <tr>
                            <th>{{ $product_search->id }}</th>
                            <td>{{ $product_search->name }}</td>
                            <td>{{ $product_search->quantity }}</td>
                            <td>{{ $product_search->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@include('footer')