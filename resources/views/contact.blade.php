@include ('include/header')



    <div class="container">
        <h5 class="text-title mt-3">Contact Us</h5>
                <div class="row mt-5 mb-10">
            <div class="col-md-8">
                <form method="POST" action="https://TutorPortalBD.com/contact" accept-charset="UTF-8" class="contact-form"><input name="_token" type="hidden" value="QnlHsHmkTzOviFtxdJaBz6hrcDtZlEcy8qVrLmHV">
                    <div class="form-group">
                        <input type="text" name="fast_name" class="form-control form-control-lg" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone_number" class="form-control form-control-lg" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea  name="comment" class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-lg btn-custom pull-right mr-md-5">Send Message</button>
                </form>
            </div>
            <div class="col-md-3 offset-md-1">
               <h5 class="text-title mt-3 mb-5">Our Office Location</h5>
               <div class="row">
                    <div class="col-2"><i class="fa fa-map-marker fa-2x text-info"></i> </div>
                    <div class="col-9">House-1-B,Block-F, Road-19,Tikkapara, Mohammadpur, Dhaka 1207</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"><i class="fa fa-mobile-phone fa-2x text-info"></i> </div>
                    <div class="col-9">01681894386</div>
                </div>
            </div>
        </div>
    </div>




@include ('include/footer')
