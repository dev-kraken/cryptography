<?php

namespace DevKraken;

use DevCoder\DotEnv;

(new DotEnv(getcwd() . '/.env'))->load();

class Cryptography
{

    public ?string $encryptionString;
    public ?string $decryptionString;


    protected $secret_Cryptography = null;

    function __construct()
    {
        $this->secret_Cryptography = getenv('SECRET_CRYPTOGRAPHY');
    }

    public function encryption()
    {
        $ciphering = "AES-128-CTR";

        openssl_cipher_iv_length($ciphering);
        $options = 0;

        $encryption_iv = 'RGV2IEtyYWtlbiBTb21hbg==';

        $encryption_key = $this->secret_Cryptography;
        return openssl_encrypt($this->encryptionString, $ciphering, $encryption_key, $options, $encryption_iv);
    }

    public function decryption()
    {
        $ciphering = "AES-128-CTR"; // AES-128-CBC Cipher

        openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = "RGV2IEtyYWtlbiBTb21hbg==";

        //Decryption_key
        $decryption_key = $this->secret_Cryptography;

        return openssl_decrypt($this->decryptionString, $ciphering, $decryption_key, $options, $decryption_iv);
    }
}