@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nuevo Proyecto</span>
    </header>
    <div class="container projects-container"> 
      @include('components.alerts')       
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="{{ route('create-project') }}" method="post" id="create-project">
                  @csrf
                    <label for="">Nombre del Proyecto:</label>
                    <input type="text" name="project_name" id="">
                    <label for="">Descripcion:</label>
                    <textarea name="project_description" id="" cols="30" rows="10"></textarea>
                    <label for="">Empresa</label>
                    <select name="project_enterprise" id="project-enterprise">
                        @forelse ($enterprises as $enterprise)
                            <option value={{ $enterprise->id }}>{{ $enterprise->name }}</option>
                        @empty
                            <option value="">Aun no hay empresas registradas</option>
                        @endforelse
                    </select>
                </form>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Agregar Nueva Empresa
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">                       
                        <div class="card-body">
                         <form action="" method="post" id="create-enterprise">
                          <div class="loader" id="enterprise-loader">
                            <object data={{ asset('images/icons/loader.svg') }} type=""></object>
                          </div>
                            @csrf
                             <label for="">Nombre de la empresa:</label>
                             <input type="text" name="enterprise-name" id="">
                             <label for="">Razon Social:</label>
                             <input type="text" name="enterprise-business-name" id="">
                             <label for="">Ubicacion</label>
                             <input type="text" name="enterprise-location" id="">
                             <label for="">Administrador</label>
                             <select name="enterprise-manager" id="select-manager">
                                 @forelse ($managers as $manager)
                                     <option value={{ $manager->id }}>{{ $manager->name }}</option>
                                 @empty
                                 <option value="">Aun no hay Administradores Registrados</option>
                                 @endforelse
                             </select>
                             <div class="accordion" id="accordionExample-2">
                                <div class="card">
                                  <div class="card-header" id="headingOne-2">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                        Agregar Nuevo Administrador
                                      </button>
                                    </h5>
                                  </div>                              
                                  <div id="collapseOne-2" class="collapse" aria-labelledby="headingOne-2" data-parent="#accordionExample-2">
                                    <div class="card-body">
                                        <form action="" method="post" id="create-manager">
                                          <div class="loader" id="manager-loader">
                                            <object data={{ asset('images/icons/loader.svg') }} type=""></object>
                                          </div>
                                          @csrf
                                          <label for="">Nombre responsable</label>
                                          <input type="text" name="manager-name" id="">
                                          <label for="">Correo Electronico</label>
                                          <input type="email" name="manager-email" id="">
                                          <label for="">Cargo</label>
                                          <input type="text" name="manager-charge" id="">
                                          <input type="submit" name="create-manager-button" value="Guardar Nuevo Administrador">
                                        </form>
                                    </div>
                                  </div>
                                </div>                                                                
                              </div>
                         </form>
                         <input type="submit" name="create-enterprise-button" value="Guardar Nueva Empresa">
                        </div>                        
                      </div>                      
                    </div>                    
                  </div>
                  <input type="submit" name="create-project-button" value="Crear Proyecto">
            </div>
        </div>
    </div>    
</section>
@endsection