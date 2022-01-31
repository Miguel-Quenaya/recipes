@extends('common.mainlayout')
@section('content')



<div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-cutlery bg-red"></i> CATEGORIAS</h2>
                    </div><!-- end col -->
                    <!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
</div><!-- end page-title -->
            @foreach ($categories as $category)
            
                
            

                            
                            

            <section id="cta" class="jumbotron text-center"style="background-image:url('/storage/images_category/{{ $category->id}}.jpg');"
            <div class="container">
                
                
                
                <a href="{{route('category.show',['id'=>$category->id])}}" class="btn btn-primary">{{ $category->nom}}</a>
                <p></p>
                <div class="tag-cloud-single"><span>{{ $category->description}}</span></div>
            </div>
        </section>
            @endforeach
            


            
@endsection


