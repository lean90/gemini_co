ERROR - 2014-10-21 22:50:58 --> exception 'Gemini_ErrorException' with message 'Trying to get property of non-object' in E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php:101
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php(101): _exception_handler(8, 'Trying to get p...', 'E:\\OTHER_GEMINI...', 101, Array)
#1 E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php(52): MY_Controller->init()
#2 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): MY_Controller->_remap('index', Array)
#3 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#4 {main}
ERROR - 2014-10-21 22:59:20 --> Query error: Table 'gemini.ci_sessions' doesn't exist
ERROR - 2014-10-21 23:17:14 --> exception 'Gemini_ErrorException' with message 'Missing argument 1 for CI_Session::userdata(), called in E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php on line 149 and defined' in E:\OTHER_GEMINI_CO\SRC\system\libraries\Session.php:447
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\system\libraries\Session.php(447): _exception_handler(2, 'Missing argumen...', 'E:\\OTHER_GEMINI...', 447, Array)
#1 E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php(149): CI_Session->userdata()
#2 E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php(99): MY_Controller->setUserToMe()
#3 E:\OTHER_GEMINI_CO\SRC\application\core\MY_Controller.php(53): MY_Controller->init()
#4 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): MY_Controller->_remap('index', Array)
#5 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#6 {main}
