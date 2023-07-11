<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
<div class="d-flex justify-content-center ">

    <div style="">
        <div class="row">
            <div class="">
                <div>
                    <h3 class="text-center my-4">Table Ijin Lembur</h3>
                    <hr>
                </div>
                
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('surat.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"> No.</th>
                                    <th scope="col"> kepada</th>
                                    <th scope="col"> hal</th>
                                    <th scope="col"> nama</th>
                                    <th scope="col"> jabatan</th>
                                    <th scope="col"> divisi</th>
                                    <th scope="col"> no</th>
                                    <th scope="col"> hari_tanggal</th>
                                    <th scope="col"> jam_kerja_normal</th>
                                    <th scope="col"> jam_kerja_lembur</th>
                                    <th scope="col"> guna</th>
                                    <th scope="col"> nama_divisi</th>
                                    <th scope="col"> jabatan_divisi</th>
                                    <th scope="col"> nama_penyetujui</th>
                                    <th scope="col"> jabatan_penyetujui</th>
                                    <th scope="col"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($surats as $key=>$post)
                                    <tr>
                                        <td>{{ $loop->index }}</td>
                                        <td>{{ $post->kepada }}</td>
                                        <td>{{ $post->hal }}</td>
                                        <td>{{ $post->nama }}</td>
                                        <td>{{ $post->jabatan }}</td>
                                        <td>{{ $post->divisi }}</td>
                                        <td>{{ $post->no }}</td>
                                        <td>{{ $post->hari_tanggal }}</td>
                                        <td>{{ $post->jam_kerja_normal }}</td>
                                        <td>{{ $post->jam_kerja_lembur }}</td>
                                        <td>{{ $post->guna }}</td>
                                        <td>{{ $post->nama_divisi }}</td>
                                        <td>{{ $post->jabatan_divisi }}</td>
                                        <td>{{ $post->nama_penyetujui }}</td>
                                        <td>{{ $post->jabatan_penyetujui }}</td>

                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('surat.destroy', $post->id) }}" method="POST">

                                                <a href="{{ route('surat.show', $post->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>

                                                <a href="{{ route('surat.edit', $post->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $surat->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>

</body>

</html>
