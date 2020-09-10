@include ('include/header')

<div class="container">
        <h5 class="text-title my-3">TUTOR PROFILE</h5>
                <div class="row">
            <div class="col-md-9 mb-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-thumbnail mx-auto d-block mt-3" src="<?php echo url('/'); ?>/assets/images/storage/pic/pt1.jpg" alt="Md. Jobaer Hossain">
                            <small class="ml-4"><i class="fa fa-clock-o"></i> Member Since: 2020-03-07 14:51:04</small>
                            <h5 class="bg-info text-light py-1 mt-1 pl-4">PREMIUM TUTOR</h5>
                        </div>
                        <div class="col-md-7 mt-3">
                            <div class="row">
                                <div class="col-4">Name:</div>
                                <div class="col-7">
                                    <h4>Md. Jobaer Hossain</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">ID#:</div>
                                <div class="col-7">
                                    <h6>TS-11018</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Gender:</div>
                                <div class="col-7">
                                    <h6>Male</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Qualification:</div>
                                <div class="col-7">
                                    <h6>BBA 4th year running</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Area Covered:</div>
                                <div class="col-7">
                                    Dhaka
                                    (Khilgaon, Shajahanpur)
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Teaching:</div>
                                <div class="col-7">
                                    All Subjects
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Present Location:</div>
                                <div class="col-7">
                                    Khilgoan,taltola
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <table class="table">
                                <thead class="thead-custom">
                                <tr>
                                    <th scope="col">Tution Info</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Expected Minimum Salary</th>
                                    <td>3000 Tk/Month</td>
                                </tr>
                                <tr>
                                    <th scope="row">Current Status for Tuition </th>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">Days Per Week</th>
                                    <td colspan="2">4 Days/Week, 5 Days/Week</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preffered Tution Style</th>
                                    <td>Private Tuition</td>
                                </tr>
                                <tr>
                                    <th scope="row">Place of Learning</th>
                                    <td>Home Visit</td>
                                </tr>
                                <tr>
                                    <th scope="row">Extra Facilities</th>
                                    <td colspan="2">Phone help</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preffered Medium of Version</th>
                                    <td>Bangla Medium</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preffered Class </th>
                                    <td>Class 1, Class 2, Class 3, Class 4, Class 5</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preffered Subjects</th>
                                    <td colspan="2">All Subjects</td>
                                </tr>

                                <tr>
                                    <th scope="row">Preferred Time</th>
                                    <td colspan="2">Afternoon, evening, After Magrib</td>
                                </tr>
                                <tr>
                                    <th scope="row">Preffered Area to Teach</th>
                                    <td colspan="2">Dhaka ,<br> Khilgaon, Shajahanpur</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="ml-2">Educational Qualification</h4>
                            <table class="table table-bordered">
                                <thead class="thead-custom">
                                <tr>
                                    <th>Exam Name</th>
                                    <th>Year</th>
                                    <th>Institute</th>
                                    <th>Group/Subject</th>
                                    <th>Result</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ssc</td>
                                    <td>2013</td>

                                    <td>Khilgoan Model High school</td>
                                    <td>Business study </td>
                                    <td>4.50</td>
                                </tr>


                                <tr>
                                    <td>Hsc</td>
                                    <td>2015</td>

                                    <td>National ideal college</td>
                                    <td>Business study </td>
                                    <td>4.75</td>
                                </tr>

                                <tr>
                                    <td>Honours</td>
                                    <td>2016-2020</td>
                                    <td>The Millennium University</td>
                                    <td>Major in finance </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <h6 class="text-title">Want to Contact with This tutor?</h6>
                <form action="https://tutorportalbd.com/student_to_teacher_request" method="post">
                    <input type="hidden" name="_token" value="fD9jCaAeNlWEhPgMuiwwRdMqVQ10GAXb6eCQwxhy">                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="request_name" placeholder="Enter your full name">
                        <input type="hidden" name="tutor_id" value="9665">
                    </div>
                    <div class="form-group">
                        <label for="E-Mail">E-Mail</label>
                        <input type="email" name="request_email" class="form-control" id="E-Mail" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNo">Phone Number</label>
                        <input type="number" name="request_phoneNumber" class="form-control" id="PhoneNo" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="DetailsInformation">Details Information</label>
                        <textarea rows="3" name="request_info" class="form-control" id="DetailsInformation"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>

            </div>
        </div>
      </div>

@include ('include/footer')
