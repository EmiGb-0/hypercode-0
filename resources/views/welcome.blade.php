
<x-app-layout>

    {{-- Portada --}}

    <section class="bg-cover" style="background-image: url({{asset('img/home/writing-1149962_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">La mejores tecnologias en la punta de tus manos</h1>
                <p class="text-white text-lg mt-2 mb-4">HyperCode se esmera en que puedas aprender nuevas habilidades todos los dias, conviertete en un master en aprendizaje con nosotros y los instructores</p>
                <!-- component -->
                <!-- This is an example component -->
                
                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">RECURSOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-6">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/computer-1209641_640.jpg')}}" alt="Imagen_Coding Web">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Talleres</h1>
                </header>

                <p class="text-sm text-gray-500 text-center">Puedes encontrar cursos gratuitos</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/stock-1863880_640.jpg')}}" alt="Imagen_Finanzas">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Podcasts</h1>
                </header>

                <p class="text-sm text-gray-500 text-center">[Proximamente]</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/tie-690084_640.jpg')}}" alt="Imagen_Negocios">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>

                <p class="text-sm text-gray-500 text-center">[Proximamente]</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/piano-1655558_640.jpg')}}" alt="Imagen_Musica">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Escuelas</h1>
                </header>

                <p class="text-sm text-gray-500 text-center">[Proximamente]</p>
            </article>
        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes donde iniciar?</h1>
        <p class="text-center text-white">Te recomendamos ir a la seccion de cursos, puedes filtrarlos de acuerdo a lo que buscas</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Seccion cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-small mb-6">Ten a tu disposicion los ultimos cursos que se han subido a hypercode</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
            
                <x-course-card :course="$course" />

            @endforeach

        </div>


    </section>

</x-app-layout>