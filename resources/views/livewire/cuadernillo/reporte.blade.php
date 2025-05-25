<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        @if(session()->has('yaregistrado')== 'yaregistrado')
            @include('livewire.components.yaregistrado')
        @endif
        @if(session()->has('noencontrada')== 'noencontrada')
            @include('livewire.components.noencontrada')
        @endif
        @if(session()->has('noexiste')== 'success')
            @include('livewire.components.noexiste')
        @endif
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="min-h-screen flex justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex justify-center">
                        {{-- <img src="{{asset('img/logo.svg')}}" class="w-52"> --}}
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-semibold text-center">REPORTES</h3>
                    <h3 class="text-2xl text-red-400 font-semibold text-center">PARROQUIA: {{$parroquiaId}}</h3>
                    <h3 class="text-xl text-red-400 font-semibold text-center pb-4">CENTROS: {{$centros}}</h3>

                    <form>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Activación del Centro</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="aperturado" type="number" placeholder="Centros Aperturados" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="CedulaOrganizador" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="CedulaOrganizador" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 8:00 AM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte8" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="CedulaOrganizador" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="CedulaOrganizador" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 9:00 AM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte9" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="CedulaOrganizador" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="CedulaOrganizador" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 10:00 AM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte10" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="CedulaOrganizador" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="CedulaOrganizador" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 11:00 AM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte11" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>                        
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 12:00 M</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte12" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 1:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte1" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>                        
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 2:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte2" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 9:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte3" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>                        
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 4:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte4" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 5:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte5" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>                        
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 6:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte6" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Reporte 7:00 PM</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="parte7" type="number" placeholder="Participacion" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="parte" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="parte" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>
                        <span class="p-2 rounded-tl-lg rounded-bl-lg text-dark font-semibold ">Centros Cerrados</span>
                        <div class="flex pb-4"> {{-- campo Nivel --}}
                            <input wire:model="cerrado" type="number" placeholder="Centros Cerrados" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            {{-- <input wire:model="CedulaOrganizador" type="number" placeholder="Rojos" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900">
                            <input wire:model="CedulaOrganizador" type="number" placeholder="Azul" class=" px-3  w-full text-neutral-900 pl-3 border font-bold outline-2 rounded border-slate-900"> --}}
                        </div>

                        <div class="px-4 py-3 sm:px-6 sm:flex">
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardar({{ $id }})"  >GUARDAR</button>
                            </span>
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>