<section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="<?php echo base_url('assets/assets_shop/')?>/assets/images/left-arrow.png" alt="" />

                        <h4 class="">Pemesanan Villa</h4>
                    </div>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>
                <?php foreach($villa as $mb) : ?>
                <div class="feature-wrapper">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="features-content"> 
                                <div class="project-photo"><img src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" style="width: 300px; height: 280px"></div><br>
                                <h4><i class="fa fa-home" aria-hidden="true"></i><span><a href="#"><?php echo $mb->merk ?></a></span></h4>
                                <p>Lokasi : <?php echo $mb->lokasi ?> </p>
                                <p>Harga : Rp. <?php echo number_format($mb->harga,0,',','.')  ?> /hari </p>
                                

                                    <?php 
                                    if($mb->status == "0"){
                                    echo "<span class='btn btn-primary' disable>FULL</span>";
                                    }else{
                                    echo anchor('customer/booking/tambah_booking/'.$mb->id_villa,'<button class="btn btn-primary">Booking</button>');
                                     }
                                    ?>       
                                
                                <a href="<?php echo base_url('customer/data_villa/detail_villa/').$mb->id_villa ?>"><button class="btn pt-btn btn-primary">Detail</button></a>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                </tr>
                </th>
                 </table>
                
                    </div>
                </div>	
             </div>		
        </div>
    </section>