@extends('layouts.homepage-user')
@section('main')
    <div class="container">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-3 ms-4">
                    <img src="{{ asset('assets\style\images\user-pict.png') }}" class="rounded" style="width:100%" alt="kamar">
                </div>
                <div class="col mt-5 pt-5">
                    <p style="font-size: 20px">Name DOCTOR</p>
                    <p>Spesialis asam uram | Bandung, Jawa Barat</p>
                </div>
            </div>


            <div class="row ms-3 mt-4">
                <strong><span style="font-size: 30px; color:grey">About the doctor</span></strong>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro est nemo dolor eaque ad! Obcaecati ipsum architecto qui ipsam et quod harum dolorum totam ipsa illum atque officiis, commodi aperiam ad aut, molestias nobis sunt accusantium quasi debitis ullam. Consequatur fuga dignissimos repudiandae iste animi, atque illo explicabo quaerat assumenda.</p>
            </div>
        </div>
   </div>

    <div class="container">
       <div class="shadow-sm p-3 mb-5 bg-body rounded">
           <div class="row">
               <div class="col text-center">
                    <i class="fa fa-users fa-5x mt-3 ms-4" style="color:grey" ></i>
                    <p class="p-1 ms-4">Count<br>
                    Pasien</p>
               </div>
               <div class="col text-center">
                    <i class="fa fa-history fa-5x mt-3 ms-4" style="color:grey" ></i>
                    <p class="p-1 ms-4">Count<br>
                    Years experience</p>
               </div>
               <div class="col text-center">
                    <i class="fa fa-thumbs-up fa-5x mt-3 ms-4" style="color:grey" ></i>
                    <p class="p-1 ms-4">Count<br>
                    LIKED</p>
               </div>
           </div>
       </div>
    </div>

    <div class="container">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <form>
                SOON
            </form>
        </div>
     </div>
@endsection
