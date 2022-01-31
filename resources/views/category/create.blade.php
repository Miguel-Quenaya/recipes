@extends('common.mainlayout')

@section('content')


        @if(Auth::user() != null)
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-cutlery bg-red"></i> Crea tu receta</h2>
                    </div><!-- end col -->
                    <!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
</div><!-- end page-title -->
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            

                            <div class="custombox clearfix">
                                <h4 class="small-title">Receta</h4>
                                <div class="row">
                                    <div class="col-lg-12">


                                        @if(Auth::user() != null)
                                        <form action="{{route('recipe.create')}}" class="form-wrapper"  method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" value="" placeholder="NOMBRE" class="form-control">
                
                <input id="file-input" name="image" class="form-control" placeholder="IMAGEN" type="file"/>
                <input type="text" name="description" value="" placeholder="DESCRIPCION" class="form-control" >
                <input type="text" name="preptime" value="" placeholder="TIEMPO (ej. 45min, 1h 45 min)" class="form-control">
                <label for="ingredients">Ingredientes separados con ','</label>
                <input type="text" name="ingredients" value="" placeholder="INGREDIENTES" class="form-control">
                <label for="instructions">Instruciones separados con '.'</label>
                <input type="text" name="instructions" value="" placeholder="INSTRUCIONES" class="form-control">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                
                <select  name="category_id" class="form-control">
                <option value="1">CATEGORIA</option>
                @foreach ($categories as $category)
            
                
            
                <option value="{{$category->id}}">{{ $category->nom}}</option>
                
        
                @endforeach
                </select>
                

                <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
            </form>
                                        @endif
                                        

                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div>
            @endif

            @if(Auth::user() == null)
            <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-red"></i> <a href="http://localhost:8000/login">Inicia sesión</a> <small class="hidden-xs-down hidden-sm-down">Para poder crear una receta </small></h2>
                    </div><!-- end col -->
                    <!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section id="cta" class="jumbotron text-center"style="background-image:url('/storage/images_category/3.jpg');"
            <div class="container">
                
                
                
                
            </div>
        </section>
            @endif

@endsection
