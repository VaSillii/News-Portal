@extends('base')

@section('head')
	@parent
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/grid.css">

	<link rel="stylesheet" href="../assets/css/fontAwesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

@endsection

@section('header')
<!--Start head-->
        <div class="container">
            <div class="logo col-8">
                <span>News</span>
            </div>
            <div class="main-header col-4">
                <div class="topmenu">
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Faqs</a></li>
		<!--		доделать корректное оторажение иконок-->
                        <li><a href="https://www.facebook.com/" class="fa fa-facefook"></a><li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter" ></a></li>
                        <li><a href="https://www.vk.com/" class="fa fa-vk"></a></li>    
                    </ul>
                </div>
                <div class="seach">
                    <input type="search" name="q" placeholder="Seach...">
                    <span class="icon"><i class="fa fa-search"></i></span>
				    </div>
                </div>
        </div>
        <nav class="col-12">
            <div class="head-nav container">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">News</a>
                    </li>
                    <li>
                        <a href="">Video</a>
                    </li>
                    <li>
                        <a href="">Weather</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
<!--End head-->
@endsection

@section('content')
	<!--        Start content-->
        <div class="content container">
            <div class="inner-content">
            	include($temlate)
            </div>

            <!-- Start sidebar -->
            <div class="sidebar">
                <span>Category</span>
                <ul>
                    <li><a href="">Later News</a></li>
                    <li><a href="">Popular News</a></li>
                    <li><a href="">Differrent News</a></li>
                </ul>
            </div>
            <!-- End sidebar -->
        </div>
        
<!--        End content-->

	
@endsection


@section('footer')
<!--Start footer-->
    <footer>
        <div class="container">
        	<span>News ©2018. Privacy Police</span>
        </div>
    </footer>
<!--End Footer-->	
@endsection
