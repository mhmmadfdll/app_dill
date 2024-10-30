@extends('layouts.master')
@section('tittle','user')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Edit Data User</h3>
                        <a class="btn btn-warning" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/user/{{ $user->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                       value="{{ $user->name }}"
                                    id="name"
                                    placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                       value="{{ $user->email }}"
                                    id="email"
                                    placeholder=""
                                />
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection