<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
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



// Admin
define('VERSION', '1.0');
define('LANGUAGE', 'english'); // english, korean


//admin
define('SESSION_ADMIN_UID', 'session_admin_uid');

//user status
define('USER_STATUS_NORMAL', 'y');
define('USER_STATUS_EXIT', 'e');
define('USER_STATUS_PAUSE', 'p');

//upload
define('UPLOAD_PATH', FCPATH . 'uploads' . DIRECTORY_SEPARATOR);
define('UPLOAD_URL_PATH', "uploads/");

//api
define('API_CURRENT_VERSION', 1);

define('APP_VERSION', '1.0.0');

// Api ResultCode
define('STR_RESULT_CODE', 'resultcode');

define('API_RESULT_SUCCESS', 0);    //성공
define('API_RESULT_ERROR_SYSTEM', 101);  //시스템오류
define('API_RESULT_ERROR_DB', 102);    //db연동오류
define('API_RESULT_ERROR_PRIVILEGE', 103);    //권한오류
define('API_RESULT_ERROR_PARAM', 104);    //파라미터오류
define('API_RESULT_ERROR_UPLOAD', 105);   //파일upload오류
define('API_RESULT_ERROR_ACCESS_TOKEN', 106);   //액세스 토큰오류
define('API_RESULT_ERROR_CERT_KEY', 107);   //인증번호 오류
define('API_RESULT_ERROR_LOGIN_FAILED', 201); //로그인 실패
define('API_RESULT_ERROR_LOGIN_PASSWORD', 211); //패스워드 오류
define('API_RESULT_ERROR_USER_NO_EXIST', 202); //회원정보존재안함
define('API_RESULT_ERROR_EMAIL_DUPLICATE', 203);    //이메일증복오류
define('API_RESULT_ERROR_EMAIL_NO_EXIST', 204); //회원정보존재안함
define('API_RESULT_ERROR_USER_PAUSED', 205); //일시정지 회원
define('API_RESULT_ERROR_NICKNAME_DUPLICATE', 206);    //닉네임증복오류
define('API_RESULT_ERROR_NICKNAME_LENGTH', 207);    //닉네임오류
define('API_RESULT_ERROR_EMAIL_VERIFIED', 208);    //이메일 인증오류
define('API_RESULT_ERROR_PURCHASE', 209);    //결제오류

// Status
define('STATUS_NORMAL', 1);    // 정상

//email
defined('SMTP_EMAIL_ADDRESS')           OR  define('SMTP_EMAIL_ADDRESS', 'agbd@gmail.com');
defined('SMTP_EMAIL_PASSWORD')           OR  define('SMTP_EMAIL_PASSWORD', 'pointphone1!');
//메뉴
define('MENU_USER', 'menu_user');
