<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UpdateJadwalTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                    ->assertSee('Welcome Back Admin!')
                    ->type('username','admin-nrlwrk')
                    ->type('password','12345678')
                    ->press('Login')
                    ->visit('/admin/jadwalkons/5')
                    ->pause(2000)
                    ->select('namapasien','Pasien NRL')
                    ->select('namadokter','Dokter NRL')
                    ->select('day','Selasa')
                    ->select('durasi','3 Jam')
                    ->type('tempat','Online')
                    ->type('shift','08.30')
                    ->press('Update jadwal')
                    ->assertSee('Selasa')
                    ->pause(2000);
        });
    }
}
