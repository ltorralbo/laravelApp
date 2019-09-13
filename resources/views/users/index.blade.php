@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Rut</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($users as $user)
                         <tr>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->last_name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->rut}}</td>
                        </tr>
                         @endforeach
                       
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="5" class="text-center">{{ $users->links() }}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!--end of .table-responsive-->
            </div>
        </div>
    </div>
</div>
@endsection