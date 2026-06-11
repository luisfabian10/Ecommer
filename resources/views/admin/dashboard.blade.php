<x-admin-layout :migasDePan="[
    [
        'nombre' => __('Dashboard'),
        'ruta' => route('admin.dashboard')
    ]
]">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center">     
                <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"/>
                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-simibold">
                            Bienvenido, {{ Auth::user()->name }}
                        </h2>
                        <from acction="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="text-sm text-slate-700 hover:text-blue-500">
                                {{__('Logout')}}
                            </button>
                        </from>
                    </div>     
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 flex items-center justify-center">
            <h1 class="text-xl font-semibold">
                {{ __('Marca') }}
            </h1>    
        </div>

    </div>
</x-admin-layout>
