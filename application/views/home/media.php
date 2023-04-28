<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Media</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-8">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <?php foreach ($dataCategories as $data) { ?>
            <label class="btn btn-sm btn-primary">
              <input type="radio" name="shuffle-filter" value="<?= $data->id_category ?>" /><?= ucfirst($data->category_name) ?>
            </label>
          <?php } ?>
        </div>
      </div>
      <div class="col-4">
        <form class="form-inline w-100" action="searchResult" method="GET">
          <div class="form-group mx-sm-3 mb-2">
            <input type="search" name="keyword" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-sm btn-primary"><i class="ti-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
    </div>


    <div class="row shuffle-wrapper ">
      <?php foreach ($dataArticles as $data) { ?>
        <div class=" col-lg-4 col-sm-6 mb-4 shuffle-item" data-groups="[&quot;<?= $data->category_id ?>&quot;]">
          <article class="card shadow">
            <img class="rounded card-img-top" src="<?= base_url() ?>images/article/<?= $data->article_image ?>" alt="post-thumb">
            <div class="card-body" style="height: 215px;">
              <h4 class="card-title"><a class="text-dark" href="<?= base_url() ?>home/single/<?= $data->id_article ?>"><?= $data->title ?></a>
              </h4>
              <p class="font-secondary"><span class="text-primary"><?= $data->name ?></span> • <?= date("j F Y", strtotime($data->time_created)) ?></p>
            </div>
          </article>
        </div>
      <?php } ?>
    </div>

  </div>
</section>
<!-- /portfolio -->
<?php $this->load->view('home/_layout/footer'); ?>