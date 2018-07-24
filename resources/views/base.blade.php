@extends('main')


@section('head')
@endsection()


@section('header')
<header>
        <div class="top container">
            <div class="logo">
                <a href="/">News</a>
            </div>
            <div class="main-header">
                <div class="topmenu">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/my/account') }}">{{Auth::user()->name}}</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="seach">
                    <input type="search" name="q" placeholder="Seach...">
                    <span class="icon"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
        <nav id ="top-nav" class="col-12">
            <div class="head-nav container">
                <ul>
                    <li >
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
@endsection


@section('content')
	<!--Start content-->    
    <div class="inner-content">
    <!--  -->
    </div>
        
		<!--End content-->
@endsection()


@section('sidebar')
    <!-- Start sidebar -->
    <div class="sidebar">
        <span>Category</span>
        <ul>
            @foreach($categories as $category)
                <li><a href="">{{ $category->title }}</a></li>
            @endforeach
            <!-- <li><a href="">Later News</a></li>
            <li><a href="">Popular News</a></li>
            <li><a href="">Differrent News</a></li> -->
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
@endsection()

@section('script')
    @parent
    <script type="text/javascript" src="/js/scroll-panel.js"></script>
@endsection()