<?php include 'header.php'; ?>
<section class="contact-us">
        <div class="container">
            <h1>GIVE FEEDBACK</h1>
            <p>We would love to hear from you regarding your experience with our website. Let us know what works for you and what does not. We are constantly improving and adding content. Our objective is to entertain, educate, and ultimately fulfill your cake needs.</p>

            <!-- Feedback Form -->
            <form action="feedback.php" method="post" class="feedback-form">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Feedback:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit">Submit Feedback</button>
                </div>
            </form>
        </div>
    </section>
<?php include 'footer.php'; ?>
