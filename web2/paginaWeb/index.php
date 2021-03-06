<?php
  require_once("routing/configApp.php");
  require_once("controller/dance_controller.php");

  $danceController = new DanceController();

  if (!array_key_exists(ConfigApp::$ACTION, $_REQUEST)) {
    $danceController->showBase();
  } else {
    switch ($_REQUEST[ConfigApp::$ACTION]) {
      // Home del sitio
      case (ConfigApp::$ACTION_HOME):
        $danceController->showHome();
        break;
      // Clases del sitio
      case (ConfigApp::$ACTION_DANCE):
        $danceController->showDance();
        break;
      case (ConfigApp::$ACTION_DANCE_ADD):
        $danceController->addDance();
        break;
      case (ConfigApp::$ACTION_DANCE_DELETE):
        $danceController->deleteDance();
        break;
      case (ConfigApp::$ACTION_DANCE_INFO):
        $danceController->infoDance();
        break;
      // Contact form del sitio
      case (ConfigApp::$ACTION_CONTACT_US):
        $danceController->showContactUs();
        break;
      // Inscripciones del sitio
      case (ConfigApp::$ACTION_SIGN_UP):
        $danceController->showInscripcion();
        break;
      case (ConfigApp::$ACTION_SIGN_UP_SUBSCRIBE):
        $danceController->signUp();
        break;
      case (ConfigApp::$ACTION_SIGN_UP_UNSUBSCRIBE):
        $danceController->unsubscribe();
        break;
      case (ConfigApp::$ACTION_DANCE_INFO_INSC):
        $danceController->getInscAlumnos();
        break;
      // Register form del sitio
      case (ConfigApp::$ACTION_REGISTER):
        $danceController->showRegister();
        break;
      case (ConfigApp::$ACTION_REGISTER_ADD_PERSON):
        $danceController->addPerson();
        break;
      case (ConfigApp::$ACTION_REGISTER_DELETE_PERSON):
        $danceController->deletePerson();
        break;
      case (ConfigApp::$ACTION_REGISTER_SHOW_UPDATE_PERSON):
        $danceController->showUpdatePerson();
        break;
      case (ConfigApp::$ACTION_REGISTER_UPDATE_PERSON):
        $danceController->updatePerson();
        break;
      case (ConfigApp::$ACTION_REGISTER_ASSIGN_DANCE_TEACHER):
        $danceController->assign_dance_teacher();
        break;
      case (ConfigApp::$ACTION_REGISTER_DEALLOCATE_DANCE_TEACHER):
        $danceController->deallocate_dance_teacher();
        break;
      case (ConfigApp::$ACTION_ERROR):
        $danceController->showError();
        break;
      default:
        // si no hizo match, muestro home
        $danceController->showError();
    };
  };

?>
