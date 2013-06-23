# Buoy
This web-hacking challenge was created for the challenge-based Mozilla CTF 2011 competition. It is based on PHP. Keep in mind that this code is vulnerable (on purpose). The goal is to find and exploit the bug.

## Story
    Get access to the system of the communication buoy (pwned feds, international waters) and steal the private key that
    is located in /home/buoy/private.key. It might help you that our intelligence has found the source code.

## Installation
There needs to be a set up version of the challenge. Make /public/messages writeable, move the content of /public to a web-accessible directory and the installation is complete. The webserver should be Apache with PHP (default config).

## Sources
/public/background.jpg
 - http://www.noaanews.noaa.gov/stories2005/images/dart_buoy-wave.jpg
