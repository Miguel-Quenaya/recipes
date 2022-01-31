@extends('common.mainlayout')

@section('content')

<section class="section lb">
            <div class="container">
                <div class="row">
                
                
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                            @foreach ($recipes as $recipe)
 <?php
        $comentarios = $recipe->comments;
        $valoracion=0;
 
        foreach($comentarios as $comentario){
                $valoracion += $comentario -> star;
                
        }
        if(count($comentarios) != 0){
            $valoracion = intval($valoracion / count($comentarios));
        }else{
            $valoracion = 0;
        }
?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="food-single.html" title="">
                                                <img src="/storage/{{$recipe->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <div class="rating">
                                        @for ($i = 0; $i < $valoracion ; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                            
                                        </div>
                                        <h4><a href="{{route('recipe.show',['id'=>$recipe->id])}}" title="">{{$recipe->name}}</a></h4>
                                        <p>{{$recipe->description}}</p>
                                        <small><a href="" title="">{{$recipe->prep_time}}</a></small>
                                        <small><a href="" title="">{{$recipe->updated_at}}</a></small>
                                        <small><a href="" title="">by {{$recipe->user->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                               

                                <hr class="invis">

                                @endforeach

                        
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@endsection