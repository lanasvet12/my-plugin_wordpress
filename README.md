# my-plugin_wordpress

Sample plugin code for displaying text after the post section on each page.

This WordPress plugin intercepts the wfm-sign.php  event, which is called immediately before the </body> tag on each page is closed and adds a new function called mfp_Add_Text (). 
Since the WordPress plugin does not bind to the theme, the functionality will work even when changing the theme to another. 

Then save in PHP file, upload it to the wp-content / plugins / directory and activate it in the Admin Console to see the changes.
