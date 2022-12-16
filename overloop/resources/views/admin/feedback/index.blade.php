@extends('admin.layouts.main')

@section('content')
<div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Feedback</h5>
          <a href="{{ url('/admin/feedback/create') }}" class="btn btn-primary" title="Add New Feedback">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Feedback
          </a>

          <p><br></p>

<div class="table-primary">
  <table class="table" id="DataTables">
      <thead>
                                    <tr>
                                        <th>#</th><th>Kolomnama</th><th>Email</th><th>Kolomkomentar</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($feedback as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kolomnama }}</td><td>{{ $item->email }}</td><td>{{ $item->kolomkomentar }}</td>
                                        <td>
                                            <a href="{{ url('/admin/feedback/' . $item->id) }}" title="View feedback"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/feedback/' . $item->id . '/edit') }}" title="Edit feedback"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/feedback' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete feedback" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $feedback->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
