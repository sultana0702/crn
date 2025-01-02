<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crisis Response Network</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Reset some default styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Header */
    header {
      background-color: steelblue;
      padding: 10px;
      text-align: center;
    }

    /* Navigation */
    nav {
      display: flex;
      justify-content: space-around;
      background-color: cadetblue;
      padding: 10px;
    }

    nav a {
      color: black;
      text-decoration: none;
      padding: 5px 10px;
    }

    nav a:hover {
      background-color: #575757;
    }

    /* Sidebar */
    #sidebar {
      width: 200px;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 50px; /* Leave space for the feedback bar */
      background-color: transparent;
      color: black;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      z-index: 100;
    }

    #sidebar a {
      color: black;
      text-decoration: none;
      margin: 0 0;
      font-size: 18px;
    }

    #sidebar a:hover {
      background-color: transparent;
      padding: 5px;
     /* border-radius: 5px;*/
    }

    /* Feedback Bar */
    .feedback-bar {
      background-color: transparent;
      padding: 10px;
      border-radius: 8px;
      position:left ;
      bottom: 0;
      left: 0;
      width: 10%;
      z-index: 10;
      text-align: left;
    }

    .feedback-bar input {
      width: 80%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    .feedback-bar button {
      width: 80%;
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    /* Main Website Content */
    #main-website {
      margin-left: 200px; /* Make room for the sidebar */
      padding-bottom: 80px; /* To avoid content being covered by the feedback bar */
      min-height: 100vh;
    }

    /* Services Grid (Flexbox Layout) */
    .services-grid {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 20px;
      margin: 20px;
    }

    .card {
      width: 30%;
      padding: 20px;
      border: 1px solid #ddd;
      text-align: center;
      box-sizing: border-box;
      border-radius: 8px;
      background-color: #f9f9f9;
    }

    .card h3 {
      font-size: 18px;
      margin: 10px 0;
    }

    .card p {
      font-size: 14px;
      color: #666;
    }

    .card a {
      color: green;
      text-decoration: none;
      font-weight: bold;
    }

    /* Contact Section */
    .whatsapp {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #f1f1f1;
    }

    footer p {
      font-size: 14px;
    }
  </style>
</head>
<body>



    <!-- Sidebar -->
    <div id="sidebar">
        <h2>Menu</h2>
        <a href="signin.php">Sign In</a>
        <a href="form.php">Sign Up</a>
        <a href="#alert">Alert</a>
        <a href="#about">About</a>

        <!-- Feedback Bar -->
        <div class="feedback-bar">
          <h3>Feedback</h3>
          <input type="text" placeholder="Your feedback..." />
          <button>Submit Feedback</button>
        </div>
    </div>

    <!-- Main Website Content -->
    <div id="main-website">
      <header class="main-header">
        <h1>Crisis Response Network</h1>
        <p>Your trusted partner in emergencies.</p>
      </header>
      <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#follow-us">Follow Us</a>
        <a href="#contact">Contact</a>
      </nav>

      <section class="banner">
        <img src="img/coverphoto.jpg" alt="Banner" style="width: 100%; height: auto;">
      </section>

      <section id="home" class="section">
        <h1 style="color: orchid; font-size: 30px; text-align: center;">WELCOME</h1>
        <p style="color: black; text-align: center; font-style: oblique;">We provide assistance and resources during crises. A Crisis Response Network (CRN) is a system designed to provide immediate support during emergencies, such as natural disasters, mental health crises, or public health emergencies. It coordinates resources and services like emergency assistance, 24/7 hotlines, mental health support, and preparedness training. CRNs connect government agencies, NGOs, and healthcare providers to ensure rapid and efficient responses, helping individuals and communities recover effectively. Call our hotline: <strong>999</strong></p>
      </section>

      <section id="services" class="section">
        <h1 style="color: orchid; font-size: 30px; text-align: center;">Our Services</h1>
        <div class="services-grid">
            <div class="card">
                <a href="volunteer.php" class="service-card">
                    <h3>BECOME A VOLUNTEER</h3>
                    <p>Join our network to make a difference. Assist in emergency responses and provide support.</p>
                </a>
            </div>
            <div class="card">
                <a href="donation.php" class="service-card">
                    <h3>DONATION</h3>
                    <p>Support our mission by giving back to the community. Make an impact with your contributions.</p>
                </a>
            </div>
            <div class="card">
                <a href="emedicine.php" class="service-card">
                    <h3>E-MEDICINE</h3>
                    <p>Access immediate medical consultations online during emergencies, ensuring timely healthcare when needed the most.</p>
                </a>
            </div>
            <div class="card">
                <a href="santation,html.php" class="service-card">
                    <h3>Sanitation</h3>
                    <p>Providing crucial sanitation support in disaster-stricken areas to maintain health and hygiene during emergencies.</p>
                </a>
            </div>
            <div class="card">
              <a href="mentalhealth.php" class="service-card">
                  <h3>Mental Health Emergencies</h3>
                  <p>Offering online mental health support to help individuals cope with the psychological impact of emergencies and crises.</p>
              </a>
            </div>
        </div>
      </section>

      <section id="alert">
        <h1 style="color: orchid; font-size: 30px; text-align: center;"> ALERT </h3>
        <p>
          The weather may change, but the beauty of a storm or a sunny day reminds us that nature is always full of surprises. Check out
          <a style="text-align: center; font-size: large;" href="https://weather.com/weather/today/l/0e3f6e32ae7bfa5acd62bffdbf5aebe9cc46ce7dbcff9235af693d5decdbaff3"> TODAY'S WEATHER</a></p>
    </section>

      <section id="about">
        <h1 style="color: orchid; font-size: 30px; text-align: center;">ABOUT US</h1>
        <div class="middle-part">
          <!-- Disaster 1: Floods -->
          <div class="disaster-detail">
            <div class="disaster-box">
              <div class="card2">
                
                  <img src="/img/flood.jpeg" alt="Floods">
                
                <div class="disaster-details">
                  <h2 class="class-02">Floods</h2>
                  <p><strong>Alert:</strong> Monitor water levels via official weather reports.</p>
                  <p><strong>Preparation:</strong> Build raised homes and secure food and water supplies.</p>
                  <p><strong>Overcoming:</strong> Evacuate to higher ground and use flood barriers.</p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Disaster 2: Cyclones -->
          <div class="disaster-detail">
            <div class="disaster-box">
              <div class="card2">
                <div class="img">
                  <img src="img/cyclone2.webp" alt="Cyclones">
                </div>
                <div class="disaster-details">
                  <h2 class="class-02">Cyclones</h2>
                  <p><strong>Alert:</strong> Stay tuned to cyclone warnings and evacuation notices.</p>
                  <p><strong>Preparation:</strong> Construct cyclone shelters and store emergency kits.</p>
                  <p><strong>Overcoming:</strong> Follow evacuation plans and avoid staying near coastlines.</p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Disaster 3: Storm Surge -->
          <div class="disaster-detail">
            <div class="disaster-box">
              <div class="card2">
                <div class="img">
                  <img src="img/storm.jpeg" alt="Storm Surge">
                </div>
                <div class="disaster-details">
                  <h2 class="class-02">Storm Surge</h2>
                  <p><strong>Alert:</strong> Watch for rising sea levels and warnings.</p>
                  <p><strong>Preparation:</strong> Build elevated structures and reinforce seawalls.</p>
                  <p><strong>Overcoming:</strong> Move inland and avoid areas prone to flooding.</p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Disaster 4: Earthquake -->
          <div class="disaster-detail">
            <div class="disaster-box">
              <div class="card2">
                <div class="img">
                  <img src="img/earthquake.jpeg" alt="Earthquake">
                </div>
                <div class="disaster-details">
                  <h2 class="class-02">Earthquake</h2>
                  <p><strong>Alert:</strong> Educate about earthquake-prone zones and aftershocks.</p>
                  <p><strong>Preparation:</strong> Secure heavy furniture and practice drills.</p>
                  <p><strong>Overcoming:</strong> Take cover under sturdy furniture and evacuate safely.</p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Disaster 5: Tsunami -->
          <div class="disaster-detail">
            <div class="disaster-box">
              <div class="card2">
                <div class="img">
                  <img src="img/tsunami2.jpg" alt="Tsunami">
                </div>
                <div class="disaster-details">
                  <h2 class="class-02">Tsunami</h2>
                  <p><strong>Alert:</strong> Respond to tsunami warnings issued after earthquakes.</p>
                  <p><strong>Preparation:</strong> Install tsunami alert systems and prepare escape routes.</p>
                  <p><strong>Overcoming:</strong> Move to higher ground and avoid low-lying areas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section id="contact" class="section contact-section">
        <h1 style="color: orchid; font-size: 30px; text-align: center;">CONTACT US</h1>
        <h1 style="color: orchid; font-style: italic; font-size: 30px; text-align: center;">We'd love for you to stay in touch</h1>
        <div class="whatsapp">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" style="width: 40px; height: 40px;">
          <span style="font-size: 14px;">WhatsApp only: +27 76 328 5889</span>
        </div>
      </section>

      <section id="follow-us">
        <h1 style="text-align: center; color: orchid;"> FOLLOW US </h1>
        <div class="follow-us">
          <a href="https://www.facebook.com" target="_blank">
              <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Follow us on Facebook" width="40" height="40">
          </a>

          <a href="https://twitter.com" target="_blank">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/X_logo_2023_original.svg/1280px-X_logo_2023_original.svg.png" alt="Follow us on Twitter" width="40" height="40">
          </a>

          <a href="https://www.instagram.com" target="_blank">
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Follow us on Instagram" width="40" height="40">
          </a>
      </div>
      
    </section>
    
    

      <footer>
        <p>&copy; 2024 Crisis Response Network. All Rights Reserved.</p>
      </footer>
    </div>

</body>
</html>
