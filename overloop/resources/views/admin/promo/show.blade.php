@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">promo {{ $promo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/promo') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/promo/' . $promo->id . '/edit') }}" title="Edit promo"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button></a>

                        <form method="POST" action="{{ url('admin/promo' . '/' . $promo->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete promo"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Delete</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $promo->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nama </th>
                                        <td> {{ $promo->nama }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tanggal Mulai Berlaku </th>
                                        <td> {{ $promo->tanggal_mulai_berlaku }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tanggal Kadaluarsa </th>
                                        <td> {{ $promo->tanggal_kadaluarsa }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
