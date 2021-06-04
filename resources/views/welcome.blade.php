@extends("layout/layoutMaster")
{{-- @section('css')
<style type="text/css">
    a{
  scroll-behavior: smooth!important;
}
</style>
@endsection --}}
@section("title", "Inicio")
@section("content")
@include("inc/about") 
@include("inc/services") 
@include("inc/portafolio")
@include("inc/contador")

    <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Siguenos en Instagram!</h2>
                <a class="btn btn-light btn-xl" href="#"><i class="bi-instagram fs-2 mb-3 text-darkgray-75 mb-4"></i></a>
            </div>
        </section>
  
@include("inc/Contacts")        
@endsection
