<?php

include 'db.php';
$query="SELECT * from tblcontent"; 
$result= mysqli_query($conn,$query); 
while($row = mysqli_fetch_assoc($result)) { $title = $row['title']; 
$navtitle = $row['navtitle']; } 

?>

<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\Css\style.css">

    <title><?php echo $title; ?></title>
    <script>
 document.addEventListener("DOMContentLoaded", function() {
  const dobInput = document.getElementById("dob");
  dobInput.addEventListener("focus", () => {
    dobInput.setAttribute("placeholder", "mm/dd/yyyy");
  });
  dobInput.addEventListener("blur", () => {
    dobInput.setAttribute("placeholder", "Date of Birth:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const fullnameInput = document.getElementById("fullname");
  fullnameInput.addEventListener("focus", () => {
    fullnameInput.setAttribute("placeholder", "First name , Last Name");
  });
  fullnameInput.addEventListener("blur", () => {
    fullnameInput.setAttribute("placeholder", "Full Name:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const emailInput = document.getElementById("email");
  emailInput.addEventListener("focus", () => {
    emailInput.setAttribute("placeholder", "(e.g. user@example.com)");
  });
  emailInput.addEventListener("blur", () => {
    emailInput.setAttribute("placeholder", "Email:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const mobileInput = document.getElementById("mobile");
  mobileInput.addEventListener("focus", () => {
    mobileInput.setAttribute("placeholder", "(e.g. 09123456789)");
  });
  mobileInput.addEventListener("blur", () => {
    mobileInput.setAttribute("placeholder", "Mobile Number:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const usernameInput = document.getElementById("username");
  usernameInput.addEventListener("focus", () => {
    usernameInput.setAttribute("placeholder", "(must be at least 8 characters)");
  });
  usernameInput.addEventListener("blur", () => {
    usernameInput.setAttribute("placeholder", "Username:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const passwordInput = document.getElementById("password");
  passwordInput.addEventListener("focus", () => {
    passwordInput.setAttribute("placeholder", "Enter your password");
  });
  passwordInput.addEventListener("blur", () => {
    passwordInput.setAttribute("placeholder", "Password:");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const confirmPasswordInput = document.getElementById("confirmpassword");
  confirmPasswordInput.addEventListener("focus", () => {
    confirmPasswordInput.setAttribute("placeholder", "Confirm your password");
  });
  confirmPasswordInput.addEventListener("blur", () => {
    confirmPasswordInput.setAttribute("placeholder", "Confirm Password:");
  });
});


    </script>
</head>

<body>

<div class="loader_bg">
    <div class="loader"></div>
</div>
    <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
    </script>

    <?php 
    if(isset($errmsg)){ echo $errmsg; }
    
    ?>



    <div class="modal fade" tabindex="-1" role="dialog" id="modalTC">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">TERMS AND CONDITION</h4>
                </div>
                <div class="modal-body">
                    <p>Last updated: July 4, 2023</p>

                    <p>1. <b>Introduction:</b></p>
                    <p>Welcome to <b>Butag Cemetery</b> ("Company", "we", "our", "us")! These Terms of Service ("Terms",
                        "Terms of Service") apply to your use of our website located at <b>butagcemetery.com</b> (the
                        "Service") which is operated by Butag Cemetery.</p>
                    <p>Your use of the Service is also subject to our Privacy Policy which explains how we collect,
                        protect, and share information resulting from your use of our website.</p>
                    <p>By using the Service, you acknowledge that you have read and understood these Terms and our
                        Privacy Policy ("Agreements"), and agree to comply with them. If you do not agree with these
                        Agreements or are unable to comply with them, you may not use the Service. However, please let
                        us know by emailing us at <b>butagcemetery@gmail.com</b> so that we can try to find a solution.
                    </p>
                    <p>These Terms apply to all users, visitors, and others who access or use the Service.</p>



                    <p>2. <b>Content</b></p>
                    <p>Our Service allows you to post, link, store, share, and make available certain information, text,
                        graphics, videos, or other materials ("Content") at Butag Cemetery. You are accountable for the
                        legality, reliability, and appropriateness of the Content you post on or through the Service.
                    </p>
                    <p>By posting Content on or through the Service, you confirm and assure that: (i) the Content is
                        yours or you have the right to use it and grant us the rights and license as stated in these
                        Terms, and (ii) the posting of your Content on or through the Service does not infringe on the
                        privacy rights, publicity rights, copyrights, contract rights, or any other rights of any
                        individual or entity. We reserve the right to cancel the account of anyone who breaches
                        copyright laws.</p>
                    <p>You maintain all your rights to any Content you submit, post, or display on or through the
                        Service at Butag Cemetery, and you are accountable for safeguarding those rights. We assume no
                        liability for the Content that you or any third party posts on or through the Service. However,
                        by posting Content using the Service, you grant us the license to use, modify, publicly perform,
                        publicly display, reproduce, and distribute such Content on and through the Service. You agree
                        that this license includes the right for us to make your Content available to other users of the
                        Service, who may also use your Content subject to these Terms.</p>
                    <p>Butag Cemetery has the right, but not the obligation, to supervise and edit all Content provided
                        by users.</p>
                    <p>Furthermore, Content discovered on or through this Service is the property of Butag Cemetery or
                        is used with permission. You may not distribute, modify, transmit, reuse, download, repost,
                        copy, or use said Content, whether in whole or in part, for commercial purposes or personal
                        gain, without express advance written permission from us.</p>

                    <p>3. <b>Prohibited Uses</b></p>

                    <p>You may only use the Service for lawful purposes and in accordance with these Terms. You agree
                        not to use the Service:</p>
                    <p>0.1. In any way that violates any applicable national or international law or regulation.</p>
                    <p>0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way
                        by exposing them to inappropriate content or otherwise.</p>
                    <p>0.3. To transmit, or procure the sending of, any advertising or promotional material, including
                        any “junk mail”, “chain letter,” “spam,” or any other similar solicitation.</p>
                    <p>0.4. To impersonate or attempt to impersonate the Butag Cemetery, a Butag Cemetery employee,
                        another user, or any other person or entity.</p>
                    <p>0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening,
                        fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful
                        purpose or activity.</p>
                    <p>0.6. To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of the
                        Service, or which, as determined by us, may harm or offend Butag Cemetery or users of the
                        Service or expose them to liability.</p>

                    <p>Additionally, you agree not to:</p>

                    <p>0.1. Use the Service in any manner that could disable, overburden, damage, or impair the Service
                        or interfere with any other party’s use of the Service, including their ability to engage in
                        real-time activities through the Service.</p>
                    <p>0.2. Use any robot, spider, or other automatic device, process, or means to access the Service
                        for any purpose, including monitoring or copying any of the material on the Service.</p>
                    <p>0.3. Use any manual process to monitor or copy any of the material on the Service or for any
                        other unauthorized purpose without our prior written consent.</p>
                    <p>0.4. Use any device, software, or routine that interferes with the proper working of the Service.
                    </p>
                    <p>0.5. Introduce any viruses, Trojan horses, worms, logic bombs, or other material which is
                        malicious or technologically harmful.</p>
                    <p>0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of the
                        Service, the server on which the Service is stored, or any server, computer, or database
                        connected to the Service.</p>
                    <p>0.7. Attack the Service via a denial-of-service attack or a distributed denial-of-service attack.
                    </p>
                    <p>0.8. Take any action that may damage or falsify Butag Cemetery's rating.</p>
                    <p>0.9. Otherwise attempt to interfere with the proper working of the Service.</p>

                    <p>4. <b>Analytics</b></p>

                    <p>We might enlist third-party Service Providers to monitor and examine the use of our Service.</p>

                    <p>5. <b>Accounts</b></p>

                    <p>When you create an account with us, the information you provide must be accurate, complete, and
                        up-to-date at all times. Providing inaccurate, incomplete, or outdated information may result in
                        the
                        immediate termination of your account on Service.</p>

                    <p>You are accountable for keeping your account and password confidential, including
                        restricting access to your computer and/or account. You consent to accept responsibility for any
                        and all activities or actions that happen under your account and/or
                        password, whether your password is with our Service or a third-party service. You should inform
                        us
                        instantly once you become aware of any security breach or unauthorized use of your account.
                    </p>

                    <p>You may not use as a username the name of another person or entity, or one that is not lawfully
                        available for use, a name or trademark that is subject to any rights of another person or entity
                        other than you, without appropriate authorization. Offensive, vulgar or obscene names are not
                        allowed for usernames.</p>

                    <p>We hold the right to decline service, terminate accounts, remove or edit content, or cancel
                        orders at our sole discretion.</p>


                    please paraphrase this and change the manila south cemetery with "butag cemetery", and include the
                    html tags:

                    <p>6. <b>Intellectual Property</b></p>

                    <p>Service and its original content (excluding Content provided by users), features and
                        functionality are and will remain the exclusive property of Manila South Cemetery and its
                        licensors. Service is protected by copyright, trademark, and other laws of and foreign
                        countries. Our trademarks may not be used in connection with any product or service without the
                        prior written consent of Manila South Cemetery.</p>


                    <p>7. <b>Copyright Policy</b></p>

                    <p>At Butag Cemetery, we uphold the intellectual property rights of others. We have a strict policy
                        to promptly address any claim of Infringement of copyright or other intellectual property rights
                        by any person or entity on the content posted on our Service.</p>
                    <p>If you are the owner of a copyright or authorized on behalf of one, and you believe that your
                        copyrighted work has been copied in a way that constitutes copyright infringement, please send
                        your claim through email to butagcemetery@gmail.com, with the subject line “Copyright
                        Infringement." Provide us with a detailed description of the alleged infringement as outlined
                        below in the “DMCA Notice and Procedure for Copyright Infringement Claims” section.</p>
                    <p>You must be aware that you can be held responsible for damages, including costs and attorney
                        fees, for any misrepresentation or bad faith claims regarding the infringement of any content
                        found on and/or through our Service that violates your copyright.</p>

                    <p>8. <b>DMCA Notification and Process for Copyright Infringement Claims</b></p>
                    <p>If you believe that your copyrighted work has been infringed, you may send a written notification
                        to our Copyright Agent under the Digital Millennium Copyright Act (DMCA). To comply with the
                        DMCA, your notification should include:</p>
                    <ol>
                        <li>An electronic or physical signature of the authorized person who is acting on behalf of the
                            copyright owner;</li>
                        <li>A description of the copyrighted work that you claim has been infringed, including the
                            location where it can be found on the Butag Cemetery website;</li>
                        <li>The specific location on Butag Cemetery website where the infringing material is located;
                        </li>
                        <li>Your contact details, including your address, phone number, and email address;</li>
                        <li>A statement from you indicating that you have a good faith belief that the disputed use is
                            not authorized by the copyright owner, its agent, or the law;</li>
                        <li>A statement made by you, under penalty of perjury, that the information in your notification
                            is accurate and that you are the copyright owner or authorized to act on behalf of the
                            copyright owner.</li>
                    </ol>
                    <p>To contact our Copyright Agent, please send an email to butagcemetery@gmail.com.</p>

                    <p>9. <b>Error Reporting and Feedback</b></p>

                    <p>You can share with us your feedback, suggestions for improvement, ideas, complaints, and other
                        matters related to our Service (“Feedback”) by contacting us directly at butagcemetery@gmail.com
                        or through third-party websites and tools. By doing so, you acknowledge and agree that: (i) you
                        will not claim any intellectual property rights or other rights to the Feedback; (ii) Butag
                        Cemetery
                        may have similar development ideas to the Feedback; (iii) the Feedback does not contain any
                        confidential or proprietary information from you or any third party; and (iv) Butag Cemetery is
                        not obligated to keep the Feedback confidential. If transferring ownership of the Feedback is
                        not
                        possible due to mandatory laws, you grant Butag Cemetery and its affiliates an exclusive,
                        transferable, irrevocable, royalty-free, sub-licensable, unlimited, and perpetual right to use
                        (including modifying, creating derivative works, publishing, distributing, and commercializing)
                        the Feedback in any manner and for any purpose.</p>


                    <p>10. <b>Links To Other Web Sites</b></p>

                    <p>Our Service may include hyperlinks to third-party websites or services that are not owned or
                        controlled by Butag Cemetery.</p>

                    <p>Butag Cemetery has no authority over, and assumes no responsibility for the content, privacy
                        policies, or practices of any third-party websites or services. We do not guarantee the quality
                        of the products or services offered by these entities or individuals or the accuracy of their
                        websites.</p>

                    <p>YOU ACKNOWLEDGE AND AGREE THAT COMPANY SHALL NOT BE RESPONSIBLE OR LIABLE, DIRECTLY OR
                        INDIRECTLY, FOR ANY DAMAGE OR LOSS CAUSED OR ALLEGED TO BE CAUSED BY OR IN CONNECTION WITH THE
                        USE
                        OF OR RELIANCE ON ANY SUCH CONTENT, GOODS OR SERVICES AVAILABLE ON OR THROUGH ANY SUCH THIRD
                        PARTY WEB SITES OR SERVICES.</p>

                    <p>WE STRONGLY ADVISE YOU TO READ THE TERMS OF SERVICE AND PRIVACY POLICIES OF ANY THIRD PARTY WEB
                        SITES OR SERVICES THAT YOU VISIT.</p>


                    <p>11. <b>Disclaimer Of Warranty</b></p>

                    <p>THESE SERVICES ARE PROVIDED BY THE COMPANY ON AN "AS IS" AND "AS AVAILABLE" BASIS. THE COMPANY
                        MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF
                        THEIR SERVICES, OR THE INFORMATION, CONTENT, OR MATERIALS INCLUDED THEREIN. YOU EXPRESSLY AGREE
                        THAT YOUR USE OF THESE SERVICES, THEIR CONTENT, AND ANY SERVICES OR ITEMS OBTAINED FROM US IS AT
                        YOUR SOLE RISK.</p>

                    <p>NEITHER THE COMPANY NOR ANY PERSON ASSOCIATED WITH THE COMPANY MAKES ANY WARRANTY OR
                        REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY, OR
                        AVAILABILITY OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, NEITHER THE COMPANY NOR ANYONE
                        ASSOCIATED WITH THE COMPANY REPRESENTS OR WARRANTS THAT THE SERVICES, THEIR CONTENT, OR ANY
                        SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL BE ACCURATE, RELIABLE, ERROR-FREE, OR
                        UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT THE SERVICES OR THE SERVER THAT MAKES IT
                        AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE SERVICES OR ANY SERVICES
                        OR ITEMS OBTAINED THROUGH THE SERVICES WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.</p>
                    <p>THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY,
                        OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT,
                        AND FITNESS FOR PARTICULAR PURPOSE.</p>

                    <p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE
                        LAW.</p>

                    <p>12. <b>Limitation Of Liability</b></p>

                    <P>EXCEPT AS PROHIBITED BY LAW, YOU WILL HOLD US AND OUR OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS
                        HARMLESS FOR ANY INDIRECT, PUNITIVE, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGE, HOWEVER IT
                        ARISES (INCLUDING ATTORNEYS’ FEES AND ALL RELATED COSTS AND EXPENSES OF LITIGATION AND
                        ARBITRATION, OR AT TRIAL OR ON APPEAL, IF ANY, WHETHER OR NOT LITIGATION OR ARBITRATION IS
                        INSTITUTED), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR OTHER TORTIOUS ACTION, OR ARISING
                        OUT OF OR IN CONNECTION WITH THIS AGREEMENT, INCLUDING WITHOUT LIMITATION ANY CLAIM FOR PERSONAL
                        INJURY OR PROPERTY DAMAGE, ARISING FROM THIS AGREEMENT AND ANY VIOLATION BY YOU OF ANY FEDERAL,
                        STATE, OR LOCAL LAWS, STATUTES, RULES, OR REGULATIONS, EVEN IF COMPANY HAS BEEN PREVIOUSLY
                        ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. EXCEPT AS PROHIBITED BY LAW, IF THERE IS LIABILITY
                        FOUND ON THE PART OF COMPANY, IT WILL BE LIMITED TO THE AMOUNT PAID FOR THE PRODUCTS AND/OR
                        SERVICES, AND UNDER NO CIRCUMSTANCES WILL THERE BE CONSEQUENTIAL OR PUNITIVE DAMAGES. SOME
                        STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF PUNITIVE, INCIDENTAL OR CONSEQUENTIAL
                        DAMAGES, SO THE PRIOR LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU.</P>


                    <p>13. <b>Termination</b></p>
                    <p>Under our sole discretion, we may terminate or suspend your account and deny access to the
                        Service immediately, without prior notice or liability, for any reason whatsoever, including but
                        not limited to a violation of the Terms, and without limitation.</p>
                    <p>If you wish to terminate your account, you may do so by simply discontinuing the use of the
                        Service.</p>
                    <p>All provisions of the Terms that should, by nature, survive termination shall survive
                        termination, including, but not limited to, ownership provisions, warranty disclaimers,
                        indemnity, and limitations of liability.</p>

                    <p>14. <b>Applicable Law</b></p>
                    <p>These Terms shall be interpreted and governed by the laws of the Philippines, which apply to this
                        agreement without regard to its conflict of law provisions.</p>
                    <p>Our failure to enforce any right or provision of these Terms shall not constitute a waiver of
                        those rights. If any provision of these Terms is found to be invalid or unenforceable by a court
                        of law, the remaining provisions of these Terms shall remain in effect. These Terms constitute
                        the entire agreement between us regarding our Service and supersede and replace any prior
                        agreements we may have had regarding Service.</p>

                    <p>15. <b>Modifications to the Service</b></p>

                    <p>We have the right to modify or discontinue our Service, and any portion of the services or
                        content provided through the Service, at our sole discretion and without prior notice. We will
                        not be liable if any part or all of the Service becomes unavailable for any reason or period of
                        time. Occasionally, we may limit access to certain areas or the entirety of the Service to
                        specific users, including registered users.</p>

                    <p>16. <b>Changes to the Terms</b></p>
                    <p>We reserve the right to modify or update these Terms at any time by posting the revised terms on
                        this site. It is your responsibility to check these Terms periodically for changes. Your
                        continued use of the Platform after we post any modifications to the Terms on this page will
                        constitute your acknowledgment of the modifications and your consent to abide and be bound by
                        the modified Terms. If you do not agree to the new Terms, you are no longer authorized to use
                        the Service.</p>

                    <p>17. <b>Waiver and Severability</b></p>

                    <p>The Company's failure to enforce any term or condition in these Terms shall not be considered as
                        a waiver of that term or condition, or any other term or condition. Moreover, if the Company
                        fails to assert any right or provision under these Terms, it does not constitute a waiver of
                        that right or provision.</p>

                    <p>If any provision of these Terms is found by a court or other tribunal of competent jurisdiction
                        to be invalid, illegal or unenforceable, such provision shall be limited or eliminated to the
                        minimum extent necessary so that the remaining provisions of these Terms will continue to be
                        valid and enforceable.</p>

                    <p>18. <b>Acknowledgement</b></p>

                    <P>BY USING THE SERVICE OR ANY OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE THAT YOU HAVE READ
                        THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.</P>

                    <p>19. <b>Contact Us</b></p>

                    <p>If you have any feedback, comments, or requests for technical support, please contact us via
                        email at <b>butagcemetery@gmail.com</b>.</p>
                </div>
                <div class="modal-footer">
                    <p> <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub1')" /> I have read and
                        agree to the terms and conditions</p> <button type="button" class="btn btn-primary btn-block"
                        data-dismiss="modal" id="sub1" disabled="disabled">Accept</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
    function isChecked(checkbox, sub1) {
        document.getElementById(sub1).disabled = !checkbox.checked;
    }
    </script>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalDP">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">PRIVACY POLICY</h4>
                </div>
                <div class="modal-body">
                    <p>EFFECTIVE DATE: April 8, 2023</p>

                    <p>1. <b>Overview</b></p>

                    <p>Welcome to <b>Butag Cemetery</b>.</p>
                    <p><b>Butag Cemetery</b> (“us”, “we”, or “our”) operates <b>butagcemetery.com</b> (referred to as
                        <b>“Service”</b>)
                    </p>
                    <p>Our Privacy Policy regulates your visit to <b>butagcemetery.com</b> and describes how we secure,
                        collect and
                        disclose data that arises from your use of our Service.</p>
                    <p>We utilize your information to provide and enhance the Service. By using the Service, you consent
                        to the
                        collection and use of information in accordance with this policy. Unless otherwise stated in
                        this Privacy
                        Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and
                        Conditions.</p>
                    <p>Our Terms and Conditions (<b>“Terms”</b>) govern all use of our Service and, together with the
                        Privacy Policy,
                        comprise your agreement with us (<b>“Agreement”</b>).</p>

                    <p>2. <b>Definitions</b></p>

                    <p><b>SERVICE</b> refers to the website <b>butagcemetery.com</b> operated by Butag Cemetery.</p>
                    <p><b>PERSONAL DATA</b> refers to any information relating to an identified or identifiable natural
                        person.</p>
                    <p><b>USAGE DATA</b> refers to the data collected automatically, either generated by the use of the
                        Service or from the Service's infrastructure itself.</p>
                    <p><b>COOKIES</b> are small files stored on a user's device (computer or mobile device).</p>
                    <p><b>DATA CONTROLLER</b> refers to a natural or legal person who determines the purposes for which
                        and the manner in which any personal data are processed. We act as a Data Controller of your
                        data in accordance with this Privacy Policy.</p>
                    <p><b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> refers to any natural or legal person who processes
                        data on behalf of a Data Controller. We may use the services of various Service Providers in
                        order to process your data more effectively.</p>
                    <p><b>DATA SUBJECT</b> is any living individual who is the subject of Personal Data.</p>
                    <p><b>USER</b> refers to the individual using our Service. The User corresponds to the Data Subject,
                        who is the subject of Personal Data.</p>

                    <p>3. <b>Collection and Use of Information</b></p>

                    <p>We gather different categories of information to serve various objectives for enhancing and
                        delivering our Service to you.</p>

                    <p>4. <b>Data Collection Types</b></p>
                    <p><b>Personal Data</b></p>
                    <p>As you use our Service, we may request that you provide us with specific information that
                        identifies you
                        (<b>“Personal Data”</b>). This information may include, but is not limited to:</p>
                    <p>0.1. Email address</p>
                    <p>0.2. First and last name</p>
                    <p>0.3. Phone number</p>
                    <p>0.4. Address</p>
                    <p>0.5. Cookies and Usage Data</p>
                    <p>We may use your Personal Data to get in touch with you regarding other relevant informations.</p>

                    <p><b>Usage Data</b></p>

                    <p>We may collect information from your device whenever you visit or access our Service (<b>“Usage
                            Data”</b>).</p>
                    <p>This information may include your device's Internet Protocol (IP) address, browser type and
                        version, the pages of our Service you visit, the time and date of your visit, the duration of
                        your visit on those pages, and other diagnostic data.</p>
                    <p>When you access our Service using a device, the Usage Data may also include the device type, its
                        unique ID, IP address, operating system, the type of Internet browser you use, and other
                        diagnostic data.</p>

                    <p><b>Location Data</b></p>
                    <p>If you permit us, we may use and save information about your location (<b>“Location Data”</b>) to
                        offer features and customize our Service.</p>
                    <p>You have the option to enable or disable location services in your device settings at any time.
                    </p>
                    <p><b>Tracking Cookies Data</b></p>
                    <p>We utilize cookies and similar tracking technologies to monitor the activity on our Service and
                        store certain information.</p>
                    <p>Cookies are small files that may contain an anonymous unique identifier. They are transmitted to
                        your browser from a website and stored on your device. Other tracking technologies, like
                        beacons, tags, and scripts, are also employed to gather and track data and to enhance and
                        analyze our Service.</p>
                    <p>You may instruct your browser to decline all cookies or to notify you when a cookie is being
                        sent. However, if you don't accept cookies, you may be unable to use some portions of our
                        Service.</p>
                    <p>Below are examples of the Cookies we use:</p>
                    <p>0.1. <b>Session Cookies:</b> We utilize Session Cookies to operate our Service.</p>
                    <p>0.2. <b>Preference Cookies:</b> We use Preference Cookies to recall your preferences and various
                        settings.</p>
                    <p>0.3. <b>Security Cookies:</b> We employ Security Cookies for security purposes.</p>
                    <p><b>Other Data</b></p>
                    <p>When using our Service, we may also collect the following information: lastname, firstname,
                        middlename, email, mobile number, username, password, location, and other data.</p>

                    <p>5. <b>Use of Data</b></p>
                    <p>Butag Cemetery uses the collected data for various purposes:</p>
                    <p>0.1. To provide and maintain our Service;</p>
                    <p>0.2. To notify you about changes to our Service;</p>
                    <p>0.3. To allow you to participate in interactive features of our Service when you choose to do so;
                    </p>
                    <p>0.4. To provide customer support;</p>
                    <p>0.5. To gather analysis or valuable information so that we can improve our Service;</p>
                    <p>0.6. To monitor the usage of our Service;</p>
                    <p>0.7. To detect, prevent and address technical issues;</p>
                    <p>0.8. To fulfill any other purpose for which you provide it;</p>
                    <p>0.9. To carry out our obligations and enforce our rights arising from any contracts entered into
                        between you and us, including for billing and collection;</p>
                    <p>0.10. To provide you with notices about your account and/or subscription, including expiration
                        and renewal notices, email-instructions, etc.;</p>
                    <p>0.11. To provide you with news, special offers and general information about other goods,
                        services, and events which we offer that are similar to those that you have already purchased or
                        inquired about, unless you have opted not to receive such information;</p>
                    <p>0.12. In any other way we may describe when you provide the information;</p>
                    <p>0.13. For any other purpose with your consent.</p>

                    <p>6. <b>Data Retention</b></p>

                    <p>Butag Cemetery will keep your Personal Data only for the time required to achieve the purposes
                        stated in this Privacy Policy. We will use and keep your Personal Data to the extent necessary
                        to fulfill our legal obligations (e.g., if we need to keep your data to comply with applicable
                        laws), settle disputes, and implement our legal agreements and policies.</p>

                    <p>We will also store Usage Data for internal analysis. Usage Data is usually stored for a shorter
                        period, except when it is used to improve the security or functionality of our Service, or when
                        we are legally required to retain this data for a longer time.</p>

                    <p>7. <b>Transfer of Data</b></p>
                    <p>Your information, including Personal Data, may be transferred to and maintained on computers
                        located outside of your jurisdiction, where data protection laws may differ from those in your
                        jurisdiction.</p>
                    <p>If you are providing information to Butag Cemetery from a location outside of the Philippines,
                        please be aware that your information, including Personal Data, will be transferred to and
                        processed in the Philippines.</p>
                    <p>Your agreement to this Privacy Policy, followed by the submission of your information,
                        constitutes your acceptance of the data transfer.</p>
                    <p>Butag Cemetery will take all reasonable steps necessary to ensure that your data is treated in
                        accordance with this Privacy Policy, and that no transfer of your Personal Data takes place to
                        an organization or country unless there are adequate controls in place, including the security
                        of your data and other personal information.</p>

                    <p>8. <b>Sharing of Data</b></p>
                    <p>We may share the personal information we collect from you in the following circumstances:</p>
                    <p>0.1. <b>Disclosure for Law Enforcement.</b></p>
                    <p>Under certain circumstances, we may be required by law or public authorities to disclose your
                        Personal Data.</p>
                    <p>0.2. <b>Business Transaction.</b></p>
                    <p>If Butag Cemetery or any of its subsidiaries are involved in a merger, acquisition, or sale of
                        assets, your Personal Data may be transferred as part of that transaction.</p>
                    <p>0.3. <b>Other cases. We may also share your information:</b></p>
                    <p>0.3.1. with our subsidiaries and affiliates;</p>
                    <p>0.3.2. with third-party contractors, service providers, and other entities that support our
                        business;</p>
                    <p>0.3.3. to fulfill the purpose for which you provided the information;</p>
                    <p>0.3.4. for the purpose of displaying your company's logo on our website;</p>
                    <p>0.3.5. for any other purposes that we disclosed to you when you provided the information;</p>
                    <p>0.3.6. with your consent in other cases; and</p>
                    <p>0.3.7. if we believe that disclosure is necessary or appropriate to protect the rights, property,
                        or safety of Butag Cemetery, our customers, or others.</p>

                    <p>9. <b>Security of Data</b></p>
                    <p>The security of your data is a priority for us. However, it's important to note that no method of
                        transmission over the Internet or electronic storage is completely secure. While we use
                        commercially reasonable methods to safeguard your Personal Data, we can't guarantee absolute
                        security.</p>
                    <p><b>Your Data Protection Rights under General Data Protection Regulation (GDPR)</b></p>
                    <p>If you are an EU or EEA resident, you have specific data protection rights under GDPR.</p>
                    <p>We aim to take reasonable steps to allow you to update, correct, restrict, or delete your
                        Personal Data.</p>
                    <p>If you wish to know what Personal Data we hold about you and want it removed from our systems,
                        please contact us at butagcemetery@gmail.com</p>
                    <p>You have the following data protection rights in certain circumstances:</p>
                    <p>0.1. the right to access, update, or delete the information we have on you;</p>
                    <p>0.2. the right of rectification: you can request us to correct or complete your Personal Data;
                    </p>
                    <p>0.3. the right to object: you can object to our processing of your Personal Data;</p>
                    <p>0.4. the right of restriction: you can request us to restrict the processing of your Personal
                        Data;</p>
                    <p>0.5. the right to data portability: you can request a copy of your Personal Data in a structured,
                        machine-readable, and commonly used format;</p>
                    <p>0.6. the right to withdraw consent: you can withdraw your consent at any time if we rely on your
                        consent to process your Personal Data;</p>
                    <p>Please note that we may ask for identity verification before responding to your requests. Also,
                        we may not be able to provide our services without necessary data.</p>
                    <p>You have the right to lodge a complaint with a Data Protection Authority about our collection and
                        use of your Personal Data. For more information, please contact your local data protection
                        authority in the European Economic Area (EEA).</p>

                    <p><b>10. Your Data Protection Rights under the Republic Act 10173 – Data Privacy Act of 2012</b>
                    </p>
                    <p>The State upholds the fundamental human right of privacy in communication and aims to maintain
                        the free flow of information to foster growth and innovation. It acknowledges the important role
                        of information and communication technology in nation-building and assumes the responsibility of
                        safeguarding personal information in government and private sector information and communication
                        systems.</p>

                    <p><b>11. Your Data Protection Rights under the Republic Act No. 7394</b></p>

                    <p>If you reside in the Philippines, you have the right to know what data we collect about you,
                        request the deletion of your data, and opt-out of its sale. You may make requests to exercise
                        your data protection rights, such as:</p>
                    <p><b>0.1. Information Request:</b></p>
                    <ul>
                        <li>0.0.1. The categories of personal information we have collected about you.</li>
                        <li>0.0.2. The categories of sources from which we collect your personal information.</li>
                        <li>0.0.3. The business or commercial purpose for collecting or selling your personal
                            information.</li>
                        <li>0.0.4. The categories of third parties with whom we share personal information.</li>
                        <li>0.0.5. The specific pieces of personal information we have collected about you.</li>
                        <li>0.0.6. A list of categories of personal information that we have sold, along with the
                            category of any other company we sold it to. If we have not sold your personal information,
                            we will inform you of that fact.</li>
                        <li>0.0.7. A list of categories of personal information that we have disclosed for a business
                            purpose, along with the category of any other company we shared it with.</li>
                    </ul>
                    <p>Please note that you may ask us for this information up to two times in a 12-month period, and we
                        may only provide the information collected in the previous 12 months.</p>
                    <p><b>0.2. Deletion Request:</b></p>
                    <p>If you make this request, we will delete your personal information from our records as of the
                        date of your request and direct any service providers to do the same. In some cases, we may need
                        to de-identify the information to accomplish deletion. However, please note that if you choose
                        to delete your personal information, you may not be able to use certain functions that require
                        your personal information to operate.</p>
                    <p><b>0.3. Opt-Out Request:</b></p>
                    <p>We do not sell or rent your personal information to any third party for any purpose. However,
                        under certain circumstances, a transfer of personal information to a third party, or within our
                        family of companies, without monetary consideration may be considered a "sale" under Philippine
                        law. You can request disclosure or deletion of your personal data at any time as you are the
                        only owner of your Personal Data.</p>
                    <p>Please be aware that if you ask us to delete or stop selling your data, it may impact your
                        experience with us, and you may not be able to participate in certain programs or membership
                        services that require the usage of your personal information to function. We guarantee that we
                        will not discriminate against you for exercising your rights.</p>
                    <p>To exercise your data protection rights under the R.A. No. 7394 (The Consumer Act of the
                        Philippines), please send your request(s) via email to <b>butagcemetery@gmail.com</b>.</p>
                    <p>This law became effective on 01/01/2020, and you can find more information on the official
                        Philippine Legislative Information website.</p>

                    <p>12. <b>Service Providers</b></p>

                    <p>We may engage third-party companies and individuals to assist us in providing our Service
                        (<b>“Service
                            Providers”</b>), perform Service-related tasks on our behalf, or help us analyze how our
                        Service is used.</p>
                    <p>These third parties will only have access to your Personal Data for the purpose of performing
                        these tasks on our behalf and are required to not disclose or use it for any other reason.</p>

                    <p>13. <b>Analytics</b></p>
                    <p>We may use third-party Service Providers to monitor and analyze the usage of our Service.</p>

                    <p>14. <b>CI/CD tools</b></p>
                    <p>We may use third-party Service Providers to automate the development process of our Service.</p>

                    <p>15. <b>Behavioral Remarketing</b></p>
                    <p>We may use remarketing services to display advertisements on third-party websites to you after
                        you have visited our Service. We and our third-party vendors use cookies to inform, optimize,
                        and serve ads based on your past visits to our Service.</p>

                    <p>16. <b>Payments</b></p>

                    <p>We may offer paid products and/or services within our Service. In such cases, we use third-party
                        services for payment processing (e.g. payment processors).</p>

                    <p>We do not store or collect your payment card details. This information is directly provided to
                        our third-party payment processors, whose use of your personal information is governed by their
                        Privacy Policy. These payment processors comply with PCI-DSS standards managed by the PCI
                        Security Standards Council, which is a collaborative effort of brands such as Visa, Mastercard,
                        American Express, and Discover. PCI-DSS requirements ensure the secure handling of payment
                        information.</p>

                    <p>17. <b>Links to Other Sites</b></p>

                    <p>Our Service may contain links to sites operated by third parties that are not under our control.
                        If you click on a third-party link, you will be redirected to that third party's site. We
                        strongly suggest that you review the Privacy Policy of every site you visit.</p>
                    <p>We have no control over and assume no responsibility for the content, privacy policies, or
                        practices of any third-party sites or services.</p>

                    <p>18. <b>Contact Us</b></p>
                    <p>If you have any questions regarding this Privacy Policy, please contact us at
                        <b>butagcemetery@gmail.com</b>.
                    </p>
                </div>
                <div class="modal-footer">
                    <p> <input type="checkbox" id="termsChkbx1 " onchange="isChecked(this, 'sub2')" /> I have read and
                        agree to the privacy policy</p> <button type="button" class="btn btn-primary btn-block"
                        data-dismiss="modal" id="sub2" disabled="disabled">Accept</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
    function isChecked(checkbox, sub2) {
        document.getElementById(sub2).disabled = !checkbox.checked;
    }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
    
    require_once "db.php";

     if (isset($_POST['signup'])) { $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

        $dob = strtotime($_POST["dob"]);
        $dob = date('Y-m-d H:i:s', $dob); 
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']); 
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']); 
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
        $hashed_cpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);
        $currdate = date('Y-m-d'); $date= DateTime::createFromFormat('M-d-Y', $currdate);

        $balance= 0; if($password != $confirmpassword) {
            
            $confirmpassword_error = '<div class="alert alert-danger">Password and Confirm Password doesnt match!</div>'; 

         } 
         
        $sql1 = "SELECT username FROM tblregistration where username='".$username."'";
         
        $result = mysqli_query($conn, $sql1); if (mysqli_num_rows($result) > 0) {
            
            $errmsg= '<div class="alert alert-danger">Username already exists!</div>';
          
          } 
          
          else if(mysqli_query($conn, "INSERT INTO tblregistration(fullname, birthdate, email, mobile, username, password, cpassword, date_register) VALUES('" . $fullname . "', '" . $dob . "', '" . $email . "', '" . $mobile . "', '" . $username . "', '" . $hashed_password . "', '" . $hashed_cpassword . "', NOW())")) { ?>

    <script>
    swal({
        title: "Success!",
        text: "Registration submitted successfully!",
        icon: "success",
        button: "Close!"
    }).then(function() {
        window.location = "login.php";
    });
    </script>

    <?php } else { echo "Error: " . $sql . "" . mysqli_error($conn); } } mysqli_close($conn); ?> <script>
    $(document).ready(function() {
        show the alert setTimeout(function() {
            $(".alert").alert('close');
        }, 2000);
    });
    </script>
    <style>

body{
    height: 140vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(45deg , #1d2951 , #1d2951);
}

.container{
    height: 840px;
    width: 900px;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
    text-align: center;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
}

.left-div{
    flex-basis: 10%;
}

.right-div{
    flex-basis: 90%;
}
    </style>

    <div class="container">
        <div class="left-div">
            <div class="left-image">
                <img src="..\images\login3.png" alt="">
            </div>
            <div class="left-text">
                <p>Enter your personal details and start your journey with us!</p>
            </div>
        </div>
        <!-- right div start  -->

        <div class="right-div">
            <h4>Welcome</h4>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                class="right-form createNew-form" autocomplete="off">

                <ul>
                    <li>
                        <h3>Create Your Account</h3>
                    </li>

                    <li>
                        <input
                            onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))'
                            type="text" id="fullname" class="form-control" name="fullname" placeholder="Full Name: "
                            required autofocus>
                    </li>

                        <li>
                            <input type="text" id="dob" class="form-control" name="dob" placeholder="Date of Birth: "
                                required>
                        </li>

                    <li>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email Address:"
                            required>
                    </li>

                    <li>
                        <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="mobile"
                            class="form-control" name="mobile" maxlength="11" minlength="11"
                            placeholder="Mobile Number:" required>
                    </li>

                    <li>
                        <input type="text" id="username" class="form-control" name="username" minlength="8"
                            placeholder="Username:" required>
                        <span class="text-danger"><?php if (isset($errmsg)) echo $errmsg; ?></span>
                    </li>

                    <li>
                        <input type="password" id="password" class="form-control" name="password" 
                            placeholder="Password:" required>
                        <span onclick="myFunction()"><i class="fas fa-eye"></i></span>
                    </li>

                    <li>
                        <input type="password" id="confirmpassword" class="form-control" name="confirmpassword"
                             required placeholder="Confirm Password:">
                        <span onclick="myFunction1()"><i class="fas fa-eye"></i></span>
                        <span
                            class="text-danger"><?php if (isset($confirmpassword_error)) echo $confirmpassword_error; ?></span>
                    </li>

                    <script>
                    function myFunction() {
                        var pw_ele = document.getElementById("password");
                        if (pw_ele.type === "password") {
                            pw_ele.type = "text";
                        } else {
                            pw_ele.type = "password";
                        }
                    }
                    </script>
                    <script>
                    function myFunction1() {
                        var pw_ele = document.getElementById("confirmpassword");
                        if (pw_ele.type === "password") {
                            pw_ele.type = "text";
                        } else {
                            pw_ele.type = "password";
                        }
                    }
                    </script>
                   <br> <li>
                   <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
  <label for="agree">
    <input type="checkbox" name="checkbox" value="check" id="agree" required><br>
    I have read and agree to the <br> <a href="#" data-target="#modalTC" data-toggle="modal" class="btn-link">Terms and Conditions</a> and <a href="#" data-target="#modalDP" data-toggle="modal" class="btn-link">Privacy Policy</a>
  </label>
</form>



                    </li>
                    <li><input type="submit" name="signup" value="Register"> </li>
                </ul>
            </form>


            <div class="footer createNew-footer">
                <ul>
                    <li> <a href="login.php" class="form-control btn btn-link"> Already have an account?
                            Login here. </a></li>

                </ul>
            </div>
            <div class="vr-line"></div>
        </div>

    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
</body>

</html>