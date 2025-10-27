@include('header')
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('products.update', $product->id) }}" method="post">
                @csrf
                @method('put')
                <h2 class="text-center">Ingrese un producto</h2>
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="" class="form-control" value="{{ $product->name }}">
                <label for="quantity" class="form-label">Cantidad:</label>
                <input type="number" name="quantity" id="" class="form-control" value="{{ $product->quantity }}">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" name="price" id="" class="form-control" value="{{ $product->price }}">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
@include('footer')