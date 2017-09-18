<?php
/**
 * Returns an array of all the default donation fields.
 *
 * @since     1.5.0
 * @package   Charitable/i18n
 * @author    Eric Daams
 * @copyright Copyright (c) 2017, Studio 164a
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * NOTE: Do not edit this file if you want to register a custom donation field.
 * Instead, you can register your own donation fields like this:

charitable_register_donation_field(
    'select_field',
    array(

    ),
);

 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Filter the set of default donation fields.
 *
 * This filter is provided primarily for internal use by Charitable
 * extensions, as it allows us to add to the registered donation fields
 * as soon as possible.
 *
 * @since 1.5.0
 *
 * @param array $fields The multi-dimensional array of keys in $key => $args format.
 */
return apply_filters( 'charitable_default_donation_fields', array(
    'donation_id' => array(
        'label'          => __( 'Donation ID', 'charitable' ),
        'data_type'      => 'core',
        'value_callback' => false,
        'donation_form'  => false,
        'admin_form'     => false,
        'email_tag'      => array(
            'description' => __( 'The donation ID', 'charitable' ),
            'preview'     => 164,
        ),
    ),
    'first_name' => array(
        'label'          => __( 'Donor First Name', 'charitable' ),
        'data_type'      => 'user',
        'value_callback' => 'charitable_get_donor_meta_value',
        'donation_form'  => array(
            'label'    => __( 'First name', 'charitable' ),
            'priority' => 4,
            'required' => true,            
        ),
        'admin_form'     => true,
        'show_in_meta'   => true,
        'show_in_export' => true,
        'email_tag'      => array(
            'tag'         => 'donor_first_name',
            'description' => __( 'The first name of the donor', 'charitable' ),                    
            'preview'     => 'John',
        ),
    ),
    'last_name' => array(        
        'label'          => __( 'Donor Last Name', 'charitable' ),
        'data_type'      => 'user',
        'value_callback' => 'charitable_get_donor_meta_value',
        'donation_form'  => array(
            'label'    => __( 'Last name', 'charitable' ),
            'priority' => 6,
            'required' => true,
        ),
        'admin_form'     => true,
        'show_in_meta'   => true,
        'show_in_export' => true,
        'email_tag'      => array(
            'tag'         => 'donor_last_name',
            'description' => __( 'The last name of the donor', 'charitable' ),                    
            'preview'     => 'Deere',
        ),
    ),
    'donor' => array(
        'admin_label'    => __( 'Donor', 'charitable' ),
        'data_type'      => 'core',
        'value_callback' => false,
        'donation_form'  => false,
        'admin_form'     => false,
        'show_in_meta'   => true,
        'show_in_export' => false,
        'email_tag'      => array(
            'description' => __( 'The full name of the donor', 'charitable' ),
            'preview'     => 'John Deere',
        ),
    ),
    'email' => array(
        'label'          => __( 'Donor Email', 'charitable' ),
        'data_type'      => 'user',
        'value_callback' => 'charitable_get_donor_meta_value',
        'donation_form' => array(
            'type'     => 'email',
            'label'    => __( 'Email', 'charitable' ),            
            'priority' => 8,
            'required' => true,            
        ),
        'admin_form'    => true,        
        'email_tag'        => array(
            'tag'         => 'donor_email',
            'description' => __( 'The email address of the donor', 'charitable' ),                    
            'preview'     => 'john@example.com',
        ),
    )
) );

// // Define a new field.
// $field = new Charitable_Donation_Field( 'national_id_number', array(

//     // Default label used in the donation form.
//     // If the admin_label is not set, this label will also be used
//     // in the admin form, meta and export.
//     'label'          => __( 'National ID Number', 'charitable' ),

//     // Label used for the field in the admin area.
//     // If set, this will be used for the admin form, meta and export.
//     'admin_label'    => __( 'National ID Number', 'charitable' ),

//     // May be 'user' or 'meta'.
//     'data_type'      => 'user',

//     // Set to true if the field is shown in the donation form,
//     // with the default form field args, or an array for finer
//     // control over field arguments.
//     //
//     // Set to false for fields that do not belong in the donation form.
//     'donation_form'  => array(
//         'show_after' => 'phone',
//         'required'   => false,
//     ),

