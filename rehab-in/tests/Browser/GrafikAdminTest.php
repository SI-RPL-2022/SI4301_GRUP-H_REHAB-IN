<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GrafikAdminTest extends DuskTestCase
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
                    ->pause(5000)
                    ->assertSee('Statistik Konsultasi Pasien')
                    ->assertSee('Dashboard')
                    ->assertSee('DOKTER SAAT INI')
                    ->assertSee('TOTAL ORDERAN KAMAR')
                    ->assertSee('TOTAL PASIEN')
                    ->assertSee('TOTAL ORDERAN KONSULTASI');
        });
    }
}
