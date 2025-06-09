<?php

namespace App\Lib;

class Message
{
    // TO_DO - FARE IL CHECK DEI TESTI
    
    /** Errors Messages */
    public const ACCESS_KO = 'Wrong username and password or missing token.';
    public const ACTIVE_COMPANY_KO = 'This company is not active, please reactivate it!';
    public const ACTIVE_USER_KO = 'The user has been inactive for a long time, please reactivate it!';
    public const ACTIVATE_USER_KO = 'I cannot activate this user!';
    public const ACTIVATE_USER_FAILED = 'This user is already active.';
    public const ADD_CREDITS_KO = 'I couldn\'t add credits to this user, something didn\'t work';
    public const ADDRESS_KO = 'You do not have a valid home address';
    public const ADMIN_ROLE_KO = 'It appears that you do not have permission to perform this action!';
    public const ALREADY_EXISTING = 'The record appears to already exist in the database table.';
    public const ALIMENTATION_KO = "Error alimentation";
    public const AUTH_KO = "Error during Authentication.";
    public const BUY_KO = "Error during buy.";
    public const TOKEN_KO = "Invalid token.";
    public const AUTH_NOT_LOGGEIN = 'You do not have access permission because you are not logged in.';
    public const BANNED_KO = 'This user has been blocked, contact the administration.';
    public const BAD_CITY = "The city you are looking for does not exist or is not listed";
    public const BAD_COUNTRY = "The country you are looking for does not exist or is not listed";
    public const BAD_PROVINCE = "The provincie you are looking for does not exist or is not listed";
    public const BAD_REGION = "The region you are looking for does not exist or is not listed";
    public const BAD_REQUEST = "Bad request.";
    public const BRAND_KO = "Error brand.";
    public const BODY_KO = 'error during take body\'s element';
    public const CHECK_FISCAL_CODE_KO = 'The entered Fiscal Code appears to be incorrect.';
    public const CHECK_VAT_ALREADY = 'This VAT number is already register.';
    public const CHECK_VAT_KO = "The VAT number entered appears to be invalid.";
    public const CONNECTION_KO = "Connection failed! Error while calling external API";
    public const CREATE_KO = "Error during create." ;
    public const CREDENTIALS_KO = "Invalid credentials.";
    public const COMPANY_KO = "I have not found any company with these search criteria!";
    public const CUSTOMER_KO = "I have not found any customer with these search criteria!";
    public const CUSTOMER_ADD_KO = "I cannot add a new customer due to missing data!";
    public const CONDITIONS_KO = 'error during take contdition\'s element';
    public const DELETE_KO = "Error during delete.";
    public const DELETE_KO_RELATIONSHIP = "You can't delete. There are associated entities.";
    public const EMAIL_NOT_REGISTER = 'This email does not seem to be associated with any user';
    public const EMISSION_KO = "Error in emission";
    public const FILTER_KO = "Invalid filter.";
    public const FISCAL_CODE_KO = "Fiscal Code does not exist.";
    public const FORBIDDEN = "FORBIDDEN - You do not have permission to access this API";
    public const GEAR_KO = 'error during take gear\'s element';
    public const GET_ORDER_KO = 'Error during get all order for this user';
    public const GENDER_KO = "The gender chosen is incorrect.";
    public const GENERIC_KO = "Generic Error.";
    public const HISTORICIZING_KO = "Error during batch order historicizing.";
    public const INDEX_KO = "Error during index.";
    public const INVALID_DATE = "Invalid date";
    public const LOGIN_KO = "Login failed!";
    public const LOGOUT_KO = "Logout failed!";
    public const MODEL_KO = "Error in model";
    public const NO_ALIMENTATION = "Alimentation not found.";
    public const NO_BRAND = 'I can\'t find any brands';
    public const NO_BODY = 'I can\'t find any body';
    public const NO_CREDIT = 'You don\'t have enough credit for publication';
    public const NO_CONDITION = 'I can\'t find any conditions';
    public const NO_COMPANY = 'I can\'t find any company';
    public const NO_EMISSIONS = "I can\'t find any emissions";
    public const NO_GEAR = 'I can\'t find any gears';
    public const NO_QUERY_PROVIDED = "No query provided.";
    public const NO_MODEL = 'I can\'t find any models';
    public const NO_TRACTION = 'I can\'t find any tractions';
    public const NO_YEAR = 'I can\'t find any models';
    public const NOT_FOUND = "Not found.";
    public const ONLY_ADMIN = 'Only admin have the ability to access this area';
    public const ORDER_KO = 'There is no order with this number';
    public const OUTFITTING_KO = 'I can\'t find any equipment for this model';
    public const PAYMENT_KO = 'There was a problem processing your payment';
    public const PERMISE_API_KO = 'You don\'t have permission to access these APIs';
    public const PASSWORD_KO = "The provided credentials are incorrect.";
    public const PASSWORD_EXPIRED = "The password code are expired.";
    public const RECOVER_KO = "Error during recover your account.";
    public const REGISTER_KO = "Error during registration.";
    public const RELATION_KO = "Invalid relation.";
    public const RESET_PASSWORD_KO = "The password has not been changed!";
    public const RESPONSE_KO = "Response error!";
    public const RESPONSE_SUMUP_KO = "Response SDK error!";
    public const ROLE_KO = "Role not associated!";
    public const SCAN_KO = "I cannot scan this site because it is not active.";
    public const SHOW_KO = "Error during show.";
    public const TICKET_KO = 'No tickets found';
    public const TRACTION_KO = 'error during take traction\'s element';
    public const TRANSACTION_KO = 'error during the transaction';
    public const UPDATE_KO = "Error during update.";
    public const USER_NOT_EXIST = 'It seems that the user you are looking for does not exist';
    public const USER_NOT_FOUND = 'This user appair not found';
    public const USER_NOT_HAVE_PERMISSIONS = 'This user not have a permissions';
    public const USER_RESTORED_KO = 'User not restored';
    public const VALIDATION_KO = "Error during validation.";
    public const VAT_KO = "No Vat number found!";
    public const VIES_NO_ACTIVE = "Service is not available at the moment, please try again later.";
    public const YEAR_KO = "Error Year";
    public const YOU_CANT = "You can't.";

