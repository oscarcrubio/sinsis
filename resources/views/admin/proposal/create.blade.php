@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nueva Propuesta</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="" method="post">
                    <label for="">Descripcion</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <!--<label for="">Descripcion:</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>-->
                    <!--<label for="">Empresa</label>-->
                </form>
                    <div class="container-fluid">
                            <br />
                        <h3 align="center">Image Upload in Laravel using Dropzone</h3>
                            <br /> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h3 class="panel-title">Select Image</h3>
                            </div>
                            <div class="panel-body">
                            <form id="dropzoneForm" class="dropzone" action="{{ route('create.upload') }}">
                                @csrf
                            </form><br>
                                <div align="center">
                                    <button type="button" class="btn btn-info" id="submit-all">Upload</button>
                                </div>
                            </div>
                        </div>
                            <br />
                    </div>
            </div>
        </div>
    </div>
</section>
        <script type="text/javascript">
            Dropzone.options.dropzoneForm = {
                autoProcessQueue : false,
                acceptedFiles : ".jpg, .png, .pdf, .gif, .text, .doc, .docx, .jpeg",
                initi:function(){
                    var submitButton = document.querySelector("#submit-all");
                    myDropzone = this;

                    submitButton.addEventListener('click', function(){
                        myDropzone.processQueue();
                    });
                    this.on("complete",function(){
                        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                            {
                                var _this = this;
                                _this.removeAllFiles();
                            }
                    });
                }
            };
        </script>
@endsection