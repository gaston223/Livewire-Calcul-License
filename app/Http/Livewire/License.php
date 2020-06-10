<?php

namespace App\Http\Livewire;

use App\Service\LicencePriceCalculator;
use Livewire\Component;

class License extends Component
{
    public $teamSize = 2;


    public function render()
    {
        return view('livewire.licence', [
            'amount' => LicencePriceCalculator::calculatePrice($this->teamSize)
        ]);
    }


}
