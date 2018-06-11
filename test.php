<?php
    assert('isset($this->records); /* Records must be set before this is called. */');
    exec('C://abc//wkhtmltopdf home.html sample.pdf', $output, $return);
    passthru( $cmd );
    $handle = popen('/path/to/executable 2>&1', 'r');
    $process = proc_open("time ./a a.out", $descriptorspec, $pipes, $cwd);
    $return_value = proc_close($process);
    $status = proc_get_status($proc);
    proc_nice( 20 );
    proc_terminate($proc); // kill it forcefully
    $out = shell_exec ("$execQuery 2>&1");
    $variable = system("cat /home/maxor/test.txt");
?>
