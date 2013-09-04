<?php
// created: 2013-06-18 21:50:14
$viewdefs = array (
  'Accounts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
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
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
              ),
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'segment_c',
              'label' => 'LBL_SEGMENT',
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'comment' => 'The fax phone number of this company',
              'label' => 'LBL_FAX',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'focus_account_c',
              'label' => 'LBL_FOCUS_ACCOUNT',
            ),
            1 => NULL,
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
            1 => 
            array (
              'name' => 'phone_alternate',
              'label' => 'LBL_OTHER_PHONE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_MEMBER_OF',
            ),
            1 => 
            array (
              'name' => 'ticker_symbol',
              'comment' => 'The stock trading (ticker) symbol for the company',
              'label' => 'LBL_TICKER_SYMBOL',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'category_c',
              'label' => 'LBL_CATEGORY',
            ),
            1 => 
            array (
              'name' => 'dma_c',
              'label' => 'LBL_DMA',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'subcategory_c',
              'label' => 'LBL_SUBCATEGORY',
            ),
            1 => 
            array (
              'name' => 'annual_revenue',
              'comment' => 'Annual revenue for this company',
              'label' => 'LBL_ANNUAL_REVENUE',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
            1 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
              'label' => 'LBL_DATE_ENTERED',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
            1 => 
            array (
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'shipping',
              ),
            ),
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
          11 => 
          array (
            0 => 'campaign_name',
          ),
        ),
        'lbl_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_11_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_11_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_12_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_12_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_9_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_9_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_10_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_10_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_13_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_13_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_14_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_14_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_3_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_3_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_4_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_4_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_5_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_5_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_6_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_6_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_7_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_7_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'agenc_agencies_accounts_8_name',
              'label' => 'LBL_AGENC_AGENCIES_ACCOUNTS_8_FROM_AGENC_AGENCIES_TITLE',
            ),
          ),
        ),
      ),
    ),
  ),
);