<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UpdateAdminTest extends DuskTestCase
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
                    ->click('a','Administrator')
                    ->pause(3000)
                    ->visit('/admin/dbadmin/updateadmin/2')
                    ->assertSee('Update akun admin sekarang!')
                    ->type('name','xxxxxxxx')
                    ->type('email','xxxxx.nw@gmail.com')
                    ->type('username','admin-nrlwrk')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Update akun');
        });
    }
}
