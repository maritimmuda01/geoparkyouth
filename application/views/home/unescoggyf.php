<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary">UNESCO Global<br>Geoparks Youth Forum</h2>
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
        <p>
        The 1st UNESCO Global Geoparks Youth Forum will be organized during the 9th Conference on UNESCO Global Geopark in December 2021.
      </p>

      <p>
        The main purpose of the UNESCO GLOBAL GEOPARKS YOUTH FORUM is to offer young people an opportunity to engage more concretely in the preparation of the philosophy mandate and activities of the UNESCO Global Geoparks, elaborate their contribution to the debates of the 9th International Conference on UNESCO Global Geoparks and foster their commitment to the realization of the future they want, being actors of change in their territories. They will elaborate their proposal for actions contributing to the UNESCO Global Geoparks strategic framework for action 2021-2025, to address heritage protection, natural hazards mitigation, climate change and sustainable development in general.
      </p>

      <p>
        Each Country hosting UNESCO Global Geoparks will be represented in the YOUTH FORUM with youth delegates engaged with UNESCO Global Geoparks that believe in their power of making changes and aim to become influential within their communities.
      </p>

      <p>
        The 1st Assembly of the YOUTH FORUM will take place in parallel with the 9th International Conference on UNESCO Global Geoparks which will take place in Jeju island, Republic of Korea in September 2021.
      </p>

      <p>
        Participants need to be aged from 18 to 24 years (according to UN/UNESCO Youth designation), showing their engagement with UNESCO Global Geoparks:
      </p>

      <p>
      <ul>
        <li>in their respective living/working contexts – territories and communities already included in the UNESCO Global Geoparks
        </li>
        <li>
          on issues related to Geological Heritage conservation, climate change adaptation, natural disaster mitigation, geo-tourism and sustainable territorial development.
        </li>
      </ul>
    </p>
      <p>
        Participants can be Geopark staff, Geopark partners, University researchers, phd candidates, university students or school students with clear engagement through their research or educational activity. Observers may include Youths from Countries hosting aspiring UNESCO Global Geoparks. 
      </p>
      <p>
        GGN – National Geopark Fora or Committees are responsible to nominate the representative of each country in the UNESCO Global Geoparks YOUTH FORUM and shall cover the expenses for their participation in the UNESCO Global Geoparks YOUTH FORUM meetings. 
      </p>
      <p>
        If a country wishes to nominate more representatives for the UNESCO <?= $site_settings['title'] ?> then the youth representatives of a country consist a country team with one vote at the UNESCO <?= $site_settings['title'] ?> meetings.
      </p>

      <p>
        In case that a country (especially those with one Geopark) has difficulty to cover the expenses of the youth participation in the GGN YOUTH FORUM, can use the grant policy of the Conference or ask for support from GGN. The Operational Guidelines of the 1st YOUTH FORUM have been agreed at the 64th GGN ExB meeting on December 10th, 2019.
      </p>
      <p>
          <a href="https://globalgeoparksnetwork.org/?p=4473">Visit UNESCO Global Geoparks Youth Forum Website</a>
        </p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="https://globalgeoparksnetwork.org/wp-content/uploads/2020/07/FB_YOUTH_FESTIVAL_OK_DECEMBER_2021-1024x853.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <img src="https://www.nicepng.com/png/full/84-842395_round-the-world-in-a-unique-worldwide-partnership.png" alt="signature" class="img-fluid logo-about mt-5">
        <h4 class="mt-5">Global Geopark Network</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<?php
$this->load->view('home/_layout/footer');
?>
