<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UpdateDokterTest extends DuskTestCase
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
                    ->visit('/admin/dbdokter/updatedokter/25')
                    ->pause(2000)
                    ->assertSee('Update akun dokter sekarang!')
                    ->type('name','Dokter Update Rafly')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','dokter-updated123456')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Update akun')
                    ->assertSee('dokter-updated123456')
                    ->pause(2000);
        });
    }
}
