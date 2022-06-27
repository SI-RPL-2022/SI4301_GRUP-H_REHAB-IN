<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateJadwalTest extends DuskTestCase
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
                    ->visit('/admin/jadwalkons/input')
                    ->select('namapasien','Pasien NRL')
                    ->select('namadokter','Dokter NRL')
                    ->select('day','Selasa')
                    ->select('durasi','1 Jam')
                    ->type('tempat','Online')
                    ->type('shift','07.30')
                    ->press('Buat jadwal')
                    ->assertSee('Selasa')
                    ->pause(2000);
        });
    }
}
