<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0; //Attributo
    public bool $isVisible = true;
    public string $testo = 'Raffaele';

    public function increment()
    {
        return $this->counter++;
    }

    public  function decrement()
    {
        if ($this->counter > 0) {
            return $this->counter--;
        }
    }

    public function showHide()
    {
        if ($this->isVisible) {
            $this->isVisible = false;
        } else {
            $this->isVisible = true;
        }

        //return !$this->isVisible;
    }
    public function render()
    {

        if ($this->testo) {
            //$users = User::where('email', 'LIKE', '%' . $this->testo . '%')->get();
            $users = User::where('email', '=',  $this->testo)->get();
        } else {
            $users = User::all();
        }

        return view('livewire.counter', ['users' => $users]);
    }
}
