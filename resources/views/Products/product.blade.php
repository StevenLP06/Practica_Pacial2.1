@include('header')
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('products.index') }}" method="post">
                @csrf
                <h2 class="text-center">Ingrese un producto</h2>
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="" class="form-control">
                <label for="quantity" class="form-label">Cantidad:</label>
                <input type="number" name="quantity" id="" class="form-control">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" name="price" id="" class="form-control">
                <button type="submit" class="btn btn-success">Insertar</button>
            </form>
        </div>

        <div class="container">
            <div class="table-responsive">
                <h2 class="text-center">Registro de Productos</h2>
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
                        @foreach($products as $product)
                            <tr>
                                <th>{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->price}}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id )}}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('products.destroy', $product->id )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- ID ORDENADA DESCENDENTE -->
            <div class="table-responsive">
                <h2 class="text-center">Registro de Productos por ID DESCENDENTE</h2>
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
                        @foreach($products_desc as $product_desc)
                            <tr>
                                <th>{{ $product_desc->id }}</th>
                                <td>{{ $product_desc->name }}</td>
                                <td>{{ $product_desc->quantity }}</td>
                                <td>{{ $product_desc->price }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id )}}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('products.destroy', $product->id )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('footer')