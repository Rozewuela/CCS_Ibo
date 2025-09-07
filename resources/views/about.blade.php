@extends('layouts.app')

@section('title','About Page')


   

@section('content')
     <header class="header">
        <div class="header-left">
            <img src="{{ asset('resources1/ccslogo.png') }}" alt="CCS Logo" class="header-logo">
            <a href="#" class="header-title">CSPC - College of Computer Studies</a>
        </div>
        <nav class="header-nav">
            <ul>
                <li ><a href="/home">Home</a></li>
                <li id = "main"><a href="#">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <section class="about-section">
    <div class="about-container">
        <div class="about-content">
            <h2 class="about-heading">ABOUT</h2>
            <blockquote class="about-quote">
                <p class="about-text">The College of Computer Studies at CSPC is committed for shaping future innovators and Technology leaders. We provide quality education and hands-on experience to prepare students for the fast paced world of IT and digital solutions.</p>
            </blockquote>
        </div>
    </div>
</section>

<hr class="separator"/>

<section class="intro-section">
    <div class="two-column-layout">

        <!-- Column 1: Image -->
        <div class="column image-column">
            <figure class="intro-image-container">
                <img src="{{ asset('resources1/bgcspc.png') }}" alt="CSPC Mission Background" class="intro-image" title="title"/>
            </figure>
        </div>

        <!-- Column 2:  -->
        <div class="column content-column">
            <div class="content-wrapper">
                <h2 class="content-heading">CSPC Mission</h2>
                <p class="content-paragraph">CSPC is highly committed to delivering quality polytechnic education, providing excellent services, and promoting sustainable development and resilience in alignment with legal and statutory requirements, through cutting-edge technological innovation, impactful extension services, robust research culture, efficient resource management, and mutually beneficial partnerships with local and international stakeholders.</p>
            </div>
        </div>

         <!-- Column 2 -->
        <div class="column content-column">
            <div class="content-wrapper">
                <h2 class="content-heading">CSPC Vision</h2>
                <p class="content-paragraph">CSPC is highly committed to delivering quality polytechnic education, providing excellent services, and promoting sustainable development and resilience in alignment with legal and statutory requirements, through cutting-edge technological innovation, impactful extension services, robust research culture, efficient resource management, and mutually beneficial partnerships with local and international stakeholders.</p>
            </div>
        </div>
    </div>

   
</section>


<hr class="separator"/>


<section class="programs-section">
    <div class="programs-container">
        <div class="column header-column">
            <h2 class="section-heading">Programs Offered</h2>
            <p class="section-description">Each program is crafted to equip students with the theoretical knowledge and practical skills necessary for a successful career in their chosen field.</p>
            <div class="spacer"></div>
        </div>

        <div class="column content-column">
            <div class="program-item">
                <div class="item-image-container">
                    <img src="{{ asset('resources1/ITpic.jpg') }}" alt="" class="program-image" />
                </div>
                <div class="item-details">
                    <h3 class="program-title">BSIT</h3>
                    <p class="program-full-name">Bachelor of Science in Information Technology</p>
                    <p class="program-description">The BS Information Technology program focuses on the practical application of both hardware and software to meet an organization's computing needs. Students learn to plan, install, and maintain the necessary IT infrastructure.</p>
                    
                    <br>
                   
                    

                </div>
            </div>
            <div class="program-item">
                <div class="item-image-container">
                    <img src="{{ asset('resources1/ISpic.jpg') }}" alt="" class="program-image" />
                </div>
                <div class="item-details">
                    <h3 class="program-title">BSIS</h3>
                    <p class="program-full-name">Bachelor of Science in Information System</p>
                    <p class="program-description">The BS Information Systems program teaches students about the application of information technology within organizations. The goal is for graduates to be able to implement comprehensive information systems, considering all the complex technological and organizational factors involved, such as specific components, tools, and methodologies.</p>
                </div>
            </div>
        </div>

        <div class="column content-column">
            <div class="program-item">
                <div class="item-image-container">
                    <img src="{{ asset('resources1/CSpic.jpg') }}" alt="" class="program-image" />
                </div>
                <div class="item-details">
                    <h3 class="program-title">BSCS</h3>
                    <p class="program-full-name">Bachelor of Science in Computer Science</p>
                    <p class="program-description">The BS Computer Science program focuses on the study of computing concepts, theories, and algorithmic foundations to prepare students for a career in software development. It equips students with the skills to design and create complex software and to develop new and effective algorithms.</p>
                </div>
            </div>
            <div class="program-item">
                <div class="item-image-container">
                    <img src="{{ asset('resources1/LISpic.jpg') }}" alt="" class="program-image" />
                </div>
                <div class="item-details">
                    <h3 class="program-title">BLIS</h3>
                    <p class="program-full-name">Bachelor of Library and Information Science</p>
                    <p class="program-description">The BLIS program focuses on the development and management of information resources in all formats, including print, digital, and electronic. It prepares graduates to apply information technology to core library functions and use a variety of tools to support teaching and research.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <footer class="site-footer">
  <div class="footer-content">
    <p class="designer-info">Designed by Kathlyn Cris P. Ibo (BSIT 3C) - September 2025</p>
  </div>
</footer>
    
@endsection