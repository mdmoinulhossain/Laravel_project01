@include ('include/header')



<div class="parent">
  <div class="container py-5">
    <div class="row justify-content-center ">
      <div class="col-md-11">
        <div class="card faq p-2">
        <main>
              <input id="tab1" type="radio" name="tabs" checked="">
              <label for="tab1">Parents/Students</label>

              <input id="tab2" type="radio" name="tabs">
              <label for="tab2">Teachers</label>

              <section id="content1">
                    <h5 class="text-title py-2">Parents/Students (FAQ)</h5>
                    <div id="accordion">
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading1">
                                <button class="btn btn-link text-white " data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    > Q - What is TutorPortalBD.com?                                </button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - TutorPortalBD.com is a platform where parents, students and home tutors can easily connect with each other. We provide qualified private home tutors to help your child with studies and helping them perform better in exams. We are a group of 80,000+ home tutors and 30,000+ satisfied parents/students in Dhaka ,Chattagram,Rajshahi,Sylhet,khulna,Barishal,Rangpur,Mymensingh cities for different academic and professional subjects.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading2">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    > Q - I am a Parent looking for a home tutor for my child. How can i contact you?                                </button>
                            </div>
                            <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Getting in touch with us is really simple! Just post your tuition requirements <a href="{{ url('/request-for-tutor') }}">here</a> and one of our team member will get in touch with you soon regarding your tuition requirements. Alternatively, you can also contact us at 01722575388 (Mon to Sat : 10 AM to 6 PM) to discuss your tuition teacher requirements.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading3">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    > Q - Q - How do I use this website to find a home tutor?                                </button>
                            </div>
                            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Simply click on the&nbsp; Search Home Tutor link , then select your city, location, subject and class you wish to be tutored in. Our database will immediately present you with a list of qualified home tutors that best fits your tuition requirement. You may click on any of the search records to view the details of the tutor including name, teaching experience etc.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading4">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    > Q - Q - What is the cost of hiring a home tutor?                                </button>
                            </div>
                            <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - All the tutors listed on our website set their own fees. Just Contact us here&nbsp;or call us at 01722575388&nbsp;to know the fees of hiring a home tutor.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading5">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    > Q - Q - Do I need to pay something to post a tuition requirement at TutorPortalBD.com?                                </button>
                            </div>
                            <div id="collapse5" class="collapse " aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - No! You don&#39;t need to pay anything to post your tuition requirement.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading6">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                    > Q - Q - What do I do once I find a home tutor?                                </button>
                            </div>
                            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Once you have identified a home tutor that may be right for you, be sure to review their profile carefully and contact us. Also, write down a list of questions you want to ask such as background of the tutor, teaching style, hours of availability, where the tutoring will take place, references, teaching experience, tutoring fees etc.</p>

