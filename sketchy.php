assert('isset($this->thing); /* Records must be set before this is called. */');
exec('C://abc//wkhtmltopdf home.html sample.pdf', $output, $return);
passthru( $cmd );
passthru($cmd, $status);
$handle = popen('/path/to/executable 2>&1', 'r');
$this->resource = proc_open($this->cmd, $this->descriptors, $this->pipes, NULL, $_ENV);

