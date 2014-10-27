<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-10-26 21:10:47 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 21:10:52 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 21:12:24 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 21:12:35 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 21:13:13 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 21:13:16 --> 404 Page Not Found --> lotto_game
ERROR - 2014-10-26 23:41:40 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:42:12 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:42:33 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:44:55 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:45:34 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:46:36 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:51:52 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:52:24 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:53:33 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:56:01 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:56:46 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class Room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('Room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('Room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('Room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('Room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('Room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('Room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
ERROR - 2014-10-26 23:57:42 --> exception 'Doctrine\ORM\Mapping\MappingException' with message 'Class room is not a valid entity or mapped super class.' in E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\MappingException.php:147
Stack trace:
#0 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\Driver\AnnotationDriver.php(169): Doctrine\ORM\Mapping\MappingException::classIsNotAValidEntityOrMappedSuperClass('room')
#1 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(293): Doctrine\ORM\Mapping\Driver\AnnotationDriver->loadMetadataForClass('room', Object(Doctrine\ORM\Mapping\ClassMetadata))
#2 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\Mapping\ClassMetadataFactory.php(178): Doctrine\ORM\Mapping\ClassMetadataFactory->loadMetadata('room')
#3 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(269): Doctrine\ORM\Mapping\ClassMetadataFactory->getMetadataFor('room')
#4 E:\OTHER_GEMINI_CO\SRC\application\libraries\Doctrine\ORM\EntityManager.php(613): Doctrine\ORM\EntityManager->getClassMetadata('room')
#5 E:\OTHER_GEMINI_CO\SRC\application\repository\RepositoryRoom.php(51): Doctrine\ORM\EntityManager->getRepository('room')
#6 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\room.php(8): repository\RepositoryRoom->getActiveRoom()
#7 [internal function]: room->getAllRoom()
#8 E:\OTHER_GEMINI_CO\SRC\application\controllers\api\ControllerAPIBase.php(46): call_user_func_array(Array, Array)
#9 E:\OTHER_GEMINI_CO\SRC\system\core\CodeIgniter.php(325): ControllerAPIBase->_remap('getAllRoom', Array)
#10 E:\OTHER_GEMINI_CO\SRC\docroot\index.php(155): require_once('E:\\OTHER_GEMINI...')
#11 {main}
