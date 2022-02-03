<div class="ml-5 mr-5 mt-5">

  @isset($article)
    {!! Form::hidden('id', $article->id) !!}
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
    {!! Form::text('title', 'title') !!}
  </div>

  <div>
    {!! Form::text('content', 'content') !!}
  </div>

  <div class="form-group">
    <label for="image">Upload image for the article</label>
    <input 
      id="image" 
      type="file" 
      class="form-control-file"
      name="image"
      accept="image/png, image/gif, image/jpeg"
    >

    @isset($article)
      <img 
        class="img-fluid mt-5"
        src="{{ asset('storage/'.$article->image) }}" 
        alt="{{ $article->title }}"
      >
    @endisset

  </div>

  <div class="d-flex align-items-center justify-content-end">

    <a
      class="btn btn-warning mr-5"
      href="{{ route('admin.articles.index') }}"
    >
      Cancel
    </button>

    <button
      type="submit"
      class="btn btn-primary"
    >
      Submit
    </button>

  </div>

</div>