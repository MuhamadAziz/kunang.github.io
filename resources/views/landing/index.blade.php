@extends('./layout/index')

@section('title', 'Selamat datang!')

<!-- hides header -->
@section('header')
@endsection
@section('content')
<style>
    .container-slideshow {
        max-width: 800px;
        /* height: 361px; */
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
    }

    /* .slider .slick-slide {
        border: solid 1px #000;
    } */

    .slider .slick-slide img {
        width: 100%;
    }

    .slick-dots {
        display: none;
    }
</style>

<div style="background-color: #E5E5E5">
    <div class="container">
        <div class="p-3">
            <div class="slider">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/test.png') }}" alt="Image 1">
                    </a>            
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center text-center">
                    <div class="col">
                        <button style="width: 100px; height:100px;border: 0.5px solid #E8E8E8;border-radius: 7px;"><img src="{{ asset('img/icon/motor.svg') }}" alt=""> Motor</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/kapal.svg') }}" alt=""> Kapal</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/mobil.png') }}" alt=""> Mobil</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/retirement.svg') }}" alt=""> Pensiun</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/pendidikan.svg') }}" alt=""> Edukasi</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/tumbuhan.svg') }}" alt=""> Tumbuhan</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/rumah.svg') }}" alt=""> Rumah</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/gadget.svg') }}" alt=""> Gadget</button>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center text-center pt-4">
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/karyawan.svg') }}" alt=""> Karyawan</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/mesin.svg') }}" alt=""> Mesin</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/kesehatan.svg') }}" alt=""> Kesehatan</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/perkakas.svg') }}" alt=""> Perkakas</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/covid.svg') }}" alt=""> Covid</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/kecelakaan.svg') }}" alt=""> Kecelakaan</button>
                    </div>
                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/kebakaran.svg') }}" alt=""> Kebakaran</button>
                    </div>

                    <div class="col">
                        <button style="width: 100px; height:100px;border: none;text-direction: none;border-radius: 7px;"><img src="{{ asset('img/icon/category.svg') }}" alt=""> Lainnya</button>
                    </div>
                </div>
            </div>
            <div class="row p-5 mt-5 pt-5 pl-3">
                <h3>Promo yang kamu cinta</h3>
                <div class="p-5">
                    <div class="col-12 p-3" style="width: 1210px; height: 159px;left: 250px;top: 889px;background: #FFFFFF;box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.06);border-radius: 13px;">
                        <div class="d-flex text-center" style=" ">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/gb1.png') }}" class="rounded" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/gb1.png') }}" class="rounded" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/gb1.png') }}" class="rounded" alt="">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-between">
                    <h3>Produk Ulasan Pelanggan Terbaik</h3>
                    <h3 style="font-size: 18px; color: #F64C72">See all</h3>
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" style="width: 220px; height: 300px" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-between">
                    <h3>Terlaris</h3>
                    <h3 style="font-size: 18px; color: #F64C72">See all</h3>
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" style="width: 220px; height: 300px" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-between">
                    <h3>Learn, Share & Earn</h3>
                    <h3 style="font-size: 18px; color: #F64C72">See all</h3>
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-4">
                        <iframe width="300" height="281" src="https://www.youtube.com/embed/uDyLecLOt10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="300" height="281" src="https://www.youtube.com/embed/uDyLecLOt10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="300" height="281" src="https://www.youtube.com/embed/uDyLecLOt10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-between">
                    <h3>Jaminan Harga Murah</h3>
                    <h3 style="font-size: 18px; color: #F64C72">See all</h3>
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" style="width: 220px; height: 300px" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-between">
                    <h3>Preffered Seller</h3>
                    <h3 style="font-size: 18px; color: #F64C72">See all</h3>
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" style="width: 220px; height: 300px" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('img/card1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row p-5 mt-5 pt-5 pl-3">
                <div class="d-flex justify-content-center text-center">
                    <h3>Kenapa Pilih Kami?</h3>
                   
                </div>
                <div class="col-lg-12 p-5 d-flex text-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/kp1.png') }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('img/kp1.png') }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('img/kp1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
</div>

 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<!-- Slick JS -->    
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<!-- Our Script -->
<script>
    $(document).ready(function(){
        $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true
        });
    });
</script>

@endsection