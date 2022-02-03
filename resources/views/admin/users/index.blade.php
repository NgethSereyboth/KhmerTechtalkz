@extends('admin.index')

@section('admin.create')
  <a 
    id="create-article" 
    type="button" 
    class="btn btn-info" 
    href="{{ route('admin.users.create') }}"
  >
    <i class="fas fa-align-left"></i>
    <span>Create</span>
  </a>
@endsection

@section('admin.content')

  <table class="table table-sm mr-5 ml-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      @include(
        'layouts._partials.pop_up_modal',
        [ 'needSavedButton' => 'false' ] 
      )

      @foreach ($users as $user)

        <tr class="admin-user-row">

          <th scope="row">{{ $user->id }}</th>
          
          <td 
            class="admin-user-title"
            data-title="{{ $user->name }}"
          >
            {{ Str::limit($user->name, 20) }}
          </td>

          <td
            class="admin-user-content"
            data-content="{{ $user->email }}"
          >
            {{ Str::limit($user->email, 20) }}
          </td>
          
          <td
            class="admin-user-role"
            data-content="{{ $user->role->label }}"
          >
            {{ $user->role->label }}
          </td>

          <td class="d-flex align-items-center justify-content-center">
            
            <a 
              href="{{ route('admin.users.edit', $user->id) }}" 
              class="btn btn-primary mr-3"
            >
              Edit
            </a>
            
            <form 
              action="
                {{ route('admin.users.destroy', $user->id) }}
              "
              method="post"
            >
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button
                type="submit"                
                class="btn btn-danger"
              >
                Delete
              </button>
            </form>
          
          </td>
        </tr>

      @endforeach
      
    </tbody>
  </table>

@endsection