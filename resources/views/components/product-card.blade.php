<div class="grid grid-cols-1 md:grid-cols-4">
    <div class="shadow-2xl bg-gray-100 w-60 p-2 rounded"> 
        <img  src="{{ asset('images/'. $product['image']) }}" class="p-5"> 
        <div class="card-body flex flex-col gap-4"> 
            <h5 class="card-title font-semibold">{{ $product['title'] }}</h5> 
            <p class="text-green-600 font-semibold">{{ $product['price'] }}  MAD</p> 
            <a href="{{ route('details', $product['id']) }}" class="mt-auto bg-blue-600 p-2 font-bold text-white rounded text-center hover:bg-blue-950">Voir</a> 
        </div> 
    </div> 
</div>