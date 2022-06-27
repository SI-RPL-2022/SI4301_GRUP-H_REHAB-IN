<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderKonsulTest extends DuskTestCase
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
                    ->pause(2000)
                    ->visit('/admin/order')
                    ->assertSee('Table Order Layanan Konsultasi')
                    ->visit('/admin/linkmail/3')
                    ->visit('/admin/order')
                    ->assertSee('Aksi')
                    ->pause(2000);
        });
    }
}
