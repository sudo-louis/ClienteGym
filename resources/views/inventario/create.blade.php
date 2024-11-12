<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Producto</title>
</head>
<body>
    <h1
        class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white">
        Registrar un <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">NUEVO</mark> Producto</h1>
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ URL('/inventario') }}" enctype="multipart/form-data" method="POST"
        class="max-w-sm mx-auto text-center mt-5">
        @csrf
        <div class="mb-5">
            <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-white">Subir imagen:
            </label>
            @if (isset($producto->image))
                <img src="{{ asset('storage' . '/' . $producto->image) }}" width="200" alt="imagen del producto">
            @endif
            <input id="image" name="image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                type="file">
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Nombre del
                Producto: </label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ isset($producto->name) ? $producto->name : '' }}" rerquired />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="description">Descripcion:
            </label>
            <input name="description" id="description" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ isset($producto->description) ? $producto->description : '' }}" required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="quantity">Cantidad en
                Stock: </label>
            <input name="quantity" id="quantity" type="number" min="1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ isset($producto->quantity) ? $producto->quantity : '' }}" required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="price">Precio: </label>
            <input name="price" id="price" type="number" min="1"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ isset($producto->price) ? $producto->price : '' }}" required />
        </div>
        <a href="{{ URL('/inventario/inventario') }}"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Regresar
        </a>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar
        </button>
    </form>
</body>
</html>