@extends('Frontend.master.layout')

@section('title', 'Home page')
@include('Frontend.includes.carousel')
@section('sidebar')
    @parent


@endsection

@section('content')
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