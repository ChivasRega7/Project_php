<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Side Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/revize-kopya.css?v=<?=time();?>" rel="stylesheet">
    <link href="assets/css/turizm.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <?php include('header.php')?>
</head>

<body class="bg-gradient bg-none">
    <style>
    .üçlü{
        text-align:left;
        background:linear-gradient(180deg, rgba(255,255,255,0.38139005602240894) 0%, rgba(247,248,248,0.8267682072829132) 34%, rgba(238,240,240,1) 100%);
        padding: 3rem;
        height: auto !important;
        min-height: 350px !important;
    }
    .üçlü .hizmet-baslık{
        padding-top: 2rem;
        color: #3E3E3F !important;
        text-decoration:none;
    }
    .üçlü img{
        margin-top: 3rem;
        height: 100px;
        width: auto;
    }
    .carousel-item .img{
        height: 100%;
    }
    .carousel-inner{
        height: 100%;
    }
    .carousel-item{
        height: 100%;
    }
</style>
<body class="bg-gradient bg-none">
    
    <div class="container-fluid text-center"></div>
        <div id="carouselExampleCaptions" class="carousel slide d-relative" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img" style="background-image: url(assets/images/slider-1.jpg);"> </div>
                </div>
                <div class="carousel-item">
                    <div class="img" style="background-image: url(assets/images/slider-2.jpg);"> </div>
                </div>
                <div class="carousel-item">
                    <div class="img" style="background-image: url(assets/images/slider-3.jpg);"> </div>
                </div>
                <div class="carousel-item">
                    <div class="img" style="background-image: url(assets/images/slider-4.jpg);"> </div>
                </div>
                <div class="carousel-item">
                    <div class="img" style="background-image: url(assets/images/slider-5.jpg);"> </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row text-center">
            <h2 style=" margin-top: 2rem;">
                HİZMETLER</h2>
            <p style="text-align:center !important;">Profesyonel kadromuz ile hizmetinizdeyiz...</p>
            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
                <div class="üçlü">
                    <img class="img" src="assets/images/icon-1.png" alt="">
                    
                    <div class="üçlü-text">

                    </div>
                    <h3 class="hizmet-baslık"><a class="hizmet-baslık" href="gayrimenkul.php">Gayrimenkul<br>Hizmetleri</a></h3>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-6">
                <div class="üçlü">
                    <img class="img" src="assets/images/icon-2.png" alt="">
                    <h3 class="hizmet-baslık">Turizm<br>Hizmetleri</h3>
                    <div class="üçlü-text ">

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
                <div class="üçlü">
                    <img class="img" src="assets/images/icon-3.png" alt="">
                    <h3 class="hizmet-baslık">Reklam ve<br>Grafik Tasarım</h3>
                    <div class="üçlü-text ">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-6">
                <div class="col-xs-6">
                    <img src="assets/images/hizmetler.png" alt="" style="
                    width: -webkit-fill-available;">
                </div>
            </div>
            <div class="col-6 hakkimizda">
                <div class="text-center text">
                    <h3 style="text-align: center;">KURUMSAL ÇÖZÜM ORTAĞINIZ</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row  text-start ">
            <div class="col-md-4 col-sm-12 bg-light info-box1 p-5">
                <p class="p1">10 YIL</p>
                <P class="p2">Güven Öncelikli Hizmet</P>
                <p>Suistimale açık olan bu sektörü sizin için güvenli hale getiriyoruz.</p>
            </div>
            <div class="col-md-4 col-sm-12 info-box2 p-5" style="background-image: url('assets/images/875.png');">
                <div class="col-4 light ">
                    <div class="info-box2 p-5">
                        <p class="p1">875 </p>
                        <P class="p2">Memnun Müşteri</P>
                        <p>Uzman kadromuzla müşteri memnuniyetini garanti ediyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  info-box3">
                <div class="info-box2 p-5">
                    <p class="p1">1000+ </p>
                    <P class="p2">Kuvvetli Hizmet Yelpazesi</P>
                    <p>Çeşitli ürün portfolyomuz ile aradığınızı bulacaksınız.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row text-center ">
            <div>
                <h2 style="margin-bottom: 3rem;">
                    HAKKIMIZDA
                </h2>
            </div>
            <div class="col-6">
                    <img src="assets/images/hakkkimida-1.png" alt="" style="
                    width: -webkit-fill-available;">
            </div>
            <div class="col-6 hakkimizda">
                <div class="text-center text">
                    <h3>GAYRİMENKUL <small>SATIŞINDA</small> <br>ÇÖZÜM ORTAĞINIZ</h3>
                    <p>Satışını yapmak istediğiniz gayrimenkullerinizi, yerli ve yabancı alıcıları ile buluşturuyoruz...</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6 hakkimizda">
                <div class="text-center text col-xs-6">
                    <span style="align-content:left;">GÜVENLİ VE KONFORLU</span>
                    <h3 style="padding-top:1rem !important;">TURİZM HİZMETİ</h3>
                    <p>Dünyanın neresinden gelirseniz gelin hizmetinizi bizden alın...</p>
                </div>
            </div>
            <div class="col-6">
                <div class="col-xs-6">
                    <img src="assets/images/hakkimizda-2.png" alt="" style="
                        width: -webkit-fill-available;">
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6">
                <div>
                    <img src="assets/images/hakkimizda-3.png" alt="" style="
                            width: -webkit-fill-available;">
                </div>
            </div>
            <div class="col-6 hakkimizda">
                <div class="text-center text yorum-baslık">
                    <h3>REKLAM <small>ve</small> <br>GRAFİK TASARIM</h3>
                    <p>Tasarım dünyasını bizimle keşfetmeye hazır mısınız?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 mt-5" id="yorumlar" style="background-image: url('assets/images/yorumlar-bg.png');">
            <filtre></filtre>
            <div class="row mt-3" style="z-index: 1;position: relative;">
                <div class="col-12 text-center mb-5">
                    <h2>Hakkımızdaki Yorumlar</h2>
                    <h5 style="color: #252E57;">Bizimle çalışan profesyonel çözüm ortaklarımıza güzel yorumları için teşekkür ederiz.</h5>
                </div>
            </div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4 mb-5 mb-md-0">
                        <div class="card yorum">
                            <div class="card-body">
                                <i class="fa-solid fa-quote-right ikon text-primary"></i>
                                <yorum>Sizinle çalışmak bizim için bir zevkti.Tüm aşamalarda ilgili ve özenli bir hizmet aldık.</yorum>
                                <yorumYapan>MEHMET ÖZTÜRK</yorumYapan>
                                <img class="avatar" src="assets/images/avatar/avatar1.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                        <div class="card yorum">
                            <div class="card-body">
                                <i class="fa-solid fa-quote-right ikon text-primary"></i>
                                <yorum>İşini ciddiyetle yapan Best Side ekibine ben ve ailem adına çok teşekkür ederim.Güvenle çalışabileceğiniz yegane bir firma.</yorum>
                                <yorumYapan>RABİA DİLARA ERGİN</yorumYapan>
                                <img class="avatar" src="assets/images/avatar/avatar2.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card yorum">
                            <div class="card-body">
                                <i class="fa-solid fa-quote-right ikon text-primary"></i>
                                <yorum>Üç hizmet dalından da faydalanmış biri olarak söylemeliyimki.İşinizi verin gerisini onlar halletsin.</yorum>
                                <yorumYapan>SEMRA KORKMAZ</yorumYapan>
                                <img class="avatar" src="assets/images/avatar/avatar3.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="position: fixed;bottom: 3rem; right: 3rem;">
          <a class="btn btn-primary whatsapp" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fab fa-whatsapp"></i>
          </a>
            <div class="collapse collapse-2" id="collapseExample">
                <a href="https://wa.me/+905075381663"><i class="fab fa-whatsapp a-1"> </i>Gayrimenkul Hizmetleri</a>
                <a href="https://wa.me/+905411151722"><i class="fab fa-whatsapp a-1"> </i>Turizm Hizmetleri</a>
                <a href="https://wa.me/+905396980278"><i class="fab fa-whatsapp a-1"> </i>Reklam ve Grafik Tasarım hizmetleri</a>
                <a href="https://wa.me/+905396980278"><i class="fab fa-whatsapp a-1"> </i>Renting Car</a>
            </div>
        </div>
    <?php include 'footer.php'; ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

    function autoCarousel(){
        if ($(window).width()>991){
            $('#carouselExampleCaptions').height($(window).height());
        }
        else{
            $('#carouselExampleCaptions').height($(window).height() * 0.50);
        }
    }

    $(window).resize(function(){
        autoCarousel();
    });

    autoCarousel();
</script>
</html>