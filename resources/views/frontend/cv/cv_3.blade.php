@extends('frontend.layout')
@section('content')
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Formulir CV</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<div class="resume">
    <div class="resume_left">
        <div class="resume_profile">
            <img src="{{ $dataDiri->image }}" alt="profile_pic">
        </div>
        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title">
                    <p class="bold">Contact</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="data">
                            Alamat
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="data">
                            Nomor Telepon
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="data">
                            Email
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">skill's</p>
                </div>
                <ul>
                    <li>
                        <div class="skill_name">
                            HTML
                        </div>
                        <div class="skill_progress">
                            <span style="width: 80%;"></span>
                        </div>
                        <div class="skill_per">80%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            CSS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 70%;"></span>
                        </div>
                        <div class="skill_per">70%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            SASS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 90%;"></span>
                        </div>
                        <div class="skill_per">90%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 60%;"></span>
                        </div>
                        <div class="skill_per">60%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JQUERY
                        </div>
                        <div class="skill_progress">
                            <span style="width: 88%;"></span>
                        </div>
                        <div class="skill_per">88%</div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">Social</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Facebook</p>
                            <p>Stephen@facebook</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Twitter</p>
                            <p>Stephen@twitter</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Youtube</p>
                            <p>Stephen@youtube</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Linkedin</p>
                            <p>Stephen@linkedin</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">{{ $dataDiri->namaLengkap }}</p>
            </div>
            <p>
            </p>
        </div>
        <div class="resume_item resume_work">
            <div class="title">
                <p class="bold">Work Experience</p>
            </div>
            <ul>
                <li>
                    <div class="date">2013 - 2015</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2015 - 2017</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2017 - Present</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">Education</p>
            </div>
            <ul>
                <li>
                    <div class="date">2010 - 2013</div>
                    <div class="info">
                        <p class="semi-bold">Web Designing (Texas University)</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2000 - 2010</div>
                    <div class="info">
                        <p class="semi-bold">Texas International School</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_hobby">
            <div class="title">
                <p class="bold">Hobby</p>
            </div>
            <ul>
                <li><i class="fas fa-book"></i></li>
                <li><i class="fas fa-gamepad"></i></li>
                <li><i class="fas fa-music"></i></li>
                <li><i class="fab fa-pagelines"></i></li>
            </ul>
        </div>
    </div>
</div>
@endsection
