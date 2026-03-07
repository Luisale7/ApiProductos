<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return response()->json($this->productService->getProducts());
    }

    public function show($id)
    {
        return response()->json($this->productService->getProductById($id));
    }

    public function store(Request $request)
    {
        $product = $this->productService->createProduct($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = $this->productService->updateProduct($id, $request->all());

        return response()->json($product);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);

        return response()->json([
            'message' => 'Producto eliminado'
        ]);
    }
}