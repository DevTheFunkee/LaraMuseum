@extends('Frontend.master.layout')

@section('title', 'Home page')

@section('sidebar')
    @parent


@endsection

@section('content')
    <div id="home">
        <img src="{{asset('img/POP.jpg')}}" class="img-responsive" alt="home">
    </div>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Benvenuto!</h1>
                <h2>Con questa applicazione potrai prenotare un posto per la tua mostra preferita!! </h2>

            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>rightToCopy &&Matteotti Matteo </p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection