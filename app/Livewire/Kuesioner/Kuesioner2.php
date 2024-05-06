<?php

namespace App\Livewire\Kuesioner;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Kuesioner2 extends Component
{
    public $regencies = [];

    public function render()
    {
        $provinces = DB::table('provinces')->select(['id', 'province_name as name'])->get();

        return view('livewire.kuesioner.kuesioner2', compact('provinces'));
    }

    public function get_regencies($value)
    {
        $this->regencies = DB::table('regencies')->select(['id', 'regency_name as name'])->where('province_id', '=', $value)->get();
    }
}
