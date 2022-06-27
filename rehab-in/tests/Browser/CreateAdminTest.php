<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateAdminTest extends DuskTestCase
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
                    ->visit('/admin/regis/admin')
                    ->assertSee('Buat akun admin sekarang!')
                    ->type('name','New Admin rr')
                    ->type('username','new-adm123')
                    ->type('email','wahdanuxxxrul.nw@gmail.com')
                    ->type('password','1234567801')
                    ->type('confpw','1234567801')
                    ->type('nohp','081111111111')
                    ->type('tanggallahir','13/06/2022')
                    ->type('address','Bandungxx')
                    ->press('Buat akun')
                    ->assertSee('Table Administrator');
        });
    }
}
