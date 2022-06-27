<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateDokterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group createdokter
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
                    ->visit('/admin/regis/dokter')
                    ->type('name','cccc')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','ccc')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','085298327271')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Buat akun')
                    ->visit('/admin/dbdokter')
                    ->pause(2000);
        });
    }
}
