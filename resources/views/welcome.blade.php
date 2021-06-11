@extends("layout.layoutMaster")
{{-- @section('css')
<style type="text/css">
    a{
  scroll-behavior: smooth!important;
}
</style>
@endsection --}}
@section("title", "FunnyWebs")
@section("content")

@include("inc.About") 
@include("inc.Services") 
@include("inc.Portafolio")
@include("inc.Contador")
    <!-- Call to action-->
        <section class="page-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4"> <b>¡Siguenos en Instagram!</b></h2>
                <a class="btn btn-light btn-xl" href="https://instagram.com/funn.ywebs?utm_medium=copy_link" target="_blank"><i class="bi-instagram fs-2 mb-3 text-darkgray-75 mb-4"></i></a>
            </div>
        </section>




@include("inc.Contacts")        
@endsection

