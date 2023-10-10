<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();

        $productsTransform = $products->map(function ($product) {

            $images = json_decode($product->image);

            return [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'priceOff' => $product->priceOff,
                'stock' => $product->stock,
                'image' => $images,
                'sku' => $product->sku,
                'category' => $product->category->name,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
            ];
        });

        return response()->json([
            'message' => 'success',
            'data' => $productsTransform
        ], 200);
    }

    public function search(Request $request)
    {

        $searchTerm = $request->input('search_term');

        $query = Product::query();

        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'ilike', '%' . $searchTerm . '%')
                    ->orWhereHas('category', function ($query) use ($searchTerm) {
                        $query->where('name', 'ilike', '%' . $searchTerm . '%');
                    });
            });
        }

        $products = $query->get();

        $products->transform(function ($product) {
            $product->image = json_decode($product->image);
            return $product;
        });

        if ($products->isEmpty()) {
            return response()->json([
                'message' => 'error',
                'data' => 'No results found'
            ], 404);
        }

        return response()->json([
            'message' => 'success',
            'data' => $products
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'priceOff' => 'nullable|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|array',
            'sku' => 'required|string|unique:products',
            'category_id' => 'required|exists:categories,id',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio debe ser igual o mayor que 0.',
            'priceOff.integer' => 'El descuento debe ser un número entero.',
            'priceOff.min' => 'El descuento debe ser igual o mayor que 0.',
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock debe ser igual o mayor que 0.',
            'image.array' => 'La imagen debe ser un array válido.',
            'sku.required' => 'El SKU es obligatorio.',
            'sku.unique' => 'El SKU ya está en uso.',
            'category_id.required' => 'La categoría es obligatoria.',
            'category_id.exists' => 'La categoría seleccionada no es válida.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'error',
                'details' => $validator->errors()
            ], 422);
        }

        $imageData = $request->input('image');

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'priceOff' => $request->input('priceOff'),
            'stock' => $request->input('stock'),
            'image' => json_encode($imageData),
            'sku' => $request->input('sku'),
            'category_id' => $request->input('category_id'),
        ]);

        return response()->json([
            'message' => 'success',
            'data' => $product
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'priceOff' => 'nullable|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|array',
            'sku' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio debe ser igual o mayor que 0.',
            'priceOff.integer' => 'El descuento debe ser un número entero.',
            'priceOff.min' => 'El descuento debe ser igual o mayor que 0.',
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock debe ser igual o mayor que 0.',
            'image.array' => 'La imagen debe ser un array válido.',
            'sku.required' => 'El SKU es obligatorio.',
            'category_id.required' => 'La categoría es obligatoria.',
            'category_id.exists' => 'La categoría seleccionada no es válida.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'error',
                'details' => $validator->errors()
            ], 422);
        }

        try {

            $product = Product::findOrFail($id);

            if ($request->input('sku') !== $product->sku) {
                $validatorSku = Validator::make($request->all(), [
                    'sku' => 'unique:products',
                ], [
                    'sku.unique' => 'El SKU ya está en uso.',
                ]);

                if ($validatorSku->fails()) {
                    return response()->json([
                        'message' => 'error',
                        'details' => $validatorSku->errors()
                    ], 422);
                }
            }

            $product->update($request->all());

            return response()->json([
                'message' => 'success',
                'data' => $product
            ], 200);
        } catch (Exception $e) {

            return response()->json([
                'message' => 'error',
                'details' => 'Error updating product'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

            $product = Product::findOrFail($id);

            $product->delete();

            return response()->json([
                'message' => 'success',
                'details' => 'The Product ' . $product->name . ' was removed'
            ], 200);
        } catch (Exception $e) {

            return response()->json([
                'message' => 'error',
                'details' => 'The product not found'
            ]);
        }
    }
}