    /** OK Messages */
    public const ACTIVE_USER_OK = 'This user is activated!';
    public const ADD_CREDITS_OK = 'Credits added successfully';
    public const ADD_TICKET_OK = 'Add ticket successful.';
    public const AUTH_OK = "Authentication successful.";
    public const BANNED_OK = "This user has been banned";
    public const BUY_OK = "Buy successfully";
    public const CHANGE_PASSWORD_OK = "The new password was successfully changed";
    public const CHECKOUT_OK = "Checkout with Sumup it\' OK!";
    public const CREATE_OK = "Create successful.";
    public const DELETE_OK = "Delete successful.";
    public const INDEX_OK = "Index successful.";
    public const LOGIN = "Login succesfully!";
    public const LOGOUT = "Logout succesfully!";
    public const MAIL_OK = "Mail sent successful.";
    public const NOT_BANNED = "This user result not banned";
    public const JSON_OK = "Data found!";
    public const OK = "OK.";
    public const PAYMENT_OK = 'We received the payment';
    public const RECOVER_OK = "Recover account successful.";
    public const REGISTER_OK = "Registration successful.";
    public const ROLE_OK = "Associated role.";
    public const ROLE_REMOVE = "Dissociated role.";
    public const ROLE_NEW = "New role associated.";
    public const RESET_PASSWORD_OK = "You have been sent the link to reset your password!";
    public const SCAN_OK = "Successful scan.";
    public const SHOW_OK = "Show successful.";
    public const TICKET_OK = 'Show ticket successful.';
    public const TICKET_UPDATE = "The ticket was updated successfully.";
    public const TOKEN_OK = "Valid token.";
    public const TRANSACTION_OK = 'Transaction executed successfully';
    public const UPDATE_OK = "Update successful.";
    public const USER_RESTORED_OK = 'User successfully restored';

    /**
     * Talking with user
     */
    public const CHECK_CREDENTIALS = "Check your credentials.";
    public const THAKNS = "Thanks.";


    /**
     * Countries and Regions
     */
    public const SEARCH_REGION_KO = "The region you are looking for does not exist or was spelled incorrectly";
    public const SEARCH_PROVINCE_KO = "The province you are looking for does not exist or was spelled incorrectly";
    public const SEARCH_CITY_KO = "The city you are looking for does not exist or was spelled incorrectly";

}
