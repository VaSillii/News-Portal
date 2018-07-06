@extends('main')

@section('head')
	<title>{{$title or 'News Portal'}}</title>
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="/css/grid.css">
@endsection()

@section('header')
	<header>
		<div class="container">
            <div class="logo col-8">
                <span>News</span>
            </div>
            <div class="main-header col-4">
                <div class="topmenu">
                    <ul>                            
                        <li><a href="/auth">Sign in</a></li>
                        <li><a href="/reg">Check in</a></li>
                        <!--доделать корректное оторажение иконок-->
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
        <nav id ="top_nav" class="col-12">
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
	</header>
@endsection()

@section('content')
	<!--Start content-->    
    <div class="inner-content">

    </div>
        
		<!--End content-->
@endsection()

@section('sidebar')
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
@endsection()

@section('footer')
		<!--Start footer-->
        <footer>
            <div class="container">
                <span>News ©2018. Privacy Police</span>
            </div>
        </footer>
		<!--End Footer-->
@endsection

@section('script')
    @parent
	<script type="text/javascript" src="/js/scroll-panel.js"></script>
@endsection()


