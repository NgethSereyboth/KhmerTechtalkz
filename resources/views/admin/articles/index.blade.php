@extends('admin.index')

@section('admin.create')
  <a 
    id="create-article" 
    type="button" 
    class="btn btn-info" 
    href="{{ route('admin.articles.create') }}"
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
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      @include(
        'layouts._partials.pop_up_modal',
        [ 'needSavedButton' => 'false' ] 
      )

      @foreach ($articles as $article)

        <tr class="admin-article-row">

          <th scope="row">{{ $article->id }}</th>
          
          <td 
            class="admin-article-title"
            data-title="{{ $article->title }}"
          >
            {{ Str::limit($article->title, 20) }}
          </td>

          <td
            class="admin-article-content"
            data-content="{{ $article->content }}"
          >
            {{ Str::limit($article->content, 20) }}
          </td>
          
          <td
            class="admin-article-image"
            data-image="{{ asset('storage/'.$article->image) }}"
          >
            <div
              class="image-preview-listing"
              style="
                background: url('{{ asset('storage/'.$article->image) }}');
              "
            >
            </div>
          </td>
          <td class="d-flex align-items-center justify-content-center">
            <div 
              class="btn btn-success mr-3"
              data-controller="admin-article"
              data-action="click->admin-article#openPopUpModal"
              data-toggle="modal" 
              data-target="#pop-up-modal"
            >
              Show
            </div>
            
            <a 
              href="{{ route('admin.articles.edit', $article->id) }}" 
              class="btn btn-primary mr-3"
            >
              Edit
            </a>
            
            <form 
              action="
                {{ route('admin.articles.destroy', $article->id) }}
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