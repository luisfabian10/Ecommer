@if (count($migasDePan))
    <nav class="mb-4">
        <ol class="flex flex-wrap">
            @foreach ($migasDePan as $miga)
                <li class="text-sm leading-normal text-slate-700 {{!$loop->first ? "pl-2 before:float-left before:pr-2 before:content-['>']" : ""}}">
                    
                    @isset($miga['ruta'])
                        <a href="{{ $miga['ruta'] }}" class="opacity-50">
                            {{ $miga['nombre'] }}
                        </a>
                    @else
                        {{ $miga['nombre'] }}                           
                    @endisset

                </li>
            @endforeach    

        </ol>
        @if (count($migasDePan) > 1)
        <h6 class="font-bold">
            {{end($migasDePan)['nombre']}}
        </h6>            
        @endif
    </nav>
@endif
