@include('/plantilla/navegacionClient')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de Compas</title>
</head>

<body>
    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
            <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">
                Carrito de Compras
            </h2>
            @foreach ($productosCarrito as $item)
                <div
                    class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4 ">
                    <div class="col-span-12 lg:col-span-2 img box">
                        <img src="{{ asset('storage/uploads/' . $item->attributes->image) }}" alt="{{ $item->name }}"
                            class="max-lg:w-full lg:w-[180px] rounded-lg object-cover">
                    </div>
                    <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                        <div class="flex items-center justify-between w-full mb-4">
                            <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">
                                {{ $item->name }}
                            </h5>
                            <form action="/carrito/quitar" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ "$item->id" }}">
                                <button
                                    onclick="return confirm('¿Está seguro de que desea eliminar este producto del carrito?') ? true : false"
                                    class="w-16 h-16 flex items-center justify-center rounded-full bg-red-500 text-white transition duration-300 hover:bg-red-600 focus:outline-none">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                                            cx="17" cy="17" r="17" fill="" />
                                        <path class="stroke-white transition-all duration-500"
                                            d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                                            stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <p class="font-normal text-base leading-7 text-gray-500 mb-6">
                            {{ $item->attributes->description }}
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-4">
                                <form action="/carrito/decrementar" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"
                                        class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.5 9.5H13.5" stroke="" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <input type="text" id="number"
                                        class="border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100  text-center"
                                        placeholder="{{ $item->quantity }}">
                                </form>
                                <form action="/carrito/incrementar" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"
                                        class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            width="18" height="19" viewBox="0 0 18 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9.5H14.25M9 14.75V4.25" stroke="" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">
                                C/U: {{ $item->price }}
                            </h6>
                            <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">
                                Subtotal: {{ $item->price * $item->quantity }}
                            </h6>
                            {{-- <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">
                                {{$item->attributes->subtotal}}
                            </h6> --}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div
                class="flex flex-col md:flex-row items-center md:items-center justify-between lg:px-6 pb-6 border-b border-gray-200 max-lg:max-w-lg max-lg:mx-auto">
                <h5
                    class="text-gray-900 font-manrope font-semibold text-2xl leading-9 w-full max-md:text-center max-md:mb-4">
                    Subtotal
                </h5>

                <div class="flex items-center justify-between gap-5 ">
                    <button
                        class="rounded-full py-2.5 px-3 bg-indigo-50 text-indigo-600 font-semibold text-xs text-center whitespace-nowrap transition-all duration-500 hover:bg-indigo-100">
                        Cupón de Descuento
                    </button>
                    <h6 class="font-manrope font-bold text-3xl lead-10 text-indigo-600">
                        ${{ \Cart::getTotal() }}
                    </h6>
                </div>
            </div>
            <div class="max-lg:max-w-lg max-lg:mx-auto">
                <p class="font-normal text-base leading-7 text-gray-500 text-center mb-5 mt-6">
                    Impuestos y
                    descuentos son
                    calculados
                    al pagar
                </p>
                <form action="{{route('payment')}}" method="post" class="grid justify-center w-full">
                @csrf
                    <input type="hidden" name="amount" value="{{\Cart::getTotal()}}">
                    <button type="submit" class="text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 me-2 mb-2">
                        <svg class="w-4 h-4 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg>
                        Pagar con PayPal
                    </button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>
</html>