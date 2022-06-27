<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class satuTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group inputartikel
     * @return void
     */
    public function test_inputartikel()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->pause(2000)
                ->assertSee('Welcome Back Admin!')
                ->type('username', 'raflyyogass')
                ->type('password', '123123')
                ->press('Login')
                ->assertPathIs('/admin')
                ->assertAuthenticated()
                ->assertSee('Dashboard')
                ->click('[data-target="#collapsePages"]')
                ->clickLink('Konten Artikel')
                ->click('[data-target="#add-article"]')
                ->pause(1000)
                ->assertSee('Tambahkan Konten Artikel')
                ->type('judul_artikel', 'JANGAN BEGADANG')
                ->type('penulis', 'Admin')
                ->attach('image_art', base_path("public\assets\style\images\begadang-working-overnight_20141215_014359.jpg"))
                ->type('konten', 'JANGAN BEGADANG')
                ->pause(2000)
                ->press('Tambah')
                ->pause(5000);
        });
    }

    /**
     * A Dusk test example.
     * @group artikel
     * @return void
     */
    public function test_artikel()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->pause(2000)
                ->waitForText('LOGIN')
                ->assertSee('LOGIN')
                ->type('username', 'raflyyogas')
                ->type('password', '123123')
                ->click('button', 'LOGIN')
                ->assertPathIs('/pasien')
                ->assertAuthenticated()
                ->pause(2000)
                ->assertSee('Tips and trick sehat')
                ->clickLink('Tips and trick sehat')
                ->pause(1000)
                ->assertSee('Admin')
                ->screenshot('Artikel')
                ->pause(5000);
        });
    }

    /**
     * A Dusk test example.
     * @group offline
     * @return void
     */
    public function test_offline()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->waitForText('LOGIN')
                ->assertSee('LOGIN')
                ->type('username', 'raflyyogas')
                ->type('password', '123123')
                ->click('button', 'LOGIN')
                ->assertPathIs('/pasien')
                ->assertAuthenticated()
                ->visit('/pasien/service/dokter')
                ->assertSee('Pilih Opsi')
                ->press('Pilih Offline')
                ->type('waktu', '30.06.2022')
                ->press('Lanjutkan')
                ->assertPathIs('/pasien/order')
                ->assertSee('Your order waiting for payment')
                ->press('Konsultasi Dokter')
                ->pause(1500)
                ->assertSee('Riwayat Pembayaran Konsultasi Dokter')
                ->pause(1500)
                ->clickLink('Check Invoice')
                ->assertSee('Belum membayar')
                ->pause(1000)
                ->press('Upload bukti pembayaran')
                ->attach('pic', base_path("public/bukti-pembayaran.jpg"))
                ->press('Submit')->waitForDialog()->acceptDialog()
                ->assertPathIs('/pasien/history')
                ->pause(1000)

                ->assertSee('Upload bukti pembayaran berhasil.')
                ->press('Konsultasi Dokter')
                ->assertSee('Riwayat Pembayaran Konsultasi Dokter')
                ->clickLink('Check Invoice')
                ->assertSee('Sudah Membayar')
                ->assertSee('Offline')
                ->pause(5000)
                ->screenshot('Layanan Offline');
        });
    }

    /**
     * A Dusk test example.
     * @group online
     * @return void
     */
    public function test_online()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->waitForText('LOGIN')
                ->assertSee('LOGIN')
                ->type('username', 'raflyyogas')
                ->type('password', '123123')
                ->click('button', 'LOGIN')
                ->assertPathIs('/pasien')
                ->assertAuthenticated()
                ->visit('/pasien/service/dokter')
                ->clickLink('Pilih Online')
                ->assertSee('Atur jadwal')
                ->pause(1000)
                ->clickLink('Atur jadwal')
                ->type('keluhan', 'Pusing')
                ->type('detailkel', 'Pusing')
                ->type('keluhan', 'Pusing')
                ->type('waktu', '30.06.2022')
                ->select('durasi', '1 Jam')
                ->pause(1000)
                ->press('SUBMIT')
                ->assertPathIs('/pasien/order')
                ->assertSee('Your order waiting for payment')
                ->press('Konsultasi Dokter')
                ->pause(1500)
                ->assertSee('Riwayat Pembayaran Konsultasi Dokter')
                ->pause(1500)
                ->clickLink('Check Invoice')
                ->assertSee('Belum membayar')
                ->pause(1000)
                ->press('Upload bukti pembayaran')
                ->attach('pic', base_path("public/bukti-pembayaran.jpg"))
                ->press('Submit')->waitForDialog()->acceptDialog()
                ->assertPathIs('/pasien/history')
                ->pause(1000)
                ->assertSee('Upload bukti pembayaran berhasil.')
                ->press('Konsultasi Dokter')
                ->pause(500)
                ->assertSee('Riwayat Pembayaran Konsultasi Dokter')
                ->clickLink('Check Invoice')
                ->assertSee('Sudah Membayar')
                ->assertSee('Online')
                ->pause(5000)
                ->screenshot('Layanan Online');
        });
    }
    /**
     * A Dusk test example.
     * @group catatan
     * @return void
     */
    public function test_catatan()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->pause(2000)
                ->waitForText('LOGIN')
                ->assertSee('LOGIN')
                ->type('username', 'raflyyogas')
                ->type('password', '123123')
                ->click('button', 'LOGIN')
                ->assertPathIs('/pasien')
                ->assertAuthenticated()
                ->assertSee('Hallo')
                ->pause(2000)
                ->scrollIntoView('#kesehatan')
                ->waitForText('Catatan Kesehatan')
                ->pause(1000)
                ->clickLink('Lihat selengkapnya')
                ->pause(1000)
                ->waitForText('Waktu Tidur')
                ->pause(5000)
                ->screenshot('Catatan Kesehatan');
        });
    }
}
