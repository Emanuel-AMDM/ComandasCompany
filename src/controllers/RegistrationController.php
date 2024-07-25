<?php

class RegistrationController{
    //renderiza a pagina
    static function showIndexPage(){

        //cria o objeto resgistrationDAO
        $registrationDAO = new RegistrationDAO();
        //traz a function findAll
        $registros = $registrationDAO->findAll();

        return view('pages/pre-registration/index.php', [
            'registros' => $registros
        ]);
    }
    
    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/pre-registration/create.php');
    }

    //cria um registro no banco
    static function createRegistration(){
        //Cria um novo objeto do tipo registro
        $registration = new Registration();

        //Pega as informações enviadas via formulario POST e adiciona no objeto registro
        $registration->type_id = $_POST['type_id'];
        $registration->name    = $_POST['name'];

        //Criar um novo objeto do tipo RegistrationDAO para salvar o objeto registration no banco de dados
        $registrationDAO = new RegistrationDAO();

        //Salvar o objeto no banco de dados
        $registrationDAO->create($registration);

        //Redirect
        redirect('/pre-cadastro/create');
    }

    //atualiza um registro no banco
    static function editRegistration($id){
        //Cria um novo objeto do tipo registro
        $registrationDAO = new RegistrationDAO();

        //Cria um objeto do tipo registro
        $registration = $registrationDAO->findById($id);

        //Pega as informações enviadas via formulario POST e atualiza no objeto pedido
        $registration->type_id = $_POST['type_id'];
        $registration->name    = $_POST['name'];

        //Salvar o objeto no banco de dados
        $registrationDAO->edit($registration);

        //Redirect
        redirect('/pre-cadastro');
    }

    //renderiza a pagina
    static function showEditPage(string $id){

        //Crio o objeto do banco
        $registrationDAO = new RegistrationDAO();
        //Traz as info do banco a partir do $id
        $registro = $registrationDAO->findById($id);

        return view('pages/pre-registration/edit.php',[
            'registro' => $registro
        ]);
    }
}