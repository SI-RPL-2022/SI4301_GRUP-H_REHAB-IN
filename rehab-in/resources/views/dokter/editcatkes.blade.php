@extends('layouts.homepage-dokter')
@section('main')
    @if ($count > 0)
        <div id="contact" class="contact-us section" style="margin-top: 20px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact" action="{{ route('inputcatkes') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-pict">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="user-profile-header" style="text-align: left">Input Catatan
                                                    kesehatan
                                                </h4>
                                                <div class="info-post">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <a href="{{ route('catpasien') }}"
                                                                class="btn btn-warning">Back</a>
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-black fw-bold mt-2" style="text-align: left">Nama
                                                                Pasien : {{ $user->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="container-fluid text-left">
                                                        <input type="text" name="pasien" value="{{ $user->id }}"
                                                            hidden>
                                                        <hr>
                                                        {{-- Waktu Tidur --}}
                                                        <div class="mb-3">
                                                            <label for="waktu"
                                                                class="form-label text-black fw-bold">Waktu Tidur
                                                                pasien</label>
                                                            <input type="text" name="waktu" class="form-control"
                                                                id="waktu" placeholder="8 - 10 Jam"
                                                                value="{{ $note->waktu }}" </div>
                                                            <div class="mb-3">
                                                                <label for="KesimpulanWaktu"
                                                                    class="form-label text-black">Kesimpulan
                                                                    Waktu</label>
                                                                <textarea class="form-control" id="KesimpulanWaktu" rows="2" name="descwaktu" value="{{ $note->descwaktu }}"></textarea>
                                                            </div>
                                                            <hr>
                                                            {{-- Kualitas tidur --}}
                                                            <div class="mb-3">
                                                                <label for="Kualitas"
                                                                    class="form-label text-black fw-bold">Kualitas
                                                                    Tidur</label>
                                                                <input type="text" class="form-control" id="Kualitas"
                                                                    name="kualitas" placeholder="Bagus / Buruk "
                                                                    value="{{ $note->kualitas }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="kesimpulanwaktu"
                                                                    class="form-label text-black">kesimpulan
                                                                    Kualitas Tidur</label>
                                                                <textarea class="form-control" id="kesimpulanwaktu" name="desckualitas" rows="2"
                                                                    value="{{ $note->desckualitas }}"></textarea>
                                                            </div>
                                                            <hr>
                                                            {{-- Olahraga --}}
                                                            <div class="mb-3">
                                                                <label for="olahraga"
                                                                    class="form-label text-black fw-bold">Olahraga</label>
                                                                <input type="text" class="form-control" id="olahraga"
                                                                    name="olahraga" placeholder="Eesy, Medium, Hard"
                                                                    value="{{ $note->olahraga }}" </div>
                                                                <div class="mb-3">
                                                                    <label for="descolahraga"
                                                                        class="form-label text-black">Kesimpulan
                                                                        Olahgara</label>
                                                                    <textarea class="form-control" id="descolahraga" name="descolahraga" rows="2" value="{{ $note->desckualtas }}"></textarea>
                                                                </div>
                                                                <hr>
                                                                {{-- Mood --}}
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label text-black fw-bold">Mood
                                                                        Pasien</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleFormControlInput1" name="mood"
                                                                        placeholder="Good, Sad, etc"
                                                                        value="{{ $note->mood }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="KesimpulanMood"
                                                                        class="form-label text-black">Kesimpulan
                                                                        Mood pasien</label>
                                                                    <textarea class="form-control" id="KesimpulanMood" name="descmood" rows="2" value="{{ $note->descmood }}"></textarea>
                                                                </div>
                                                                {{-- End --}}
                                                                <button type="submit">Simpan Catatan</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div id="contact" class="contact-us section" style="margin-top: 20px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <form id="contact">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-pict">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="user-profile-header" style="text-align: left">Input Catatan
                                                    kesehatan
                                                </h4>
                                                <div class="info-post">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <a href="{{ route('catpasien') }}"
                                                                class="btn btn-warning">Back</a>
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-black fw-bold mt-2" style="text-align: left">
                                                                Nama
                                                                Pasien : {{ $user->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="container-fluid text-center">
                                                        <h3> Kamu masih belum menginputkan catatan kesehatan pada pasien ini
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
