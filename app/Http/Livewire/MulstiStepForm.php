<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;


class MulstiStepForm extends Component
{

    use WithFileUploads;
    public function render()
    {
        return view('livewire.mulsti-step-form');
    }
}
