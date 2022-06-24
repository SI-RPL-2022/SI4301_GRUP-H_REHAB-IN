<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UpdatePasienTest extends DuskTestCase
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
                    ->click('a','Pasien')
                    ->pause(3000)
                    ->visit('/admin/dbpasien/updatepasien/1')
                    ->assertSee('Update akun pasien sekarang!')
                    ->type('name','Patient Updated')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','patient-updated')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Update akun');
        });
    }
}
