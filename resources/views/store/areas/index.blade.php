@extends("store/layouts.master")
@section('title','All Areas')

@section('body')
<section class="content">
  @include('store.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Areas</h3>
        </div>
        <div class="box-header">
          <a href="{{ route('add.areas') }}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> ADD</a>
          <br>
        </div>

        <div class="box-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered table-striped">
              <thead>

                <th>ID</th>
                <th>COUNTRY</th>
                <th>AREA NAME</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </thead>

              <tbody>
                @foreach($areas as $area)
                  <tr>
                        <td>{{$area->id}}</td>
                        <td>{{$area->country_name}}</td>
                        <td>{{$area->area_name}}</td>

                        <td>
                            <a class="btn btn-success btn-sm"
                            href="{{ route('edit.areas', $area->id) }}">
                                <i class="glyphicon glyphicon-pencil"></i></a>
                        </td>

                        <td>
                          <form method="post" action="{{ route('areas.delete', $area->id) }}
                              " data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
  
                            <button onclick="return confirm('Are you sure you want to delete?')"
                              type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i>
                            </button>
                          </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        $('#example').DataTable( {
        "order": [ 0, "desc" ]
    } );

    });
</script>
@endsection
