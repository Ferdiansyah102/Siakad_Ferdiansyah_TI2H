<?php

namespace Tests\Feature;

use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {
        $response = $this->get('mahasiswa/create');

        $response->assertStatus(200);

        $response->assertSeeText("Nim");
        $response->assertSeeText("Nama");
        $response->assertSeeText("Kelas");
        $response->assertSeeText("Jurusan");
    }
    public function test_edit()
    {
        $response = $this->get('mahasiswa/2041720060/edit');

        $response->assertStatus(200);

        $response->assertSeeText("Nim");
        $response->assertSeeText("Email");
        $response->assertSeeText("Nama");
        $response->assertSeeText("Pilih Kelas");
        $response->assertSeeText("Jurusan");
        $response->assertSeeText("Alamat");
        $response->assertSeeText("Tanggal Lahir");
    }
}
