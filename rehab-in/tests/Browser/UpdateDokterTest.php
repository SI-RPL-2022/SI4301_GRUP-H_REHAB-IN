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
                    ->type('username','admin-n')
                    ->type('password','12345678')
                    ->press('Login')
                    ->click('li','Manajemen User & Komponen Lainnya')
                    ->click('a','Dokter')
                    ->pause(3000)
                    ->visit('/admin/dbdokter/updatedokter/3')
                    ->pause(3000)
                    ->assertSee('Update akun dokter sekarang!')
                    ->type('name','Dokter uhuy')
                    ->type('email','wahdanurul.nw@gmail.com')
                    ->type('username','ini dokter updated')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Update akun');
        });
    }
}
