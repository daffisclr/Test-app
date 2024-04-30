@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Kuesioner')
@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Kuesioner</h4>
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
            <form id="kuesioner">
                <div class="tab-wizard1 wizard-circle wizard">
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
                                    <input type="text" class="form-control"
                                        placeholder="TI - TMJ - TMD = D4  / TKJ = D1" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Kuesioner Wajib</h5>
                    <section>
                        <div class="row">
                            <table class='table table-striped table-responsive'>
                                <tr>
                                    <td colspan='4'><b>Tracer Study</td>
                                </tr>
                                <tr id='f8'>
                                    <td valign='top'>Jelaskan status Anda saat ini?</td>
                                    <td valign='top' style='width:5px;'>:</td>
                                    <td>
                                        <input type='radio' name='f8' value='Bekerja (fulltime / part time)'
                                            no_urut='1' required> [1] Bekerja (fulltime / part time) <span
                                            class='hl'>(f8)</span><br />
                                        <input type='radio' name='f8' value='Wiraswasta' no_urut='2' required>
                                        [3] Wiraswasta<br />
                                        <input type='radio' name='f8' value='Melanjutkan Pendidikan' no_urut='3'
                                            required> [4] Melanjutkan Pendidikan <br />
                                        <input type='radio' name='f8' value='Tidak Kerja tetapi sedang mencari kerja'
                                            no_urut='4' required> [5] Tidak Kerja tetapi sedang mencari kerja<br />
                                        <input type='radio' name='f8'
                                            value='Belum memungkinkan bekerja (Menikah/wajib militer/mengurus keluarga)'
                                            no_urut='5' required> [2] Belum memungkinkan bekerja (Menikah/wajib
                                        militer/mengurus keluarga) <br />
                                    </td>
                                </tr>
                                <tr id='f5c' class='tr-quis2'>
                                    <td valign='top'>Apa posisi/jabatan Anda saat ini?</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f5c' class='inp-f5c' value='Founder'
                                            no_urut='1'> Founder <span class='hl'>(f5c)</span><br />
                                        <input type='radio' name='f5c' class='inp-f5c' value='Co-Founder'
                                            no_urut='2'> Co-Founder <span class='hl'>(f5c)</span><br />
                                        <input type='radio' name='f5c' class='inp-f5c' value='Staff'
                                            no_urut='3'> Staff <span class='hl'>(f5c)</span><br />
                                        <input type='radio' name='f5c' class='inp-f5c'
                                            value='Freelance/Kerja Lepas' no_urut='4'> Freelance/Kerja Lepas
                                        <span class='hl'>(f5c)</span><br />
                                    </td>
                                </tr>
                                <tr id='f504' class='tr-quis'>
                                    <td valign='top'>Apakah Anda telah mendapatkan pekerjaan/berwiraswasta &lt;=
                                        6 bulan sebelum lulus?</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f504' class='inp-f504' value='1' no_urut='1'>
                                        Ya <span class='hl'>(f5-04)</span><br />
                                        <input type='radio' name='f504' class='inp-f504' value='0' no_urut='2'>
                                        Tidak <span class='hl'>(f5-04)</span><br />
                                    </td>
                                </tr>
                                <tr id='f502' class='tr-quis'>
                                    <td valign='top'>Dalam berapa bulan Anda mendapatkan pekerjaan/berwiraswasta
                                        setelah lulus? (untuk yg bekerja/berwiraswasta sebelum lulus diisi
                                        0)<br /> * Contoh pengisian : 6 </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f502' class='inp-f502' size='5' maxlength='2'
                                            value=''
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        Bulan&nbsp;&nbsp;<span class='hl'>(f5-02)</span>
                                    </td>
                                </tr>
                                <tr id='f506' class='tr-quis'>
                                    <td valign='top'>Berapa bulan waktu yang Anda butuhkan untuk mendapatkan
                                        pekerjaan pertama/berwiraswasta ?<br /> * Contoh pengisian : 6 (isikan 0
                                        jika bekerja sebelum lulus)</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f506' class='inp-f506' size='5' maxlength='2'
                                            value=''
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        Bulan &nbsp;&nbsp;<span class='hl'>(f5-06)</span>
                                    </td>
                                </tr>
                                <tr id='f5b' class='tr-quis'>
                                    <td valign='top'>Apa nama perusahaan/kantor tempat Anda
                                        bekerja/berwiraswasta saat ini?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='text' name='f5b' class='inp-f5b' size='30'
                                            maxlength='255'><span class='hl'>(f5b)</span>
                                    </td>
                                </tr>
                                <tr id='f505' class='tr-quis'>
                                    <td valign='top'>Berapa rata-rata pendapatan Anda per bulan? (Take Home Pay)
                                        <br />* Contoh pengisian : 10000000 (tanpa titik)
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f505' class='inp-f505' size='30'
                                            maxlength='12'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"><span
                                            class='hl'>(f505)</span>
                                    </td>
                                </tr>
                                <tr id='f5a' class='tr-quis'>
                                    <td valign='top'>Dimanakah lokasi tempat Anda bekerja/berwiraswasta?<br />
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-responsive'>
                                            <tr>
                                                <td>Provinsi</td>
                                                <td> &nbsp;
                                                    <select id='inp-f5a1' name='f5a1' class='inp-f5a'
                                                        style="width:200px">
                                                        <option value='-'>-- Pilih Provinsi --</option>
                                                    </select><span class='hl'>(f5a1)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten</td>
                                                <td> &nbsp;
                                                    <select id='inp-f5a2' name='f5a2' class='inp-f5a'>
                                                        <option value='-' provinsi='-'>-- Pilih Kabupaten/Kota
                                                            --</option>
                                                    </select>
                                                    <select id='inp-f5a2tmp' style='display:none'>
                                                    </select><span class='hl'>(f5a2)</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f11' class='tr-quis'>
                                    <td valign='top'>Apa jenis perusahaan/instansi/institusi tempat anda bekerja
                                        sekarang? <br />* Jika bekerja di luar negeri maka pilih Lainnya dan
                                        tuliskan nama perusahaan dan negaranya, contoh SM Entertainment, Korea
                                        Selatan
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>
                                                <td>
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='BUMN/BUMD'> Instansi Pemerintah <br />
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='BUMN/BUMD'> BUMN/BUMD<br />
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='Institusi/Organisasi Multilateral'>
                                                    Institusi/Organisasi Multilateral<br />
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='Organisasi non-profit/Lembaga Swadaya Masyarakat'>
                                                    Organisasi non-profit/Lembaga Swadaya Masyarakat<br />
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='Perusahaan swasta'> Perusahaan swasta<br />
                                                    <input type='radio' name='f1101' class='inp-f11'
                                                        value='Wiraswasta/perusahaan sendiri'>
                                                    Wiraswasta/perusahaan sendiri<br />
                                                    <input type='radio' name='f1101' class='inp-f11' value='5'
                                                        id='inp-f11-lainnya'> [5] Lainnya, tuliskan:
                                                </td>
                                                <td><span class='hl'>(f11-01)</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name='f1102' value='' size='50'
                                                        maxlength='150' id='inp-f1102'></td>
                                                <td><span class='hl'>(f11-02)</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f5d' class='tr-quis'>
                                    <td valign='top'>Apa tingkat tempat kerja Anda?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f5d' class='inp-f5d'
                                            value='Lokal/wilayah/wiraswasta tidak berbadan hukum'>
                                        Lokal/wilayah/wiraswasta tidak berbadan hukum <span
                                            class='hl'>(f5d)</span><br />
                                        <input type='radio' name='f5d' class='inp-f5d'
                                            value='Nasional/wiraswasta berbadan hukum'> Nasional/wiraswasta
                                        berbadan hukum<br />
                                        <input type='radio' name='f5d' class='inp-f5d'
                                            value='Multinasional/internasional'> Multinasional/internasional
                                        <br />
                                    </td>
                                </tr>
                                <tr id='f19' class='tr-quis4'>
                                    <td valign='top'>Dimanakah lokasi Anda melanjutkan studi?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>
                                                <td>
                                                    <input type='radio' name='f19a' class='inp-f19'
                                                        value='Dalam Negeri'> Dalam Negeri <br />
                                                    <input type='radio' name='f19a' class='inp-f19'
                                                        value='Luar Negeri'> Luar Negeri, tuliskan:<br />
                                                </td>
                                                <td><span class='hl'>(f19a)</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name='f19b' value='' size='50'
                                                        maxlength='50'></td>
                                                <td><span class='hl'>(f19b)</span></td>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f18' class='tr-quis4'>
                                    <td valign='top'>Darimanakah sumber biaya studi lanjut Anda?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>
                                                <td>
                                                    <input type='radio' name='f18a' class='inp-f18'
                                                        value='Biaya Sendiri'> Biaya Sendiri <br />
                                                    <input type='radio' name='f18a' class='inp-f18'
                                                        value='Beasiswa'> Beasiswa, tuliskan:<br />
                                                </td>
                                                <td><span class='hl'>(f18a)</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name='f18b' value='' size='50'
                                                        maxlength='150' /></td>
                                                <td><span class='hl'>(fub304)</span></td>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f18e' class='tr-quis4'>
                                    <td valign='top'>Kapankah Anda memulai studi lanjut?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='text' name='f18e' class='datepicker inp-f18e' value=''
                                            maxlength='30' /><span class='hl'>(f18d)</span>
                                    </td>
                                </tr>
                                <tr id='f18c' class='tr-quis4'>
                                    <td valign='top'>Apa nama Perguruan Tinggi tempat Anda melanjutkan studi?
                                        <br />* Contoh pengisian : Politeknik Negeri Jakarta
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='text' name='f18c' class='inp-f18c' value=''
                                            maxlength='150' /><span class='hl'>(f18b)</span>
                                    </td>
                                </tr>
                                <tr id='f18d' class='tr-quis4'>
                                    <td valign='top'>Apa nama program studi yang Anda ambil dalam melanjutkan
                                        studi? <br /> * Contoh pengisian : Magister Ilmu Hukum
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='text' name='f18d' class='inp-f18d' value=''
                                            maxlength='150' /><span class='hl'>(f18c)</span>
                                    </td>
                                </tr>
                                <tr id='f18f' class='tr-quis4'>
                                    <td valign='top'>Apa alasan Anda melanjutkan studi? <span
                                            class='hl'>(fub305)</span>
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f18f' class='inp-f18f'
                                            value='Tuntutan profesi'> Tuntutan profesi <br />
                                        <input type='radio' name='f18f' class='inp-f18f'
                                            value='Kesempatan beasiswa'> Kesempatan beasiswa <br />
                                        <input type='radio' name='f18f' class='inp-f18f' value='Prestise'>
                                        Prestise <br />
                                        <input type='radio' name='f18f' class='inp-f18f'
                                            value='Belum ada keinginan untuk bekerja'> Belum ada keinginan untuk
                                        bekerja <br />
                                    </td>
                                </tr>
                                <tr id='f12' class='tr-quis'>
                                    <td valign='top'>Sebutkan sumberdana dalam pembiayaan kuliah?</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>
                                                <td>
                                                    <input type='radio' name='f1201' class='inp-f12' value='1'>
                                                    [1] Biaya Sendiri / Keluarga<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='2'>
                                                    [2] Beasiswa ADik (Afirmasi Pendidikan Tinggi)<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='3'>
                                                    [3] Beasiswa KIP-K (Kartu Indonesia Pintar
                                                    Kuliah)/Bidikmisi<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='4'>
                                                    [4] Beasiswa PPA (Peningkatan Prestasi Akademik)<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='5'>
                                                    [5] Beasiswa AFIRMASI<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='6'>
                                                    [6] Beasiswa Perusahaan/Swasta<br />
                                                    <input type='radio' name='f1201' class='inp-f12' value='7'
                                                        id='inp-f1201-lainnya'> [7] Lainnya, tuliskan:
                                                </td>
                                                <td><span class='hl'>(f12-01)</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type='text' name='f1202' value='' size='50'
                                                        maxlength='150' id='inp-f1202'></td>
                                                <td><span class='hl'>(f12-02)</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f14' class='tr-quis'>

                                    <td valign='top'>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda? <br /> *
                                        Jika belum/tidak bekerja, isi Tidak Sama Sekali</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f14' class='inp-f14' value='1'> [1] Sangat Erat <span
                                            class='hl'>(f14)</span><br />
                                        <input type='radio' name='f14' class='inp-f14' value='2'> [2] Erat<br />
                                        <input type='radio' name='f14' class='inp-f14' value='3'> [3] Cukup Erat<br />
                                        <input type='radio' name='f14' class='inp-f14' value='4'> [4] Kurang Erat<br />
                                        <input type='radio' name='f14' class='inp-f14' value='5'> [5] Tidak Sama Sekali <br />
                                    </td>
                                </tr>
                                <tr id='f15' class='tr-quis'>
                                    <td valign='top'>
                                        Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f15' class='inp-f15' value='1'> [1] Setingkat Lebih Tinggi
                                        <span class='hl'>(f15)</span><br />
                                        <input type='radio' name='f15' class='inp-f15' value='2'> [2] Tingkat yang Sama<br />
                                        <input type='radio' name='f15' class='inp-f15' value='3'> [3] Setingkat Lebih
                                        Rendah<br />
                                        <input type='radio' name='f15' class='inp-f15' value='4'> [4] Tidak Perlu Pendidikan
                                        Tinggi<br />
                                    </td>
                                </tr>
                                <tr id='f17' class='tr-quis'>
                                    <td valign='top'>
                                        (A)Pada saat lulus, pada tingkat mana kompetensi di bawah ini yang Anda kuasai? <br />
                                        (B) Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?
                                        <span class='hl'>(f7)</span>
                                    </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>

                                                <th colspan='5' style='text-align:center;'>A</th>
                                                <th rowspan='3' style='text-align:center; vertical-align:middle '>
                                                    Kompetensi&nbsp; </th>
                                                <th colspan='5' style='text-align:center;'>B</th>
                                            </tr>
                                            <tr>
                                                <th>Sangat Rendah</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Sangat Tinggi</th>
                                                <th>Sangat Rendah</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Sangat Tinggi</th>
                                            <tr>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1701a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1701a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1701a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1701a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1701a' class='inp-f17' value='5'></td>
                                                <td>Etika <span class='hl'>f17-01a f17-01b</span></td>
                                                <td><input type='radio' name='f1701b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1701b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1701b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1701b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1701b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1702a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1702a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1702a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1702a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1702a' class='inp-f17' value='5'></td>
                                                <td>Keahlian berdasarkan bidang ilmu <span class='hl'>f17-02a f17-02b</span>
                                                </td>
                                                <td><input type='radio' name='f1702b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1702b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1702b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1702b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1702b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1703a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1703a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1703a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1703a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1703a' class='inp-f17' value='5'></td>
                                                <td>Bahasa Inggris <span class='hl'>f17-03a f17-03b</span></td>
                                                <td><input type='radio' name='f1703b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1703b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1703b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1703b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1703b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1704a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1704a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1704a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1704a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1704a' class='inp-f17' value='5'></td>
                                                <td>Penggunaan Teknologi Informasi <span class='hl'>f17-04a f17-04b</span></td>
                                                <td><input type='radio' name='f1704b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1704b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1704b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1704b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1704b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1705a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1705a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1705a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1705a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1705a' class='inp-f17' value='5'></td>
                                                <td>Komunikasi <span class='hl'>f17-05a f17-05b</span></td>
                                                <td><input type='radio' name='f1705b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1705b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1705b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1705b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1705b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1706a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1706a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1706a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1706a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1706a' class='inp-f17' value='5'></td>
                                                <td>Kerja sama tim <span class='hl'>f17-06a f17-06b</span></td>
                                                <td><input type='radio' name='f1706b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1706b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1706b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1706b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1706b' class='inp-f17' value='5'></td>
                                            </tr>
                                            <tr>
                                                <td><input type='radio' name='f1707a' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1707a' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1707a' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1707a' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1707a' class='inp-f17' value='5'></td>
                                                <td>Pengembangan diri <span class='hl'>f17-07a f17-07b</span></td>
                                                <td><input type='radio' name='f1707b' class='inp-f17' value='1'></td>
                                                <td><input type='radio' name='f1707b' class='inp-f17' value='2'></td>
                                                <td><input type='radio' name='f1707b' class='inp-f17' value='3'></td>
                                                <td><input type='radio' name='f1707b' class='inp-f17' value='4'></td>
                                                <td><input type='radio' name='f1707b' class='inp-f17' value='5'></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f2' class='tr-quis'>
                                    <td valign='top'>Menurut Anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                        ketika dilaksanakan di program studi Anda di UB?</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <table class='table table-striped table-responsive'>
                                            <tr>
                                                <td>Perkuliahan</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f201' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f201)</span> <br />
                                                    <input type='radio' name='f201' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f201' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f201' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f201' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Demonstrasi</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f202' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f202)</span> <br />
                                                    <input type='radio' name='f202' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f202' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f202' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f202' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Partisipasi dalam proyek riset</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f203' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f203)</span> <br />
                                                    <input type='radio' name='f203' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f203' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f203' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f203' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Magang</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f204' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f204)</span> <br />
                                                    <input type='radio' name='f204' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f204' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f204' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f204' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Praktikum</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f205' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f205)</span> <br />
                                                    <input type='radio' name='f205' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f205' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f205' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f205' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kerja lapangan</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f206' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f206)</span> <br />
                                                    <input type='radio' name='f206' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f206' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f206' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f206' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Diskusi</td>
                                                <td> :</td>
                                                <td>
                                                    <input type='radio' name='f207' class='inp-f2' value='Sangat Besar'> Sangat
                                                    Besar <span class='hl'>(f207)</span> <br />
                                                    <input type='radio' name='f207' class='inp-f2' value='Besar'> Besar <br />
                                                    <input type='radio' name='f207' class='inp-f2' value='Cukup Besar'> Cukup
                                                    Besar <br />
                                                    <input type='radio' name='f207' class='inp-f2' value='Kurang'> Kurang <br />
                                                    <input type='radio' name='f207' class='inp-f2' value='Tidak Sama Sekali'>
                                                    Tidak Sama Sekali <br />
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id='f3' class='tr-quis'>
                                    <td valign='top'>Kapankah Anda mulai mencari pekerjaan?<br />
                                        *Mohon pekerjaan sambilan tidak dimasukkan<br /> * Contoh pengisian : 6</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f301' class='inp-f3' value='Sebelum Lulus'> Kira-kira <input
                                            name='f302' type='number' value='' maxlength='2'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                        bulan sebelum lulus <span class='hl'>(f302)</span><br />
                                        <input type='radio' name='f301' class='inp-f3' value='Setelah Lulus'> Kira-kira <input
                                            name='f303' type='number' value='' maxlength='2'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                        setelah lulus <span class='hl'>(f303)</span><br />
                                        <input type='radio' name='f301' class='inp-f3' value='Saya tidak mencari kerja'>Saya
                                        tidak mencari kerja <span class='hl'>(f301)</span><br />
                                    </td>
                                </tr>
                                <tr id='f4' class='tr-quis'>
                                    <td valign='top'>Bagaimanakah Anda mencari pekerjaan tersebut?<br />
                                        Jawaban bisa lebih dari satu </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='checkbox' name='f401' class='inp-f4'
                                            value='Melalui iklan di koran/majalah, brosur'> Melalui iklan di koran/majalah,
                                        brosur <span class='hl'>(f401)</span><br />
                                        <input type='checkbox' name='f402' class='inp-f4'
                                            value='Melamar ke perusahaan tanpa mengatuhi lowongan yang ada'> Melamar ke
                                        perusahaan tanpa mengatuhi lowongan yang ada <span class='hl'>(f402)</span><br />
                                        <input type='checkbox' name='f403' class='inp-f4' value='Pergi ke bursa/pameran kerja'>
                                        Pergi ke bursa/pameran kerja <span class='hl'>(f403)</span><br />
                                        <input type='checkbox' name='f404' class='inp-f4'
                                            value='Mencari lewat internet/iklan online/milis'> Mencari lewat internet/iklan
                                        online/milis <span class='hl'>(f404)</span><br />
                                        <input type='checkbox' name='f405' class='inp-f4' value='Dihubungi oleh perusahaan'>
                                        Dihubungi oleh perusahaan <span class='hl'>(f405)</span><br />
                                        <input type='checkbox' name='f406' class='inp-f4' value='Menghubungi Kemenakertrans'>
                                        Menghubungi Kemenakertrans <span class='hl'>(f406)</span><br />
                                        <input type='checkbox' name='f407' class='inp-f4'
                                            value='Menghubungi agen tenaga kerja komersial/swasta'> Menghubungi agen tenaga
                                        kerja komersial/swasta <span class='hl'>(f407)</span><br />
                                        <input type='checkbox' name='f408' class='inp-f4'
                                            value='Memperoleh informasi dari pusat pengembangan karir fakultas/universitas'>
                                        Memperoleh informasi dari pusat pengembangan karir fakultas/universitas <span
                                            class='hl'>(f408)</span><br />
                                        <input type='checkbox' name='f409' class='inp-f4'
                                            value='Menghubungi kantor kemahasiswaan/hubungan alumni'> Menghubungi kantor
                                        kemahasiswaan/hubungan alumni <span class='hl'>(f409)</span><br />
                                        <input type='checkbox' name='f410' class='inp-f4'
                                            value='Membangun jejaring (network) sejak masih kuliah'> Membangun jejaring
                                        (network) sejak masih kuliah <span class='hl'>(f410)</span><br />
                                        <input type='checkbox' name='f411' class='inp-f4'
                                            value='Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)'> Melalui
                                        relasi (misalnya dosen, orang tua, saudara, teman, dll) <span
                                            class='hl'>(f411)</span><br />
                                        <input type='checkbox' name='f412' class='inp-f4' value='Membangun bisnis sendiri'>
                                        Membangun bisnis sendiri <span class='hl'>(f412)</span><br />
                                        <input type='checkbox' name='f413' class='inp-f4'
                                            value='Melalui penempatan kerja atau magang'> Melalui penempatan kerja atau magang
                                        <span class='hl'>(f413)</span><br />
                                        <input type='checkbox' name='f414' class='inp-f4'
                                            value='Bekerja di tempat yang sama dengan tempat kerja semasa kuliah'> Bekerja di
                                        tempat yang sama dengan tempat kerja semasa kuliah <span class='hl'>(f414)</span><br />
                                        <input type='checkbox' id='inp-f415a' name='f415a' class='inp-f4'
                                            value='Lainnya'>Lainnya: <input type='text' id='inp-f415b' name='f415b'
                                            maxlength='150'> <span class='hl'>(f415a - f415b)</span><br />
                                    </td>
                                </tr>
                                <tr id='f6' class='tr-quis'>
                                    <td valign='top'>Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat
                                        atau email) sebelum Anda memperoleh pekerjaan? <br /> * Contoh pengisian : 10</td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f6' class='inp-f6' size='5' value='' maxlength='3'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        perusahaan/instansi/institusi
                                    </td>
                                </tr>
                                <tr id='f7' class='tr-quis'>
                                    <td valign='top'>Berapa banyak perusahaan/instansi/institusi yang merespon lamaran
                                        Anda?<br />* Contoh pengisian : 7 </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f7' class='inp-f7' size='5' value='' maxlength='3'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        perusahaan/instansi/institusi
                                    </td>
                                </tr>
                                <tr id='f7a' class='tr-quis'>
                                    <td valign='top'>Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk
                                        wawancara?<br /> Contoh pengisian : 3 </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='number' name='f7a' class='inp-f7a' size='5' value='' maxlength='3'
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        perusahaan/instansi/institusi
                                    </td>
                                </tr>
                                <tr id='f10' class='tr-quis'>
                                    <td valign='top'>Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='radio' name='f1001' class='inp-f10' value='Tidak'> Tidak <span
                                            class='hl'>(f10-01)</span><br />
                                        <input type='radio' name='f1001' class='inp-f10'
                                            value='Tidak, tapi saya sedang menunggu hasil lamaran kerja'> Tidak, tapi saya
                                        sedang menunggu hasil lamaran kerja <span class='hl'>(f10-01)</span><br />
                                        <input type='radio' name='f1001' class='inp-f10'
                                            value='Ya, saya akan mulai bekerja dalam 2 minggu ke depan'> Ya, saya akan mulai
                                        bekerja dalam 2 minggu ke depan <span class='hl'>(f10-01)</span><br />
                                        <input type='radio' name='f1001' class='inp-f10'
                                            value='Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan'> Ya, tapi
                                        saya belum pasti akan bekerja dalam 2 minggu ke depan <span
                                            class='hl'>(f10-01)</span><br />
                                        <input type='radio' name='f1001' class='inp-f10' value='Lainnya'
                                            id='inp-f1001-lainnya'>Lainnya: <input type='text' name='f1002' id='inp-f1002'>
                                        <span class='hl'>(f10-01 - f10-02)</span><br />
                                    </td>
                                </tr>
                                <tr id='f16' class='tr-quis'>
                                    <td valign='top'>Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan
                                        Anda, mengapa Anda mengambilnya?<br /> * Jika belum/tidak bekerja, silakan pilih Lainnya
                                        dan jelaskan alasan tidak/belum bekerja </td>
                                    <td valign='top'>:</td>
                                    <td>
                                        <input type='checkbox' name='f1601' class='inp-f16'
                                            value='Pertanyaan tidak sesuai, pekerjaan saya saat ini sudah sesuai dengan pendidikan saya'>
                                        Pertanyaan tidak sesuai, pekerjaan saya saat ini sudah sesuai dengan pendidikan saya
                                        <span class='hl'>(f1601)</span><br />
                                        <input type='checkbox' name='f1602' class='inp-f16'
                                            value='Saya belum mendapatkan pekerjaan yang lebih sesuai dengan pendidikan saya'>
                                        Saya belum mendapatkan pekerjaan yang lebih sesuai dengan pendidikan saya <span
                                            class='hl'>(f1602)</span><br />
                                        <input type='checkbox' name='f1603' class='inp-f16'
                                            value='Di pekerjaan ini saya memperoleh prospek karir yang baik'> Di pekerjaan ini
                                        saya memperoleh prospek karir yang baik <span class='hl'>(f1603)</span><br />
                                        <input type='checkbox' name='f1604' class='inp-f16'
                                            value='Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya '>
                                        Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan
                                        saya <span class='hl'>(f1604)</span><br />
                                        <input type='checkbox' name='f1605' class='inp-f16'
                                            value='Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya'>
                                        Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding
                                        posisi sebelumnya <span class='hl'>(f1605)</span><br />
                                        <input type='checkbox' name='f1606' class='inp-f16'
                                            value='Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini'> Saya
                                        dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini <span
                                            class='hl'>(f1606)</span><br />
                                        <input type='checkbox' name='f1607' class='inp-f16'
                                            value='Pekerjaan saya saat ini lebih aman/terjamin/secure'> Pekerjaan saya saat ini
                                        lebih aman/terjamin/secure <span class='hl'>(f1607)</span><br />
                                        <input type='checkbox' name='f1608' class='inp-f16'
                                            value='Pekerjaan saya saat ini lebih menarik'> Pekerjaan saya saat ini lebih menarik
                                        <span class='hl'>(f1608)</span><br />
                                        <input type='checkbox' name='f1609' class='inp-f16'
                                            value='Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll'>
                                        Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang
                                        fleksibel, dll <span class='hl'>(f1609)</span><br />
                                        <input type='checkbox' name='f1610' class='inp-f16'
                                            value='Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya'> Pekerjaan
                                        saya saat ini lokasinya lebih dekat dari rumah saya <span
                                            class='hl'>(f1610)</span><br />
                                        <input type='checkbox' name='f1611' class='inp-f16'
                                            value='Pekerjaan saya saat ini dpt lebih menjamin kebutuhan keluarga'> Pekerjaan
                                        saya saat ini dpt lebih menjamin kebutuhan keluarga <span
                                            class='hl'>(f1611)</span><br />
                                        <input type='checkbox' name='f1612' class='inp-f16'
                                            value='Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya'>
                                        Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan
                                        pendidikan saya <span class='hl'>(f1612)</span><br />
                                        <input type='checkbox' id='inp-f1613a' name='f1613a' class='inp-f16'
                                            value='Lainnya'>Lainnya: <input type='text' id='inp-f1613b' name='f1613b'> <span
                                            class='hl'>(f1613a - f1613b)</span><br />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    {{-- <h5>Kuesioner Opsional</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <label> F2 - Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                                    dilaksanakan di program studi anda?</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Perkuliahan</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Demonstrasi</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Partisipasi dalam proyek riset</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Magang</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Praktikum</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Kerja lapangan</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32px" class="col-md-6 col-sm-12">
                                            <label class="weight-600">Diskusi</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="1">Sangat besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="2">Besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="3" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="3">Cukup besar</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="4" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="4">Kurang</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" id="5" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="5">tidak sama
                                                    sekali</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> F4 - Bagaimana Anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</label>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Melalui iklan</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Melamar langsung ke
                                        perusahaan</label>
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
                                    <label class="custom-control-label" for="customCheck4">Dihubungi oleh
                                        perusahaan</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Melalui Kemenakertrans</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Melalui agen tenaga
                                        kerja</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Melalui relasi (misalnya dosen,
                                        orang tua, saudara, teman, dll.)</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Melalui magang</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Meneruskan pekerjaan yang sama,
                                        semasa kuliah</label>
                                </div>
                                <div style="margin-left: 32px" class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Lainnya</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> F6 - Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat
                                        atau e-mail) sebelum anda memperoleh pekerjaan pertama?</label>
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> F7 - Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk
                                        wawancara?</label>
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Apa alasan Anda tetap bekerja di industri/usaha yang tidak sesuai dengan bidang
                                        ilmu Anda</label>
                                    <select class="custom-select form-control">
                                        <option value="">Pilih...</option>
                                        <option value="1">Belum mendapatkan pekerjaan yang lebih sesuai.</option>
                                        <option value="2">Prospek karir yang baik.</option>
                                        <option value="3">Lebih senang bekerja di area pekerjaan yang tidak
                                            berhubungan dengan pendidikan.</option>
                                        <option value="4">Dipromosikan ke posisi yang lebih baik</option>
                                        <option value="5">Memperoleh pendapatan yang lebih tinggi.</option>
                                        <option value="6">Lebih aman/terjamin/secure/menarik</option>
                                        <option value="7">Dapat mengambil pekerjaan tambahan</option>
                                        <option value="8">Lokasinya lebih dekat dari rumah.</option>
                                        <option value="9">Sejak awal karir, pekerjaan saya tidak berhubungan dengan
                                            Pendidikan.</option>
                                        <option value="10">Lainnya.....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Pada pertanyaan di atas, tuliskan jawaban Anda jika pilihan Anda adalah
                                        "Lainnya"</label>
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </section> --}}
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
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var APP_URL = {!! json_encode(url('/')) !!}

            $(".tab-wizard1").steps({
                headerTag: "h5",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Submit"
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    $('.steps .current').prevAll().addClass('disabled');
                },
                onFinished: function(event, currentIndex) {
                    var inputs = $('#kuesioner :input');
                    var values = {
                        "_token": "{{ csrf_token() }}",
                    };

                    inputs.each(function() {
                        values[this.name] = $(this).val();
                    });

                    $.ajax({
                        url: 'kuesioner-form',
                        type: 'post',
                        data: values,
                        beforeSend: function() {},
                        success: function(res) {
                            console.log(res);
                            location.reload()
                        },
                        error: function(error) {
                            var err = JSON.parse(error.responseText)
                            console.error('Errors', err);

                            inputs.each(function() {
                                $('#' + this.name + '_errors').remove()
                                if (err.errors[this.name])
                                    $(this).after('<div id="' + this.name +
                                        '_errors" class="text-danger">' + err
                                        .errors[this.name] + '</div>')
                            });
                        }
                    });
                }
            });
        })
    </script>
@endpush
