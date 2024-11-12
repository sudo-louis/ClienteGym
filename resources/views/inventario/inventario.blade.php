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
    <h1
        class="mb-4 text-4xl font-bold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white text-center">
        Conoce nuestros <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">productos</mark> de Alta
        calidad</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" style="margin: 3rem 12rem;">
        @foreach ($productos as $producto)
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <center>
                    <img width="200" class="m-4" src="{{ asset('storage/uploads/' . $producto->image) }}"
                        alt="{{ $producto->name }}">
                </center>
                <div class="px-5 pb-5">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-4">
                        {{ $producto->name }}
                    </h5>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $producto->description }}</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Stock
                                Disponible: {{ $producto->quantity }}</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $producto->price }}</span>
                        <form action="/carrito/agregar" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$producto->id}}">
                            <input type="hidden" name="name" value="{{$producto->name}}">
                            <input type="hidden" name="price" value="{{$producto->price}}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="image" value="{{$producto->image}}" alt="{{$producto->name}}">
                            <input type="hidden" name="description" value="{{$producto->description}}">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                </svg>
                                Agregar al Carrito
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        @include('/plantilla/footer')
    </footer>
</body>
</html>