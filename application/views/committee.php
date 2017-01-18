<div class="container con950">
  <h1 class="head1">Committee</h1>
  <hr>
  <div class="ui styled accordion">
	<div class="title active">
      <i class="dropdown icon"></i>
      Steering Committee
    </div>
    <div class="content active">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="<?php echo base_url('assets/img/munir.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. Munir, M.IT.</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/dwi.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>DR. Dwi Hendratmo W.</h4>
                <h5>Institut Teknologi Bandung</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/Satriyo.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Satriyo Dharmanto M.Si.</h4>
                <h5>IEEE Indonesia Section</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/shin.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. Shi-Jinn Horng</h4>
                <h5>National Taiwan University Science and Technology, Taiwan</h5>
              </center>
            </div>
          </div>
        </div>                        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/fatimah.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. Hjh. DR. Siti Mariyam S.</h4>
                <h5>Universiti Teknologi Malaysia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/tutu.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. Tutut Herawan</h4>
                <h5>Universiti Malaya</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rafal.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>DR. Rafal Drezewski</h4>
                <h5>AGH University of Science and Technology</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rodziah.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. Rodziah Atan</h4>
                <h5>Universiti Putra Malaysia</h5>
              </center>
            </div>
          </div>
        </div>                        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rayner.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. Rayner Alfred</h4>
                <h5>Universiti Malaysia Sabah</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/lim.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. HeuiSeok Lim</h4>
                <h5>Korea University</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/chakraborty.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. Goutam Chakraborty, Ph.D.</h4>
                <h5>Iwate Prefectural University</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/didi.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. Didi Sukyadi</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                               
      </div>             
    </div>
	<div class="title">
      <i class="dropdown icon"></i>
      Scientific Committee
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul>
            <?php foreach($revleft as $left){
                echo "<li><h5><i>".$left['sci_com_name']."</i> (".$left['sci_com_aff'].") </h5></li>";
              } ?>
          </ul> 
        </div>
        <div class="col-md-6 col-sm-6">
          <ul>
           <?php foreach($revright as $right){
              echo "<li><h5><i>".$right['sci_com_name']."</i> (".$right['sci_com_aff'].") </h5></li>";
            } ?>
          </ul>
        </div>                        
      </div>
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      General Chair
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/munir.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Prof. DR. Munir, M.IT.</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>         
      </div>
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      General Co-Chair
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/eddy.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Eddy Prasetyo Nugroho</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/jajang.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Jajang Kusnendar</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
                             
      </div> 
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      Treasury
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/novi.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Novi Sofia Fitriasari</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/eki.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Eki Nugraha</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
                            
      </div>
                            
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      Marketing and Public Relation
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rani.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Rani Megasari</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/budi.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Budi Laksono Putro</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/enjun.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Enjun Junaeti</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/heri.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Heri Sutarno</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/wahyudin.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Wahyudin</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/eka.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Eka Fitrajaya Rahman</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rosa.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Rosa Ariani Sukamto</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rasim.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Rasim</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/salman.jpg'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Muh. Nursalman</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/rizky.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Rizky Rachman Judhie Putra</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/away.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Asep Wahyudin</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/enjang.jpg'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Enjang Ali Nurdin</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>           
      </div>
	  <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/ria.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Ria Anggraeni</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>          
      </div>
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      General TPC
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/lala.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Lala Septem Riza</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/andri.jpg'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Andri Pranolo</h4>
                <h5>Universitas Ahmad Dahlan</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/ramadiani.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Ramadiani</h4>
                <h5>Universitas Mulawarman</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/syafrullah.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Muhammad Syafrullah</h4>
                <h5>Universitas Budi Luhur, Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                        
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/gunawan.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Gunawan Ariyanto</h4>
                <h5>Universitas Muhamadiyah Surakarta</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/aji.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Aji Prasetyo</h4>
                <h5>Universitas Negeri Malang</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/umi.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Ummi Raba'ah Hashim</h4>
                <h5>Universiti Teknikal Malaysia Melaka</h5>
              </center>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <div class="title">
      <i class="dropdown icon"></i>
      Layout TPC
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/haviluddin.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Haviluddin Sukirno</h4>
                <h5>Universitas Mulawarman</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/yudi.jpg'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Yudi Wibisono</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/hamdani.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Hamdani</h4>
                <h5>Universitas Mulawarman</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/iwan.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Iwan Tri Riyadi Yanto</h4>
                <h5>Universitas Ahmad Dahlan</h5>
              </center>
            </div>
          </div>
        </div>                                
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/krisna.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Krisna Adiyarta</h4>
                <h5>Universitas Budi Luhur</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/adhi.jpg'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Adhi Prahara</h4>
                <h5>Universitas Ahmad Dahlan</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/oki.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Oki Wicaksono</h4>
                <h5>Universitas Mulawarman</h5>
              </center>
            </div>
          </div>
        </div>                               
      </div>
    </div>
    <div class="title">
    <i class="dropdown icon"></i>
      Secretary TPC
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/yaya.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Yaya Wihardi</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/harsa.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Harsa Wara P.</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                     
      </div>      
    </div> 
    <div class="title">
    <i class="dropdown icon"></i>
      Web Designer
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/herbert.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Herbert Siregar</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/faisal.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Faisal Syaiful Anwar</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/tri.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Tri Samsul R</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/feby.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Febyana Ramadhanti</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>
                <div class="col-md-3 col-sm-6">
          <div class="thumbnail">  
            <img src="<?php echo base_url('assets/img/yuda.png'); ?>" alt="..." class="img-circle">
            <div class="caption">
              <center>
                <h4>Yuda Wijaya</h4>
                <h5>Universitas Pendidikan Indonesia</h5>
              </center>
            </div>
          </div>
        </div>                           
      </div>      
    </div>                         
  </div>
</div>

<br>
<br>
<br>