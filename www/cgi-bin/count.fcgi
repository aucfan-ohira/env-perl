#!/usr/bin/perl

use FCGI;

my $request = FCGI::Request();

my $count = 0;
while ( $request->Accept() >= 0 ) {
    print "content-type: text/html\r\n\r\n";
    print ++$count;
}

return;