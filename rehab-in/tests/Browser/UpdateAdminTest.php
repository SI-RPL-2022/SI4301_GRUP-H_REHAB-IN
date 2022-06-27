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
                    ->type('username','admin-nrlwrk')
                    ->type('password','12345678')
                    ->press('Login')
                    ->visit('/admin/dbadmin/updateadmin/32')
                    ->assertSee('Update akun admin sekarang!')
                    ->type('name','Admin Updated')
                    ->type('email','xxxxx.nw@gmail.com')
                    ->type('username','admin-updated-3333')
                    ->type('password','12345678')
                    ->type('confpw','12345678')
                    ->type('nohp','999999999999')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandung')
                    ->press('Update akun');
        });
    }
}
