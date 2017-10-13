## 1.5.0

* NEW: Added a `[charitable_donation_form]` shortcode. Display a campaign's donation form anywhere like this: [charitable_donation_form campaign_id=123]. [#136](https://github.com/Charitable/Charitable/issues/136)
* NEW: Added a `[charitable_donors]` shortcode. [#129](https://github.com/Charitable/Charitable/issues/129)
* NEW: Create and edit donations in the WordPress dashboard. No more adding mock donations through the Offline payment method. You can easily change donor details, add notes or change the amount/campaign of the donation. [#18](https://github.com/Charitable/Charitable/issues/18), [#241](https://github.com/Charitable/Charitable/issues/241), [#172](https://github.com/Charitable/Charitable/issues/172)
* NEW: Resend receipts & admin notifications for donations from the WordPress dashboard. [#165](https://github.com/Charitable/Charitable/issues/165)
* NEW: Added new emails specifically for Offline donations. You can now set up an admin notification and donation receipt that are sent for Offline donations while they are still pending. Also added `[charitable_email show=offline_instructions]` email field to include the Offline payment instructions in Offline donation receipts. [#33](https://github.com/Charitable/Charitable/issues/33), [#324](https://github.com/Charitable/Charitable/issues/324)
* NEW: Added email verification step to donor registration. After email verification is complete, donors are automatically able to see all donations they made under the same email address. [#385](https://github.com/Charitable/Charitable/issues/385), [#409](https://github.com/Charitable/Charitable/issues/409), [#222](https://github.com/Charitable/Charitable/issues/222)
* NEW: Added Donation Fields API for easy registering of custom donation fields. [#402](https://github.com/Charitable/Charitable/issues/402)
* NEW: Added Form View API to separate how forms are rendered from how they are set up. [#401](https://github.com/Charitable/Charitable/issues/401)
* NEW: Added Endpoints API to provide developers with an infrastructure for registering custom endpoints in Charitable. [#306](https://github.com/Charitable/Charitable/issues/306)
* NEW: Added `Charitable_Email_Fields` class for registering email fields and getting their values in emails. [#393](https://github.com/Charitable/Charitable/issues/393)
* NEW: Added `charitable_minimum_donation_amount` filter to easily change the minimum donation amount. [#298](https://github.com/Charitable/Charitable/issues/298)
* NEW: The Forgot Password & Reset Password pages will automatically inherit the page template of their parent page (i.e. the Login page). [#379](https://github.com/Charitable/Charitable/issues/379)
* NEW: Added a `count` option to the `Charitable_Query` class, providing an easy way to user the query classes to get the number of donations, donors, etc. [#322](https://github.com/Charitable/Charitable/issues/322)
* NEW: Added `charitable_monetary_amount` filter to tweak how monetary amounts are formatted. [#308](https://github.com/Charitable/Charitable/issues/308)
* NEW: Added `charitable_sanitize_value_{$section}_{$key}` filter to sanitize individual settings fields. [#352](https://github.com/Charitable/Charitable/issues/352)
* NEW: Added basic styling for the `datepicker` form field. [#317](https://github.com/Charitable/Charitable/issues/317)
* NEW: Improved the Campaigns table in the admin to provide more helpful information at a glance, such as the current campaign status, end date and total funds raised. [#417](https://github.com/Charitable/Charitable/issues/417)
* FIX: Sessions have been improved to work alongside full page caching solutions like Varnish. Previously these caused problems with things like the donation receipt becoming inaccessible to donors after they donated. [#383](https://github.com/Charitable/Charitable/issues/383)
* FIX: Avoid creating records in `wp_options` for sessions that have no data. [#399](https://github.com/Charitable/Charitable/pull/399)
* FIX: Significantly improved the speed of Charitable settings pages. [#236](https://github.com/Charitable/Charitable/issues/236)
* FIX: Resolved a database error that broke the donation search function. [#407](https://github.com/Charitable/Charitable/issues/407)
* FIX: Changed login prompt text in donation form to something more logical. [#384](https://github.com/Charitable/Charitable/issues/384)
* FIX: Close modals with the ESC key. [#191](https://github.com/Charitable/Charitable/issues/191)
* FIX: Removed the drag drop field in the picture field on mobile devices. [#373](https://github.com/Charitable/Charitable/issues/373)
* FIX: A bug in Mobile Safari broke the picture field. [#370](https://github.com/Charitable/Charitable/issues/370), [#259](https://github.com/Charitable/Charitable/issues/259)
* FIX: In certain cases, hitting return key in form fields opened a file upload prompt. [#363](https://github.com/Charitable/Charitable/issues/363)
* FIX: Uploading more than max uploads to picture field works in certain cases. [#376](https://github.com/Charitable/Charitable/issues/376)
* FIX: Display Read More link in campaign loop for expired campaigns. [#381](https://github.com/Charitable/Charitable/issues/381)
* FIX: On email or gateway settings pages, provide a link back to the parent settings page. [#351](https://github.com/Charitable/Charitable/issues/351)
* FIX: When Stripe Checkout is closed/cancelled, donation form submission afterwards failed. [#378](https://github.com/Charitable/Charitable/issues/378)
* FIX: Fixed styling issue in REHub theme. [#406](https://github.com/Charitable/Charitable/issues/406)
* FIX: Campaign metabox tabs broke with Social Warfare activated. [#364](https://github.com/Charitable/Charitable/issues/364)

## 1.4.20

* Improve how plugin updates are shown for Charitable extensions. [#382](https://github.com/Charitable/Charitable/issues/382)

## 1.4.19

* Fixed a bug that prevented suggested donations with cents from showing correctly in sites where a comma is used for the decimal separator (i.e. 9,50). [#356](https://github.com/Charitable/Charitable/issues/356)

## 1.4.18

* Added an end time when editing campaigns to make it clearer when a campaign ends. Previously, a campaign's end time was ambiguous and this caused confusion for some users. [#335](https://github.com/Charitable/Charitable/issues/335)
* Add space as a thousands separator for countries where `12 500,00` would be the correct way to format an amount. [#332](https://github.com/Charitable/Charitable/issues/332)
* Add campaign edit link as email shortcode option for campaign-related emails. [#345](https://github.com/Charitable/Charitable/issues/345) 
* Fixed multiple HTML validation issues in Charitable forms and the campaigns widget. [#344](https://github.com/Charitable/Charitable/issues/344) and [#349](https://github.com/Charitable/Charitable/issues/349)
* Prevent a bug where the donated amount on a campaign is completely wrong after a site changes its decimal/thousands separators. [#279](https://github.com/Charitable/Charitable/issues/279)
* Flush the campaign donation cache in popular caching plugins (WP Super Cache, W3 Total Cache, WP Rocket and WP Fastest Cache). [#186](https://github.com/Charitable/Charitable/issues/186)
* Fixed an error during donation processing that prevented donations when database caching is enabled in W3 Total Cache. [#347](https://github.com/Charitable/Charitable/issues/347)
* Improved the way upgrades are run to ensure they are not re-run unneccesarily and store the minimum required information about each upgrade.
 
## 1.4.17

* **THANK YOU**: Thanks to first-time contributor [@qriouslad](https://github.com/qriouslad) for his contribution to this release!
* When using Stripe Checkout, amounts over $999 were sometimes incorrectly sent to the Stripe modal. [#339](https://github.com/Charitable/Charitable/issues/339)
* Avoid fatal error in rare instances (only encountered in the Layers theme by Obox) when the donation form scripts are loaded through an admin AJAX request. [#340](https://github.com/Charitable/Charitable/issues/340)
* Added support for linking to campaign donated to from donation-related emails. [#341](https://github.com/Charitable/Charitable/issues/341)
* Improved i18n for dates.
* Introduced unit testing for Javascript, using QUnit. Developers, this is only available with the full package download from [GitHub](github.com/Charitable/Charitable/).
* Sanitize result of queries for campaign totals and total number of site donations.
* Avoid error that happens in situations where Divi and Yoast SEO are both installed alongside Charitable. [#316](https://github.com/Charitable/Charitable/issues/316)
* Better formatting of code commenting to improve compatibility with WordPress coding standards.

## 1.4.16
* Updated bundled version of WP Session Manager library to latest version (1.2.2).

## 1.4.15

* Add recurring donations support to Offline gateway. [#329](https://github.com/Charitable/Charitable/issues/329)

## 1.4.14

* After submitting the donate widget, redirect to the actual donation form on the page. [#328](https://github.com/Charitable/Charitable/issues/328)
* Improved compatibility for the donate widget with Recurring Donations.

## 1.4.13

* Added `tag` parameter to the [campaigns] shortcode. [#313](https://github.com/Charitable/Charitable/issues/313)
* We cleaned up another bug involving our [Easy Digital Downloads Connect extension](https://www.wpcharitable.com/extensions/charitable-easy-digital-downloads-connect/?utm_source=readme&utm_medium=changelog-tab&utm_campaign=edd-connect), which resulted in being unable to set an end date for contribution rules when the campaign doesn't have an end date. [#310](https://github.com/Charitable/Charitable/issues/310) 
* Persist un-rendered notices across page loads. [#314](https://github.com/Charitable/Charitable/issues/314)
* Hide radio inputs when Javascript is enabled. [#312](https://github.com/Charitable/Charitable/issues/312)
* We made some minor improvements to how the donation form submission is processed in Javascript. Needed for improvements to Stripe extension.

## 1.4.12

* If you were using our [Easy Digital Downloads Connect extension](https://www.wpcharitable.com/extensions/charitable-easy-digital-downloads-connect/?utm_source=readme&utm_medium=changelog-tab&utm_campaign=edd-connect) and your site language is not English, you may have had problems with end dates for your benefactor relationships not saving correctly. We've fixed up that bug now. [#305](https://github.com/Charitable/Charitable/issues/305)

## 1.4.11

* Corrected a problem that caused newly created/saved campaigns without an end date to stop showing in the `[campaigns]` shortcode output. [#301](https://github.com/Charitable/Charitable/issues/301)
* Fixed an issue that resulted in PayPal donations left as Pending when `allow_url_fopen` was turned off on the server. [#302](https://github.com/Charitable/Charitable/issues/302)
* Avoid displaying the donation form & campaign information outside of the loop (this caused weird issues in the Layers theme). [#303](https://github.com/Charitable/Charitable/issues/303)
* Provided a more flexible API for toggling settings based on other setting values.

## 1.4.10
* Correctly filter donations by date in the CSV export. This was broken in certain non-English languages. [#299](https://github.com/Charitable/Charitable/issues/299)
* Fixed an issue that prevented the custom donation amount from being picked up on sites using our new [Recurring Donations extension](https://www.wpcharitable.com/extensions/charitable-recurring-donations/?utm_source=readme&utm_medium=changelog-tab&utm_campaign=recurring-donations).

## 1.4.9
* Added Ghanaian Cedi and Egyptian Pound to currencies. [#288](https://github.com/Charitable/Charitable/issues/288) and [#282](https://github.com/Charitable/Charitable/issues/282)
* Remove `$wp_version` global. [#294](https://github.com/Charitable/Charitable/pull/294)
* Miscellaneous accessibility improvements. [#291](https://github.com/Charitable/Charitable/pull/291), [#292](https://github.com/Charitable/Charitable/pull/292) and [#293](https://github.com/Charitable/Charitable/pull/293)

## 1.4.8
* Removed some code left over from plugin testing.

## 1.4.7

* Avoid issues with PayPal IPNs missing the 'invoice' parameter in certain cases — likely a bug on the PayPal end. This resulted in donations remaining stuck as Pending. We have reworked how IPNs are processed to avoid reliance on this and avoid further issues. [#289](https://github.com/Charitable/Charitable/issues/289)
* Store the PayPal transaction ID for donations after an IPN has been received. [#270](https://github.com/Charitable/Charitable/issues/270)
* Add a notice to the donation form when viewed by site admin to remind them that Test Mode is enabled. [#233](https://
github.com/Charitable/Charitable/issues/233)
* Improve styling for the donation receipt summary. [#214](https://github.com/Charitable/Charitable/issues/214)
* Make sure that donor count and donors widget both include donations to child campaigns. [#263](https://github.com/Charitable/Charitable/issues/263) and [#264](https://github.com/Charitable/Charitable/issues/264)
* Correctly show the donor count in the Donation Stats widget, not the number of donations. [#268](https://github.com/Charitable/Charitable/issues/268)
* Show a blank field for formatted addresses in the donation export or admin donation pages when no address details were provided. Previously, the donor's name was shown. [#255](https://github.com/Charitable/Charitable/issues/255) and [#256](https://github.com/Charitable/Charitable/issues/256)
* Fix client-side credit card validation. [#280](https://github.com/Charitable/Charitable/issues/280)
* Fix issue causing incorrect donation status to be displayed in admin notification email and donation receipt. [#261](https://github.com/Charitable/Charitable/issues/261)
* Remove the Licenses tab from the Settings area when you don't have any extensions installed. [#249](https://github.com/Charitable/Charitable/issues/249)
* Miscellaneous other minor, under-the-hood improvements and tweaks.

## 1.4.6

* Properly activate Charitable on all sites when it is network activated. Also makes sure that Charitable is correctly installed when a new site is added to a network that has Charitable network-activated. [#225](https://github.com/Charitable/Charitable/issues/225)
* Display success messages to the user after settings are updated in the admin. [#54](https://github.com/Charitable/Charitable/issues/54)
* Fixes a bug that prevented donations from being displayed in the admin when filtering by campaign. [#242](https://github.com/Charitable/Charitable/issues/242)
* Removes PHP warnings that were displayed on the Charitable donations page in the dashboard when there are no donations. [#232](https://github.com/Charitable/Charitable/issues/232)
* Changed the hook that the Donation Receipt and Donation Notification emails are sent on from `save_post` to `charitable-completed_donation`. [#217](https://github.com/Charitable/Charitable/issues/217)
* Added a `CHARITABLE_DEBUG` constant for error logging. Currently, enabling this only logs the IPN responses that are received from PayPal after donations are made. [#229](https://github.com/Charitable/Charitable/issues/229)
* Ensure that the donation form script is always loaded for the campaign donation widget. [#239](https://github.com/Charitable/Charitable/issues/239)
* Fixes a bug that prevented the password reset from working correctly. [#238](https://github.com/Charitable/Charitable/issues/238)
* Refer to campaigns as campaigns instead of posts in admin update messages. [#234](https://github.com/Charitable/Charitable/issues/234)

## 1.4.5

* The permissions for accessing Donations and Campaigns in the WordPress dashboard has changed. Users who are set up as Campaign Managers can access both Donations and Campaigns, but cannot access Charitable settings. This permission is reserved for admin users. In addition, the `manage_charitable_settings` permission has been removed from Campaign Managers. [#209](https://github.com/Charitable/Charitable/issues/209)
* Fixes the way donations are processed in Javascript to avoid issues when the donation is *not* processed with AJAX (currently, this is only the case if you're using the Easy Digital Downloads extension, Pronamic iDEAL or an old version of one of our premium payment gateway extensions). [#223](https://github.com/Charitable/Charitable/issues/223)
* Fixes the registration form shortcode, which was being printed out too early on the page. [#224](https://github.com/Charitable/Charitable/issues/224)
* Adds a new filter for the list of active payment gateways: `charitable_active_gateways`. See `Charitable_Gateways::get_active_gateways()`.
* Three new methods have been added to the `Charitable_Donation` abstract class: `get_donation_type()` retrieves the type of donation; `get_donation_plan_id()` returns the ID of the recurring donation plan (to be used by the Recurring Donations extension); `get_donation_plan()` returns the recurring donation object. [PR #215](https://github.com/Charitable/Charitable/pull/215)
* Export files now include the type of export (note: this does not work if you are on PHP 5.2). [#200](https://github.com/Charitable/Charitable/issues/200)
* The `custom` parameter for PayPal donations now accepts a JSON string. [PR #198](https://github.com/Charitable/Charitable/pull/198)

## 1.4.4

* Resolves a new issue related to the donation form validation introduced in version 1.4.3, which prevented the donation widget form from being submitted. [#221](https://github.com/Charitable/Charitable/issues/204) and [#205](https://github.com/Charitable/Charitable/issues/221)
* Fixes a bug that resulted in logged in users who had never made a donation being able to see a list of all donations with the `[charitable_my_donations]` shortcode. No personal donor data was displayed, and the donation receipts remained inaccessible to the users. All they could see was the date of the donation, the campaign donated to and the amount of the donation. [#220](https://github.com/Charitable/Charitable/issues/204) and [#205](https://github.com/Charitable/Charitable/issues/220)

## 1.4.3

* Added a new sandbox testing tool to allow you to test your PayPal donation flow. If you're using PayPal, you should test this as soon as you can to avoid disruption, as PayPal is making some security upgrades to its platform which may cause problems for certain sites. [Read more about how PayPal's upgrades will affect you](https://www.wpcharitable.com/how-paypals-ssl-certificate-upgrade-will-affect-you-and-how-you-can-prepare-for-it/?utm_source=notice&utm_medium=wordpress-dashboard&utm_campaign=paypal-ssl-upgrade&utm_content=blog-post)
* Added honeypot form validation for the donation form and registration, password reset, forgot password and profile forms. This is an anti-spam measure designed to prevent fake donations from being created by bots.
* Prevent donations from being created if an invalid email address or payment gateway is used.
* Ensure that client-side validation is always performed for donations, even when the gateway integration has not been updated for compatibility with the AJAX-driven donations introduced in version 1.3. The only gateway that we know of that falls into this category is Pronamic iDEAL, so this is a nice update if you are using Pronamic iDEAL.

## 1.4.2

* Added a link to the registration form from the login form and vice versa. [#204](https://github.com/Charitable/Charitable/issues/204) and [#205](https://github.com/Charitable/Charitable/issues/205)
* Included two new parameters in the `[charitable_registration]` shortcode: `redirect` sets the default page that people should be redirect to after registering, and `login_link_text` sets the text of the login link (see above). [#208](https://github.com/Charitable/Charitable/issues/208) and [#205](https://github.com/Charitable/Charitable/issues/205)
* Also included a new parameter in the `[charitable_login]` shortcode: `registration_link_text` sets the text of the login link (see above). [#204](https://github.com/Charitable/Charitable/issues/204)
* Added a column for the campaign creator to the campaigns page in the WordPress dashboard. [#166](https://github.com/Charitable/Charitable/issues/166)
* Added three new fields that can be displayed in donation-related emails, like the donation receipt or admin notification: the total amount donated, the campaign(s) that received the donation and the categories of the campaign(s) that received the donation. [#202](https://github.com/Charitable/Charitable/issues/202) and [#203](https://github.com/Charitable/Charitable/issues/203)
* Made sure that setting the `order` parameter in the `[campaigns]` shortcode works with lowercase and uppercase. `ASC`, `DESC`, `asc` and `desc` are all valid options now. [#206](https://github.com/Charitable/Charitable/issues/206)
* Fixed a bug that prevented the campaign end date from saving when using Charitable in a non-English installation. [#201](https://github.com/Charitable/Charitable/issues/201)
* Fixed a bug that prevented the comments section from appearing on campaigns when modal donations were enabled. [#210](https://github.com/Charitable/Charitable/issues/210)
* Fixed a bug that caused a PHP warning when trying to use the `site_url` email shortcode parameter in emails.

## 1.4.1

* The donor address is split over multiple columns in the donation export. [#194](https://github.com/Charitable/Charitable/issues/194)
* In certain cases, credit card validation was getting triggered for non-credit card donations (i.e. PayPal or Offline). This bug has been fixed. [#189]((https://github.com/Charitable/Charitable/issues/189)
* After a donor makes a successful donation is made, their session is cleared as expected. [#181]((https://github.com/Charitable/Charitable/issues/181)
* Pending and draft campaigns are now included in the filtering options on the Donations page. [#187]((https://github.com/Charitable/Charitable/issues/187)
* The Bolivian Boliviano currency (BOB) has been added. [#193]((https://github.com/Charitable/Charitable/issues/193)

## 1.4.0

* Added the `[charitable_my_donations]` shortcode. Use this shortcode to allow logged in users to view a history of their donations, including links to the donation receipts. [#14](https://github.com/Charitable/Charitable/issues/14)
* Scale the campaign grid gracefully when viewing on smaller screens. The `[campaigns]` shortcode now supports a `responsive` paramater, which is enabled by default. You can set it to a specific px/em amount to change the breakpoint, or set it to `0` to disable responsive styling. [#88](https://github.com/Charitable/Charitable/issues/88)
* Also provided appropriately responsive styling for suggested donation amounts on small screens. [#159](https://github.com/Charitable/Charitable/issues/159)
* Added client-side validation for the donation form. This checks whether donors have filled out all the required fields, whether they're donating more than $0 (because seriously, a $0 donation won't go far :)) and whether they have used a valid credit card (if you're using our Stripe or Authorize.Net extensions). [#176](https://github.com/Charitable/Charitable/issues/176) and [#63](https://github.com/Charitable/Charitable/issues/63)
* Added a password reset process to provide a complete user-facing login and registration workflow. [#89](https://github.com/Charitable/Charitable/issues/89)
* Include an `order` paramater for the `[campaigns]` shortcode, to reverse the direction in which campaigns are displayed. [#64](https://github.com/Charitable/Charitable/issues/64)
* Allow campaigns in the `[campaigns]` shortcode to be ordered by any of the orderby options for [`WP_Query`](https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters).
* Added drag and drop support for the Picture form field, which is used in the User Avatar and Ambassadors extensions. [#111](https://github.com/Charitable/Charitable/issues/111)
* Improved how the plugin checks for updates to Charitable extensions, to keep the WordPress dashboard running smoothly. [#133](https://github.com/Charitable/Charitable/issues/133)
* Added a `charitable_create_donation()` function for developers who want to create donations programatically. [#109](https://github.com/Charitable/Charitable/issues/109)
* Added a new `Charitable_Donations_Query` class, which can be used by developers to retrieve donations from the database. [#155](https://github.com/Charitable/Charitable/issues/155)
* Added a new `Charitable_Deprecated` class, which is used to record any incorrect usage of Charitable functions or methods.
* Switched to using the built-in edit.php admin page for listing Charitable donations, instead of relying on a custom admin page with a custom posts table. While there, we also simplified the interface and added colour-coding to the donation statuses. [#110](https://github.com/Charitable/Charitable/issues/110)
* Include the donor's phone number, address and the payment method in the donations export CSV. [#154](https://github.com/Charitable/Charitable/issues/154)
* When multiple gateways are enabled, the default one is listed first in the donation form. [#139](https://github.com/Charitable/Charitable/issues/139)
* Automatically cancel a donation when the donor returns from the gateway before completing it. This works with PayPal, PayUMoney and PayFast. [#90](https://github.com/Charitable/Charitable/issues/90) and [#117](https://github.com/Charitable/Charitable/issues/117)
* Added a `Charitable_Donor::__toString()` method, so that echoing the object simply prints out the donor name.
* Added `charitable_sanitize_amount()` function to convert any amount of type string into a float.
* Trim the currency symbol from monetary amounts to prevent the symbol being treated as part of the amount. [#145](https://github.com/Charitable/Charitable/pull/145)
* Trim the currency symbol from the suggested donation amounts when saving a campaign. [#147](https://github.com/Charitable/Charitable/issues/147)
* When a donation fails and the user is redirected back to the donation form, they can re-attempt the same donation. Previously, a new donation would have been created, leaving a phantom pending donation behind. [#106]
(https://github.com/Charitable/Charitable/issues/106)
* Prevent duplicate donations caused by clicking the donate button repeatedly. [#164]
(https://github.com/Charitable/Charitable/issues/164)
* Fixed a bug related to empty content in the Layers theme. [#9](https://github.com/Charitable/Charitable/issues/9)

## 1.3.7

* Makes `Charitable_Currency::get_currency_symbol()` a publicly accessible method.
* Allow email shortcode values to be dynamically generated without being registered first. This simplifies the process of displaying dynamic data within emails if there is no existing shortcode output for it. [#134](https://github.com/Charitable/Charitable/issues/134)
* Provide a consistent api for determining the status of a campaign. Developers can use `$campaign->get_status_key()` (where `$campaign` is a `Charitable_Campaign` object) to check whether a campaign is inactive, ended, ended and successfully funded, ended and not successfully funded, ending soon, or active.
* Reset the positioning and styling of the modal when window or modal change in size. This prevents the modal from growing larger than the size of the window without having scrollbars. [#135](https://github.com/Charitable/Charitable/issues/135)

## 1.3.6

* Prevented campaigns being created with no suggested donation amounts and custom donations disabled. This results in $0 donations. [#127](https://github.com/Charitable/Charitable/issues/127)
* Fixed errors when exporting donations with errors set to display. [#128](https://github.com/Charitable/Charitable/issues/128)
* Deprecated `Charitable_Email::return_value_if_has_valid_donation()` method, since this was completely broken and should not be used.

## 1.3.5

* Added `is_preview()` method to `Charitable_Email` class.
* Added `get_donations()` method to `Charitable_Donor` class.
* Improved custom post status labels.
* Only include completed payments in the Donation Statistics dashboard widget, for the period summaries.
* Fixed PHP notices in email previews.
* Deprecated `Charitable_Session::get_session_id()`. We are no longer using a public session ID.

## 1.3.4

* Added selective refresh support for Charitable widgets.
* Added support for passing multiple campaign IDs to campaign donation queries. [#112](https://github.com/Charitable/Charitable/issues/112)
* Fixed a bug where donors without a completed donation were included in the donor count in the Donation Stats widget. [#114](https://github.com/Charitable/Charitable/issues/114)
* Fixed a bug that incorrectly set the from address for emails to always be the site email address, instead of using the provided settings. [#113](https://github.com/Charitable/Charitable/issues/113)
* Fixed a bug that stopped the cron scheduler from being activated in any new installs.
* Fixed display issues in the Charitable settings area with number fields.
* Deprecated usage of `shortcode_atts()` for the email shortcode, in favor of `wp_parse_args()`. If you relied on the `shortcode_atts_charitable_email` filter, this will no longer do anything and you should test & update your code.

## 1.3.3 
* Fixes a bug that prevented donors being able to access their donation receipts after making their donation.
* Flush rewrite rules after installation to avoid "Page not found" errors.

## 1.3.2 
* Fixed a bug that turned comments off everywhere. [#104](https://github.com/Charitable/Charitable/issues/104)
* Added a better fallback for donations for users with Javascript enabled, when using the modal donation forms. [#60](https://github.com/Charitable/Charitable/issues/60)
* Avoid sending donation notifications & receipts multiple times when a donation's status is toggled on/off Paid. [#96](https://github.com/Charitable/Charitable/issues/96)
* Donate button in campaign grids links to the campaign page when the donation form is set up to show on the same page as the campaign. [#107](https://github.com/Charitable/Charitable/issues/107)
* Fixed a bug that caused invalid shortcode options to show for custom emails sub-classing `Charitable_Email`. [#95](https://github.com/Charitable/Charitable/issues/95)

## 1.3.1 
* **APOLOGIES**: 1.3.0 introduced a couple of bugs that we failed to pick up on before releasing the update. We have fixed those bugs now and are working on improving the process around how we push out updates, to avoid issues like this in the future.
* Removes leftover testing code that prevented campaigns from being created or edited.
* Format the donation amount so that PayPal can understand it (PayPal doesn't like amounts with more than two decimal places). [See issue](https://github.com/Charitable/Charitable/issues/102) 
* Prevent PHP notice when making a donation. [See issue](https://github.com/Charitable/Charitable/issues/100)
* Fixes a bug that prevented the Donate widget from working as expected.

## 1.3.0 
* **THANK YOU**: A massive thank you to the following contributors who have contributed to Charitable 1.3: [@helgatheviking](https://github.com/helgatheviking), [@rafecolton](https://github.com/rafecolton), [@ciegovolador](https://github.com/ciegovolador), [@ElStupid](https://github.com/ElStupid) and [@altatof](httsp://github.com/altatof).
* NEW: Export donations to CSV via the WordPress dashboard. Go to Charitable > Donations and click on the Export button to generate your report.
* NEW: Donations are now processed via AJAX, which results in a smoother donation flow, particularly if you're using modal donations. [See issue](https://github.com/Charitable/Charitable/issues/41)
* NEW: Added an `id` parameter to the `[campaigns]` shortcode to show just a single campaign's widget.
* NEW: Dutch & French translations! Major props to @ElStupid (Dutch translation) and @altatof (French translation).
* NEW: Added custom body classes for the following templates: donation receipt, donation processing and email preview. All body classes are added via a single function: `charitable_add_body_classes()`.
* Added ARS currency.
* Fixed a bug that prevented donations with cents from being stored/displayed correctly when using commas for the currency decimal. [See issue](https://github.com/Charitable/Charitable/issues/57)
* Fixed a bug that let to donations being saved with the incorrect donation time. Run the upgrade routines to fix this in all your existing donations.
* Removed `charitable_templates_start` hook and deprecated all methods in the `Charitable_Templates` class. If you were calling any of these directly or using the `charitable_templates_start` hook, update your application code. All templates are now loaded via a single method: `Charitable_Templates::template_loader()`. All custom body classes are added via `charitable_add_body_classes()`. `Charitable_Templates::remove_admin_bar_from_widget_template()` has been replaced with `charitable_hide_admin_bar()`.
* Fixes a styling bug that caused the progress bar to extend beyond the campaign widget when more than 100% of a campaign's has been raised. [See issue](https://github.com/Charitable/Charitable/issues/47)
* Fixes a Javascript bug that prevented the $ variable (jQuery) from being defined in certain cases in the admin scripts.
* Fixes a clash with Cart66.
* Fixed a bug in modal donation window. [See issue](https://github.com/Charitable/Charitable/issues/43)
* Changed the `amount` column in the `wp_charitable_campaign_donations` table to a DECIMAL, instead of FLOAT. [See issue](https://github.com/Charitable/Charitable/issues/56)

## 1.2.4  
* Updated for compatibility with WordPress 4.4.
* Improves the API for dealing with the donation processor. Both the `charitable_before_process_donation_form` and `charitable_before_process_donation_amount_form` hooks now pass the donation form object as a second parameter.
* Fixes a bug that prevented you from being able to select the donation amount inside a modal opened via AJAX.
* Fixes a bug that prevented the donation form display option from being set correctly when changed via the Customizer.
* Fixes a bug in the form submission handler.

## 1.2.3 
* NEW: The `[campaigns]` widget now supports a new `button` argument, so you can specify whether you would like to show a "Read more" link, a "Donate" button, or nothing at all. [See the documentation](https://www.wpcharitable.com/documentation/the-campaigns-shortcode/?utm_source=readme&utm_medium=changelog-tab&utm_campaign=plugin-page-referrals&utm_content=1-2-3-release) for details on how to use the new argument.
* Improved styling for the modal donation form.
* Added method to retrieve all donation IDs for a particular campaign.
* Fixes a bug that blocked donations with a dollar sign in the amount field.
* Fixes a bug that prevented template functions from being "pluggable" in themes.
* Fixes a bug that stopped the profile form from displaying the user's saved address fields.
* Fixes a bug that prevented form submission validating when submitting a value of 0 for required fields.

## 1.2.2 
* Fixes a bug that prevented the donation form from working correctly when the donor is not logged in.

## 1.2.1 
* Including missing files from 1.2.0 release.

## 1.2.0 
* [Read the full release notes](https://www.wpcharitable.com/charitable-1-2-0-is-ready-to-download/?utm_source=readme&utm_medium=changelog-tab&utm_campaign=plugin-page-referrals&utm_content=1-2-0-release-notes).
* NEW: Change the highlight colour via the WordPress Customizer. You can preview your changes as you make them.
* NEW: There is a shiny new dashboard widget when you log into the WordPress dashboard to highlight your donation stats.
* NEW: You can now limit the donation form to only display required user fields.
* NEW: Create a static page with the [donation_receipt] shortcode to customize your donation receipt.
* NEW: All donation data is now displayed in the admin donation page.
* NEW: You can now change the campaign creator via the Campaign management page.
* NEW: Adds a login link to the donation form when donors are not logged in.
* NEW: When a user is logged in but has not filled out all required fields, they are presented with all the user fields.
* Removed the 'charitable_after_update_donation' hook. To respond to updates to a donation, use the 'save_post_donation'.
* Fixed a bug that resulted in `[campaigns orderby=popular]` to include non-complete donations when determining the order of campaigns.
* Fixed a bug that prevented donors from receiving their donation receipt after a donation is updated directly on the donation page.
* Fixes a bug that redirected donors to a "Page Not Found" page after donating on sites where the WordPress address and site address are not the same.
* Fixes bugs in the Donation Stats and Donors widget that causes them to include pending donations in the total.
* Fixes a bug in the Benefactors addon that caused fixed contribution amounts to not be saved.
* Major performance improvements in the WordPress dashboard.
* Better PHP 5.2 compatibility.

## 1.1.5 
* Fixes a bug that allowed people to make a donation without entering required details, or with an amount of $0 or less.

## 1.1.4 
* Fixes a critical bug that resulted in PayPal donations not working if you didn't have any other gateways installed.
* Fixes an error when trying to retrieve a donor name for a donation that does not have a matching donor.

## 1.1.3 
* Enhancement: Added the ability to change the dimensions of the user avatars added using Charitable User Avatar, with a PHP filter function.
* Fixes an issue where only having one active gateway meant that those gateway's donation form fields would not show.
* Fixes a problem with the permalinks structure that prevented you being able to create pages with slugs of "/donate/" or "/widget".
* Fixes the WP Editor form field template to prevent the text from being wrapped in HTML tags.

## 1.1.2 
* Security Fix: Prevent unauthorized users accessing your donation receipt.
* Fix: Localization with the .po/.mo files now really does work correctly. For real this time.

## 1.1.1 
* Fix: Emails will now correctly be sent with the body, headline and subject you set, instead of the default.

## 1.1.0 
* Enhancement: Added a new email that can be sent when a campaign has finished.

* Fix: Localization with the .po/.mo files now works correctly.
* Fix: Chrome 45 bug when clicking directly on suggested amount inputs is resolved.

## 1.0.3

* Improvement: Using `wp_list_pluck` instead of `array_column` for compatibility with versions of PHP prior to 5.5.
* PHP 5.2 Compatibility: Avoid T_PAAMAYIM_NEKUDOTAYIM error in older versions of PHP.

## 1.0.2

* Fix: Added missing file into the repo.

## 1.0.1

* Improvement: Moved the user dashboard functionality into the core of the plugin, so that it is always available.
* Fix: The installation routine now flushes permalinks correctly -- no more "Page not Found" problems!

## 1.0.0

* Initial release