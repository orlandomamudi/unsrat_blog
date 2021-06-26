  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(<?php echo base_url(); ?>assets_frontend/img/intro-unsrat.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
        <img style="width: 7.0em;" src="<?php echo base_url(); ?>gambar/website/logo-unsrat.png">
          <p class="display-4 color-d mt-4"><b>Universitas Sam Ratulangi</b></p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->


  <!--/ Section Services Star /-->
  <!-- <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-university"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Unsrat</h2>
              <p class="s-description text-center">
              Universitas Sam Ratulangi adalah Universitas Negeri yang berada di Kota Manado, Provinsi Sulawesi Utara.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-paper-airplane"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Alamat</h2>
              <p class="s-description text-center">
              Kelurahan Bahu, Kecamatan Malalayang
              Kota Manado, Sulawesi Utara 95115.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-bookmark"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Kontak Kami</h2>
              <p class="s-description text-center">
              Email: rektorat@unsrat.ac.id
              Telephone: (0431) 863886 – (0431) 863786.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-university"></i></span>
            </div>
            <div class="counter-num">
              <h3 class="text-white">Universitas Sam Ratulangi</h3>
              <span class="counter-text">Universitas Sam Ratulangi adalah <br> Universitas Negeri yang berada di Kota Manado, Provinsi Sulawesi Utara.</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-paper-airplane"></i></span>
            </div>
            <div class="counter-num">
            <h3 class="text-white">Alamat</h3>
              <span class="counter-text">Kelurahan Bahu, Kecamatan Malalayang
              <br> Kota Manado, Sulawesi Utara 95115.</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-bookmark"></i></span>
            </div>
            <div class="counter-num">
              <h3 class="text-white">Kontak Kami</h3>
              <span class="counter-text">Email: rektorat@unsrat.ac.id
              <br> Telephone: (0431) 863886 – (0431) 863786.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Artikel
            </h3>
            <p class="subtitle-a">
              Artikel Terbaru Dari Kami.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php foreach($artikel as $a){ ?>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="<?php echo base_url().$a->artikel_slug ?>">
                  <?php if($a->artikel_sampul != ""){ ?>
                    <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->artikel_sampul ?>" alt="" class="img-fluid">
                  <?php } ?>
                </a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $a->kategori_nama ?></h6>
                  </div>
                </div>

                <h3 class="card-title"><a href="<?php echo base_url().$a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a></h3>

              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <span class="author"><?php echo $a->pengguna_nama; ?></span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> <?php echo date('d-M-Y', strtotime($a->artikel_tanggal)); ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->
