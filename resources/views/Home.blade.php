<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSPC - College of Computer Studies</title>
    <style>
        /* General Body and Font Styles */
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
            height: 40px;
            width: 40px;
            border-radius: 50%;
            object-fit: cover;
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
            color: #3182ce;
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
    </style>
</head>
<body>

    <header class="header">
        <div class="header-left">
            <img src="https://placehold.co/60x60/d1d5db/4a5568?text=Logo" alt="CSPC Logo" class="header-logo">
            <a href="#" class="header-title">CSPC - College of Computer Studies</a>
        </div>
        <nav class="header-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

</body>
</html>
