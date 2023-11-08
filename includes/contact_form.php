<div class="contact-form-wrapper">
    <form class="contact-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" novalidate>
        <div class="contact-form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" value="<?= $formInputs['name'] ?? '' ?>"
                class="<?= array_key_exists('name', $formErrors) ? $errorClassName : '' ?>" required>
        </div>
        <div class="contact-form-group">
            <label for="company">Your Company</label>
            <input type="text" id="company" name="company" value="<?= $formInputs['company'] ?? '' ?>">
        </div>
        <div class="contact-form-group">
            <label for="name">Your Email</label>
            <input type="email" id="email" name="email" value="<?= $formInputs['email'] ?? '' ?>"
                class="<?= array_key_exists('email', $formErrors) ? $errorClassName : '' ?>" required>
        </div>
        <div class="contact-form-group">
            <label for="name">Your Telephone Number</label>
            <input type="tel" id="telephone" name="telephone" value="<?= $formInputs['telephone'] ?? '' ?>"
                class="<?= array_key_exists('telephone', $formErrors) ? $errorClassName : '' ?>" required>
        </div>
        <div class="contact-form-group">
            <label for="message">message</label>
            <textarea name="message" id="message" cols="30" rows="10"
                class="<?= array_key_exists('message', $formErrors) ? $errorClassName : '' ?>"
                required><?= $formInputs['message'] ?? '' ?></textarea>
        </div>
        <div class="privacy-policy">
            <div class="contact-checkbox-wrapper">
                <input type="checkbox" name="checkbox" id="contact-checkbox">
                <label for="contact-checkbox"></a></label>
            </div>
            <p>Please tick this box if you wish to receive marketing information from us. Please
                see
                our
                <a href="#" class="privacy-policy-link">Privacy Policy</a> for more
                information on how we
                keep your data safe.
            </p>

        </div>
        <button type="submit" name="submit" class="contact-form-btn">Send Enquiry</button>
    </form>
</div>