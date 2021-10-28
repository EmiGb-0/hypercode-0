<x-app-layout>
    
    <div class="text-center text-gray-500 my-4">
        <h1 class="uppercase text-3xl">Partners</h1>
        <p>Empresas, comunidades, organizaciones que confían en HyperCode</p>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-1 md:grid-cols-3 gap-4 mt-4">

            @foreach ($partners as $partner)

                <div class="card">
                    <div class="card-body">
                        <h1 class="text-xl uppercase">{{$partner->title}}</h1>
                        <article>
                            <figure>
                                <img class="rounded-xl my-2 h-36 w-full object-cover" src="{{$partner->image}}" alt="Banner_Partners_HyperCode">
                            </figure>
                        </article>
                        <p class="mb-4">{{$partner->subtitle}}</p>

                        <a target="_blank" href="{{$partner->link}}" class="btn btn-primary">Más Información</a>
                    
                    </div>
                </div>

            @endforeach

            <div class="card">
                <div class="card-body">
                    <h1 class="text-xl uppercase">Espacio libre</h1>
                    <article>
                        <figure>
                            <img class="rounded-xl my-2 h-36 w-full object-cover" src="{{asset('img/partners/default.jpg')}}" alt="Leno_Banner">
                        </figure>
                    </article>
                    <p class="mb-4">Este espacio esta libre para su uso</p>

                    <a href="#" class="btn btn-primary">Libre</a>
                
                </div>
            </div>

        </section>

        

        <section class="mt-4">
            <h2 class="text-2xl">¿Buscas ser socio de HyperCode?</h2>
            <p class="mb-4">Estamos encantados por recibirte con nosotros, para mas informacion entra a nuestro discord</p>
            <a href="https://discord.gg/AqBXHU4QZd" class="btn btn-danger" target="_blank">Discord</a>
        </section>

    </div>

</x-app-layout>