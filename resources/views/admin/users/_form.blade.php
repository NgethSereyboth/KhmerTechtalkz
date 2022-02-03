<div class="ml-5 mr-5 mt-5">

  @isset($user)
    {!! Form::hidden('id', $user->id) !!}
  @endisset

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

  <div>
    {!! Form::text('name', 'name') !!}
  </div>

  <div>
    {!! Form::text('email', 'email')->type('email') !!}
  </div>

  <div>
    {!! Form::text('password', 'password')->type('password') !!}
  </div>

  <div class="form-group">

    <label 
      for="role"
    >
      Roles
    </label>

    <select 
      id="role"
      class="form-control" 
      name="role_id"
    >
      @foreach ($roles as $role)
        <option
          value="{{ $role->id }}"

          @if (isset($user) && $user->role_id == $role->id)
            selected
          @endif

        >
          {{ $role->label }}
        </option>
      @endforeach
    </select>

  </div>

  <div class="d-flex align-items-center justify-content-end">

    <a
      class="btn btn-warning mr-5"
      href="{{ route('admin.users.index') }}"
    >
      Cancel
    </a>

    <button
      type="submit"
      class="btn btn-primary"
    >
      Submit
    </button>

  </div>

</div>