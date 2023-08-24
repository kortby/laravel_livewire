<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    // /** @test */
    // function main_page_contact_form()
    // {
    //     $this->get('/')->assertSeeLivewire('contact-form');
    // }

    // /** @test */
    // function contact_form_send_out_email()
    // {
    //     Livewire::test(ContactForm::class)
    //         ->set('name', 'test3')
    //         ->set('email', 'test@test.com')
    //         ->set('phone', '434343223')
    //         ->set('message', 'test')
    //         ->call('submitForm')
    //         ->assertSee('Successfully saved!');
    // }

    // function contact_form_name_field_is_requeired()
    // {
    //     Livewire::test(ContactForm::class)
    //         ->call('submitForm')
    //         ->assertHasErrors(['name' => 'required']);
    // }

    // function contact_form_message_field_has_min_characters()
    // {
    //     Livewire::test(ContactForm::class)
    //         ->set('message', 'tes')
    //         ->call('submitForm')
    //         ->assertHasErrors(['message' => 'required|min:5']);
    // }
}
