<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * Subpanel Layout definition for Emails.
 *
 */
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
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
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


$subpanel_layout = array(
	'top_buttons' => array(),
	'where'				=> "",
	'fill_in_additional_fields'	=> true,
	'list_fields' => array(
		'object_image'=>array(
			'widget_class'			=> 'SubPanelIcon',
 		 	'width'					=> '2%',
		),
		'name' => array(
			 'vname'				=> 'LBL_LIST_SUBJECT',
			 'widget_class'			=> 'SubPanelDetailViewLink',
			 'width'				=> '30%',
             'parent_info'          => true
		),
		'status' => array(
			 'vname'				=> 'LBL_LIST_STATUS',
			 'width'				=> '15%',
		),
		'reply_to_status' => array(
			 'usage'				=> 'query_only',
             'force_exists'			=> true,
		),
		'date_entered' => array(
			'width'					=> '10%',
		    'vname'					=> 'LBL_DATE_CREATED',
		),
		'date_modified' => array(
			'width'					=> '10%',
		    'vname'					=> 'LBL_DATE_MODIFIED',
		),
		'assigned_user_name' => array (
			'name' => 'assigned_user_name',
			'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
		 	'target_record_key' => 'assigned_user_id',
			'target_module' => 'Employees',
		),
		'edit_button' => array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class'			=> 'SubPanelEditButton',
			 'width'				=> '2%',
		),
		'filename' => array(
			'usage'					=> 'query_only',
			'force_exists'			=> true
		),
	), // end list_fields
);
?>
