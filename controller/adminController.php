<?php

switch ($_GET['admin']) {

    //SECTOR
    case "listSector":
        include 'model/sectorModel.php';
        include 'view/sectorView.php';
        break;


    case "addSector":
        include 'model/sectorModel.php';
        include 'view/addSectorView.php';
        break;

    case "editSector":
        include 'model/sectorModel.php';
        include 'view/editSectorView.php';
        break;

    //SECTOR ACTIONS
    case "addSectorAction":
        require ('model/sectorModel.php');
        include ('do/addSectorAction.php');
        break;

    case "editSectorAction":
        require ('model/sectorModel.php');
        include ('do/editSectorAction.php');
        break;

    case "deleteSectorAction":
        require ('model/sectorModel.php');
        include ('do/deleteSectorAction.php');
        break;

    //EMPLOYEE
    case "listEmployee":
        include 'model/employeeModel.php';
        include 'view/employeeView.php';
        break;


    case "addEmployee":
        include 'model/employeeModel.php';
        include 'view/addEmployeeView.php';
        break;

    case "addEmployeeService":
        include 'model/employeeModel.php';
        include 'view/addEmployeeServiceView.php';
        break;

    case "viewEmployeeServiceAndFunction":
        include 'model/serviceModel.php';
        include 'view/employeeServiceAndFunctionView.php';
        break;

    case "editEmployee":
        include 'model/employeeModel.php';
        include 'view/editEmployeeView.php';
        break;

    case "editEmployeeFunction":
        include 'model/employeeModel.php';
        include 'model/serviceModel.php';
        include 'view/editEmployeeFunctionView.php';
        break;

    //EMPLOYEE ACTIONS
    case "addEmployeeAction":
        require ('model/employeeModel.php');
        include ('do/addEmployeeAction.php');
        break;

    case "addEmployeeServiceAction":
        require ('model/employeeModel.php');
        include ('do/addEmployeeServiceAction.php');
        break;


    case "editEmployeeAction":
        require ('model/employeeModel.php');
        include ('do/editEmployeeAction.php');
        break;

    case "editEmployeeFunctionAction":
        require ('model/employeeModel.php');
        require ('model/serviceModel.php');
        include ('do/editEmployeeFunctionAction.php');
        break;

    case "deleteEmployeeAction":
        require ('model/employeeModel.php');
        include ('do/deleteEmployeeAction.php');
        break;

    case "deleteEmployeeFunctionAction":
        include 'model/employeeModel.php';
        require ('model/serviceModel.php');
        include ('do/deleteEmployeeFunctionAction.php');
        break;

    //SERVICE
    case "listService":
        include 'model/serviceModel.php';
        include 'view/serviceView.php';
        break;


    case "addService":
        include 'model/serviceModel.php';
        include 'view/addServiceView.php';
        break;

    case "editService":
        include 'model/serviceModel.php';
        include 'view/editServiceView.php';
        break;

    //SERVICE ACTIONS
    case "addServiceAction":
        require ('model/serviceModel.php');
        include ('do/addServiceAction.php');
        break;

    case "editServiceAction":
        require ('model/serviceModel.php');
        include ('do/editServiceAction.php');
        break;

    case "deleteServiceAction":
        require ('model/serviceModel.php');
        include ('do/deleteServiceAction.php');
        break;

    //FUNCTION
    case "listFunction":
        include 'model/functionModel.php';
        include 'view/functionView.php';
        break;


    case "addFunction":
        include 'model/functionModel.php';
        include 'view/addFunctionView.php';
        break;

    case "editFunction":
        include 'model/functionModel.php';
        include 'view/editFunctionView.php';
        break;

    //FUNCTION ACTIONS
    case "addFunctionAction":
        include 'model/functionModel.php';
        include ('do/addFunctionAction.php');
        break;

    case "editFunctionAction":
        include 'model/functionModel.php';
        include ('do/editFunctionAction.php');
        break;

    case "deleteFunctionAction":
        require ('model/functionModel.php');
        include ('do/deleteFunctionAction.php');
        break;





}