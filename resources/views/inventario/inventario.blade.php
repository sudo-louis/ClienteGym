@include('/plantilla/navegacionClient')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <br><br>
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white text-center">Conoce nuestros <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">productos</mark> de Alta calidad</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" style="margin: 3rem 12rem;">
        <div>
            @foreach ($productos as $producto)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <center>
                    <img class="p-8 rounded-t-lg" src="https://proteinpalacemx.com/cdn/shop/files/BIRDMAN_394x.webp?v=1704933401" alt="product image" />
                </center>
                <div class="px-5 pb-5">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-4">
                        {{$producto->nombre_producto}}
                    </h5>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{$producto->descripcion}}</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">ID Proveedor: {{$producto->proveedor}}</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">ID Categoría: {{$producto->categoria}}</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Stock Disponible: {{$producto->cantidad_en_stock}}</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{$producto->precio}}</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Añadir al Carrito
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer>
        @include('/plantilla/footer')
    </footer>
</body>
</html>