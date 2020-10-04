<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Products::when($request->name, function ($query, $name) {
            return $query->whereIn('name', $name);
        })->when($request->matrix, function ($query, $matrix) {
            return $query->whereIn('matrix', $matrix);
        })->when($request->resolution, function ($query, $resolution) {
            return $query->whereIn('resolution', $resolution);
        })->when($request->frequency, function ($query, $frequency) {
            return $query->whereIn('frequency', $frequency);
        })->when($request->diagonal, function ($query, $diagonal) {
            return $query->whereIn('diagonal', $diagonal);
        })->get();

        return view('products.index', ['products' => $products]);
    }
}
