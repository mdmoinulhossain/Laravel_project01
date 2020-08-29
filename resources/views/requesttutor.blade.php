@include ('include/header')

        <div class="parent">
        <div class="container">
                        <div class="row">
                <div class="col-md-8">
                    <div class="card my-5">
                        <div class="card-header">
                            <h4 class="text-center">REQUEST FOR A TUTOR</h4>
                        </div>
                        <div class="card-body parent-request-form">
                            <form method="post" action="https://tutorsheba.com/tuition_request">
                                <input type="hidden" name="_token" value="fD9jCaAeNlWEhPgMuiwwRdMqVQ10GAXb6eCQwxhy">                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title*</label>
                                    <input type="text" name="title" class="form-control form-control-lg" placeholder="Example: Need a tutor for Class X at Dhaka, Mirpur">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name*</label>
                                    <input type="text" name="s_fullName" class="form-control" value="" placeholder="Type your Name (Parent/Student)">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Select Student Gender <span style="font-size:12px; color:red;">(Note Given in HELP/INFO side*)</span> </label>
                                        <select name="s_gender" class="form-control">
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Institute <span>(optional)</span>  </label>
                                        <input type="text" name="s_college" class="form-control" placeholder="Type your Institute name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Select Your Medium <span style="font-size:12px; color:red;">(Note Given in HELP/INFO side*)</span></label>
                                        <select name="s_medium" class="form-control medium" >
                                        <option disabled="disabled">Select your Medium</option>
                                        <option value="Bangla Medium">Bangla Medium</option>
                                        <option value="English Version">English Version</option>
                                        <option value="English Medium">English Medium</option>
                                        <option value="Religious Studies">Religious Studies</option>
                                        <option value="Admission Test">Admission Test</option>
                                        <option value="Professional skill Development">Professional skill Development</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Special Skill Development">Special Skill Development</option>
                                        <option value="Project /Assignment">Project /Assignment</option>
                                        <option value="Language Learning">Language Learning</option>
                                        <option value="Test Preparation">Test Preparation</option>
                                        <option value="Madrasa Medium">Madrasa Medium</option>
                                    </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Select Student Class <span style="font-size:12px; color:red;">(Note Given in HELP/INFO side*)</span> </label>

                                            <select name="s_class" class="form-control  class single-select">
                                                <option disabled="disabled">Select your class</option>
                                                <option>class 1</option>
                                                <option>class 1</option>
                                                <option>class 1</option>
                                                <option>class 1</option>
                                            </select>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Number of Students*</label>
                                        <input type="number" name="s_phoneNumber" class="form-control " value="" placeholder="Example: 1,2,3,.....">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Tuition Time*</label>
                                        <input type="email" name="s_email" class="form-control" placeholder="Example: 10.00AM">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Phone Number*</label>
                                        <input type="text" name="s_phoneNumber" class="form-control " value="" placeholder="Type your phone number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">E-Mail <small>(optional)</small></label>
                                        <input type="email" name="s_email" class="form-control" placeholder="Type your E-Mail">
                                    </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1">Salary range*</label>
                                      <select name="t_salary" class="form-control single-select">
                                          <option value="" >Please select Salary Range</option>
                                          <option value="Negotiable" >Negotiable</option>
                                          <option value="2000 Tk/Month" >2000 Tk/Month</option>
                                          <option value="2500 Tk/Month" >2500 Tk/Month</option>
                                          <option value="3000 Tk/Month" >3000 Tk/Month</option>
                                          <option value="3500 Tk/Month" >3500 Tk/Month</option>
                                          <option value="4000 Tk/Month" >4000 Tk/Month</option>
                                          <option value="4500 Tk/Month" >4500 Tk/Month</option>
                                          <option value="5000 Tk/Month" >5000 Tk/Month</option>
                                          <option value="5500 Tk/Month" >5500 Tk/Month</option>
                                          <option value="6000 Tk/Month" >6000 Tk/Month</option>
                                          <option value="6500 Tk/Month" >6500 Tk/Month</option>
                                          <option value="7000 Tk/Month" >7000 Tk/Month</option>
                                          <option value="7500 Tk/Month" >7500 Tk/Month</option>
                                          <option value="8000 Tk/Month" >8000 Tk/Month</option>
                                          <option value="8500 Tk/Month" >8500 Tk/Month</option>
                                          <option value="9000 Tk/Month" >9000 Tk/Month</option>
                                          <option value="9500 Tk/Month" >9500 Tk/Month</option>
                                          <option value="10,000 Tk/Month" >10,000 Tk/Month</option>
                                          <option value="above 10,000 Tk/Month">above 10,000 Tk/Month</option>
                                      </select>
                                  </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Select Area Name*</label>
                                            <select name="s_area" class="form-control area single-select ">
                                                <option value="disabled">Select Area</option>
                                                <option value="">Mohammadpur</option>
                                                <option value="">Zatrabari</option>
                                                <option value="">Dhanmondi</option>
                                                <option value="">Gulshan</option>
                                            </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Location Details*</label>
                                    <textarea name="s_address" class="form-control" rows="2"></textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Select Teacher Gender <span>(If required)</span></label>
                                        <select name="t_gender" class="form-control">
                                        <option>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1">Days Per Week*</label>
                                        <select name="t_days" class="form-control days">
                                            <option value=" " >Please select your Day</option>
                                            <option value="1 Day/Week" >1 Day/Week</option>
                                            <option value="2 Days/Week" >2 Days/Week</option>
                                            <option value="3 Days/Week" >3 Days/Week</option>
                                            <option value="4 Days/Week" >4 Days/Week</option>
                                            <option value="5 Days/Week" >5 Days/Week</option>
                                            <option value="6 Days/Week" >6 Days/Week</option>
                                            <option value="7 Days/Week" >7 Days/Week</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Select Subject*</label>
                                        <select name="t_subject[]" class="form-control subject single-select" multiple="multiple">
                                            <option>Bangla</option>
                                            <option>english</option>
                                            <option>math</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Other Information/Requirements <span>(If required)</span> </label>
                                    <textarea name="ex_information" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-custom">Submit Request <i class="fa fa-send"></i></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-5">
                        <h3 class="bg-custom text-light py-3 pl-3">HELP & INFO</h3>
                        <div class="p-2">
                        <strong>Q. If i cant get the desired tutor ?</strong>
                        <p class="mt-1 text-secondary">
                            Just fill up the request tutor form and send us. We will try to find your desired tutor.
                        </p>
                        <strong>Q. what will happen after fill the forms ?</strong>
                        <p class="mt-1 text-secondary text-justify">
                            After fill up the form the information will be sent to tutorportalbd support team. They will contact you and review/verify the info and will publish on the available tuitions section.
                        </p>
                        <strong style="color:red;">*Note:</strong>
                        <p style="color: green;">
                            If Number of Student more than one and they are different Gender or study in different classes/Medium, please skip <span style="color:red;">"Select Student class", "Select Student Medium" and "Select Student Gender"</span> option and mentions it <span style="color:red;">"other information"</span> option.
                        </p>
                        <strong style="color:red;">Star(*) sign options are must be filled up! </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@include ('include/footer')