//     // Set to true if the field is shown in the admin donation form,
//     // with the default form field args, or an array for finer
//     // control over field arguments.
//     //
//     // Set to false for fields that do not belong in the admin form.
//     'admin_form'     => array(
//         'show_after' => 'phone',
//         'required'   => false,
//     ),

//     // True or false
//     'show_in_meta'   => true,

//     // True or false
//     'show_in_export' => true,

//     // Set to true to create an email tag for this field, with the label
//     // as the description. Set to an array with a 'description' argument
//     // to set the description.
//     //
//     // Set to false if the field doesn't need an email tag.
//     'email_tag'      => array(
//         'description' => __( 'The donor\'s national ID number' , 'charitable' ),
//     ) )
// ) );

// Register the field.
// charitable()->donation_fields()->register( $field );

// Get Field values through Charitable_Donation objects.
// $donation = charitable_get_donation( $donation_id );
// $donation->get( 'national_id_number' );

// Get a Donation_Object_Fields instance for the donation.
// $fields = new Charitable_Fields( charitable()->donation_fields(), $donation );

// Register a field with a class method in `Charitable_Donation`.
// $field = new Charitable_Donation_Field( 'campaign_name', array(
//     // Default label used in the donation form.
//     // If the admin_label is not set, this label will also be used
//     // in the admin form, meta and export.
//     'label'          => __( 'Campaign', 'charitable' ),

//     // May be 'user' or 'meta'.
//     'data_type'      => 'user',

//     // How to get the value
//     'value_callback' => false,

//     // Set to true if the field is shown in the donation form,
//     // with the default form field args, or an array for finer
//     // control over field arguments.
//     //
//     // Set to false for fields that do not belong in the donation form.
//     'donation_form'  => false,

//     // Set to true if the field is shown in the admin donation form,
//     // with the default form field args, or an array for finer
//     // control over field arguments.
//     //
//     // Set to false for fields that do not belong in the admin form.
//     'admin_form'     => false,

//     // True or false
//     'show_in_meta'   => false,

//     // True or false
//     'show_in_export' => false,

//     // Set to true to create an email tag for this field, with the label
//     // as the description. Set to an array with a 'description' argument
//     // to set the description.
//     //
//     // Set to false if the field doesn't need an email tag.
//     'email_tag'      => array(
//         'description' => __( 'The campaign that was donated to.', 'charitable' ),
//     ) ),
// ) );

// `Charitable_Donation` has a get_campaign_name() method, so we would
// prefer to call this straight away rather than going to the Fields object
// and then calling it from there.
// $donation->get( 'campaign_name' );




// charitable()->donation_fields()->register( $field );

// $field->set_label( __( 'Donation ID', 'charitable' ) )
//     ->set_data_type( 'core' )
//     ->set_donation_form( false )
//     ->set_admin_form( false )
//     ->set_show_in_meta( true )
//     ->set_email_tag( array(
//         'description' => __( 'The full name of the donor', 'charitable' ),
//         'preview'     => 164,
//     ) );

