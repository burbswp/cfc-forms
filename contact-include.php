<?php
/**
 * Caldera Forms - PHP Export 
 * Contact 
 * @see https://calderaforms.com/doc/exporting-caldera-forms/ 
 * @version    1.8.9
 * @license   GPL-2.0+
 * 
 */


/**
                     * Hooks to load form.
                     * Remove "caldera_forms_admin_forms" if you do not want this form to show in admin entry viewer
                     */
                    add_filter( "caldera_forms_get_forms", "slug_register_caldera_forms_contact" );
                    add_filter( "caldera_forms_admin_forms", "slug_register_caldera_forms_contact" );
                    /**
                     * Add form to front-end and admin
                     *
                     * @param array $forms All registered forms
                     *
                     * @return array
                     */
                    function slug_register_caldera_forms_contact( $forms ) {
                        $forms["contact"] = apply_filters( "caldera_forms_get_form-contact", array() );
                        return $forms;
                    };

/**
 * Filter form request to include form structure to be rendered
 *
 * @since 1.3.1
 *
 * @param $form array form structure
 */
add_filter( 'caldera_forms_get_form-contact', function( $form ){
 return array(
  '_last_updated' => 'Sun, 26 Jan 2020 01:25:26 +0000',
  'ID' => 'contact',
  'cf_version' => '1.8.9',
  'name' => 'Contact',
  'scroll_top' => 0,
  'success' => 'Form has been successfully submitted. Thank you.						',
  'db_support' => 1,
  'pinned' => 0,
  'hide_form' => 1,
  'check_honey' => 1,
  'avatar_field' => 'email_address',
  'form_ajax' => 1,
  'custom_callback' => '',
  'layout_grid' => 
  array(
    'fields' => 
    array(
      'header' => '1:1',
      'contact_us' => '1:1',
      'first_name' => '2:1',
      'last_name' => '2:2',
      'email_address' => '2:3',
      'message' => '3:1',
      'comments_questions' => '4:1',
      'submit' => '5:1',
    ),
    'structure' => '12|4:4:4|12|12|12',
  ),
  'fields' => 
  array(
    'header' => 
    array(
      'ID' => 'header',
      'type' => 'html',
      'label' => 'header',
      'slug' => 'header',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'default' => '<h2>Your Details</h2>
<p>Let us know how to get back to you.</p>
<hr>',
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
        'placeholder' => '',
        'default' => '',
        'type_override' => 'text',
        'mask' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'email_address' => 
    array(
      'ID' => 'email_address',
      'type' => 'email',
      'label' => 'Email Address',
      'slug' => 'email_address',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'placeholder' => '',
        'default' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'message' => 
    array(
      'ID' => 'message',
      'type' => 'html',
      'label' => 'Message',
      'slug' => 'message',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'default' => '<h2>How can we help?</h2>
<p>Feel free to ask a question or simply leave a comment.</p>
<hr>',
      ),
    ),
    'comments_questions' => 
    array(
      'ID' => 'comments_questions',
      'type' => 'paragraph',
      'label' => 'Comments / Questions',
      'slug' => 'comments_questions',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'placeholder' => '',
        'rows' => 7,
        'default' => '',
        'email_identifier' => 0,
        'personally_identifying' => 0,
      ),
    ),
    'submit' => 
    array(
      'ID' => 'submit',
      'type' => 'button',
      'label' => 'Send Message',
      'slug' => 'submit',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'type' => 'submit',
        'class' => 'btn btn-default',
        'target' => '',
      ),
    ),
    'contact_us' => 
    array(
      'ID' => 'contact_us',
      'type' => 'hidden',
      'label' => 'Contact Us',
      'slug' => 'contact_us',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'default' => 'Contact Us',
        'email_identifier' => 0,
        'personally_identifying' => 0,
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
    'sender_name' => 'Caldera Forms Notification',
    'sender_email' => 'philly@burbswp.com',
    'reply_to' => '',
    'email_type' => 'html',
    'recipients' => '',
    'bcc_to' => '',
    'email_subject' => 'Contact',
    'email_message' => '{summary}',
  ),
  'processors' => 
  array(
    'fp_38016675' => 
    array(
      'ID' => 'fp_38016675',
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
          'prefix_id' => '',
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
          'email' => '%email_address%',
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
          'location_type_id' => 5,
          'email' => '',
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
    'fp_17689566' => 
    array(
      'ID' => 'fp_17689566',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'auto_responder',
      'config' => 
      array(
        'sender_name' => 'Philly &#039;burbs WordPress Meetup',
        'sender_email' => 'philly@burbswp.com',
        'reply_to' => '',
        'cc' => '',
        'bcc' => '',
        'subject' => 'Thank you for contacting us',
        'recipient_name' => '%first_name% %last_name%',
        'recipient_email' => '%email_address%',
        'message' => 'Hi %recipient_name%.
Thanks for your email.
We\'ll get back to you as soon as possible!
Here\'s a summary of your message:
------------------------
{summary}',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
    'fp_9184432' => 
    array(
      'ID' => 'fp_9184432',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'civicrm_activity',
      'config' => 
      array(
        'contact_link' => 1,
        'activity_type_id' => 12,
        'status_id' => 2,
        'campaign_id' => '',
        'subject' => 'contact_us',
        'activity_date_time' => '{date:Y-m-d H:i:s}',
        'duration' => '',
        'location' => '',
        'details' => 'comments_questions',
        'is_star' => '',
        'created_date' => '',
        'modified_date' => '',
        'tag_id' => '',
        'file_id' => '',
        'case_id' => NULL,
        'is_overdue' => NULL,
        'target_contact_id' => NULL,
        'source_contact_id' => NULL,
        'assignee_contact_id' => NULL,
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
  'db_id' => '7',
  'type' => 'primary',
  '_external_form' => 1,
);
} );
