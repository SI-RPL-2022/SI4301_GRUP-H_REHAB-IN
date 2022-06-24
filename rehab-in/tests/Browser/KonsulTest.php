<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class KonsulTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login-dokter')
                    ->type('username','dok-n')
                    ->type('password','12345678')
                    ->press('LOGIN')
                    ->assertPathIs('/dokter')
                    ->click('a','Lihat Jadwal')
                    ->pause(3000)
                    ->assertSee('Online')
                    ->visit('/dokter/jadwal/delete/6');
        });
    }
}
