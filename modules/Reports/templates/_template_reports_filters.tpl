{*
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

*}

<div id="filters_tab" style="display: none">
<span scope="row"><h5>{$mod_strings.LBL_FILTERS}:</h5></span>
{$mod_strings.LBL_FILTER_CONDITIONS}
 <select name='filters_combiner' id='filters_combiner'>
   <option value='AND' {$selectedAnd}>{$mod_strings.LBL_FILTER_AND}</option>
   <option value='OR' {$selectedOR}>{$mod_strings.LBL_FILTER_OR}</option>
</select>
{$mod_strings.LBL_FILTERS_END}
<br><br>
<input class=button type=button onClick='window.addFilter()' name='{$mod_strings.LBL_ADD_NEW_FILTER}' value='{$mod_strings.LBL_ADD_NEW_FILTER}'>
&nbsp;&nbsp;{$mod_strings.LBL_DATE_BASED_FILTERS}
<input type=hidden name='filters_def' value ="">
<table id='filters_top' border=0 cellpadding="0" cellspacing="0">
<tbody id='filters'></tbody>
</table>
</div>