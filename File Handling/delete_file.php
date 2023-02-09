<?php

$status=unlink('newfile.txt');
if ($status) {
    echo "File deleted successfully";
} else {
    echo "Sorry!";
}
