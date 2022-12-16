@extends('admin.layouts.main')

@section('content')
    <div class="row mb-12">
        <div class="col-md-6 col-lg-12 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Overloop's Promo</h5>
                    <a href="{{ url('/admin/promo/create') }}" class="btn btn-primary" title="Add New Product">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Promo
                    </a>


                    <p><br></p>
                    <div class="table-primary">
                        <table class="table" id="DataTables">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tanggal Mulai Berlaku</th>
                                    <th>Tanggal Kadaluarsa</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->tanggal_mulai_berlaku }}</td>
                                        <td>{{ $item->tanggal_kadaluarsa }}</td>
                                        <td>
                                            <a href="{{ url('/admin/promo/' . $item->id) }}" title="View promo"><button
                                                    class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                    View</button></a>
                                            <a href="{{ url('/admin/promo/' . $item->id . '/edit') }}"
                                                title="Edit promo"><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/promo' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete promo"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $promo->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
