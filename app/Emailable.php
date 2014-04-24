<?php

interface Emailable
{
    public function email(array $info, array $data);

}