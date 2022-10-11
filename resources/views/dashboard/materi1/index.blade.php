@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-3">
                <div class="card-body">

                    {{-- tables --}}
                    <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Judul Materi</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nim }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>
                                        @php
                                            if($user->materi1 == 0){
                                                $judul = "-";
                                            }else{
                                                $judul = $user->article->nama_article;
                                            }
                                            echo $judul;
                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                            $value = intval((100 / 8) * $user->materi1);
                                        @endphp
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                aria-label="Example with label" style="width: {{ $value }}%;"
                                                aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100">
                                                {{ $value }}%</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--  end tables  --}}

                </div>
            </div>
        </div>
    </div>
@endsection