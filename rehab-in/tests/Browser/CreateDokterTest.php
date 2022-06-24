<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateDokterTest extends DuskTestCase
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
                    ->click('li','Manajemen User & Komponen Lainnya')
                    ->click('a','Dokter')
                    ->pause(3000)
                    ->visit('/admin/regis/dokter')
                    ->type('name','New Dokter')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','new-doc')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','085298327271')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Buat akun')
                    ->visit('/admin/dbdokter');
        });
    }
}
