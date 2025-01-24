<div class="navbar-wrapper">
    <!-- Top Bar -->
    <div class="top-bar py-3 text-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- Flags Section -->
                <div class="col-md-4 d-flex justify-content-start">
                    <span style="width: 40px; height: 40px;" class="fi fi-us me-2" title="United States"></span>
                    <span style="width: 40px; height: 40px;" class="fi fi-gb me-2" title="United Kingdom"></span>
                    <span style="width: 40px; height: 40px;" class="fi fi-ca me-2" title="Canada"></span>
                    <span style="width: 40px; height: 40px;" class="fi fi-au" title="Australia"></span>
                </div>

                <!-- Email and Phone Section -->
                <div class="col-md-4 d-flex justify-content-center">
                    <span class="d-flex align-items-center me-3">
                        <i class="bi bi-envelope-fill me-1">   <?php echo COMPANY_EMAIL?> </i>
                    </span>
                    <span class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill me-1">  <?php echo COMPANY_PHONE?> </i>
                    </span>
                </div>

                <!-- Social Media Links Section -->
                <div class="col-md-4 d-flex justify-content-end">
    <a href="#" class="text-white me-2" title="Facebook">
        <div style="width: 40px; height: 40px; background-color: #3b5998; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-facebook" style="font-size: 20px;"></i>
        </div>
    </a>
    <a href="#" class="text-white me-2" title="Twitter">
        <div style="width: 40px; height: 40px; background-color: #1da1f2; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-twitter" style="font-size: 20px;"></i>
        </div>
    </a>
    <a href="#" class="text-white me-2" title="Instagram">
        <div style="width: 40px; height: 40px; background-color: #e4405f; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-instagram" style="font-size: 20px;"></i>
        </div>
    </a>
    <a href="#" class="text-white" title="LinkedIn">
        <div style="width: 40px; height: 40px; background-color: #0077b5; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-linkedin" style="font-size: 20px;"></i>
        </div>
    </a>
</div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <div class="company-section-company-text"><?php echo COMPANY_NAME ?> (Company Logo here)</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="expertiseDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Drop Down</a>
                        <ul class="dropdown-menu" aria-labelledby="expertiseDropdown">
                            <li><a class="dropdown-item" href="?page=web">abc</a></li>
                            <li><a class="dropdown-item" href="?page=mobile">sdfsdf sfdsdfsdf</a></li>
                            <li><a class="dropdown-item" href="?page=seo">sdfsdf</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=about">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=blog">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=contact">Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Company Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Company Info Section -->
            <div class="col-md-6">
                <h1 class="fw-bold company-section-company-heading "><?php echo COMPANY_NAME ?></h1>
                <h3 class="company-section-company-motto"><?php echo COMPANY_MOTTO ?></h3>
                <p class="company-section-company-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod non quia alias ipsam recusandae laudantium corporis ad illo nihil voluptatibus tenetur sapiente ea, impedit aperiam aspernatur fugiat, minus, hic at.</p>
                
                <div class="d-flex align-items-center mb-3">
                    
                    <div class="me-3 text-center company-section-company-text">
                    <i class="bi bi-people-fill"></i>
                        <div class="h4 fw-bold">20+</div> 
                        <div class="company-section-company-text-2">Employees</div>
                    </div>
                    <div class="me-3 text-center company-section-company-text">
                    <i class="bi bi-calendar-x-fill"></i>
                        <div class="h4 fw-bold">1000+ </div>
                        <div class="company-section-company-text-2">Projects Completed</div>
                      
                    </div>
                    <div class="me-3 text-center company-section-company-text">
                    <i class="bi bi-globe"></i>
                        <div class="h4 fw-bold">5+</div>
                        <div class="company-section-company-text-2">Countries</div>
                      
                    </div>
                </div>

                <a href="#" class="btn company-section-company-button">Reach Out to Us</a>
            </div>

            <!-- Image Section -->
            <div class="col-md-6 align-items-center">
                <center>
                <div class="company-section-image-container">
                    <img style="height: 450px;" src="./assets/images/pngwing.com.png" alt="Company Image" class="img-fluid hover-effect" id="hoverImage">
                </div>
                </center>
            </div>
        </div>
    </div>
    <div class="curly-shape" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
	c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
	c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
</svg>		</div>
</div>





</div>
