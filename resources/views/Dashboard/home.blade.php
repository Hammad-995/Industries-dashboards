@extends('layouts.dash-layout.index')

@section('content')


<section class="dashboard-section">
    <div class="padding-x">
        <div class="sidebar-content d-flex ">

            <!-- SideBar -->
            <div class="sidebar">

                <button onclick="toggleSideBar()" class="d-md-none btn-outline-steel-blue btn-nav-mobile px-2"><i
                        class="fas fa-times-circle"></i></button>

                <div class="text-center">
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="site-logo">
                </div>


                <!-- Buttons_Of_Sidebar -->
                <div class="bar-scroll custom-scroll">
                    @php
                        $sidebar_buttons = [
                            (object) [
                                'text' => 'Text One',
                                'href' => '#',
                            ],

                            (object) [
                                'text' => 'Text Two',
                                'href' => '#',
                            ],

                            (object) [
                                'text' => 'Text Three',
                                'href' => '#',
                            ],

                            (object) [
                                'text' => 'Text Four',
                                'href' => '#',
                            ],

                            (object) [
                                'text' => 'Text Five',
                                'href' => '#',
                            ],

                            (object) [
                                'text' => 'Text Six',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Seven',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Eight',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Nine',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Ten',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Eleven',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Twelve',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Thirteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Fourteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Fifteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Sixteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Seventeen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Eighteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Nineteen',
                                'href' => '#',
                            ],
                            (object) [
                                'text' => 'Text Twenty',
                                'href' => '#',
                            ],

                        ]
                     @endphp

                    @foreach ($sidebar_buttons as $btn_sidebar)
                        <x-sidebar-button.index :item="$btn_sidebar"></x-sidebar-button.index>
                    @endforeach

                </div>
                <!-- Buttons_Of_Sidebar_End -->

            </div>

            <!-- Dashboard_Content -->
            <div class="dashboard-content ">

               

                <!-- Content_Header -->
                <div class="header text-right">
                    <div class="row">
                        <div class="col-md-6">
                        <button onclick="toggleSideBar()" class="d-md-none btn-steel-blue btn-body-mob"><i
                        class="fal fa-bars"></i></button>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="dropdown header-dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('images/user.png')}}" alt="User" class="header-user">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Log in</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>





                </div>
                <!-- Content_Header_End -->

                <!-- Content_Body -->
                <section class="home-card-section custom-scroll w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card One</p>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card Two</p>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card Three</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card Four</p>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card Five</p>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="card-one d-flex justify-content-center align-items-center mt-4">
                                    <p>Card Six</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content_Body_End -->





            </div>

        </div>
    </div>
</section>


@endsection