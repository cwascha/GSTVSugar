<?php
 // created: 2013-06-20 15:40:57
$layout_defs["Agenc_Agencies"]["subpanel_setup"]['agenc_agencies_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'ForContacts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AGENC_AGENCIES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'agenc_agencies_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
