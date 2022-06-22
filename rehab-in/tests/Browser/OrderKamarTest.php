<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderKamarTest extends DuskTestCase
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
                    ->pause(2000)
                    ->visit('/admin/orderk')
                    ->assertSee('Table Order Layanan Kamar')
                    ->assertSee('Belum membayar')
                    ->assertSee('Sudah Membayar')
                    ->visit('/admin/invmailkamar');
        });
    }
}