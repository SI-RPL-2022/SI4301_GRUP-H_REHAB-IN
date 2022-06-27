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
                    ->click('li','Manajemen Konten')
                    ->click('a','Jadwal Konsultasi')
                    ->pause(2000)
                    ->visit('/admin/jadwalkons/input')
                    ->select('namapasien','Nurul SI4301')
                    ->select('namadokter','Dokter R1')
                    ->select('day','Sabtu')
                    ->select('durasi','1 Jam')
                    ->type('tempat','Online')
                    ->type('shift','07.30')
                    ->press('Buat jadwal');
        });
    }
}
