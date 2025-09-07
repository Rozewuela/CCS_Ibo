<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <style>
         body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background-color: #fff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-logo {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: -10px;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a202c;
            text-decoration: none;
        }
        
        /* Navigation Styles */
        .header-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1.5rem;
        }

        .header-nav a {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .header-nav a:hover {
            color:#ffef70;
            text-shadow:
            1px 1px 0 black, 
            -1px -1px 0 black, 
            1px -1px 0 black,
          -1px 1px 0 black; 
        }
            
        

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                padding: 1rem;
            }

            .header-nav {
                margin-top: 1rem;
                width: 100%;
            }

            .header-nav ul {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

         #main{
            text-decoration: underline;
        }

        /*about section*/
        .about-section {
    padding: 40px;
    margin: 0;
    background-color: #EFC94C; 
}

.about-container {
    max-width: 960px;
    margin: 0 auto;
    display: flex;
   
    align-items: center;
}

.about-content {
    flex-basis: 700px;
    text-align: center;
    margin: auto;

}

.about-heading {
    font-size: 2.5em;
    color: black;
    margin-bottom: 20px;
    font-weight: bolder;

}

.about-quote {
    font-size: 1.1em;
    font-style: italic;
    color:black;
    margin: 0;
    border: none;
    padding: 0;
    margin: auto;
}

.about-text {
    text-align: justify;
    line-height: 1.6;
    margin: auto;
}

        /*footer*/
        .site-footer {
  text-align: left;
  padding: 20px;
  background-color: black; 
  border-top: 1px solid white;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
}

.designer-info {
  font-size: 14px;
  color: white;
  margin: 0;
}

/*For Mission && Vission*/
.intro-section {
    margin: 0;
    padding: 40px;
    background-color: #fff; 
}

.two-column-layout {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.column {
    flex: 1; 
}

.image-column {
    flex: 1;
}

.intro-image-container {
    margin: 0;
    padding: 0;
    line-height: 0; 
}

.intro-image {
    width: 85%;
    height: auto;
    display: block;
    object-fit: cover;
    aspect-ratio: 3/4; 
    margin-left: -20px;
  
}

.content-column {
    flex: 1;
    padding: 30px; 
    border-radius: 8px; 
}

.content-wrapper {
    margin-right: 50px;
    
}

.content-heading {
    font-size: 2.5em;
    color: #333;
    margin-top: 0;
    text-align: center;
}

.content-paragraph {
    font-size: 1em;
    line-height: 1.6;
    color: #555;
    text-align: center;
    
}

.separator {
    margin-top: 40px;
    border: none;
    border-bottom: 1px solid #ddd;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .two-column-layout {
        flex-direction: column;
    }

    .content-column {
        margin-top: 20px;
    }
}

hr.thick-line {
  border: none;
  height: 10px;
  background-color:black;
}

/*course*/
.programs-section {
    background-color: white;
    padding-top: 50px;
    padding-bottom: 50px;
}

.programs-container {
    display: flex;
    justify-content: center;
    max-width: 1200px;
    margin: 0 auto;
    gap: 40px;
}

.column {
    display: flex;
    flex-direction: column;
    gap: 48px;
}

.header-column {
    flex: 1; 
}

.section-heading {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.section-description {
    line-height: 1.6;
}

.spacer {
    height: 10px;
}

.content-column {
    flex: 1; 
    gap: 40px;
}

.program-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.item-image-container {
    width: 100%;
}

.program-image {
    width: 100%;
    height: auto;
    object-fit: cover;
    aspect-ratio: 1; 
}

.program-title {
    font-size: 1.5em;
    margin-top: 0;
    margin-bottom: 0;
}

.program-full-name {
    font-size: 0.9em;
    color: #666;
    margin-top: 0;
    margin-bottom: 0;
}

.program-description {
    line-height: 1.6;
    margin-top: 10px;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .programs-container {
        flex-direction: column;
        gap: 20px;
    }

    .column {
        gap: 20px;
    }
}

.section-description{
    margin-top: -30px;

}
    </style>
</head>
<body>
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
    
</body>
</html>