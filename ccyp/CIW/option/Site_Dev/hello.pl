#!/usr/bin/perl
use CGI qw/:all/;
$cgi_object = CGI::new();

print "Content-type: text/html\n\n";
print "<html>\n<head>\n<title>\nPerl CGI 
の例\n</title>\n<body>\n<h1>Hello, 
World!</h1>\nユーザエージェント：<b>\n";
print $cgi_object->user_agent();
print "</b>.</html>\n";
