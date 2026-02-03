<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public $products = [ 
    [ 
        'id' => 1,
        'spec' => 'Intel i5 12th Gen',
        'title' => 'HP16D0195NF', 
        'price' => '6500', 
        'image' => 'HP16D0195NF.jpg', 
        'description' => 'Laptop polyvalent conçu pour la bureautique et 
        multimédia.' 
    ], 
    [ 
        'id' => 2, 
        'spec' => 'Intel i3 11th Gen',
        'title' => 'HP14424U3EA', 
        'price' => '2500', 
        'image' => 'HP14424U3EA.jpg', 
        'description' => 'Portable léger adapté aux tâches quotidiennes.' 
    ], 
    [ 
        'id' => 3, 
        'spec' => 'Ryzen 5 4600H',
        'title' => 'HUA6901443442959', 
        'price' => '4500', 
        'image' => 'HUA6901443442959.jpg', 
        'description' => 'Bonne performance pour bureautique + montage 
        léger.' 
    ], 
    [ 
        'id' => 4, 
        'spec' => 'Intel i7 10th Gen',
        'title' => 'NXATHEF002', 
        'price' => '5000', 
        'image' => 'NXATHEF002.jpg', 
        'description' => 'Portable professionnel avec écran Full HD.' 
    ], 
    ];

    public function index(){
        $products = $this->products;
        return view('products.index', compact('products'));
    }

    public function show($id){
        
        $products = $this->products;

        $product = $products[$id - 1] ?? null;

        if(!$product){
            abort(404, 'Product not Found');
        }

        return view('products.show', compact('product'));
    }
}
