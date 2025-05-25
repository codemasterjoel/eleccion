<?php

namespace App\Http\Livewire\Cuadernillo;

use Livewire\Component;
use App\Models\Parroquia;
use App\Models\ubch;

use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $parroquias, $parroquiaId, $centros, $centroId, $id = null;
    public $parte8, $parte9, $parte10, $parte11, $parte12, $parte1, $parte2, $parte3, $parte4, $parte5, $parte6, $parte7, $final, $cerrado, $aperturado = null;
    public $search = "";
    public $modal, $cumplido = false;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->parroquias = Parroquia::all();
        // $this->centros = ubch::where('nombre', 'like', "%$this->search%")->simplePaginate(10);
        // return view('livewire.cuadernillo.index', ['parroquias' => Parroquia::where('nombre', 'like', "%$this->search%")->paginate(10),]);
        return view('livewire.cuadernillo.index');
    }
    public function crear($id) 
    {
        $parroquia = Parroquia::findOrFail($id);

        $this->id = $id;
        $this->aperturado = $parroquia->aperturado;
        $this->parte8 = $parroquia->parte8;
        $this->parte9 = $parroquia->parte9;
        $this->parte10 = $parroquia->parte10;
        $this->parte11 = $parroquia->parte11;
        $this->parte12 = $parroquia->parte12;
        $this->parte1 = $parroquia->parte1;
        $this->parte2 = $parroquia->parte2;
        $this->parte3 = $parroquia->parte3;
        $this->parte4 = $parroquia->parte4;
        $this->parte5 = $parroquia->parte5;
        $this->parte6 = $parroquia->parte6;
        $this->parte7 = $parroquia->parte7;
        $this->cerrado = $parroquia->cerrado;
        $this->modal = true;
        $this->parroquiaId = $parroquia->nombre;
        $this->centros = $parroquia->centros;
    }
    public function cerrarModal() 
    {
        $this->modal = false;
        $this->limpiarCampos();
    }
    public function guardar($id)
    {
        $parroquia = parroquia::findOrFail($id);

        $this->final = max($this->parte8, $this->parte9, $this->parte10, $this->parte11, $this->parte12, $this->parte1, $this->parte2, $this->parte3, $this->parte4, $this->parte5, $this->parte6, $this->parte7);

        if ($this->final >= $parroquia->meta) {
            $this->cumplido = true;
        }else {
            $this->cumplido = false;
        }

        $reporte = parroquia::updateOrCreate(['id' => $this->id],
            [
            'aperturado' => $this->aperturado,
            'parte8' => $this->parte8,
            'parte9' => $this->parte9,
            'parte10' => $this->parte10,
            'parte11' => $this->parte11,
            'parte12' => $this->parte12,
            'parte1' => $this->parte1,
            'parte2' => $this->parte2,
            'parte3' => $this->parte3,
            'parte4' => $this->parte4,
            'parte5' => $this->parte5,
            'parte6' => $this->parte6,
            'parte7' => $this->parte7,
            'cerrado' => $this->cerrado,
            'final' => $this->final,
            'cumplido' => $this->cumplido,
        ]);
        session()->flash('success', 'success');
        
        $this->cerrarModal();
    }
    public function limpiarCampos()
    {
            $this->id = null;
            $this->aperturado =null;
            $this->parte8 = null;
            $this->parte9 = null;
            $this->parte10 = null;
            $this->parte11 = null;
            $this->parte12 = null;
            $this->parte1 = null;
            $this->parte2 = null;
            $this->parte3 = null;
            $this->parte4 = null;
            $this->parte5 = null;
            $this->parte6 = null;
            $this->parte7 = null;
            $this->cerrado = null;
            $this->final = null;
            $this->parroquiaId = null;
            $this->centros = null;
    }
}
