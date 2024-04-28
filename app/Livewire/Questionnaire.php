<?php

namespace App\Livewire;

use Livewire\Component;

class Questionnaire extends Component
{
    public $questions, $step;

    public function render()
    {
        return view('livewire.questionnaire');
    }
}
