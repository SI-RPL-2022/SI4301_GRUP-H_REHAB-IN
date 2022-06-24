<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CatkesTest extends DuskTestCase
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
                    ->visit('/admin/notes')
                    ->assertSee('Table Catatan Kesehatan')
                    ->assertSee('Bagus')
                    ->click('#note-details')
                    ->whenAvailable('.modal', function ($modal) {
                        $modal->assertSee('Detail Catatan Kesehatan Pasien');
                    });
        });
    }
}
