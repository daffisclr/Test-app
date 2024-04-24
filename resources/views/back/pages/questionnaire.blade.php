@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Kuesioner')
@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Profile</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Form Kuesioner
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Kuesioner Tracer Study</h4>
            {{-- <p class="mb-30">jQuery Step wizard</p> --}}
        </div>
        <div class="wizard-content">
            <form class="tab-wizard wizard-circle wizard">
                <!-- Step 1 -->
                <h5>Informasi Alumni JTIK</h5>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Alumni :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NIM :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Telpon/Hp :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agama :</label>
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Protestan</option>
                                    <option value="2">Katolik</option>
                                    <option value="2">Hindu</option>
                                    <option value="2">Buddha</option>
                                    <option value="2">Khonghucu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tahun lulus :</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prodi :</label>
                                <select class="custom-select form-control">
                                    <option value="">Program Studi...</option>
                                    <option value="1">Teknik Informatika - TI</option>
                                    <option value="2">Teknik Multimedia Jaringan - TMJ</option>
                                    <option value="3">Teknik Multimedia Digital - TMD</option>
                                    <option value="4">Teknik Komputer Jaringan - KJ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenjang :</label>
                                <input type="text" class="form-control" placeholder="TI - TMJ - TMD = D4  / TKJ = D1" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 2 -->
                <h5>Kuesioner Wajib</h5>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>F8 - Jelaskan status anda saat ini :</label>
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Bekerja (fulltime/part-time)</option>
                                    <option value="2">Belum menungkinkan kerja</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Melanjutkan Pendidikan</option>
                                    <option value="5">Tidak kerja, tapi sedang mencari kerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>F504 - Apakah anda telah mendapat pekerjaan <= 6 bulan/termasuk bekerja sebelum
                                        lulus: </label>
                                        <select class="custom-select form-control">
                                            <option value="">Pilih...</option>
                                            <option value="1">Ya</option>
                                            <option value="2">Tidak</option>
                                        </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>f5-02/06 - Berapa bulan Anda mendapatkan pekerjaan pertama setelah lulus atau Waktu
                                    Tunggu (WT)? …. bulan</label>
                                <input type="number" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>f5-05 - Berapa pendapatan Anda per bulan pada saat Anda mendapatkan pekerjaan pertama
                                    (take home pay)?</label>
                                <input type="number" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>F510 - Di mana lokasi tempat anda bekerja?</label>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label> <br> </label>
                            <div class="form-group">
                                <label>Kabupaten/Kota</label>
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F11 - Apa jenis Perusahaan/instansi/Institusi tempat anda bekerja sekarang? </label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Instansi Pemerintah</option>
                                    <option value="2">Organisasi non profit/ lembaga swadaya masyarakat</option>
                                    <option value="3">Perusahaan swasta</option>
                                    <option value="4">Wiraswasta/perusahaan sendiri</option>
                                    <option value="5">Lainnya...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>F5b - Apa nama perusahaan/kantor tempat anda bekerja?</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F5c - Bila berwiraswasta, apa posisi/ jabatan Anda saat ini? <b>(Apabila F8 menjawab [3]
                                    wiraswasta)</b> </label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih posisi...</option>
                                    <option value="1">Founder</option>
                                    <option value="2">Co founder</option>
                                    <option value="3">Staff</option>
                                    <option value="4">Freelance/Pekerja lepas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F5d - Apa tingkat tempat kerja Anda? </label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih tingkatan...</option>
                                    <option value="1">Lokal/Wilayah/Wiraswasta tidak berbadan hukum</option>
                                    <option value="2">Nasional/Wiraswasta berbadan hukum</option>
                                    <option value="3">Multinasional/Internasional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Pertanyaan studi lanjut <b>(Apabila F8 menjawab [4] Melanjutkan Pendidikan)</b></label>
                            <br>
                            <label>Sumber biaya: </label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Biaya Sendiri</option>
                                    <option value="2">Beasiswa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Nama perguruan tinggi: </label>
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Program Studi:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Tanggal Masuk:</label>
                            <div class="form-group">
                                <input class="form-control date-picker" placeholder="Select Date" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F12 - Sebutkan sumber dana dalam pembiayaan kuliah saat kuliah di JTIK PNJ</label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Biaya sendiri/Keluarga</option>
                                    <option value="2">Beasiswa BIDIKMISI</option>
                                    <option value="3">Beasiswa ADIK</option>
                                    <option value="4">Beasiswa KJMU</option>
                                    <option value="5">Beasiswa Perusahaan/Swasta</option>
                                    <option value="6">Lainnya...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F12a - Pada pertanyaan di atas, tuliskan jawaban Anda jika pilihan Anda adalah
                                "Lainnya"</label>
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F14 - Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Sangat erat</option>
                                    <option value="2">Erat</option>
                                    <option value="3">Cukup erat</option>
                                    <option value="4">Kurang erat</option>
                                    <option value="5">Tidak sama sekali</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F15 - Tingkat Pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat
                                ini?</label>
                            <div class="form-group">
                                <select class="custom-select form-control">
                                    <option value="">Pilih...</option>
                                    <option value="1">Setingkat lebih tinggi</option>
                                    <option value="2">Tingkat yang sama</option>
                                    <option value="3">Setingkat lebih rendah</option>
                                    <option value="4">Tidak perlu pendidikan tinggi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label> F17a - Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?</label>
                            <br>
                            <p>Skor 1-5 (1 sangat rendah - 5 sangat tinggi)</p>
                        </div>
                        <div class="col-md-12">
                            <label> F17b - Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam
                                pekerjaan? </label>
                            <br>
                            <p>Skor 1-5 (1 sangat rendah - 5 sangat tinggi)</p>
                        </div>
                    </div>
                </section>
                <!-- Step 3 -->
                <h5>Kuesioner Opsional</h5>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <label> F2 - Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                dilaksanakan di program studi anda?</label>
                        </div>
                        <div class="col-md-12">
                            <label> F4 - Bagaimana Anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</label>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Melalui iklan</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Melamar langsung ke perusahaan</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Melalui bursa kerja</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Melalui internet</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Dihubungi oleh perusahaan</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Melalui Kemenakertrans</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Melalui agen tenaga kerja</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Melalui magang</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Meneruskan pekerjaan yang sama, semasa kuliah</label>
                            </div>
                            <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Lainnya</label>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 4 -->
                {{-- <h5>Remark</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Behaviour :</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Confidance</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Result</label>
                                <select class="form-control">
                                    <option>Select Result</option>
                                    <option>Selected</option>
                                    <option>Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </form>
        </div>
    </div>

    {{-- <form action="{{ route('admin.kuesioner-form') }}" method="post">
        @csrf

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="q1" class="col-sm-4 form-label required">Question 1</label>
                <input type="text" class="col-sm-8 form-control" name="q1" id="q1">
            </div>

            <div class="row form-group">
                <label for="q2" class="col-sm-4 form-label required">Question 2</label>
                <input type="text" class="col-sm-8 form-control" name="q2" id="q2">
            </div>

            <div class="row form-group">
                <label for="q3" class="col-sm-4 form-label required">Question 3</label>
                <input type="text" class="col-sm-8 form-control" name="q3" id="q3">
            </div>
        </div>
    </form> --}}
@endsection