<p>Once you are satisfied with the tutor, contact us to schedule a free one-to-one trial class with the tutor for home tuitions.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading7">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                    > Q - Q - Will i get a demo class before i commit for full time tuition?                                </button>
                            </div>
                            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, Once we have identified a perfect home tutor for you or your kid&nbsp;that matches your tuition requirement, we will arrange a Two-days free demo session with the tutor at your preferred location. In case, If you do not like the demo session, we will arrange a new tutor for you.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading8">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                    > Q - Q - Do you verify your home tutors listed on your website?                                </button>
                            </div>
                            <div id="collapse8" class="collapse " aria-labelledby="heading8" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - At TutorPortalBD.com, we are committed to provide you only The Best home tutor. To ensure this, our tutors are interviewed by one of our team member and also the tutor verification process is done to make sure only the right and eligible home tutors get connected with us and become a part of our network. However, to ensure more safety, parents are advised to take ID proof and Address proof of the tutor before hiring them.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading9">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                    > Q - Q - Where does the tutoring take place?                                </button>
                            </div>
                            <div id="collapse9" class="collapse " aria-labelledby="heading9" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - In-person ,tutoring will take place in the parent&rsquo;s home.&nbsp;</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading10">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                    > Q - Q - Do i need to pay the tuition fee in advance?                                </button>
                            </div>
                            <div id="collapse10" class="collapse " aria-labelledby="heading10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - No!&nbsp;</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading11">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                    > Q - Q - What if i do not like the trial class?                                </button>
                            </div>
                            <div id="collapse11" class="collapse " aria-labelledby="heading11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - In case, if you do not like the trial class, we will arrange a new home tutor for you that matches your tuition requirement.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading12">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                    > Q - Q - What if the tutor discontinued the tuition classes in between?                                </button>
                            </div>
                            <div id="collapse12" class="collapse " aria-labelledby="heading12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Once the tuition gets started, if you feel that the tutor is not regular or discontinued the tuition for any reason, either we will arrange a new tutor for you that matches your tuition requirement</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading13">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                    > Q - Q - What is the payment mode for tuition fee?                                </button>
                            </div>
                            <div id="collapse13" class="collapse " aria-labelledby="heading13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - The payment method for tuition fee is up to the individual tutor.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading14">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                    > Q - Q - Can I have an ID proof of home tutor for verification purpose?                                </button>
                            </div>
                            <div id="collapse14" class="collapse " aria-labelledby="heading14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - To build high level of trust, TheTuitionTeacher.com always recommend parents and students to ask for a valid ID and address proof of the teacher before hiring them.</p>                                </div>
                            </div>
                        </div>
                                            </div>
              </section>

              <section id="content2">
                    <h5 class="text-title py-2">Teachers (FAQ)</h5>
                    <div id="accordion">
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading15">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                    > Q - What is the role of "TutorPortalBD.com"?                                </button>
                            </div>
                            <div id="collapse15" class="collapse show" aria-labelledby="heading15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - TutorPortalBD.com is an online platform where parents, students and home tutors can easily connect with each other. If you have a passion for teaching, we can help you find your next big tuition job that fits your skills, favorable location, class and subjects.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading16">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                    > Q - How to register as a tutor in your website?                                </button>
                            </div>
                            <div id="collapse16" class="collapse " aria-labelledby="heading16" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - <a href="{{ url('/register') }}">Click here</a> to register as a tutor and start applying on the jobs that best matches your skill, favorable location, class and subjects.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading17">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                    > Q - Q - Is tutor registration free?                                </button>
                            </div>
                            <div id="collapse17" class="collapse " aria-labelledby="heading17" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, the online tutor registration is absolutely free of cost.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading18">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                    > Q - I just registered as a home tutor. What should I do next?                                </button>
                            </div>
                            <div id="collapse18" class="collapse " aria-labelledby="heading18" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Awesome! You have taken the first step towards growing your career as a home tutor. Next step is to complete your profile and get it approved by our team. Once your profile gets approved, you can start applying on the jobs that matches with your class and subject preference.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading19">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                    > Q - Can I change my preferred locations and subjects i want to teach after registration?                                </button>
                            </div>
                            <div id="collapse19" class="collapse " aria-labelledby="heading19" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, you can update your tuition and subject preference anytime in &#39;Edit Profile&#39; section of your profile. You can add as many locations where you would like to go to teach and add as many subjects you want to teach. There is no limit!</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading20">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                    > Q - What should I write in About Me section of my profile?                                </button>
                            </div>
                            <div id="collapse20" class="collapse " aria-labelledby="heading20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - The About Me section in your profile is a perfect place to summarize about yourself as a tutor, your tutoring experience, skills and subject expertise in a clear, concise, and confident way.</p>

<p><strong>Here&#39;s an example:</strong></p>

<p>&ldquo;I have 3&nbsp;years of experience in the teaching profession. I have been teaching Physics, Math and Chemistry&nbsp;to students of class&nbsp; 9&nbsp;to 12&nbsp;of all boards. My approach to teaching is very focused and organised. I encourage students to take challenges and strive for excellence. I Have Done B.sc. & M.sc. from Dhaka University and my communication skills are good.&rdquo;</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading21">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                    > Q - As a free member, will I get any tuition enquiry?                                </button>
                            </div>
                            <div id="collapse21" class="collapse " aria-labelledby="heading21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, as a free member, you will be able to receive tuition job inquiries depending upon the availability. You can also apply for the tuition jobs that are listed in our website.</p>

