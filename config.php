<?php
$dsn = "pgsql:"
    . "ec2-54-235-92-43.compute-1.amazonaws.com;"
    . "dbname=d2rcr4754k597o;"
    . "user=famyrbizhzgaba;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=3d66f0e06427e0daea5d950929a563067c060238fee7fa9d19c0094b97e68dd9";

$db = new PDO($dsn);