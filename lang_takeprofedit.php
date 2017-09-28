<?php

$lang = array (

#takeprofedit

'takeprofedit_no_data' 	=> "מידע חסר",
'takeprofedit_pass_long' 	=> "מצטערים, סיסמתך ארוכה מדי (מקסימום 40 תווים)",
'takeprofedit_pass_not_match' 	=> "סיסמתך אינן תואמות. אנא נסו שוב.",
'takeprofedit_not_valid_email' 	=> "כתובת דואר האלקטרוני ככל הנראה אינה תקינה.",
'takeprofedit_address_taken' 	=> "אין באפשרותינו להחליף כתובת דואר אלקטרוני, address already taken or password mismatch.",
'takeprofedit_user_error' 	=> "שגיאת משתמש",
'takeprofedit_image_error' 	=> "לא תמונה או פורמט שאינו נתמך כתמונה!",
#'takeprofedit_user_error_link' 	=> "USER ERROR AVATAR",
#'takeprofedit_image_error_link' => "Only internal storage link is allowed. Please use our own image host. Access it <a href='bitbucket.php'>HERE</a>",
'takeprofedit_small_image' 	=> "תמונה קטנה מדי",
'takeprofedit_confirm' => "אישור שינוי פרופיל",
'takeprofedit_sorry' => "מצטערים",
'takeprofedit_secret_long' => "שאלתך הסודית ארוכה מדי (מקסימום 40 תווים)",
'takeprofedit_secret_short' => "שאלתך הסודית קצרה מדי (מינימום 6 תווים)"
);

$lang['takeprofedit_email_body'] = <<<EOD
You have requested that your user profile (username <#USERNAME#>)
on <#SITENAME#> should be updated with this email address (<#USEREMAIL#>) as
user contact.

If you did not do this, please ignore this email. The person who entered your
email address had the IP address <#IP_ADDRESS#>. Please do not reply.

To complete the update of your user profile, please follow this link:

<#CHANGE_LINK#>

Your new email address will appear in your profile after you do this. Otherwise
your profile will remain unchanged.
EOD;
?>
