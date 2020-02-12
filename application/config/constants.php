<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

 
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

 
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
 
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code





define('GDRFA_LOGIN', 'MedNet Global');
//define('GDRFA_PWD', 'MedNetGlobal@321');
define('GDRFA_PWD', 'MedNetGlobal@123');  
define('EXCEL_COUNT_LIMIT', 10000); 
define('ADMIN', 'admin');
define('MNU', 'mnu');
define('MNU_P', 'mnu_p');
define('MNU_T', 'mnu_t');
define('MNU_M', 'mnu_m');
define('PIC', 'pic');
define('BROKER', 'broker');
define('CORPORATE', 'corporate');
define('MEMBER', 'member');

define('ADMIN_ID', '1');
define('MNU_MANAGER_ID', '2');
define('PIC_MANAGER_ID', '5');
define('BROKER_ID', '8');
define('GHR_ID', '9');
define('DHR_ID', '10');
define('MEMBER_ID', '11');
define('PIC_FINANCE_HEAD_ID', '12');
define('PIC_MEDICAL_HEAD_ID', '13');

define('UAE_NATION_IDS', '227');
define('UAE_RES_NATION_ID', '233');
define('EID_REGEX', '/^\d{3}-\d{4}-\d{7}-\d{1}$/');
define('CARD_NUM_REGEX', '/^\d{4}-\d{4}-\d{8}-\d{2}$/');
define('EID_APP_REGEX', '/^\d{21}$/');
define('MOBILE_REGEX', '/^971-\d{2}-\d{7}$/');
define('LANDLINE_REGEX', '/^971-\d{2}-\d{7}$/');
define('LANDLINE_REGEX_GDR', '/^971-\d{2}-\d{7}$/');
define('NAME_REGEX', '/^[ a-zA-Z]+$/');
define('DATE_REGEX', '/^\d{2}-\d{2}-\d{4}$/');
define('REN_DATE_REGEX', '/^\d{4}-\d{2}-\d{2}$/');

define('NUM_REGEX', '/^[0-9]*$/');
define('NUM_DECIMAL', '/^\d+.\d{0,2}$/');
define('NUM_DECIMAL_TWO', '/^[+ -]?[0-9]{1,3}([.][0-9]{1,2})?$/');
define('NUM_DEC_REGEX', '/^[0-9]\d*(\.\d+)?$/');

define('EXT_POLICY_REGEX', '/^\d{2}\/\d{3}\/\d{7}\/\d{2}\/\d{2}$/');
define('RQ_DATE_REGEX','/^\d{2}-[A-Z]{3}-\d{2}$/');

define('DHA_DATE_REGEX', '/^\d{2}-\d{2}-\d{4}$/');
define('DHA_NAME_REGEX', '/^[a-z0-9.\'\-\s]+$/i');
define('DHA_AMOUNT', '/^[0-9.]+$/');
define('DHA_NUMBER', '/^[0-9.,]+$/');
define('DHA_UID_REGEX', '/^[a-z0-9]{4,12}$/i');
define('DHA_MOBILE_REGEX', '/^971-\d{2}-\d{7}$/');
define('DHA_LANDLINE_REGEX', '/^971-\d{2}-\d{7}$/');
define('DHA_RES_FILE_NUM_REGEX', '/^\d{3}\/\d{4}\/\d{7,}$/');
/* LANDLINE REGEX FOR ENDORSEMENT*/
define('END_LANDLINE_REGEX', '/^\d{3}-\d{2}-\d{7}$/');
define('END_REFNUM_ALPHADIGIT_REGEX', '/^[a-zA-Z0-9]*$/');


//define('PASSWORD','/^971-\d{2}$/');
define('PASSWORD', '^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^');

define('SSP_UAE_NATION_ID', '35');
define('SSP_DUBAI_EMIRATE_ID', '4');
define('SSP_ABUDHABI_EMIRATE_ID', '2');
define('SSP_DIGIT15_REGEX', '/^[0-9]{1,15}$/i');
define('SSP_ALPHADIGIT15_REGEX', '/^[a-z0-9]{1,15}$/i');
define('SSP_EID_APP_REGEX', '/^800\d{18}$/');
define('STATUS', serialize([0 => 'Rejected', 1 => "WIP@Broker", 2 => "Pending with Insurer", 3 => "WIP@Insurer", 4 => "Pending With Mednet", 5 => "Imported to MN+", 6 => "Completed", 7 => "WIP@PolicyAdmin", 8 => "Pending with Underwriter",9=>"Pending Under writer approval",10=>"Inactive",11=>"Expired"]));
define('ENDO_DUBAI_EMIRATE_ID', '1');
define('DEL_MAILID','endorsementsmnu@mednet.com');
define('FROM_EMAIL_ADDRESS','donotreply@mednet.com');


 