@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('cabang-olahraga.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama Cabang Olahraga</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Cabang Olaraga" value="{{ old('nama') }}">
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block">
          Simpan
        </button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