<p>However, to get the contact details of students/parents and go for the trial class and start tutoring, you need to become our premium member by upgrading to premium membership. Call us at 01722575388&nbsp;to upgrade your membership now.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading22">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                    > Q - How to search and apply for the tuition jobs?                                </button>
                            </div>
                            <div id="collapse22" class="collapse " aria-labelledby="heading22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - You can search for the latest tuition jobs&nbsp;<a href="https://TutorPortalBD.com/tuition-list">here</a>&nbsp;and start applying on the jobs that fits your skills, favorable location, class and subjects.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading23">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                    > Q - How to search and apply for the tuition jobs?                                </button>
                            </div>
                            <div id="collapse23" class="collapse " aria-labelledby="heading23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - You can search for the latest tuition jobs&nbsp;<a href="https://TutorPortalBD.com/tuition-list">here</a>&nbsp;and start applying on the jobs that fits your skills, favorable location, class and subjects.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading24">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                    > Q - Will I get tuition job inquiries through SMS Or Call ?                                </button>
                            </div>
                            <div id="collapse24" class="collapse " aria-labelledby="heading24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, you will get the tuition job inquiries through SMS Or&nbsp;Phone Call. Make sure you have verified your registered email id and mobile number with us so that you start receiving tuition job inquiries from us.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading25">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                    > Q - I am not getting SMS/Email alerts. What should I do?                                </button>
                            </div>
                            <div id="collapse25" class="collapse " aria-labelledby="heading25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - This could happen if your mobile number has not been verified with us. call us at 01722575388, if you need assistance in verifying your email id and mobile number.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading26">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                    > Q - Do I need to pay in order to go for teaching?                                </button>
                            </div>
                            <div id="collapse26" class="collapse " aria-labelledby="heading26" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - Yes, you would need to Subscribe for a Premium Membership plan in order to go for teaching.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading27">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                    > Q - What is the procedure of Premium Membership verification?                                </button>
                            </div>
                            <div id="collapse27" class="collapse " aria-labelledby="heading27" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A - For Premium Membership verification, you need to upload certain documents such as Address proof, ID proof,&nbsp; etc. at the time of registration at TutorShebacom. After successful verification, you can start tutoring. Verification is done to make sure only the right and eligible home tutors get connected with us and become a part of our network.</p>

<p>The registration is valid for 1 year or maximum of 4 successful tuitions which ever happens first.&nbsp;</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading28">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                    > Q - If I register as a premium member, do you guarantee that I will get students to teach?                                </button>
                            </div>
                            <div id="collapse28" class="collapse " aria-labelledby="heading28" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We have a number of students and parents who are looking for the perfect home tutor for them and they are constantly using our service. As a premium member you will be provided with the high quality tuition jobs and we will connect you with more students/parents for trial class, but we do not guarantee that you will get the tuitions. This will totally depend upon your profile, your performance in trial class, teaching ability and skills.</p>

<p>We ensure that you&rsquo;ll get all available tuition inquiries and get hired for the job because once you get hired, we get another satisfied customer.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading29">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                    > Q - What other benefits will I get as a paid or premium Tutors ?                                </button>
                            </div>
                            <div id="collapse29" class="collapse " aria-labelledby="heading29" data-parent="#accordion">
                                <div class="card-body">
                                    <p>As a premium tuition teacher, you will get the following benefits:</p>

<ul>
	<li>High quality tuition jobs in your preferred location</li>
	<li>Fast communications, more tuition jobs, increased earnings</li>
	<li>Phone Call and&nbsp;SMS notification of new tuition jobs</li>
	<li>Our Customer Service Associate will assist you with the initial process of arranging one to one demo session with the student.</li>
	<li>Maximum exposure of your profile in our search results</li>
</ul>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading30">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse30" aria-expanded="true" aria-controls="collapse30">
                                    > Q - Is it mandatory to upload documents for verification?                                </button>
                            </div>
                            <div id="collapse30" class="collapse " aria-labelledby="heading30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, it is mandatory to upload documents for membership verification. This is done to ensure that all the information you have provided has been successfully verified by us.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading31">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                    > Q - When and how I get paid for tuition?                                </button>
                            </div>
                            <div id="collapse31" class="collapse " aria-labelledby="heading31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>After finalizing a tuition job to a tutor, we ask for 60% &nbsp;of first month&rsquo;s salary as tuition matching charge (Only once for each tuition job).</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading32">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse32" aria-expanded="true" aria-controls="collapse32">
                                    > Q - What if I am not selected in trial class?                                </button>
                            </div>
                            <div id="collapse32" class="collapse " aria-labelledby="heading32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Don&rsquo;t be disappointed if you do not get selected in trial class. There are other jobs waiting for you. Check and Apply on latest tuition jobs&nbsp;<a href="https://TutorPortalBD.com/tuition-list">here</a>. But for the next time before going to give demo, make sure you are well prepared and have revised the topics that you are going to teach.</p>                                </div>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header bg-custom" id="heading33">
                                <button class="btn btn-link text-white collapsed" data-toggle="collapse" data-target="#collapse33" aria-expanded="true" aria-controls="collapse33">
                                    > Q - What are the payment methods?                                </button>
                            </div>
                            <div id="collapse33" class="collapse " aria-labelledby="heading33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Bkash,Rocket,Nogod&nbsp;etc.</p>                                </div>
                            </div>
                        </div>
                                            </div>
              </section>
        </main>
        </div>
      </div>
    </div>
  </div>
</div>



@include ('include/footer')
