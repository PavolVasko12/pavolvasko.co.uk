<div id="contactFormHolder">
  <div id="contactFormInnerHolder">
    <h1>CONTACT</h1>
    <p id="interestedWorkingWithUs">Interested in working with me? Please use the contact form or the email address
      <a href="mailto:info@pavolvasko.co.uk">info@pavolvasko.co.uk</a> or alternatively call me on <a id="phoneLink" href="tel:+447766665955">+44(0)7766665955</a>. I will be in touch with you as soon as I can. Thank you.</p>
       <form id="contactForm" name="contactForm" action="#contactForm" method="POST" autocomplete="off">
          <input type="text" class="contactUsInput" id="name" name="firstName" placeholder="Name">
          <input type="email" class="contactUsInput" id="email" name="email" placeholder="Email">
          <input type="text" class="contactUsInput" id="subject" name="subject" placeholder="Subject">
          <textarea id="messageContactUs" placeholder="Message" name="messageBox"></textarea>
          <input id="submitFormButton" type="submit" name="action" value="SEND">
       </form>
       <p id="requiredFieldsMessage">Please check required fields</p>
       <?php if (isset($errorMsg)) { echo '<p id="errorMessage">', $errorMsg , '</p>'; } ?>
       <?php if (isset($successMsg)) { echo '<p id="successFormMessagePHP">', $successMsg , '</p>'; } ?>
  </div>
</div>
