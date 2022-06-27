<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatePasienTest extends DuskTestCase
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
                    ->visit('/admin/regis/pasien')
                    ->type('name','xxxxx')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','xxxxx')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Buat akun')
                    ->assertSee('xxxxx')
                    ->pause(2000);
        });
    }
}
