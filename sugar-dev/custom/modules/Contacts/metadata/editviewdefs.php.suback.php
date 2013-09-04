<?php
// created: 2013-06-18 21:49:23
$viewdefs['Contacts']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
        1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
        2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
        3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
        4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_contact_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          'label' => 'LBL_FIRST_NAME',
        ),
        1 => 
        array (
          'name' => 'phone_work',
          'comment' => 'Work phone number of the contact',
          'label' => 'LBL_OFFICE_PHONE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
          'label' => 'LBL_LAST_NAME',
        ),
        1 => 
        array (
          'name' => 'phone_mobile',
          'comment' => 'Mobile phone number of the contact',
          'label' => 'LBL_MOBILE_PHONE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'salutation',
          'label' => 'LBL_SALUTATION',
        ),
        1 => 
        array (
          'name' => 'phone_home',
          'label' => 'LBL_HOME_PHONE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'displayParams' => 
          array (
            'key' => 'billing',
            'copy' => 'primary',
            'billingKey' => 'primary',
            'additionalFields' => 
            array (
              'phone_office' => 'phone_work',
            ),
          ),
          'label' => 'LBL_ACCOUNT_NAME',
        ),
        1 => 
        array (
          'name' => 'phone_other',
          'label' => 'LBL_OTHER_PHONE',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'lead_source',
          'comment' => 'How did the contact come about',
          'label' => 'LBL_LEAD_SOURCE',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'comment' => 'Contact fax number',
          'label' => 'LBL_FAX_PHONE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'campaign_name',
          'label' => 'LBL_CAMPAIGN',
        ),
        1 => 
        array (
          'name' => 'birthdate',
          'label' => 'LBL_BIRTHDATE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'title',
          'comment' => 'The title of the contact',
          'label' => 'LBL_TITLE',
        ),
        1 => '',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'job_function_c',
          'label' => 'LBL_JOB_FUNCTION',
        ),
        1 => NULL,
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'department',
          'label' => 'LBL_DEPARTMENT',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'report_to_name',
          'label' => 'LBL_REPORTS_TO',
        ),
        1 => 
        array (
          'name' => 'assistant',
          'label' => 'LBL_ASSISTANT',
        ),
      ),
      10 => 
      array (
        0 => 
        array (
          'name' => 'sync_contact',
          'comment' => 'Synch to outlook?  (Meta-Data only)',
          'label' => 'LBL_SYNC_CONTACT',
        ),
        1 => 
        array (
          'name' => 'assistant_phone',
          'label' => 'LBL_ASSISTANT_PHONE',
        ),
      ),
      11 => 
      array (
        0 => 
        array (
          'name' => 'do_not_call',
          'comment' => 'An indicator of whether contact can be called',
          'label' => 'LBL_DO_NOT_CALL',
        ),
      ),
      12 => 
      array (
        0 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'display' => true,
          ),
          'label' => 'LBL_TEAM',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
    ),
    'lbl_email_addresses' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'email1',
          'studio' => 'false',
          'label' => 'LBL_EMAIL_ADDRESS',
        ),
      ),
    ),
    'lbl_address_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'primary',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        1 => 
        array (
          'name' => 'alt_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'alt',
            'copy' => 'primary',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
          'label' => 'LBL_ALT_ADDRESS_STREET',
        ),
      ),
    ),
    'lbl_description_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
        ),
        1 => 'picture',
      ),
    ),
  ),
);