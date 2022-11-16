@extends('layouts.template.user')
@section('content')

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            
                        <div class="col-xxl-4 col-lg-5">
                        <x-cards.sales title="Sales" />
                        </div>
                        
                        <!-- End Sales Card -->
                        
                        
                            <x-project-table :projects="$projects" />
                        
        </section>
@endsection