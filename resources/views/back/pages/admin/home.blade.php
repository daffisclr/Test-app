@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Survey Kepuasan Pengguna Lulusan Jurusan Teknik Informatika dan Komputer Politeknik
                Negeri Jakarta
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </h4>
            {{-- <p class="mb-30">jQuery Step wizard</p> --}}
            <br>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Perusahaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Pengguna</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Pengisi/Pengguna alumni">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Posisi Jabatan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Posisi Jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email Pengguna</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" value="bootstrap@example.com" type="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" value="1-(111)-111-1111" type="tel">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Alumni yang akan dinilai</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Nama Alumni JTIK PNJ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Asal Program Studi dari Alumni yang akan dinilai</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12">
                        <option selected="">Choose...</option>
                        <option value="1">Teknik Informatika</option>
                        <option value="2">Teknik Multimedia Jaringan</option>
                        <option value="3">Teknik Multimedia Digital</option>
                        <option value="3">Teknik Komputer Jaringan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan lulusan yang dinilai</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="Jenjang Pendidikan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tahun Lulusan</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="number" placeholder="Tahun Lulusan">
                </div>
            </div>
            <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <td colspan="4"><b>Survey Kepuasan Pengguna Lulusan Jurusan Teknik Informatika dan Komputer
                                Politeknik
                                Negeri Jakarta
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </b></td>
                    </tr>
                    <tr id="q1">
                        <td valign="top">Bagaimana <b>sikap/etika</b> lulusan kami yang bekerja di tempat Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q1sangatbaik" name="q1" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q1sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q1baik" name="q1" value="Baik" required="harus diisi">
                            <label for="q1baik">Baik</label><br>
                            <input type="radio" id="q1cukup" name="q1" value="Cukup" required="harus diisi">
                            <label for="q1cukup">Cukup</label><br>
                            <input type="radio" id="q1kurang" name="q1" value="Kurang" required="harus diisi">
                            <label for="q1kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q2">
                        <td valign="top">Bagaimana <b>keahlian</b> lulusan kami yang bekerja di tempat Anda berdasarkan
                            bidang ilmunya?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q2sangatbaik" name="q2" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q2sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q2baik" name="q2" value="Baik" required="harus diisi">
                            <label for="q2baik">Baik</label><br>
                            <input type="radio" id="q2cukup" name="q2" value="Cukup" required="harus diisi">
                            <label for="q2cukup">Cukup</label><br>
                            <input type="radio" id="q2kurang" name="q2" value="Kurang" required="harus diisi">
                            <label for="q2kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q3">
                        <td valign="top">Bagaimana kemampuan <b>berbahasa asing</b> lulusan kami yang bekerja di tempat
                            Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q3sangatbaik" name="q3" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q3sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q3baik" name="q3" value="Baik" required="harus diisi">
                            <label for="q3baik">Baik</label><br>
                            <input type="radio" id="q3cukup" name="q3" value="Cukup" required="harus diisi">
                            <label for="q3cukup">Cukup</label><br>
                            <input type="radio" id="q3kurang" name="q3" value="Kurang" required="harus diisi">
                            <label for="q3kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q4">
                        <td valign="top">Bagaimana kemampuan <b>penggunaan teknologi informasi</b> lulusan kami yang
                            bekerja di tempat Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q4sangatbaik" name="q4" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q4sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q4baik" name="q4" value="Baik" required="harus diisi">
                            <label for="q4baik">Baik</label><br>
                            <input type="radio" id="q4cukup" name="q4" value="Cukup" required="harus diisi">
                            <label for="q4cukup">Cukup</label><br>
                            <input type="radio" id="q4kurang" name="q4" value="Kurang" required="harus diisi">
                            <label for="q4kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q5">
                        <td valign="top">Bagaimana kemampuan <b>berkomunikasi</b> lulusan kami yang bekerja di tempat
                            Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q5sangatbaik" name="q5" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q5sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q5baik" name="q5" value="Baik" required="harus diisi">
                            <label for="q5baik">Baik</label><br>
                            <input type="radio" id="q5cukup" name="q5" value="Cukup" required="harus diisi">
                            <label for="q5cukup">Cukup</label><br>
                            <input type="radio" id="q5kurang" name="q5" value="Kurang" required="harus diisi">
                            <label for="q5kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q6">
                        <td valign="top">Bagaimana kemampuan <b>kerjasama</b> lulusan kami yang bekerja di tempat Anda?
                        </td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q6sangatbaik" name="q6" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q6sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q6baik" name="q6" value="Baik" required="harus diisi">
                            <label for="q6baik">Baik</label><br>
                            <input type="radio" id="q6cukup" name="q6" value="Cukup" required="harus diisi">
                            <label for="q6cukup">Cukup</label><br>
                            <input type="radio" id="q6kurang" name="q6" value="Kurang" required="harus diisi">
                            <label for="q6kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q7">
                        <td valign="top">Bagaimana kemampuan <b>pengembangan diri</b> lulusan kami yang bekerja di tempat
                            Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q7sangatbaik" name="q7" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q7sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q7baik" name="q7" value="Baik" required="harus diisi">
                            <label for="q7baik">Baik</label><br>
                            <input type="radio" id="q7cukup" name="q7" value="Cukup" required="harus diisi">
                            <label for="q7cukup">Cukup</label><br>
                            <input type="radio" id="q7kurang" name="q7" value="Kurang" required="harus diisi">
                            <label for="q7kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q10">
                        <td valign="top">Bagaimana <b>kesiapan terjun di masyarakat</b> lulusan kami yang bekerja di
                            tempat Anda?</td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q10sangatbaik" name="q10" value="Sangat Baik"
                                required="harus diisi">
                            <label for="q10sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q10baik" name="q10" value="Baik" required="harus diisi">
                            <label for="q10baik">Baik</label><br>
                            <input type="radio" id="q10cukup" name="q10" value="Cukup" required="harus diisi">
                            <label for="q10cukup">Cukup</label><br>
                            <input type="radio" id="q10kurang" name="q10" value="Kurang" required="harus diisi">
                            <label for="q10kurang">Kurang</label><br>
                        </td>
                    </tr>

                    <tr id="q8" class="tr-quis">
                        <td valign="top">Bagaimana harapan Anda terhadap lulusan Jurusan Teknik Informatika dan Komputer
                            Politeknik
                            Negeri Jakarta?
                        </td>
                        <td valign="top">:</td>
                        <td>
                            <textarea name="q8" cols="50" maxlength="255" required="harus diisi"></textarea>
                        </td>
                    </tr>
                    <tr id="q9" class="tr-quis">
                        <td valign="top">Saran dan masukan untuk Jurusan Teknik Informatika dan Komputer Politeknik
                            Negeri Jakarta?
                        </td>
                        <td valign="top">:</td>
                        <td>
                            <textarea name="q9" cols="50" maxlength="255" required="harus diisi"></textarea>
                        </td>
                    </tr>



                </tbody>
            </table>
        </form>

    </div>
@endsection
