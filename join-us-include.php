<?php
/**
 * Caldera Forms - PHP Export 
 * Join Us 
 * @see https://calderaforms.com/doc/exporting-caldera-forms/ 
 * @version    1.8.9
 * @license   GPL-2.0+
 * 
 */


/**
                     * Hooks to load form.
                     * Remove "caldera_forms_admin_forms" if you do not want this form to show in admin entry viewer
                     */
                    add_filter( "caldera_forms_get_forms", "slug_register_caldera_forms_joinus" );
                    add_filter( "caldera_forms_admin_forms", "slug_register_caldera_forms_joinus" );
                    /**
                     * Add form to front-end and admin
                     *
                     * @param array $forms All registered forms
                     *
                     * @return array
                     */
                    function slug_register_caldera_forms_joinus( $forms ) {
                        $forms["join-us"] = apply_filters( "caldera_forms_get_form-join-us", array() );
                        return $forms;
                    };

/**
 * Filter form request to include form structure to be rendered
 *
 * @since 1.3.1
 *
 * @param $form array form structure
 */
add_filter( 'caldera_forms_get_form-join-us', function( $form ){
 return array(
  '_last_updated' => 'Tue, 28 Jan 2020 12:41:16 +0000',
  'ID' => 'join-us',
  'cf_version' => '1.8.9',
  'name' => 'Join Us',
  'scroll_top' => 0,
  'success' => 'Form has been successfully submitted. Thank you.															',
  'db_support' => 1,
  'pinned' => 0,
  'hide_form' => 1,
  'check_honey' => 1,
  'avatar_field' => '',
  'form_ajax' => 1,
  'custom_callback' => '',
  'form_visibility' => 'all',
  'layout_grid' => 
  array(
    'fields' => 
    array(
      'html__fld_9841983' => '1:1',
      'register_heading' => '1:1',
      'username_register' => '1:1',
      'password_register' => '1:1',
      'section_break__fld_4426593' => '2:1',
      'first_name' => '3:1',
      'last_name' => '3:2',
      'contact_email' => '4:1',
      'general' => '5:1',
      'annual_preppayment' => '5:1',
      'total' => '6:1',
      'submit' => '6:1',
    ),
    'structure' => '12|12|6:6|12|12|12',
  ),
  'fields' => 
  array(
    'html__fld_9841983' => 
    array(
      'ID' => 'html__fld_9841983',
      'type' => 'html',
      'label' => 'html__html__fld_9841983',
      'slug' => 'html__html__fld_9841983',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'public',
        'default' => '<p>Please enter a Username to create an account. If you already have an account <a href="/wp-login.php">please login</a> before completing this form.</p>',
      ),
    ),
    'register_heading' => 
    array(
      'ID' => 'register_heading',
      'type' => 'html',
      'label' => 'register_heading',
      'slug' => 'register_heading',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'public',
        'default' => '<h4>Register</h4>',
      ),
    ),
    'username_register' => 
    array(
      'ID' => 'username_register',
      'type' => 'text',
      'label' => 'Username',
      'slug' => 'username_register',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => 'Punctuation is not allowed in a username with the exception of periods, hyphens and underscores.',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'public',
        'placeholder' => '',
        'default' => '',
        'type_override' => 'text',
        'mask' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'password_register' => 
    array(
      'ID' => 'password_register',
      'type' => 'password',
      'label' => 'Password',
      'slug' => 'password_register',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => 'We recommend including a combination of letters, numbers, and special characters.',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'public',
        'confirm_pass' => 1,
        'confirm_description' => '',
        'pass_strength' => 0,
      ),
    ),
    'first_name' => 
    array(
      'ID' => 'first_name',
      'type' => 'text',
      'label' => 'First Name',
      'slug' => 'first_name',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
        'type_override' => 'text',
        'mask' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'last_name' => 
    array(
      'ID' => 'last_name',
      'type' => 'text',
      'label' => 'Last Name',
      'slug' => 'last_name',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
        'type_override' => 'text',
        'mask' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'contact_email' => 
    array(
      'ID' => 'contact_email',
      'type' => 'email',
      'label' => 'Email',
      'slug' => 'contact_email',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'general' => 
    array(
      'ID' => 'general',
      'type' => 'checkbox',
      'label' => 'General',
      'slug' => 'general',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => 'Membership to Philly \'Burbs WordPress is free of charge.  We do charge $5.00 to attend the meetups to offset the cost of running them.   ',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'default_option' => '',
        'auto' => 1,
        'auto_type' => 'cfc_price_field_9',
        'taxonomy' => 'category',
        'post_type' => 'post',
        'value_field' => 'name',
        'orderby_tax' => 'name',
        'orderby_post' => 'name',
        'order' => 'ASC',
        'default' => '',
        'option' => 
        array(
          11 => 
          array(
            'value' => '11',
            'label' => 'General - 0.000000000',
            'calc_value' => '0.000000000',
          ),
        ),
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'annual_preppayment' => 
    array(
      'ID' => 'annual_preppayment',
      'type' => 'checkbox',
      'label' => 'Annual PrepPayment',
      'slug' => 'annual_preppayment',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => 'If you would like to prepay one year of Meetup event fees, please select this option',
      'entry_list' => 1,
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'default_option' => '',
        'auto' => 1,
        'auto_type' => 'cfc_price_field_10',
        'taxonomy' => 'category',
        'post_type' => 'post',
        'value_field' => 'name',
        'orderby_tax' => 'name',
        'orderby_post' => 'name',
        'order' => 'ASC',
        'default' => '',
        'option' => 
        array(
          12 => 
          array(
            'value' => '12',
            'label' => 'Annual Payment - 60.000000000',
            'calc_value' => '60.000000000',
          ),
        ),
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'total' => 
    array(
      'ID' => 'total',
      'type' => 'calculation',
      'label' => 'Total',
      'slug' => 'total',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'element' => 'h3',
        'classes' => 'total-line',
        'before' => '',
        'after' => '',
        'fixed' => 1,
        'thousand_separator' => ',',
        'decimal_separator' => '.',
        'formular' => ' ( general+annual_preppayment ) ',
        'config' => 
        array(
          'group' => 
          array(
            0 => 
            array(
              'lines' => 
              array(
                0 => 
                array(
                  'operator' => '+',
                  'field' => 'general',
                ),
                1 => 
                array(
                  'operator' => '+',
                  'field' => 'annual_preppayment',
                ),
              ),
            ),
          ),
        ),
        'manual_formula' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'submit' => 
    array(
      'ID' => 'submit',
      'type' => 'button',
      'label' => 'Submit',
      'slug' => 'submit',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'type' => 'submit',
        'class' => 'btn btn-default',
        'target' => '',
      ),
    ),
    'section_break__fld_4426593' => 
    array(
      'ID' => 'section_break__fld_4426593',
      'type' => 'section_break',
      'label' => 'section_break__section_break__fld_4426593',
      'slug' => 'section_break__section_break__fld_4426593',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'visibility' => 'all',
        'width' => '',
      ),
    ),
  ),
  'page_names' => 
  array(
    0 => 'Page 1',
  ),
  'mailer' => 
  array(
    'on_insert' => 1,
    'sender_name' => 'Philly \'Burbs WordPress Meetup',
    'sender_email' => 'philly@burbswp.com',
    'reply_to' => '',
    'email_type' => 'html',
    'recipients' => '',
    'bcc_to' => '',
    'email_subject' => 'Join Us',
    'email_message' => '{summary}',
  ),
  'processors' => 
  array(
    'fp_67800236' => 
    array(
      'ID' => 'fp_67800236',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_contact',
      'config' => 
      array(
        'auto_pop' => 1,
        'contact_link' => 1,
        'civicrm_contact' => 
        array(
          'contact_type' => 'Individual',
          'contact_sub_type' => '',
          'dedupe_rule' => 1,
          'do_not_email' => '',
          'do_not_phone' => '',
          'do_not_mail' => '',
          'do_not_sms' => '',
          'do_not_trade' => '',
          'is_opt_out' => '',
          'legal_identifier' => '',
          'nick_name' => '',
          'legal_name' => '',
          'image_URL' => '',
          'preferred_communication_method' => '',
          'preferred_language' => '',
          'preferred_mail_format' => '',
          'source' => '',
          'first_name' => '%first_name%',
          'middle_name' => '',
          'last_name' => '%last_name%',
          'prefix_id' => '%prefix%',
          'suffix_id' => '',
          'formal_title' => '',
          'communication_style_id' => '',
          'job_title' => '',
          'gender_id' => '',
          'birth_date' => '',
          'household_name' => '',
          'organization_name' => '',
          'sic_code' => '',
          'current_employer' => '',
          'email' => '%contact_email%',
          'custom_1' => '',
          'custom_2' => '',
          'custom_3' => '',
          'custom_4' => '',
          'custom_5' => '',
          'custom_6' => '',
          'custom_7' => '',
          'custom_8' => '',
          'custom_9' => '',
          'custom_10' => '',
          'custom_11' => '',
          'custom_12' => '',
          'custom_13' => '',
          'custom_14' => '',
          'custom_15' => '',
          'custom_16' => '',
          'custom_17' => '',
          'custom_18' => '',
          'custom_19' => '',
          'custom_20' => '',
          'custom_21' => '',
          'custom_22' => '',
          'custom_23' => '',
          'custom_24' => '',
        ),
        'civicrm_address' => 
        array(
          'location_type_id' => '',
          'is_primary' => '',
          'is_billing' => '',
          'street_address' => '',
          'supplemental_address_1' => '',
          'supplemental_address_2' => '',
          'city' => '',
          'state_province_id' => '',
          'postal_code' => '',
          'country_id' => '',
          'name' => '',
        ),
        'civicrm_phone' => 
        array(
          'location_type_id' => '',
          'phone_type_id' => '',
          'is_primary' => '',
          'is_billing' => '',
          'phone' => '',
          'phone_numeric' => '',
        ),
        'civicrm_note' => 
        array(
          'note' => '',
          'subject' => '',
        ),
        'civicrm_email' => 
        array(
          'location_type_id' => 3,
          'email' => '%contact_email%',
          'is_primary' => '',
          'is_billing' => '',
          'on_hold' => '',
          'is_bulkmail' => '',
        ),
        'civicrm_website' => 
        array(
          'website_type_id' => '',
          'url' => '',
        ),
        'civicrm_im' => 
        array(
          'location_type_id' => '',
          'name' => '',
          'provider_id' => '',
          'is_primary' => '',
          'is_billing' => '',
        ),
        'civicrm_group' => 
        array(
          'contact_group' => '',
        ),
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
    'fp_34721471' => 
    array(
      'ID' => 'fp_34721471',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'user_register',
      'config' => 
      array(
        'user_login' => 'username_register',
        '_required_bounds' => 
        array(
          0 => 'user_login',
        ),
        'user_pass' => 'password_register',
        'user_email' => 'contact_email',
        'do_login' => 1,
        'email_details' => 1,
        'role' => 'subscriber',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'nickname' => '',
        'display_name' => '',
        'description' => '',
        'user_url' => '',
      ),
      'conditions' => 
      array(
        'type' => 'not',
        'group' => 
        array(
          'rw36336586638' => 
          array(
            'cl16223483409' => 
            array(
              'field' => '{user:id}',
              'compare' => 'is',
              'value' => true,
            ),
          ),
        ),
      ),
    ),
    'fp_31937584' => 
    array(
      'ID' => 'fp_31937584',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_membership',
      'config' => 
      array(
        'is_monetary' => 1,
        'is_renewal' => 1,
        'member_of_contact_id' => 7,
        'is_membership_type' => 1,
        'contact_link' => 1,
        'membership_type_id' => 3,
        'is_price_field_based' => 1,
        'price_field_value' => '%annual_preppayment%%contact_email%',
        'campaign_id' => '',
        'join_date' => '',
        'start_date' => '{date:Y-m-d H:i:s}',
        'end_date' => '',
        'source' => '',
        'num_terms' => '',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
    'fp_74862943' => 
    array(
      'ID' => 'fp_74862943',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_membership',
      'config' => 
      array(
        'is_monetary' => 1,
        'is_renewal' => 1,
        'member_of_contact_id' => 1,
        'is_membership_type' => 1,
        'contact_link' => 1,
        'membership_type_id' => 1,
        'is_price_field_based' => 1,
        'price_field_value' => '%general%',
        'campaign_id' => '',
        'join_date' => '',
        'start_date' => '{date:Y-m-d H:i:s}',
        'end_date' => '',
        'source' => '',
        'num_terms' => '',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
    'fp_64759672' => 
    array(
      'ID' => 'fp_64759672',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_line_item',
      'config' => 
      array(
        'entity_table' => 'civicrm_membership',
        'entity_params' => '{civicrm_membership:processor_id:fp_31937584}',
        'price_field_value' => '%annual_preppayment%',
        'fixed_price_field_value' => 12,
        'qty' => '',
        'amount' => '',
      ),
      'conditions' => 
      array(
        'type' => 'use',
        'group' => 
        array(
          'rw55358190506' => 
          array(
            'cl1495934772' => 
            array(
              'field' => 'annual_preppayment',
              'compare' => 'is',
              'value' => 12,
            ),
          ),
        ),
      ),
    ),
    'fp_63719712' => 
    array(
      'ID' => 'fp_63719712',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_line_item',
      'config' => 
      array(
        'entity_table' => 'civicrm_membership',
        'entity_params' => '{civicrm_membership:processor_id:fp_74862943}',
        'price_field_value' => '%general%',
        'fixed_price_field_value' => 18,
        'qty' => '',
        'amount' => '',
      ),
      'conditions' => 
      array(
        'type' => 'use',
        'group' => 
        array(
          'rw65155417443' => 
          array(
            'cl932511425' => 
            array(
              'field' => 'general',
              'compare' => 'is',
              'value' => 11,
            ),
          ),
        ),
      ),
    ),
    'fp_41882466' => 
    array(
      'ID' => 'fp_41882466',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'stripe',
      'config' => 
      array(
        'secret' => '',
        'publishable' => '',
        'type' => 'single',
        'amount' => 'total',
        '_required_bounds' => 
        array(
          0 => NULL,
          1 => 'amount',
          2 => 'email',
        ),
        'plan' => '',
        'currency' => 'USD',
        'label' => 'Pay',
        'add_verification' => 'none',
        'file' => '',
        'name' => '',
        'item' => 'Philly Burbs WordPress Meetup',
        'description' => 'Philly Burbs WordPress Meetup',
        'email' => 'contact_email',
        'remove_remember' => 'on',
      ),
      'conditions' => 
      array(
        'type' => 'use',
        'group' => 
        array(
          'rw19887741696' => 
          array(
            'cl8475868248' => 
            array(
              'field' => 'total',
              'compare' => '>',
              'value' => 0.01,
            ),
          ),
        ),
      ),
    ),
    'fp_63087319' => 
    array(
      'ID' => 'fp_63087319',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_order',
      'config' => 
      array(
        'is_email_receipt' => 1,
        'contribution_page_id' => 2,
        'payment_processor' => 1,
        'contact_link' => 1,
        'financial_type_id' => 2,
        'campaign_id' => '',
        'contribution_status_id' => 1,
        'payment_instrument_id' => 1,
        'mapped_payment_instrument_id' => '',
        'is_pay_later' => '',
        'receive_date' => '{date:Y-m-d H:i:s}',
        'trxn_id' => '',
        'currency' => 'USD',
        'check_number' => '',
        'product_id' => '',
        'total_amount' => 'total',
        'line_items' => 
        array(
          'line_item_line_item_1' => '{civicrm_line_item:processor_id:fp_64759672}',
          'line_item_line_item_2' => '{civicrm_line_item:processor_id:fp_63719712}',
        ),
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
  ),
  'conditional_groups' => 
  array(
    '_open_condition' => '',
  ),
  'settings' => 
  array(
    'responsive' => 
    array(
      'break_point' => 'sm',
    ),
  ),
  'privacy_exporter_enabled' => false,
  'version' => '1.8.9',
  'db_id' => '57',
  'type' => 'primary',
  '_external_form' => 1,
);
} );
