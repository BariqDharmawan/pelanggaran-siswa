@extends('layouts.app')

@section('content')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <center><img alt="image" src="{{ asset('img/avatar/school.png') }}" style="width: 30%;"></center>
                    <div class="login-brand">Sistem Informasi Pelanggaran Siswa</div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" tabindex="1" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        Username harap diisi
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Password</label>
                                    <input type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Password harap diisi
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-blue btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
