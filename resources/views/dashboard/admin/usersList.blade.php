@extends('dashboard.admin')
@section('content')
  <h1 class="h3 mb-3"><strong>Users</strong> Dashboard</h1>
  <div class="card flex-fill">
    <div class="card-header">
      <h5 class="card-title mb-0">List of Users</h5>
    </div>
    <table class="table table-hover my-0">
      <thead>
        <tr>
          <th>Username</th>
          <th>E-mail</th>
          <th>Roles</th>
          <th>Email verified at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->menuroles }}</td>
            <td>{{ $user->email_verified_at }}</td>
            <td>
              <a href="{{ url('/users/' . $user->id) }}" class="btn btn-block btn-success">View</a>
              <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
              @if( $you->id !== $user->id )
              <form action="{{ route('users.destroy', $user->id ) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-block btn-danger">Delete User</button>
              </form>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection