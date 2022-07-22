@extends('layouts.app')
@section('content')
<!-- section -->
<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <h2><span>Welcome To</span> LangVocu</h2>
                    </div>
                    <div class="full">
                      <p>The study website for flashcards, languages and learning</p>
                    </div>
                    <div class="full">
                       <a class="hvr-radial-out button-theme" href="#">About more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <img src="{{asset('assets/images/img2.png')}}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span>Sets </span></h2>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                   <img class="img-responsive" src="{{asset('assets/images/p1.png')}}" alt="#" /> 
                   <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{asset('assets/images/p2.png')}}" alt="#" />
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="{{asset('assets/images/p3.png')}}" alt="#" />
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
@endsection