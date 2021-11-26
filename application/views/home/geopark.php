<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary">Geopark</h2>
      </div>
    </div>
  </div>
  <!-- background shapes -->
<!--   <img src="<?= base_url()?>assets/home/images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?= base_url()?>assets/home/images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?= base_url()?>assets/home/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6"> -->
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Geopark is a single or combined geographic area which has Geosite and valuable landscape related to Geoheritage, Geodiversity, Biodiversity and Cultural Diversity, also managed for conservation, education and economic development sustainably with active involvement of society and government, so can be used for improving the understanding and raising the awareness of communities to the earth and their environment.</p>
        
        <p>
          UNESCO Global Geoparks are single, unified geographical areas where sites and landscapes of international geological significance are managed with a holistic concept of protection, education and sustainable development.
        </p>
        <p>
          A UNESCO Global Geopark uses its geological heritage, in connection with all other aspects of the area’s natural and cultural heritage, to enhance awareness and understanding of key issues facing society in the context of the dynamic planet we all live on, mitigating the effects of climate change and reducing the impact of natural disasters. By raising awareness of the importance of the area’s geological heritage in history and society today, UNESCO Global Geoparks give local people a sense of pride in their region and strengthen their identification with the area. The creation of innovative local enterprises, new jobs and high quality training courses is stimulated as new sources of revenue are generated through sustainable geotourism, while the geological resources of the area are protected.
        </p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="https://cdn.idntimes.com/content-images/post/20180129/gunungrinjanilombok6-1-8cd9c00301a1c1851a47241d7eea67f6.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <h4>Geopark</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<?php
$this->load->view('home/_layout/footer');
?>