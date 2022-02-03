<div class="col-md-12 content-center" id="who-we-are">
  
  <h3 class="text-center">NEWS</h3>
  
  <p class="lead text-center">
    Starting up the team project <br>
    Our recent actions:
  </p>

  <section class="pt-5 pb-5">

    <div class="row">

      <div class="col-6">
        <h3 class="mb-3">New Articles</h3>
      </div>

      <!-- carousel controls -->
      <div class="col-6 text-end">

        <button 
          class="btn btn-primary btn-sm" 
          type="button" 
          data-bs-target="#carouselExampleControls" 
          data-bs-slide="prev"
        >

          <span 
            class="carousel-control-prev-icon" 
            aria-hidden="true"
          ></span>

          <span class="visually-hidden">Previous</span>

        </button>

        <button 
          class="btn btn-primary btn-sm" 
          type="button" 
          data-bs-target="#carouselExampleControls" data-bs-slide="next"
        >

          <span 
            class="carousel-control-next-icon" 
            aria-hidden="true"
          ></span>

          <span class="visually-hidden">Next</span>

        </button>

      </div>
        
      <!-- carousel items -->
      <div class="col-12">
        <div 
          id="carouselExampleControls" 
          class="carousel slide" 
          data-bs-ride="carousel"
        >

          <div class="carousel-inner">

            <div class="carousel-item active">

              <div class="row">

                @foreach ($articles as $article)

                  <a 
                    class="normal-style col-md-4 mb-3"
                    href="{{ 
                      route('home.articles.show', $article->id) 
                    }}"
                  >

                    <div class="card">

                        <img 
                          class="img-fluid" 
                          alt="100%x280" 
                          src="{{ asset('storage/'.$article->image) }}"
                        >

                        <div class="card-body">
                          <h4 
                            class="card-title"
                          >
                            {{ $article->title }}
                          </h4>
                          
                          <p 
                            class="card-text"
                          >
                            {{ Str::limit($article->content, 20) }}
                          </p>

                        </div>

                    </div>
                  </a>
                @endforeach

              </div>

            </div>

            <div class="carousel-item">

              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

              </div>

            </div>

            <div class="carousel-item">

              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="card">

                      <img 
                        class="img-fluid" 
                        alt="100%x280" 
                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d"
                      >

                      <div class="card-body">
                        <h4 
                          class="card-title"
                        >
                          Special title treatment
                        </h4>
                        
                        <p 
                          class="card-text"
                        >
                          With supporting text below as a natural lead-in to additional content.
                        </p>

                      </div>

                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>

    </div>

  </section>
  
</div>