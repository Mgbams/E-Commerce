<?php
class FormVerification
{
    public function customer_name_verification($name)
    {
        if (preg_match("/^[a-zA-Z_.-]{2,30}$/", $name)) {
            return true;
        } else {
            return false;
        }
    }

    public function product_name_verification($productName)
    {
        if (preg_match("/^[a-zA-Z0-9 _.-]{2,80}$/", $productName)) {
            return true;
        } else {
            return false;
        }
    }

    public function price_verification($price)
    {
        if (preg_match("/^[0-9.]{3,10}$/", $price)) {
            return true;
        } else {
            return false;
        }
    }

    public function address_verification($address)
    {
        if (preg_match("/^[a-zA-Z0-9 _.-]{5,70}$/", $address)) {
            return true;
        } else {
            return false;
        }
    }

    public function city_verification($city)
    {
        if (preg_match("/^[a-zA-Z -]{2,30}$/", $city)) {
            return true;
        } else {
            return false;
        }
    }

    public function zip_verification($zipC)
    {
        if (preg_match("/^[0-9]{5}$/", $zipC)) {
            return true;
        } else {
            return false;
        }
    }

    public function pays_verification($pays)
    {
        if (preg_match("/^[a-zA-Z _.-]{2,30}$/", $pays)) {
            return true;
        } else {
            return false;
        }
    }

    public function password_verification($password)
    {
        if (preg_match("/^[a-zA-Z0-9_.-]{6,20}$/", $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function email_verification($email)
    {
        if (preg_match("/^[a-zA-Z0-9_.-]{2,30}[@][a-zA-Z0-9_.-]{2,20}[.][a-zA-Z]{2,4}$/", $email)) {
            return true;
        } else {
            return false;
        }
    }
    public function cleaning($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
}
