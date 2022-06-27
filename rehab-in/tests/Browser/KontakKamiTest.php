<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class KontakKamiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about') 
                    ->type('guest_name','Nurul')
                    ->type('email','nrl@mail.com')
                    ->type('subject','Kuliah')
                    ->type('messages','Message lorem')
                    ->press('Kirim');
                            
                   
        });
    }
}
