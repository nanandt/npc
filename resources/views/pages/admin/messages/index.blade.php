@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Pesan</h1>
    </div>

    <div class="row">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
              {{-- $items diambil dri travelpacakgecontroller di fungsi index --}}
              <tr>
                <td>{{ $item->message_id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pesan }}</td>
                <td>
                  <a href="{{ route('messages.edit', $item->message_id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('messages.destroy', $item->message_id) }}" method="POST"
                    class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                      <i class="fa fa-trash">

                      </i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
                <tr>
                  <td colspan="7" class="text-center">
                    Data Kosong
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection