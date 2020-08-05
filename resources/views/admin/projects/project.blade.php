@extends('admin.layout')
@section('title', $project->name.' | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
    @include('components.alerts')
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{ $project->name }}</h1>
                <span class="text-white-2 opacity6 alt-font">{{ $project->description }}</span>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
<!-- end page title section --> 
<!-- start blog content section --> 
<section>
    <div class="container">
        <div class="row">
            <aside class="col-12 col-lg-3">               
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Estado</span></div>                        
                        @if ($project->status == 1)
                        <a class="btn btn-very-small btn-transparent-white text-uppercase w-100 project-active" >proyecto activo</a>
                        @else
                        <a class="btn btn-very-small btn-transparent-white border text-uppercase w-100" href="portfolio-boxed-grid-overlay.html">Proyecto Cerrado</a>
                        @endif
                    </div> 
                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>Administradores</span></div>
                        <ul class="latest-post position-relative" id="users-project-managers">
                        @foreach ($project->users as $user)
                            <li class="media">                          
                                <div class="media-body text-small"><a class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">{{ $user->name }}</span></a> <span class="d-block text-medium-gray text-small">{{ $user->email }}</span></div>
                            </li>     
                        @endforeach
                        </ul>
                    </div>
                    <form action="">
                        @csrf
                        <input type="hidden" name="project" value={{ $project->id }}>
                        <select name="" id="users-project">
                            <option value="null" class="assign-user"selected="selected" disabled>Agregar Administrador</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" class="assign-user">{{ $user->name }}</option>
                            @endforeach
                        </select>                    
                </form>
                </div>                
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Contenido</span></div>
                    <ul class="list-style-6 margin-50px-bottom text-small">
                        <li><a href="blog-masonry.html">Entrevistas</a><span>{{ count($project->enterviews) }}</span></li>
                        <li><a href="blog-masonry.html">Diagnosticos</a><span>05</span></li>
                        <li><a href="blog-masonry.html">Propuestas</a><span>08</span></li>                       
                    </ul>   
                </div>                                              
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Empresa</span></div>
                    <ul class="list-style-6 margin-20px-bottom text-small">
                        <li><a href="blog-grid.html">{{ $enterprise->name }}</a></li>                        
                    </ul>   
                </div>
            </aside>
            <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                <!-- start post item -->
                <span>Ultima modificación: {{ date_format($project->updated_at, 'g:ia')}} - </span> <span  id="project-date" class="d-none">{{ date_format($project->updated_at, 'l d F Y')}}</span>
                <span id="date-format"></span>
                <hr>
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">                    
                    <div class="col-12 col-lg-12 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a class="text-extra-dark-gray margin-30px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Entrevistas</a>
                            @forelse ($project->enterviews as $key => $enterview)                           
                            <div class="accordion" id="enterview-project-{{ $project->id }}">
                                <div class="card">
                                  <div class="card-header" id="heading-{{ $enterview->id }}">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $enterview->id }}" aria-expanded="true" aria-controls="collapse-{{ $enterview->id }}">
                                        <span>Entrevista {{ $enterview->id }} | {{ $enterview->created_at }}</span>
                                      </button>
                                    </h5>
                                  </div>                              
                                  <div id="collapse-{{ $enterview->id }}" class="collapse" aria-labelledby="heading-{{ $enterview->id }}" data-parent="#enterview-project-{{ $project->id }}">                                      
                                    <div class="card-body">
                                        @if ($enterview->id == 2)                   
                                        @foreach ($enterview->questions as $question)
                                            {{ $question->question }}<br/>
                                            {{ ($question->pivot->answer) }}<br/>
                                        @endforeach
                                        @endif
                                    </div>
                                  </div>
                                </div>                                                                
                              </div>
                            @empty
                              <div class="accordion">
                                  <div class="card">
                                    <div class="card-header">
                                        Aun no hay entrevistas
                                    </div>
                                  </div>
                              </div>
                            @endforelse                            
                            <div class="acordion">
                                <div class="card">                                    
                                    <a class="btn btn-link" href={{ route('create-enterview-project',$project->id) }} type="button">+ Crear nueva entrevista</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <a class="text-extra-dark-gray margin-30px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Diagnostico</a>
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-4 blog-image no-padding md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right text-center">                        
                        <a href={{  'storage/'.$diagnostic->pdf_file}} download><img src={{ asset('images/icons/pdf_icon.webp') }} alt="" style="width: 100px;" title="Descargar"></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-gallery-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">The world’s business leaders</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jennifer Smith</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="acordion col-12">
                        <div class="card">                                    
                            <a class="btn btn-link" href={{ route('create-enterview',$project->id) }} type="button">+ atualizar diagnostico</a>
                        </div>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-slider-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-slider-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">You are what you are seen to be</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Willie Clark</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href={{ route('create-proposals',$project->id) }}>Crear Propuesta</a>
                    </div>
                </div>
                <!-- end post item --> 
            </main>            
        </div>
    </div>
</section>
@endsection