// return apply_filters( 'charitable_default_donation_fields', array(
//     'donation_id' => array(
//         'admin_label'      => __( 'Donation ID', 'charitable' ),
//         'data_type'        => 'core',
//         'donation_form' => false,
//         'admin_form'    => false,
//         'show_in_meta'          => true,
//         'show_in_export'        => true,
//         'email_tag'        => array(
//             'description' => __( 'The full name of the donor', 'charitable' ),
//             'preview'     => 164,
//         ),
//     ),
//     'first_name' => array(
//         'label'            => __( 'First name', 'charitable' ),
//         'admin_label'      => __( 'Donor First Name', 'charitable' ),
//         'data_type'        => 'user',
//         'donation_form' => array(
//             'type'     => 'text',
//             'priority' => 4,
//             'required' => true,            
//         ),
//         'admin_form'    => true,
//         'show_in_meta'          => true,
//         'show_in_export'        => true,
//         'email_tag'        => array(
//             'tag'         => 'donor_first_name',
//             'description' => __( 'The first name of the donor', 'charitable' ),                    
//             'preview'     => 'John',
//         ),
//     ),
//     'last_name' => array(
//         'label'            => __( 'Last name', 'charitable' ),
//         'admin_label'      => __( 'Donor Last Name', 'charitable' ),
//         'data_type'        => 'user',
//         'donation_form' => array(
//             'type'     => 'text',
//             'priority' => 6,
//             'required' => true,            
//         ),
//         'admin_form'    => true,
//         'show_in_meta'          => true,
//         'show_in_export'        => true,
//         'email_tag'        => 'donor_last_name',
//     ),
//     'donor' => array(
//         'admin_label'      => __( 'Donor', 'charitable' ),
//         'data_type'        => 'user',
//         'donation_form' => false,
//         'admin_form'    => false,
//         'show_in_meta'          => true,
//         'show_in_export'        => false,
//         'email_tag'        => 'donor',
//     ),
//     'email' => array(
//         'label'            => __( 'Email', 'charitable' ),
//         'data_type'        => 'user',
//         'donation_form' => array(
//             'type'     => 'email',
//             'priority' => 8,
//             'required' => true,            
//         ),
//         'admin_form'    => true,        
//         'email_tag'        => array(
//             'tag'         => 'donor_email',
//             'description' => __( 'The email address of the donor', 'charitable' ),                    
//             'preview'     => 'john@example.com',
//         ),
//     )
//     // ),
//     // 'address' => array(
//     //     'label'     => __( 'Address', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 10,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'address_2' => array(
//     //     'label'     => __( 'Address 2', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 12,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'city' => array(
//     //     'label'     => __( 'City', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 14,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'state' => array(
//     //     'label'     => __( 'State', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 16,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'postcode' => array(
//     //     'label'     => __( 'Postcode / ZIP code', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 18,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'country' => array(
//     //     'label'     => __( 'Country', 'charitable' ),
//     //     'type'      => 'select',
//     //     'options'   => charitable_get_location_helper()->get_countries(),
//     //     'priority'  => 20,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
//     // 'phone' => array(
//     //     'label'     => __( 'Phone', 'charitable' ),
//     //     'type'      => 'text',
//     //     'priority'  => 22,        
//     //     'required'  => false,        
//     //     'data_type' => 'user',
//     // ),
// ) );


//                 // 'donor_address' => array(
//                 //     'description' => __( 'The donor\'s address', 'charitable' ),                    
//                 //     'preview'     => charitable_get_location_helper()->get_formatted_address( array(
//                 //         'first_name' => 'John',
//                 //         'last_name'  => 'Deere',
//                 //         'company'    => 'Deere & Company',
//                 //         'address'    => 'One John Deere Place',
//                 //         'city'       => 'Moline',
//                 //         'state'      => 'Illinois',
//                 //         'postcode'   => '61265',
//                 //         'country'    => 'US',
//                 //     ) ),
//                 // ),
//                 // 'donor_phone' => array(
//                 //     'description' => __( 'The donor\'s phone number', 'charitable' ),                    
//                 //     'preview'     => '1300 000 000',
//                 // ),
//                 // 'donation_id' => array(
//                 //     'description' => __( 'The donation ID', 'charitable' ),                    
//                 //     'preview'     => 164,
//                 // ),
//                 // 'donation_summary' => array(
//                 //     'description' => __( 'A summary of the donation', 'charitable' ),                    
//                 //     'preview'     => __( 'Fake Campaign: $50.00', 'charitable' ) . PHP_EOL,
//                 // ),
//                 // 'donation_amount' => array(
//                 //     'description' => __( 'The total amount donated', 'charitable' ),                    
//                 //     'preview'     => '$50.00',
//                 // ),
//                 // 'donation_date' => array(
//                 //     'description' => __( 'The date the donation was made', 'charitable' ),                    
//                 //     'preview'     => date_i18n( get_option( 'date_format' ) ),
//                 // ),
//                 // 'donation_status' => array(
//                 //     'description' => __( 'The status of the donation (pending, paid, etc.)', 'charitable' ),                    
//                 //     'preview'     => __( 'Paid', 'charitable' ),
//                 // ),
//                 // 'campaigns' => array(
//                 //     'description' => __( 'The campaigns that were donated to', 'charitable' ),                    
//                 //     'preview'     => __( 'Fake Campaign', 'charitable' ),
//                 // ),
//                 // 'campaign_categories' => array(
//                 //     'description' => __( 'The categories of the campaigns that were donated to', 'charitable' ),                    
//                 //     'preview'     => __( 'Fake Category', 'charitable' ),
//                 // ),