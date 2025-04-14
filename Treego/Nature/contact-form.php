<?php

 include('config.php'); 
  
if(isset($_POST['submit_forms'])){ 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $msg=$_POST['message'];
 if($name!="" && $email!="" && $subject!="" && $msg!=""){
  $query_contact="INSERT INTO `tree`( `name`, `e-mail`, `subject`, `message`)
VALUES ('$name',' $email','$subject','$msg')";

$query5=mysqli_query($conn,$query_contact);
if($query5){
    echo"<script>alert('Thanks for filling out our form!');</script>";
}else{
    echo" no submit ". mysqli_error($conn);
}
}else{echo "<script>alert('Please Fill out This Field');</script>";}
}
 

?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Have any questions? We'd love to here from you.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Mumbai</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>email.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 8433694423</p>
                    </div>

                    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470.6884648233254!2d72.86296505675327!3d19.303762707209206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b02f8b9c1f31%3A0x98bbd8cee403ebcc!2sNew%20Bhalchandra%20Apt.!5e0!3m2!1sen!2sin!4v1716904483828!5m2!1sen!2sin"
    frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" >
                <form action="https://formspree.io/f/mqapworz" method="post" enctype="multipart/form-data" class="php-email-form" autocomplete="off">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                    </div>


                    <div class="col-12 text-center">
                        <button type="submit" name="submit_forms" class="btn btn-primary text-center">Send
                            Message</button>

                    </div>
                </form>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->