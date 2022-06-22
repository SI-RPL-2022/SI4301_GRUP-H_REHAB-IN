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
                    ->type('username','admin-n')
                    ->type('password','12345678')
                    ->press('Login')
                    ->click('li','Manajemen Konten')
                    ->click('a','Jadwal Konsultasi')
                    ->pause(2000)
                    ->visit('/admin/jadwalkons/input')
                    ->select('namapasien','Pasien NWRK')
                    ->select('namadokter','Nurul Dokter 1')
                    ->select('day','Senin')
                    ->select('durasi','2 Jam')
                    ->type('tempat','Online')
                    ->type('shift','08.30')
                    ->press('Buat jadwal');
        });
    }
}
