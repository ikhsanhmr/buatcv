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
<div class="wrapper">
    <div class="intro">
      <div class="profile">
        <div class="photo">
          <img src="{{ $dataDiri->image }}">
        </div>
        <div class="bio">
          <h1 class="name">{{ $dataDiri->namaLengkap }}</h1>
          <p class="profession">Front-end Developer</p>
        </div>
      </div>
      <div class="intro-section about">
        <h1 class="title">about me</h1>
        <p class="paragraph">
            {{ $dataDiri->deskripsiDiri }}
        </p>
      </div>
      
      <div class="intro-section contact">
        <h1 class="title">Contact</h1>
        <div class="info-section">
          <i class="fas fa-phone"></i>
          <span>{{ $dataDiri->nomortelp }}</span>
        </div>
        <div class="info-section">
          <i class="fas fa-map-marker-alt"></i>
          <span>{{ $dataDiri->alamat }}</span>
        </div>
        <div class="info-section">
          <i class="fas fa-envelope"></i>
          <span>{{ $dataDiri->email }}</span>
        </div>
      </div>

      <div class="intro-section follow">
        <h1 class="title">Follow</h1>
        <div class="info-section">
          <i class="fab fa-github"></i>
            <span>chih-hsi-chen@github</span>
        </div>
        <div class="info-section">
          <i class="fab fa-codepen"></i>
            <span>codepen.io</span>
        </div>
        <div class="info-section">
          <i class="fab fa-medium"></i>
            <span>狗奴工程師</span>
        </div>
      </div>

      <div class="intro-section interests">
        <h1 class="title">Interests</h1>
        <div class="info-section">
          <i class="fas fa-gamepad"></i>
            <span>Game</span>
        </div>
        <div class="info-section">
          <i class="fas fa-paw"></i>
            <span>Pet</span>
        </div>
        <div class="info-section">
          <i class="fas fa-headphones-alt"></i>
            <span>Music</span>
        </div>
        <div class="info-section">
            <i class="fas fa-book"></i>
              <span>Learning</span>
        </div>
      </div>
    </div>

    <div class="detail">
      <div class="detail-section edu">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <span>Education</span>
        </div>
        <div class="detail-content">
          <div class="timeline-block">
            <h1>Department of Computer Science</h1>
            <p>National Tsing Hua University, Taiwan</p>
            <time>2015 - 2019</time>
          </div>
          <div class="timeline-block">
            <h1>Institute of Computer Science and Engineering</h1>
            <p>National Chiao Tung University, Taiwan</p>
            <time>2020 - present</time>
          </div>
        </div>
      </div>

      <div class="detail-section work">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <span>Work Experience</span>
        </div>
        <div class="detail-content">
          <div class="timeline-block">
            <h1>Department of Computer Science</h1>
            <p>National Tsing Hua University, Taiwan</p>
            <time>2015 - 2019</time>
          </div>
          <div class="timeline-block">
            <h1>Institute of Computer Science and Engineering</h1>
            <p>National Chiao Tung University, Taiwan</p>
            <time>2020 - present</time>
          </div>
        </div>
      </div>

      <div class="detail-section pg-skill">
        <div class="detail-title">
          <div class="title-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <span>Programming skills</span>
        </div>
        <div class="detail-content">
          <ul class="pg-list">
            <li>
              <span>HTML5</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 90%"></div>
              </div>
            </li>
            <li>
              <span>CSS3</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 75%"></div>
              </div>
            </li>
            <li>
              <span>Javascript</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 70%"></div>
              </div>
            </li>
            <li>
              <span>JQuery</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 50%"></div>
              </div>
            </li>
            <li>
              <span>NodeJS</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 70%"></div>
              </div>
            </li>
            <li>
              <span>ReactJS</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 75%"></div>
              </div>
            </li>
            <li>
              <span>VueJS</span>
              <div class="sb-skeleton">
                <div class="skillbar" style="--pgbar-length: 40%"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-end">
  <a href="{{ route('check-out') }}" class="btn btn-success btn-lg m-4">Check Out</a>
</div>

@endsection
