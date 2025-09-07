@extends('layouts.app')

@section('title','Contact Page')


   

@section('content')
    <header class="header">
        <div class="header-left">
            <img src="{{ asset('resources1/ccslogo.png') }}" alt="CCS Logo" class="header-logo">
            <a href="#" class="header-title">CSPC - College of Computer Studies</a>
        </div>
        <nav class="header-nav">
            <ul>
                <li ><a href="/home">Home</a></li>
                <li ><a href="/about">About</a></li>
                <li id = "main"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>


      <section class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h2 class="contact-heading">Contact</h2>
                <p class="contact-description">For you to reach us!</p>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                
                <button type="submit" class="form-button">Send</button>
            </form>
        </div>
    </section>

    
    <hr class="separator"/>


     <section class="visit-section">
        <div class="content-container">
            <h2 class="visit-heading">Visit us</h2>
            <p class="visit-address">Camarines Sur Polytechnic Colleges - Academic Building IV</p>
            <p class="visit-hours">Visiting Hours: 8 AM - 4:30 PM (Monday - Friday)</p>
        </div>

        <div class="map-container">
            <img src="{{ asset('resources1/ccsbg.jpg') }}" alt="Map of Camarines Sur Polytechnic Colleges" class="location-map-image">
        </div>
    </section>


    <footer class="site-footer">
  <div class="footer-content">
    <p class="designer-info">Designed by Kathlyn Cris P. Ibo (BSIT 3C) - September 2025</p>
  </div>
</footer>


    
@endsection