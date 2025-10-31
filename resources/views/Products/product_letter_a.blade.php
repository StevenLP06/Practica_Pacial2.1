@include('header')
    <div class="container">
        <h2>Productos por la letra <strong>A</strong></h2>
        <div class="container">
            <div class="table responsive">
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
                        @foreach($products_letter_a as $product_letter_a)
                            <tr>
                                <th>{{ $product_letter_a->id }}</th>
                                <td>{{ $product_letter_a->name }}</td>
                                <td>{{ $product_letter_a->quantity }}</td>
                                <td>{{ $product_letter_a->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('footer')