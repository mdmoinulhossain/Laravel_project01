 @include ('include/header')


    <div class="container">
        <div class="row mt-4">

            <div class="col-md-7 col-12">

                <div id="carouselExampleControls-1" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                           <img class="d-block img-fluid" src="<?php echo url('/'); ?>/assets/images/storage/slider/slide1.jpg" alt="Slider Image One">

                        </div>
                        <div class="carousel-item ">
                           <img class="d-block img-fluid" src="<?php echo url('/'); ?>/assets/images/storage/slider/slide2.jpg" alt="Slider Image Three">

                        </div>
                        <div class="carousel-item ">
                           <img class="d-block img-fluid" src="<?php echo url('/'); ?>/assets/images/storage/slider/slide3.jpg" alt="Slider Image Four">

                       </div>
                        <div class="carousel-item ">
                           <img class="d-block img-fluid" src="<?php echo url('/'); ?>/assets/images/storage/slider/slide4.jpg" alt="Slider Image Five">

                       </div>
                    </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

            </div>
            <div class="col-md-5 col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            SEARCH FOR TUTORS
                        </h3>
                        <h5>
                            Find the right tutor, in your area
                        </h5>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="#" accept-charset="UTF-8" class="search-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select  name="districts" class="form-control districts single-select">
                                        <option value="">Select Districts</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Chattogram</option>
                                        <option value="5">Rajshahi</option>
                                        <option value="6">Sylhet</option>
                                        <option value="7">Khulna</option>
                                        <option value="8">Barishal</option>
                                        <option value="9">Rangpur</option>
                                        <option value="10">Mymensingh</option>
                                    </select>
                                </div>
                                <div name="area" class="form-group col-md-6">

                                        <select name="area" class="form-control area single-select">
                                            <option value="">Select Area</option>
                                            <option value="3">Dhaka</option>
                                            <option value="4">Chattogram</option>
                                            <option value="5">Rajshahi</option>
                                            <option value="6">Sylhet</option>
                                        </select>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select name="medium" class="form-control medium single-select">
                                        <option value="">Select Medium</option>
                                        <option value="Bangla Medium">Bangla Medium</option>
                                        <option value="English Version">English Version</option>
                                        <option value="English Medium">English Medium</option>
                                        <option value="Madrasa Medium">Madrasa Medium</option>
                                        <option value="Admission Test">Admission Test</option>
                                        <option value="Professional skill Development">Professional skill Development</option>
                                        <option value="Language Learning">Language Learning</option>
                                </select>
                                </div>
                                <div name="class" class="form-group col-md-6">

                                        <select name="class" class="form-control class single-select">
                                            <option value="">Select Class</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div name="subject" class="form-group col-md-6">

                                        <select name="subject" class="form-control subject single-select">
                                            <option value="">Select Subject</option>
                                        </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <select name="gender" class="form-control single-select">
                                        <option value="">Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block">Search For Tutor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-9">
                <h5 class="text-title">FEATURED TUTORS</h5>
                <div class="card-columns featured-tutor-list">

                    <a href="https://TutorPortalBD.com/tutor-details/TS-10840" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p1.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Md.Miraz Hossain</strong><br>
                                <span class="text-secondary">Dhaka University</span>
                                <h6 class="text-success">Mathematics</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-10708" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p2.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Yumna Haque</strong><br>
                                <span class="text-secondary">North South University</span>
                                <h6 class="text-success">BBA general</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-10573" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p3.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Arafat Hossen</strong><br>
                                <span class="text-secondary">North South University</span>
                                <h6 class="text-success">Pharmacy</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-4718" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p4.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Shakhawat Hossen</strong><br>
                                <span class="text-secondary">IBA- Jahangirnagar University</span>
                                <h6 class="text-success">BBA ( IBA)</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-4599" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p5.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Md. Bokthier Rahman</strong><br>
                                <span class="text-secondary">KUET</span>
                                <h6 class="text-success">Textile engineering</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-4195" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p6.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Ishrat Jahan Mitu</strong><br>
                                <span class="text-secondary">BRAC University</span>
                                <h6 class="text-success">CSE</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-4131" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p7.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Mahfuzur Rahman</strong><br>
                                <span class="text-secondary">BUET</span>
                                <h6 class="text-success">Mechanical Engineering</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-3647" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p8.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Zohura Rahman</strong><br>
                                <span class="text-secondary">Jahangirnagar University</span>
                                <h6 class="text-success">Finance &amp; Banking</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-3330" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p9.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Jahura hossain</strong><br>
                                <span class="text-secondary">North-southUniversity</span>
                                <h6 class="text-success">Bba</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-1749" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p10.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>ASIF AHMED ANIK</strong><br>
                                <span class="text-secondary">BUET</span>
                                <h6 class="text-success">Civil(environmental)</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-679" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p11.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Irin akter lithy</strong><br>
                                <span class="text-secondary">Rajshahi University</span>
                                <h6 class="text-success">Botany</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-350" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p13.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Adnan Ahmed</strong><br>
                                <span class="text-secondary">Job Holder</span>
                                <h6 class="text-success">Electrical and Electronics Engineering</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-51" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p14.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Mahdi Mubin Shaikat</strong><br>
                                <span class="text-secondary">Brac University</span>
                                <h6 class="text-success">Pharmacy</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-49" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p15.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Alkas Miah</strong><br>
                                <span class="text-secondary">University of Dhaka</span>
                                <h6 class="text-success">Banking and Insurance</h6>
                            </div>
                        </div>
                    </a>

                    <a href="https://TutorPortalBD.com/tutor-details/TS-14" class="card">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img" src="<?php echo url('/'); ?>/assets/images/storage/pic/p14.jpg" alt="">
                                <h6 class="text-info text-center">Dhaka</h6>
                            </div>
                            <div class="col-8">
                                <strong>Saimul Huda Siddique</strong><br>
                                <span class="text-secondary">University of Dhaka</span>
                                <h6 class="text-success">Statistics</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="text-title">LOGIN HERE <span style="color: #7A7777">(Parents/Students only)</span></h5>
                <div class="card mb-3">
                    <div class="p-2">
                        <form method="POST" action="https://TutorPortalBD.com/login">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-8 py-0">
                                    <a href="https://TutorPortalBD.com/register"><i class="fa fa-user"></i> Register Now</a><br>
                                    <a href="https://TutorPortalBD.com/password/reset" class="text-muted"><i class="fa fa-lock"></i> Forgot Password!</a>
                                </div>
                                <div class="col-md-12 col-4">
                                    <button class="btn btn-custom">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<div class="row mt-3">
    <div class="col-12">
        <h4 class="text-title">RECENT TUITION JOB</h4>
        <!--<div class="owl-carousel owl-one">-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="card my-4 tuition-list carousel-item active">
                    <div class="card-body recent_tutor">
                        <small class="text-muted">Job-id-1970</small>
                        <p class="t_title">Need a tutor for class 6 student</p>
                        <div class="form-row pb-1">
                            <div class="col-md-5">
                                <b class="text-primary">Category :</b> Bangla Medium
                            </div>
                            <div class="col-md-3">
                                <b class="text-primary">Class :</b> Class 6
                            </div>
                            <div class="col-md-4">
                                <b class="text-primary">Student Gender :</b> Female
                            </div>
                        </div>
                        <b>5 Days/Week </b><br>
                        <b>Salary :</b> 3000, <b>Tutor gender preference :</b> Any Gender, <b>No. of Students :</b> 1<br>
                        <span>Subjects : English, General Maths</span>
                        <p class="text-secondary">Tutoring Time : Negotiable</p>
                        <div class="row">
                            <div class="col-md-5">
                                <h5><i class="fa fa-map-marker"></i> Dhaka,savar</h5>
                            </div>
                            <div class="col-md-7">
                                <a href="https://TutorPortalBD.com/tuition-list" class="btn btn-sm btn-custom text-light pull-right">
                                    <i class="fa fa-link"></i> More details
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <small class="col-md-8">Other Requirements - .</small>
                            <small class="col-md-4">Published Time:  54 minutes ago</small>
                        </div>
                    </div>
            </div>
            <div class="card my-4 tuition-list carousel-item ">
                    <div class="card-body recent_tutor">
                        <small class="text-muted">Job-id-1969</small>
                        <p class="t_title">Need A male tutor for class 5+6 student</p>
                        <div class="form-row pb-1">
                            <div class="col-md-5">
                                <b class="text-primary">Category :</b> English Version
                            </div>
                            <div class="col-md-3">
                                <b class="text-primary">Class :</b> Class 6
                            </div>
                            <div class="col-md-4">
                                <b class="text-primary">Student Gender :</b> Male
                            </div>

                        </div>
                        <b>5 Days/Week </b><br>
                        <b>Salary :</b> 6000, <b>Tutor gender preference :</b> Male, <b>No. of Students :</b> 1<br>
                        <span>Subjects : General Maths, General Science</span>
                        <p class="text-secondary">Tutoring Time : 9:00 pm</p>
                        <div class="row">
                            <div class="col-md-5">
                                <h5><i class="fa fa-map-marker"></i> Dhaka,Uttara Sector 4</h5>
                            </div>
                            <div class="col-md-7">
                                <a href="https://TutorPortalBD.com/tuition-list" class="btn btn-sm btn-custom text-light pull-right">
                                    <i class="fa fa-link"></i> More details
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <small class="col-md-8">Other Requirements - number of student 02.</small>
                            <small class="col-md-4">Published Time:  4 hours ago</small>
                        </div>
                    </div>
            </div>
            <div class="card my-4 tuition-list carousel-item ">
                    <div class="card-body recent_tutor">
                        <small class="text-muted">Job-id-1968</small>
                        <p class="t_title">Need A female tutor for class 9 student</p>
                        <div class="form-row pb-1">
                            <div class="col-md-5">
                                <b class="text-primary">Category :</b> English Version
                            </div>
                            <div class="col-md-3">
                                <b class="text-primary">Class :</b> Class 9
                            </div>
                            <div class="col-md-4">
                                <b class="text-primary">Student Gender :</b> Female
                            </div>

                        </div>
                        <b>4 Days/Week </b><br>
                        <b>Salary :</b> 8000, <b>Tutor gender preference :</b> Female, <b>No. of Students :</b> 1<br>
                        <span>Subjects : All</span>
                        <p class="text-secondary">Tutoring Time : 7:00 pm</p>
                        <div class="row">
                            <div class="col-md-5">
                                <h5><i class="fa fa-map-marker"></i> Dhaka,Mohamadpur</h5>
                            </div>
                            <div class="col-md-7">
                                <a href="https://TutorPortalBD.com/tuition-list" class="btn btn-sm btn-custom text-light pull-right">
                                    <i class="fa fa-link"></i> More details
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <small class="col-md-8">Other Requirements - must be  from  science background experienced.</small>
                            <small class="col-md-4">Published Time:  5 hours ago</small>
                        </div>
                    </div>
            </div>
            <div class="card my-4 tuition-list carousel-item ">
                    <div class="card-body recent_tutor">
                        <small class="text-muted">Job-id-1967</small>
                        <p class="t_title">Need a tutor for class 5  student</p>
                        <div class="form-row pb-1">
                            <div class="col-md-5">
                                <b class="text-primary">Category :</b> English Medium
                            </div>
                            <div class="col-md-3">
                                <b class="text-primary">Class :</b> Standard 5
                            </div>
                            <div class="col-md-4">
                                <b class="text-primary">Student Gender :</b> Male
                            </div>

                        </div>
                        <b>5 Days/Week </b><br>
                        <b>Salary :</b> 6000, <b>Tutor gender preference :</b> Any Gender, <b>No. of Students :</b> 1<br>
                        <span>Subjects : All</span>
                        <p class="text-secondary">Tutoring Time : 5:00 pm</p>
                        <div class="row">
                            <div class="col-md-5">
                                <h5><i class="fa fa-map-marker"></i> Dhaka,Narayanganj</h5>
                            </div>
                            <div class="col-md-7">
                                <a href="https://TutorPortalBD.com/tuition-list" class="btn btn-sm btn-custom text-light pull-right">
                                    <i class="fa fa-link"></i> More details
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <small class="col-md-8">Other Requirements - must be experienced.</small>
                            <small class="col-md-4">Published Time:  5 hours ago</small>
                        </div>
                    </div>
                </div>
        </div>
        <a class="carousel-control-prev recent_tutor" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next recent_tutor" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>
</div>

</div>


@include ('include/footer')
