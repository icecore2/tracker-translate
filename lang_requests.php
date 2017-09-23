<?php

$lang = array(
#Error
'error_error' => "Error",
'error_bad' => "Bad ID!",
'error_title' => "You must enter a title!",
'error_cat' => "You must select a category to put the request in!",
'error_descr' => "You must enter a description!",
'error_image' => "Picture MUST be in jpg, gif or png format. Make sure you include http:// in the URL.",
'error_invalid' => "Invalid request ID",
'error_denied' => "Access denied.",
'error_invalid_torrent' => "Not a valid torrent ID!",
'error_no_user' => "ID doesn\'t match any users, try again",
'error_no_torrent' => "ID doesn\'t match any torrents, try again",
'error_not_yours' => "This is not your Request to delete!",
'error_not_yours1' => "This is not your Request to edit!",
'error_empty' => "Don\'t leave any fields blank.",
'error_dee' => "tweedle-dee tweedle-dum",
'error_funky' => "That ID looks funky!",
'error_no_torrent2' => "No torrent with that ID ",
'error_own_id' => "ID is your own. Cannot fill your own requests.",

#view_request
'req_section' => "Requests Section",
'req_make_req' => "Make a request",
'req_view_all' => "View all requests",
'req_view_my' => "View my requests",
'req_show_all' => "(Show All)",
'req_hide_filled' => "Hide Filled",
'req_only_filled' => "Only Filled",
'req_type' => "Type",
'req_name' => "Name",
'req_added' => "Added",
'req_req_by' => "Requested By",
'req_votes' => "Votes",
'req_filled' => "Filled?",
'req_filled_by' => "Filled By",
'req_del' => "Del",
'req_not_filled' => "<small>Not filled</small>",
'req_select_all' => "select all",
'req_unselect_all' => "un-select all",
'req_select_del' => "Delete Selected",
'req_nothing' => "Nothing here!",
'req_search_results' => "Search Requests: ",
'req_search' => "Search",

#add_req
'add_must_be' => "You must be ",
'add_ratio_above' => " or above <b>AND</b> have a ratio above <b>",
'add_make_req' => "</b> to make a request.",
'add_faq' => " Please see the <a href='faq.php'><b>FAQ</b></a> for more information on different user classes and what they can do.",
'add_rules' => "Request Rules",
'add_rules1' => "To make a request you must have a ratio of at least",
'add_rules2' => " AND have uploaded at least ",
'add_rules3' => " A request will also cost you ",
'add_rules4' => "In your particular case ",
'add_rules5' => "you <b>can</b> make requests.<p>To view all requests, click ",
'add_rules6' => "here",
'add_rules7' => "you do not have enough ",
'add_rules8' => "you can not make requests.",
'add_rules9' => "To view all requests, click ",
'add_rules10' => "you have <b>not</b> yet uploaded ",
'add_rules11' => "... you can not make requests.",
'add_rules15' => "your ratio of ",
'add_rules12' => " and your total uploaded of",
'add_rules13' => "fail",
'add_rules14' => " to meet the minimum requirements to make a request.",
'add_search_before' => "Please search torrents before adding a request!",
'add_in' => " in ",
'add_all_types' => "(all types)",
'add_incl_dead' => " including dead torrents",
'add_good_ratio' => "Requests are for Users with a good ratio who have uploaded at least ",
'add_share' => " gigs Only... Share and you shall recieve!",
'add_title' => "Title",
'add_select_cat' => "(Select a Category)",
'add_image' => "Image",
'add_direct_link' => "(Direct link to image, NO TAGS NEEDED! Will be shown in description)",
'add_upload_image' => "Upload Image",
'add_description' => "Description",
'add_ok' => "Okay",
'add_cat' => "Category",
'add_request' => "Request",
'add_name' => "Name",
'add_small_description' => "Genre",

#req_details
'details_details' => "Details Of Request: ",
'details_edit_edit' => "Edit Request: ",
'details_edit' => "Edit Request",
'details_delete' => "Delete Request",
'details_reset' => "Re-set Request",
'details_all_req' => "All requests",
'details_vote' => "Vote",
'details_vote_req' => "Vote Request",
'details_report' => "Report Request ",
'details_break' => "for breaking the rules",
'details_fill_this' => "Fill This Request",
'details_fill' => "Fill Request",
'details_enter_id' => "Enter the <b>ID</b>  of the torrent. (copy/paste the <strong>ID</strong> from another window/tab the correct ID number)",
'details_yours' => "This Request is yours therefore you may NOT fill it.",
'details_filled' => "Request Filled:",
'details_add_comment' => "Add a Comment",
'details_no_comment' => "No comments",
'details_comments' => "Comments for ",
'details_quick_comment' => "Quick Comment",
'details_small_descr' => "Genre",

#del_req
'del_req' => "You are about to delete this request. Click",
'del_req1' => ", if you`re sure.",

#edit_req
'edit_staff' => "Staff Only",
'edit_filled_by' => "Filled by ID",
'edit_torrent_id' => "Torrent ID",

#reset_req
'reset_success' => "Success!",
'reset_successfully' => " successfully reset.",
'reset_sorry' => "Sorry, cannot reset a request when you are not the owner, staff or person filling it.",

#req_vote
'vote_vote' => "You\'ve Already Voted",
'vote_allowed' => "1 vote per request is allowed",
'vote_details' => "request details",
'vote_all' => "all requests",
'vote_success' => "Successfully voted for request ",
'vote_no_id' => "No such ID ",
'vote_error' => "Error",

#view_votes
'view_voters' => "Voters for ",
'view_vote_this' => "Vote for this ",
'view_req' => "request",
'view_nothing' => "Nothing found",
'view_name' => "Username",
'view_upl' => "Uploaded",
'view_dl' => "Downloaded",
'view_ratio' => "Share Ratio",

#filled
'filled_your' => "Your request, ",
'filled_by' => " has been filled by ",
'filled' => " has been filled.",
'filled_dl' => "You can download your request from ",
'filled_thx' => "Please do not forget to leave thanks where due. ",
'filled_wrong' => "If for some reason this is not what you requested, please reset your request so someone else can fill it by following ",
'filled_this' => "this",
'filled_link' => " link.  Do [b]NOT[/b] follow this link unless you are sure that this does not match your request.",
'filled_success' => " successfully filled with ",
'filled_user' => "User ",
'filled_pm' => " automatically PMd.  ",
'filled_mistake' => "If you have made a mistake in filling in the URL or have realised that your torrent does not actually satisfy this request.",
'filled_reset' => "please reset the request so someone else can fill it by clicking ",
'filled_here' => "HERE",
'filled_unless' => "Do <b>NOT</b> follow this link unless you are sure there is a problem.",
'filled_upl' => " was just uploaded",
'filled_voted' => "The Request you voted for ",
'filled_this' => "Please do not forget to leave thanks where due.",
);
?>