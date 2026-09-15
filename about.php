<html lang="en">
     <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>About - Page</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/style.css">
     </head>
     <body>

    <?php
        include 'header.php';   
    ?>
        <section class="py-5"> 
            <div class="container"> 
                <div class="row align-items-center g-5">
                    <div class="col-md-12 col-lg-6">
                        <img src="Image/3.jpg" class="about-img "alt="Industrial Machinery">
                    </div>
                    <div class="col-md-12 col-lg-6 h-center" >
                        <h2 class="fw-bold mb-3">About our Compony</h2>
                        <p >We are a professional machinery company providing reliable and high-quality machinery solutions for different industries. </p> 
                         <p> Our goal is to provide powerful, durable and efficient machinery that helps businesses improve productivity and reduce operational costs. </p> 
                        <p> We focus on quality, customer satisfaction and long-term relationships with our clients. </p> 
                      <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>

            </div> 
            </section>
            <section class="py-5 bg-light-rgba(187, 121, 126, 0.99)"> 
                <div class="container"> 
                    <h2 class="text-center fw-bold mb-5"> Our Mission & Vision </h2>
                    <div class="row g-4">
                         <!-- Mission --> 
                        <div class="col-md-12 col-lg-6"> 
                            <div class="card contact-card shadow-sm h-100 p-4"> 
                                <div class="card-body contact"> 
                                    <h3 class="text-warning"> 🎯 Our Mission </h3>
                                 <p class="mt-3 text-muted"> Our mission is to provide high-quality machinery and professional services that help our customers achieve better productivity and performance. </p>
                                 </div> 
                            </div> 
                        </div>
                         <div class="col-md-12 col-lg-6"> 
                                <div class="card contact-card shadow-sm h-100 p-4">
                                     <div class="card-body">
                                         <h3 class="text-warning"> 👁️ Our Vision </h3> 
                                         <p class="mt-3 text-muted"> Our vision is to become a trusted machinery solutions provider by delivering quality products, reliable service and excellent customer support. </p> 
                                    </div> 
                                </div> 
                        </div> 
                    </div> 
                </div> 
            </section>
                    
</br></br>
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">
            Company Statistics 📊
        </h2>
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="p-3">
                    <h3>100+</h3>
                    
                </div>
            </div>
        </div>

    </div>

</section>
<?php
    include 'footer.php';
?>
     </body>
 </html>