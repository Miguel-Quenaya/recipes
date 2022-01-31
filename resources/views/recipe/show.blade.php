<?php
    $ingredientes = explode(",", $recipe->ingredients);
    $pasos = explode(".", $recipe->instructions);
?>
@extends('common.mainlayout')

@section('content')
               
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-cutlery bg-red"></i> {{$recipe->name}}<small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                                      
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->
        <section class="section lb">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="single-post-media">
                            
                            <img src="/storage/{{$recipe->image}}" alt="" class="img-fluid">
                           
                        </div><!-- end media -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    <li class="breadcrumb-item active">Quick n Easy Homemade Pizza Recipe</li>
                                </ol>

                                <span class="color-red"><a href="blog-category-01.html" title="">Video Recipes</a></span>

                                <h3>{{$recipe->name}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="single.html" title="">{{$recipe->updated_at}}</a></small>
                                    <small><a href="blog-author.html" title="">by {{$recipe->user->name}}</a></small>
                                    <small><a href="#" title="">{{$recipe->prep_time}}</a></small>
                                </div><!-- end meta -->

                                
                            </div><!-- end title -->

                            <div class="blog-content">  
                                

                                <h3><strong>{{$recipe->description}}.</strong></h3>
                                <h3><strong>PASOS.</strong></h3>
                                @foreach ($pasos as $paso)
                                <p>{{$paso}}.</p>

                                

                                @endforeach
                                
                            </div><!-- end content -->

                            

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_06.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                            

                        

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                      

                                            @foreach ($recipe->comments as $comment)
                                            <div class="media">
                                                
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">{{$comment->user->name}} <small>{{$comment->created_at}}</small></h4>

                                                    <p>{{$comment->text}}</p>
                                                    @if(Auth::user() != null && Auth::user()->isAdmin())
                                                    <form action="{{route('comment.delete')}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                                    

                                                    <input type="submit" value='Delete' class="btn btn-primary btn-sm">
                                                    </form>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Comment</h4>
                                <div class="row">
                                    <div class="col-lg-12">


                                        @if(Auth::user() != null)
                                        <form class="form-wrapper" action="{{route('comment.create')}}" method="POST">
                                        @csrf
                                            <input type="hidden" name="recipe_id" value="{{$recipe->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                            <textarea class="form-control" placeholder="Your comment" name="Lcomment" id="comment"></textarea>
                                            <label for="star">Valoración</label>
                                            <select  name="star" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                                            
                                            </select>
                                            <input type="submit" value="Enviar" class="btn btn-primary">
                                            
                                        </form>
                                        @endif
                                        @if(Auth::user() == null)
            <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-red"></i> <a href="http://localhost:8000/login">Inicia sesión</a> <small class="hidden-xs-down hidden-sm-down">Para poder comentar</small></h2>
                    </div><!-- end col -->
                    <!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        
            @endif
                                        

                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            

                            

                            

                            <div class="widget">
                                <h2 class="widget-title">Ingredientes</h2>
                                <div class="link-widget">
                                    <ul>
                                    @foreach ($ingredientes as $ingrediente)
                                        <li><a href="#">{{$ingrediente}}</a></li>
                                        
                                        @endforeach
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        @endsection