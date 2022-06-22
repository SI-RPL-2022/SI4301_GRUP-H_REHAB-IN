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
                    ->type('username','doktern')
                    ->type('password','12345678')
                    ->press('LOGIN')
                    ->assertPathIs('/dokter')
                    ->click('a','Lihat Jadwal')
                    ->pause(2000)
                    ->assertSee('Online')
                    ->pause(2000)
                    ->visit('/dokter/jadwal/delete/1');
        });
    }
}
