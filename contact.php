<?php
session_start();
    $title = "Contact";
    require_once "./utils/utils.php";
    require_once "./utils/Forms/InputElement.php";
    require_once "./utils/Forms/EmailElement.php";
    require_once "./utils/Forms/TextareaElement.php";
    require_once "./utils/Forms/ButtonElement.php";
    require_once "./utils/Forms/FormElement.php";
    require_once "./utils/Forms/custom/MyFormGroup.php";
    require_once "./utils/Forms/custom/MyFormControl.php";
    require_once "./utils/Validator/NotEmptyValidator.php";
    require_once "./core/App.php";
    require_once "./repository/MensajeRepository.php";

    $config = require_once "app/config.php";
    App::bind("config", $config);
    App::bind("connection", Connection::make($config["database"]));

    $repositorio = new MensajeRepository();
 
    $info = "";
    $firstName = new InputElement('text');
    $firstName
      ->setName('firstName')
      ->setId('firstName')
      ->setValidator(new NotEmptyValidator('El campo first name no puede estar vacío', true));


    $lastName = new InputElement('text');
    $lastName
      ->setName('lastName')
      ->setId('lastName');

    $name = new MyFormGroup([new MyFormControl($firstName, "First Name"), new MyFormControl($lastName, "Last Name")]);

    $email = new EmailElement();
    $email
      ->setName('email')
      ->setId('email');
    
    $emailWrapper = new MyFormGroup([new MyFormControl($email, 'Correo', 'col-xs-12')]);


    $subject = new InputElement('text');
    $subject
      ->setName('subject')
      ->setId('subject')
      ->setValidator(new NotEmptyValidator('El campo asunto no puede estar vacío', true));

    $subjectWrapper = new MyFormGroup([new MyFormControl($subject, 'Asunto', 'col-xs-12')]);

    $message = new TextareaElement();
    $message
     ->setName('message')
     ->setId('message');
    $messageWrapper = new MyFormGroup([new MyFormControl($message, 'Mensaje', 'col-xs-12')]);

    $b = new ButtonElement('Send');
    $b->setCssClass('pull-right btn btn-lg sr-button');

    $form = new FormElement();
    
    $form
     ->setCssClass('form-horizontal')
     ->appendChild($name)
     ->appendChild($emailWrapper)
     ->appendChild($subjectWrapper)
     ->appendChild($messageWrapper)
     ->appendChild($b);
     if ("POST" === $_SERVER["REQUEST_METHOD"]) {
        $form->validate();
        if (!$form->hasError()) {
          $mensaje = new Mensaje($firstName->getValue(), $lastName->getValue(), $email->getValue(), $subject->getValue(), $message->getValue());
          $repositorio->save($mensaje);
          $info = "Mensaje insertado correctamente:";
          $form->reset();
        }else{
          if ($firstName->hasError()) {
            $firstName->setCssClass($firstName->getCssClass() . ' has-error');
          }
          if ($subject->hasError()) {
            $subject->setCssClass($subject->getCssClass() . ' has-error');
          }
          if ($email->hasError()) {
            $email->setCssClass($email->getCssClass() . ' has-error');
          }
        }
    }
  include("./views/contact.view.php");