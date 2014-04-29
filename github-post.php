<?php
 
// Use in the "Post-Receive URLs" section of your GitHub repo.
 
if ( $_POST['payload'] ) {
  shell_exec( 'cd ~/apps/wordpress/htdocs/ && git reset --hard HEAD && git pull' );
}
 
?>hi

