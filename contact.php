<?php include_once('./inc/header.php')?>
 <!-- START SECTION BREADCRUMB -->
 <div class="breadcrumb_section bg_gray page-title-mini">
     <div class="custom-container"><!-- STRART CONTAINER -->
         <div class="row align-items-center">
        	 <div class="col-md-6">
                 <div class="page-title">
            		 <h1>Contact </h1>
                 </div>
             </div>
             <div class="col-md-6">
                 <ol class="breadcrumb justify-content-md-end">
                     <li class="breadcrumb-item"><a href="#">Home </a></li>
                     <li class="breadcrumb-item"><a href="#">Pages </a></li>
                     <li class="breadcrumb-item active">Contact </li>
                 </ol>
             </div>
         </div>
     </div><!-- END CONTAINER-->
 </div>
 <!-- END SECTION BREADCRUMB -->

 <!-- START SECTION CONTACT -->
 <div class="section pb_70">
	 <div class="custom-container">
         <div class="row">
             <div class="col-xl-4 col-md-6">
            	 <div class="contact_wrap contact_style3">
                     <div class="contact_icon">
                         <i class="linearicons-map2"></i>
                     </div>
                     <div class="contact_text">
                         <span>Address </span>
                         <p>123 Street, Old Trafford, London, UK</p>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-md-6">
            	 <div class="contact_wrap contact_style3">
                     <div class="contact_icon">
                         <i class="linearicons-envelope-open"></i>
                     </div>
                     <div class="contact_text">
                         <span>Email Address </span>
                         <p>info@yourmail.com</p>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-md-6">
            	 <div class="contact_wrap contact_style3">
                     <div class="contact_icon">
                         <i class="linearicons-tablet2"></i>
                     </div>
                     <div class="contact_text">
                         <span>Phone </span>
                         <p>+ 457 789 789 65 </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END SECTION CONTACT -->


 <div class="section pt-0">
	 <div class="custom-container">
    	 <div class="row">
        	 <div class="col-lg-6">
            	 <div class="heading_s1">
                	 <h2>Get In touch </h2>
                 </div>
                 <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc. </p>
                 <div class="field_form">
                     <form method="post" name="enq">
                         <div class="row">
                             <div class="form-group col-md-6">
                                 <input required="" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text" />
                              </div>
                             <div class="form-group col-md-6">
                                 <input required="" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email" />
                             </div>
                             <div class="form-group col-md-6">
                                 <input required="" placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone" />
                             </div>
                             <div class="form-group col-md-6">
                                 <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" />
                             </div>
                             <div class="form-group col-md-12">
                                 <textarea required="" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
                             </div>
                             <div class="col-md-12">
                                 <button type="submit" title="Submit Your Message!" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">Send Message </button>
                             </div>
                             <div class="col-md-12">
                                 <div id="alert-msg" class="alert-msg text-center"></div>
                             </div>
                         </div>
                     </form>		
                 </div>
             </div>
             <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
            	 <!-- <div id="map" class="contact_map2" data-zoom="12" data-latitude="40.680" data-longitude="-73.945" data-icon="assets/images/marker.png"></div> -->
                 <iframe class="contact_map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.92898151095!2d90.36077836144591!3d23.87663260972928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1634363203844!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
         </div>
     </div>
 </div>


<?php include_once('./inc/footer.php')?>