<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Product;

class Update
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');

        $product = Product::find($id);
        if(!$product){
            return response()->view('Products.product.not_found', [
                'message' => 'El producto ya fue eliminado      '
            ]);
        }

        if($product->update_at && $product->update_at->diffInMinutes(now()) < 5){
            return response()->view('Products.product_updated', [
                'message' => 'Ya fue actualizado'
            ]);
        }

        return $next($request);
    }
}
