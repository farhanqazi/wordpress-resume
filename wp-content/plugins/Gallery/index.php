<?php 
/*
Plugin Name: Gallery
Description: This is Gallery Plugin for using the portfolio
Author: Qazi Farhan
Version: 1.0
*/

add_action("admin_menu","addMenu");
function addMenu()
{
	add_menu_page("Gallery","Gallery",4,"gallery-option","galleryOption");
	add_submenu_page("gallery-option","Portfolio","Portfolio",4,"gallery-option-1","portfolio");
	//add_submenu_page( 'gallery-option', 'Add Members', 'Add Members', 'manage_options', 'add-gallery-option', 'add_members_function');

}
function galleryOption()
{
	echo "hello World!!!";	
}

function portfolio()
{
	echo <<<'EOD'
		<form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
EOD;
}
?>
