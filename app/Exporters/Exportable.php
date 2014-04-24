<?php

interface Exportable
{
    public function export();

    public function email(array $data, array $info);
}