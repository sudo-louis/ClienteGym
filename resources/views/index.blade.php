@include('/plantilla/navegacionClient')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ST-Johns</title>
</head>
<body>
    <header class="m-4">
        <div class="flex justify-center">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-1/2"> <!-- Cambiado aquí -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Ubicación
                            </th>
                            <th scope="col" class="px-6 py-3">
                                País
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Moneda
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Zona Horaria
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$userData['city'] ?? 'Ciudad desconocida' }}, {{$userData['region'] ?? 'Región desconocida' }}
                            </td>
                            <td class="px-6 py-4">
                                {{$userData['country_name'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{$userData['currency']['name'] }} ({{$userData['currency']['symbol'] }})
                            </td>
                            <td class="px-6 py-4">
                                {{$userData['time_zone']['name'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </header>    
    <div style="background-image: url('storage/banner.jpg'); height: 57rem; background-repeat: no-repeat; background-size: cover; background-position: center center;"><br /><br /><br /><br /><br /><br /><br /><br />
        <div>
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white text-center">
                Entrena 
                <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                con Nosotros
                </span>
            </h1>
        </div>
        <div style="margin: 2rem 11rem;">
            <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate
                        </h3>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400 ">Instructor Certificado</div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to the utility
                            classes of Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Intructor Certificado</div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly
                            level up your next application."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Instructor Certificado</div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your
                            team."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Instructor Certificado</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div style="margin: 4rem 12rem;">
        <h1 class="text-center mb-4 text-4xl font-bold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white">Conoce las clases <span class="text-blue-600 dark:text-blue-500">Impartidas por nuestros</span> Instructores</h1><br />
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/zumba.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/box.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/spinning.jpg')}}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/cardio.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/pilates.avif')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/equipo.jpg')}}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/gap.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/box.webp')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/yoga.jpg')}}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/crossfit.jpg')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/pesas.avif')}}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{URL('storage/calistenia.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('plantilla/footer')
    </footer>
</body>
</html>