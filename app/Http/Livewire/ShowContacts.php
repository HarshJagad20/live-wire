<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ShowContacts extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-contacts', [
            'contacts' => Contact::paginate(10),
        ]);
    }
}
