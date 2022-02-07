@extends('layouts.app')

@section('content') 

<main role="main">
        
                  <!-- ======= Hero Section ======= -->
                    <section id="hero" class="clearfix">
                      <div class="container" data-aos="fade-up">
                  
                        <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
                          <img src="{{asset('front/assets/img/hero-img.svg')}}" alt="" class="img-fluid">
                        </div>
                  
                        <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
                          <h1>
                            <a class="typewrite disabled text-white" data-period="1500" data-type='[ "Hi, Welcome to IremboGov.", "Murakaza neza." ]'>
                              <span class="wrap"></span>
                            </a>
                          </h1><br>
                  
                          <form>
                            <div class="row">
                              <div class="col-lg-8 box">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" placeholder="Gushakisha serivise" style="font-family: 'Nunito', sans-serif;">
                              </div>
                            </div>
                          </form>
                      </div>
                    </section>
                    <!-- End Hero Section -->
                  
                      <br>
                  
                      <!--Services section-->
                      <section class="getr" data-aos="zoom-in" data-aos-delay="100">
                        <div class="container mt-3 mb-4">
                          <h2 class="home-title" style="font-family: 'Nunito', sans-serif;">Umuryango</h2>
                        </div>
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col">
                                <div class="ser-items" style="color: black;">
                                  <p><a class="text-da" href="/#"> Serivisi z'ishyingirwa </a></p>
                                  <p><a class="text-da" href="/#"> Kwishyura ibihano </a></p>
                                  <p><a class="text-da" href="/#"> Kwinyandikisha usaba ubwenegihugu </a></p>
                              </div>
                              </div>
                              <div class="col">
                                <div class="ser-items">
                                  <p><a class="text-da" href="/#"> Serivisi z'ishyingirwa </a></p>
                                  <p><a class="text-da" href="/#"> Kwishyura ibihano </a></p>
                                  <p><a class="text-da" href="/#"> Uruhushya rwo gutwara abantu </a></p>
                                </div>
                              </div>
                              <div class="col">
                                <div class="ser-items">
                                  <p><a class="text-da" href="/#"> Kwishyurira Kwishyura Mituweli</a></p>
                                  <p><a class="text-da" href="/#"> Kwishyura ibihano </a></p>
                                  <p><a class="text-da" href="/#"> Icyemezo cy'uko umuntu ariho </a></p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </section> 
                      <br>
                    
                    
                <!-- Footer -->
                <footer class="page-footer font-small">
                  <!-- Copyright -->
                  <div class="footer-copyright text-center py-3">© 2022 Copyright:
                    <a disabled> Uburenganzira bw'Irembo burubahirizwa</a>
                  </div>
                  <!-- Copyright -->
                </footer>
                <!-- Footer -->
    </main>
@endsection