@extends('back.layout.guest-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Guest Form')
@section('content')
    <div class="p-4 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Survey Kepuasan Pengguna Lulusan Jurusan Teknik Informatika dan Komputer Politeknik
                Negeri Jakarta
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </h4>
            <br>
        </div>
        <form id="guest-form" method="POST" action="{{ url('user/guest-form-create') }}">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Perusahaan<span style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_company_name" name="company_name" class="form-control" type="text"
                        placeholder="Nama Perusahaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Pengguna<span style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_name" name="name" class="form-control" type="text"
                        placeholder="Nama Pengisi/Pengguna alumni" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Posisi Jabatan<span style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_position" name="position" class="form-control" type="text" placeholder="Posisi Jabatan"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email Pengguna</label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_email" name="email" class="form-control" value="bootstrap@example.com" type="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_phone" name="phone" class="form-control" value="" type="number"
                        placeholder="081xxxxxxxx">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Alumni yang akan dinilai<span
                        style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_alumni_name" name="alumni_name" class="form-control" type="text"
                        placeholder="Nama Alumni JTIK PNJ" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Asal Program Studi dari Alumni yang akan dinilai<span
                        style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <select id="p_alumni_program" name="alumni_program" class="custom-select col-12" required>
                        <option selected="">Choose...</option>
                        <option value="1">Teknik Informatika</option>
                        <option value="2">Teknik Multimedia Jaringan</option>
                        <option value="3">Teknik Multimedia Digital</option>
                        <option value="3">Teknik Komputer Jaringan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenjang Pendidikan lulusan yang dinilai<span
                        style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_alumni_degree" name="alumni_degree" class="form-control" type="text"
                        placeholder="Jenjang Pendidikan" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tahun Lulusan<span style="color: red">*</span></label>
                <div class="col-sm-12 col-md-10">
                    <input id="p_alumni_graduation" name="alumni_graduation" class="form-control" type="text"
                        placeholder="Tahun Lulusan (eg. 2017/2018)" required>
                </div>
            </div>
            <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <td colspan="3"><b>Survey Kepuasan Pengguna Lulusan Jurusan Teknik Informatika dan Komputer
                                Politeknik
                                Negeri Jakarta
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </b></td>
                    </tr>
                    <tr id="q1">
                        <td valign="top">Bagaimana <b>sikap/etika</b> lulusan kami yang bekerja di tempat
                            Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q1sangatbaik" name="ethics" value="1" required="true">
                            <label for="q1sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q1baik" name="ethics" value="2" required="true">
                            <label for="q1baik">Baik</label><br>
                            <input type="radio" id="q1cukup" name="ethics" value="3" required="true">
                            <label for="q1cukup">Cukup</label><br>
                            <input type="radio" id="q1kurang" name="ethics" value="4" required="true">
                            <label for="q1kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q2">
                        <td valign="top">Bagaimana <b>keahlian</b> lulusan kami yang bekerja di tempat Anda
                            berdasarkan
                            bidang ilmunya?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q2sangatbaik" name="competency" value="1" required="true">
                            <label for="q2sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q2baik" name="competency" value="2" required="true">
                            <label for="q2baik">Baik</label><br>
                            <input type="radio" id="q2cukup" name="competency" value="3" required="true">
                            <label for="q2cukup">Cukup</label><br>
                            <input type="radio" id="q2kurang" name="competency" value="4" required="true">
                            <label for="q2kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q3">
                        <td valign="top">Bagaimana kemampuan <b>berbahasa asing</b> lulusan kami yang bekerja di
                            tempat
                            Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q3sangatbaik" name="language" value="1" required="true">
                            <label for="q3sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q3baik" name="language" value="2" required="true">
                            <label for="q3baik">Baik</label><br>
                            <input type="radio" id="q3cukup" name="language" value="3" required="true">
                            <label for="q3cukup">Cukup</label><br>
                            <input type="radio" id="q3kurang" name="language" value="4" required="true">
                            <label for="q3kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q4">
                        <td valign="top">Bagaimana kemampuan <b>penggunaan teknologi informasi</b> lulusan kami yang
                            bekerja di tempat Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q4sangatbaik" name="tech" value="1" required="true">
                            <label for="q4sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q4baik" name="tech" value="2" required="true">
                            <label for="q4baik">Baik</label><br>
                            <input type="radio" id="q4cukup" name="tech" value="3" required="true">
                            <label for="q4cukup">Cukup</label><br>
                            <input type="radio" id="q4kurang" name="tech" value="4" required="true">
                            <label for="q4kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q5">
                        <td valign="top">Bagaimana kemampuan <b>berkomunikasi</b> lulusan kami yang bekerja di tempat
                            Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q5sangatbaik" name="communication" value="1"
                                required="true">
                            <label for="q5sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q5baik" name="communication" value="2" required="true">
                            <label for="q5baik">Baik</label><br>
                            <input type="radio" id="q5cukup" name="communication" value="3" required="true">
                            <label for="q5cukup">Cukup</label><br>
                            <input type="radio" id="q5kurang" name="communication" value="4" required="true">
                            <label for="q5kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q6">
                        <td valign="top">Bagaimana kemampuan <b>kerjasama</b> lulusan kami yang bekerja di tempat
                            Anda?<span style="color: red">*</span>
                        </td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q6sangatbaik" name="teamwork" value="1" required="true">
                            <label for="q6sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q6baik" name="teamwork" value="2" required="true">
                            <label for="q6baik">Baik</label><br>
                            <input type="radio" id="q6cukup" name="teamwork" value="3" required="true">
                            <label for="q6cukup">Cukup</label><br>
                            <input type="radio" id="q6kurang" name="teamwork" value="4" required="true">
                            <label for="q6kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q7">
                        <td valign="top">Bagaimana kemampuan <b>pengembangan diri</b> lulusan kami yang bekerja di
                            tempat
                            Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q7sangatbaik" name="development" value="1" required="true">
                            <label for="q7sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q7baik" name="development" value="2" required="true">
                            <label for="q7baik">Baik</label><br>
                            <input type="radio" id="q7cukup" name="development" value="3" required="true">
                            <label for="q7cukup">Cukup</label><br>
                            <input type="radio" id="q7kurang" name="development" value="4" required="true">
                            <label for="q7kurang">Kurang</label><br>
                        </td>
                    </tr>
                    <tr id="q10">
                        <td valign="top">Bagaimana <b>kesiapan terjun di masyarakat</b> lulusan kami yang bekerja di
                            tempat Anda?<span style="color: red">*</span></td>
                        <td valign="top" style="width:5px;">:</td>
                        <td>
                            <input type="radio" id="q10sangatbaik" name="readiness" value="1" required="true">
                            <label for="q10sangatbaik">Sangat Baik</label><br>
                            <input type="radio" id="q10baik" name="readiness" value="2" required="true">
                            <label for="q10baik">Baik</label><br>
                            <input type="radio" id="q10cukup" name="readiness" value="3" required="true">
                            <label for="q10cukup">Cukup</label><br>
                            <input type="radio" id="q10kurang" name="readiness" value="4" required="true">
                            <label for="q10kurang">Kurang</label><br>
                        </td>
                    </tr>

                    <tr id="q8" class="tr-quis">
                        <td valign="top">Bagaimana harapan Anda terhadap lulusan Jurusan Teknik Informatika dan
                            Komputer
                            Politeknik
                            Negeri Jakarta?<span style="color: red">*</span>
                        </td>
                        <td valign="top">:</td>
                        <td>
                            <textarea name="remarks" cols="50" maxlength="255" required="true"></textarea>
                        </td>
                    </tr>
                    <tr id="q9" class="tr-quis">
                        <td valign="top">Saran dan masukan untuk Jurusan Teknik Informatika dan Komputer Politeknik
                            Negeri Jakarta?<span style="color: red">*</span>
                        </td>
                        <td valign="top">:</td>
                        <td>
                            <textarea name="recommendation" cols="50" maxlength="255" required="true"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3" style="width: 250px">Submit
                </button>
            </div>
        </form>

    </div>
@endsection
