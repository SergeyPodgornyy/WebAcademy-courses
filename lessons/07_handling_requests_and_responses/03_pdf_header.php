<?php

header("Content-type:application/pdf");
// header("Content-type:text/plain");

// It will be called some_new_name.pdf
// header("Content-Disposition:attachment;filename='some_new_name.pdf'");
header("Content-Disposition:inline;filename='some_new_name.pdf'");

// The PDF source is in tourismus.pdf
readfile("tourismus.pdf");
