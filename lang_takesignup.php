<?php

$lang = array(

#takesignup
'takesignup_error' => "שגיאה",
'takesignup_limit' => "מצטערים, הגבלת הרשמות הושגה. אנא נסו שנית מאוחר יותר.",
'takesignup_user_error' => "שגיאת משתמש",
'takesignup_form_data' => "תוכן הטופס שגוי!",
'takesignup_username_length' => "שם המשתמש קצר או ארוך מדי. מינימום הוא 3 תווים ומקסימום 32!",
'takesignup_allowed_chars' => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
'takesignup_allowed_chars1' => "תווים שגויים נמצאו. אנא בחרו שם משתמש אחר!",
'takesignup_blank' => "נא לא להשאיר שדות ריקים.",
'takesignup_nomatch' => "הסיסמה אינה תואמת! חובה בהקלדה מחדש. נסו שוב.",
'takesignup_pass_short' => "מצטערים, סיסמתך קצרה מדי (מינימום 6 תווים)",
'takesignup_pass_long' => "מצטערים, סיסמתך ארוכה מדי (מקסימום 40 תווים)",
'takesignup_same' => "מצטערים, סיסמך אינה יכולה להיות זהה לשם המשתמש.",
'takesignup_validemail' => "כתובת דואר האלקטרוני ככל הנראה אינה תקינה.",
'takesignup_invalidname' => "שם משתמש שגוי.",
'takesignup_failed' => "הרשמה נכשלה",
'takesignup_qualify' => "מצטערים, אין באפשרותך להרשם לאתר.",
'takesignup_email_used' => "כתובת דואר האלקטרוני כבר בשימוש.",
'takesignup_user_exists' => "שם המשתמש כבר בשימוש!",
'takesignup_fatal_error' => "שגיאה חמורה!",
'takesignup_mail' => "",
'takesignup_confirm' => "אישור הרשמה",
'takesignup_badusername' => "ככל הנראה ברשימה השחורה <b>(%s)</b> שם המשתמש אשר רשמת. נא לבחור אחד.",
'takesignup_bannedmail' =>"כתובת דואר האלקטרוני ככל הנראה ברשימה השחורה!<br /><strong><font color='red'>סיבה:</strong></font>&nbsp;",
'takesignup_from' => "מאת:"
);

$lang['takesignup_email_body'] = <<<EOD

You have requested a new user account on <#SITENAME#> and you have
specified this address (<#USEREMAIL#>) as user contact.

If you did not do this, please ignore this email. The person who entered your
email address had the IP address <#IP_ADDRESS#>. Please do not reply.

To confirm your user registration, you have to follow this link:

<#REG_LINK#>

After you do this, you will be able to use your new account. If you fail to
do this, your account will be deleted within a few days. We urge you to read
the RULES and FAQ before you start using <#SITENAME#>.
EOD;
?>