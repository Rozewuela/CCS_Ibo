@extends('layouts.app')

@section('title','Home Page')


   

@section('content')
    

    <header class="header">
        <div class="header-left">
            <img src="{{ asset('resources1/ccslogo.png') }}" alt="CCS Logo" class="header-logo">
            <a href="#" class="header-title">CSPC - College of Computer Studies</a>
        </div>
        <nav class="header-nav">
            <ul>
                <li id = "main"><a href="#">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="donate-section">
    <div class="wp-block-columns">
        <div class="wp-block-column image-column">
            <figure class="wp-block-image image-4-3">
                <img src="{{ asset('resources1/sideimg2.jpg') }}" alt="Coding Snippet" />
            </figure>
        </div>

        <div class="wp-block-column content-column">
            <h1 class="wp-block-heading">CCS</h1>
            <p class="wp-block-paragraph">College of Computer Studies: A college department in Camarines Sur Polytechnic Colleges (CSPC) that aims to produce graduates who are equipped with the competencies required for professional Information and Communications Technology</p>
            <div class="wp-block-buttons">
                <a class="wp-block-button__link" href="#">Explore</a>
            </div>
        </div>

        <div class="wp-block-column image-column">
            <figure class="wp-block-image image-3-4">
                <img src="{{ asset('resources1/sideimg.jpg') }}" alt="Collaboration" />
            </figure>
        </div>
    </div>
    </div>



    <div class="wp-block-columns alignwide are-vertically-aligned-center is-style-default">
  <div class="wp-block-column is-vertically-aligned-center column-1">
    <h1 class="courses" >Programs Offered</h1>
    <p class="wparagraph">Finding what to take?</p>
    <p class="wparagraph1">We offer a wide range of academic programs designed to prepare students for a variety of careers in technology. Our courses provide the essential knowledge and practical skills needed to succeed in fields like software development, networking, and data management.</p>
    <div class="wp-block-buttons1">
      <div class="wp-block-button1">
        <a class="wp-block-button__link wp-element-button1">View</a>
      </div>
    </div>
  </div>

  <div class="wp-block-column is-vertically-aligned-center column-2">
    <div class="wp-block-columns is-not-stacked-on-mobile">
      <div class="wp-block-column column-3">
        <figure class="wp-block-image size-full has-custom-border is-style-default image-1">
          <img src="{{ asset('resources1/BLIS.png') }}" alt="" class="wp-image-37" />
        </figure>
      </div>

      <div class="wp-block-column is-vertically-aligned-bottom">
        <figure class="wp-block-image size-full has-custom-border is-style-default image-2">
          <img src="{{ asset('resources1/BSCS-IT.png') }}" alt="" class="wp-image-38" />
        </figure>
      </div>

      <div class="wp-block-column column-4">
        <figure class="wp-block-image size-full has-custom-border is-style-default image-3">
          <img src="{{ asset('resources1/BSIS.png') }}" alt="" class="wp-image-36" />
        </figure>
      </div>
    </div>
  </div>
</div>


<figure class="wp-block-pullquote"><blockquote><p>Produce globally skilled, ethically upright and socially responsible computing professionals adaptable to technological and social changes, responsive to sustainable development of the region and beyond.</p><cite>CCS General Objectives</cite></blockquote></figure>


<div class="page-container">
    <div class="column header-column">
        <h2>Other Pages</h2>
    </div>
    
    <div class="column content-column">
        <img class ="img" src="{{asset('resources1/img.png')}}" alt="A dark color gradient" class="column-image">
        <h3 class ="space">About Us</h3>
        <p class ="space">Learn more about our department.</p>
        <button class ="space"  >View</button>
    </div>
    
    <div class="column content-column"> 
        <img class ="img" src="{{asset('resources1/img.png')}}" alt="A dark color gradient" class="column-image">
        <h3 class ="space">Contact Us</h3>
        <p class ="space"> We are here for your sconcerns. </p>
        <button class ="space">>View</button>
    </div>
</div>

<footer class="site-footer">
  <div class="footer-content">
    <p class="designer-info">Designed by Kathlyn Cris P. Ibo (BSIT 3C) - September 2025</p>
  </div>
</footer>



@endsection

