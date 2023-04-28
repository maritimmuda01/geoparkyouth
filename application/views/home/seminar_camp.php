<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<style>
    .page-title-alt {
        background-image: url('<?= base_url() ?>assets/home/seminarcamp/bek.jpg');
    }
</style>


<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white font-tertiary"><?= $title ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->



<section class="mt-5 mb-4">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.shahholidays.com/wp-content/uploads/2019/08/bali.jpg" alt="First slide" style="object-fit: cover; height: 450px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.pinimg.com/originals/8b/e5/b3/8be5b36071aac094b9bcce36a47bb56e.jpg" alt="Second slide" style="object-fit: cover; height: 450px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://th.bing.com/th/id/R.e038f6e8a06581ad01347440172c714e?rik=oyXQ%2f31jtlJJ5A&riu=http%3a%2f%2falayahotels.com%2fwp-content%2fuploads%2f2018%2f07%2fbali-culture.jpg&ehk=ksvWk%2b2aczNy9jISgBMC0OoohOWD%2bAWrfF1MIqLWr4Q%3d&risl=&pid=ImgRaw&r=0" alt="Third slide" style="object-fit: cover; height: 450px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url() ?>assets/home/seminarcamp/1.jpeg" alt="Third slide" style="object-fit: cover; height: 450px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url() ?>assets/home/seminarcamp/2.jpeg" alt="Third slide" style="object-fit: cover; height: 450px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= base_url() ?>assets/home/seminarcamp/3.jpeg" alt="Third slide" style="object-fit: cover; height: 450px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- about -->
<section class="section pt-5 pb-0 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-12 col-md-4 col-xl-4 col-lg-4">
                <img src="<?= base_url() ?>assets/home/seminarcamp/seminar.jpg?>" class="mb-4" width="100%" alt="">
                <h4>Register Here Now:</h4>
                <p><a href="https://form.jotform.com/222092236729457">International Delegates</a></p>
                <p> <a href="https://form.jotform.com/222093025952452">National Observers</a></p>
                <p><a href="https://drive.google.com/drive/folders/1ydMW47-nI99U-mWelTSFFnPF1cgMa25f?usp=sharing">Letter of Acceptance Format and Term of Reference </a></p>
            </div>
            <div class="col-12 col-sm-12 col-xs-12 col-md-8 col-xl-8 col-lg-8 order-lg-first order-xl-first">
                <img src="<?= base_url() ?>assets/new/seminar3.jpg" class="mb-4" width="100%" alt="">
                <p>
                    Our international event has been formalized in the Global Geopark Network <a href="https://globalgeoparksnetwork.org/?p=1295">website</a>.
                </p>
                <p>
                    <img src="<?= base_url() ?>assets/home/seminarcamp/onpara.jpeg" width="100%" alt="">
                </p>
                <p>
                    Youth is the main key when it comes to geopark development. Preservation and sustainable development of geoparks cannot only involve one generation, but there must be cross-generational interrelationships to be able to interpret the geoparks principle in terms of celebrating the Earth’s heritage for sustaining local communities. In its development, geoparks should not only focus on the
                    preservation of geological heritage, but more than that, the principle of geoparks can also be applied as an effort to mitigate the climate change crisis that we are currently facing. Climate change is one of the most critical global challenges of our time, and recent events have emphatically demonstrated our growing vulnerability to our Earth’s changing climate. In order to respond to these circumstances,
                    geoparks have actively provided concrete action plans and genuine efforts against the climate crisis contained within the three pillars of geoparks in terms of minimizing the impact of climate change; firstly through mitigation efforts by implementing low-carbon initiatives; secondly through adaptation by taking practical steps to prepare regions and communities for the effects of climate change; and finally through resilience, by educating and empowering local communities to withstand the impacts of climate change. Therefore, to achieve these three pillars, it is necessary to seek the active participation of geopark youths world-wide.
                </p>

                <p>
                    As of now, the involvement of youth has been well accommodated by the Global Geoparks Network in terms of climate change adaptation in the geopark territory. This is evidenced by the implementation of the 1st UNESCO Global Geoparks Youth Forum held at Jeju UNESCO Global Geopark in December 2021.
                    The main objective of the forum is to offer young people the opportunity to engage more concretely in the preparation of the philosophy mandate and activities of UNESCO Global Geoparks, encouraging their commitment to the realization of the future they want, as well as being actors of change in their region. In line with this conference, one of the sub-topics discussed in the youth discussion is about climate change. Nevertheless, there needs to be further agreement in form of resolution on what concrete actions should be implemented by youth around the world in reducing the impact of climate change, especially in the geopark territory. Therefore, to formulate youth action in climate change adaptation, it is proposed
                    that the "UNESCO Global Geoparks Youth Forum Seminar and Camp” will be held at Batur UNESCO Global Geopark, Bali Province, Indonesia. This is based on the ancient beliefs of Balinese people who believe in the principle called Tri Hita Karana in their lives. Tri Hita Karana,meaning “Three Ways towards Happiness” is an ancient philosophy for life on the Indonesian island of Bali, and has been taught across generations of Bali in an effort to maintain spiritual harmony between Man, Nature and Creation. This traditional belief emphasizes harmony between man and another, man with nature, and man with spirituality in terms of the pursuit of Happiness. The goal is that with the Global Geoparks Youth Seminar and Camps, geopark youths from around the world are able to feel first hand how the principles of native Balinese living side by side with nature can be sustainable and take lessons and memorable experiences regarding harmonization between humans and nature in an effort to reduce the impact of climate change in the geopark territory.

                </p>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<?php $this->load->view('home/_layout/footer'); ?>