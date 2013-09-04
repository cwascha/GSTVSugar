<?php
/*
 * Created on Aug 2, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 * *******************************************************************************/
$module_name = 'Agenc_Agencies';
$_object_name = 'agenc_agencies';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array('form' => array('buttons'=>array('EDIT', 'DUPLICATE', 'DELETE', 'FIND_DUPLICATES')),
                            'maxColumns' => '2', 
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'), 
                                            array('label' => '10', 'field' => '30')
                                            ),
                           ),
    'panels' => array(
        array('name', 'phone_office'),
        array(array('name'=>'website', 'type'=>'link'), 'phone_fax'),
        array('ticker_symbol', array('name'=>'phone_alternate', 'label'=>'LBL_OTHER_PHONE')),
        array('', 'employees'),
        array('ownership', 'rating'),
        array('industry'),
        array($_object_name . '_type', 'annual_revenue'),
		array('team_name', 
		      array('name'=>'date_modified', 'label'=>'LBL_DATE_MODIFIED', 'customCode'=>'{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}')),
		array(array('name'=>'assigned_user_name', 'label'=>'LBL_ASSIGNED_TO'),
              array('name'=>'date_entered', 'customCode'=>'{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}')),
		array (
		      array (
			  'name' => 'billing_address_street',
		      'label'=> 'LBL_BILLING_ADDRESS',
		      'type' => 'address',
		      'displayParams'=>array('key'=>'billing'),
		      ),
		array (
		      'name' => 'shipping_address_street',
		      'label'=> 'LBL_SHIPPING_ADDRESS',
		      'type' => 'address',
		      'displayParams'=>array('key'=>'shipping'),      
		      ),
		),

	    array('description'),
	    array('email1'),		      
     ),
    
    
);
?>
