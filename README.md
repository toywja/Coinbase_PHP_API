# tmhOAuth

An Coinbase Bitcoin API library written in PHP by Marcus Yearwood

**Disclaimer**: This project is a work in progress. Please use the issue tracker
to report any enhancements or issues you encounter.

## Goals

- Provide easy to use, secure tool for PHP programmers using the Coinbase API using the API KEY

## Dependencies

The library relies on CURL . The
vast majority of hosting providers include these libraries and run with PHP 5.1+.


## A note about security and SSL

This api sets the default value of `curl_ssl_verifypeer` to `false`, but it includes a certificate root file to use in the verification process. If you would like to increase the security of the API , set the value of the `curl_ssl_verifypeer` to `true` in line 27 of coinbase_api.php. As some hosting providers do not provide the most current certificate root file it is now included in this repository. If the version inclueded in the API is out of date OR you prefer to download the certificate roots yourself, you can get them from: <http://curl.haxx.se/ca/cacert.pem>

## License

License: Apache 2 (see included LICENSE file)


## Usage

Before you use the library, you need to set your Coinbase API Key up in line 4 of the coinbase_api.php file. The examples folder includes a variety of examples illustrationg the use of the API.


## To Do

Increase the number of examples in the examples directory
