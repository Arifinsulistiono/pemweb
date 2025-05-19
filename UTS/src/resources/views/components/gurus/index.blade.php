<x-layouts.app>
    <h1 class="mb-4">Daftar Guru</h1>

    <!-- 🔍 FORM PENCARIAN DAN FILTER -->
    <form action="{{ route('guru.index') }}" method="GET" class="mb-4 row">
        <div class="col-md-4">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari berdasarkan nama atau NIP...">
        </div>
        <div class="col-md-3">
            <select name="jenis_kelamin" class="form-select text-dark">
                <option value="" class="text-dark">Filter Jenis Kelamin</option>
                <option value="L" class="text-dark" {{ request('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" class="text-dark" {{ request('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="status_kepegawaian" class="form-select text-dark">
                <option value="" class="text-dark">Filter Status</option>
                <option value="PNS" class="text-dark" {{ request('status_kepegawaian') == 'PNS' ? 'selected' : '' }}>PNS</option>
                <option value="Honorer" class="text-dark" {{ request('status_kepegawaian') == 'Honorer' ? 'selected' : '' }}>Honorer</option>
            </select>
        </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
    </form>

    <table class="table table-bordered table-striped text-dark bg-light">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Status</th>
                <th>Jabatan</th>
                <th>Pendidikan Terakhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ \Carbon\Carbon::parse($guru->tanggal_lahir)->format('d-m-Y') }}</td>
                <td>{{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $guru->alamat }}</td>
                <td>{{ $guru->no_hp }}</td>
                <td>{{ $guru->email }}</td>
                <td>{{ $guru->status_kepegawaian }}</td>
                <td>{{ $guru->jabatan }}</td>
                <td>{{ $guru->pendidikan_terakhir }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
    {{ $gurus->withQueryString()->links() }}
</div>
</x-layouts.app>
