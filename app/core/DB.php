<?php


class DB{
    function __construct()
    {
        DbConnection::connect();
    }
}