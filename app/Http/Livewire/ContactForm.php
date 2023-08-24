<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Rule;

use Livewire\Component;

class ContactForm extends Component
{
    // #[Rule('required')]
    public $name;
    public $email;
    public $phone;
    public $message;
    public $flash_message;
    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submitForm()
    {
        $contact = $this->validate();

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;

        $this->flash_message = 'Thank you ' . $this->name . ', We recieved your message successfully!!';

        sleep(2);

        session()->flash('message', $this->flash_message);
        // session()->flash('message', 'Thank you ' . $this->name . ', We recieved your message successfully!!');
        $this->resetForm();
    }

    private function resetForm()
    {
        $name = '';
        $email = '';
        $phone = '';
        $message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
