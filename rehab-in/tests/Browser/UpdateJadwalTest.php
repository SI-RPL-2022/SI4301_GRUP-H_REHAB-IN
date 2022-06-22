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
                    ->type('username','admin-n')
                    ->type('password','12345678')
                    ->press('Login')
                    ->click('li','Manajemen Konten')
                    ->click('a','Jadwal Konsultasi')
                    ->pause(2000)
                    ->visit('/admin/jadwalkons/1')
                    ->pause(2000)
                    ->click('option','Pasien NRL')
                    ->click('option','Dokter NRL')
                    ->click('option','Sabtu')
                    ->click('option','1 Jam')
                    ->type('tempat','Online')
                    ->type('shift','06.30')
                    ->press('Update jadwal');
        });
    }
}
