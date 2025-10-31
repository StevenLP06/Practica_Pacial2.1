<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Product;

class Price
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        
        $product = Product::find($id);
        $resultado = $product->quantity * $product->price;
        if($resultado > 10000){
            return $next($request);
        }else{
            return abort(403, 'Cantidad insuficiente');
        }
    }
}
