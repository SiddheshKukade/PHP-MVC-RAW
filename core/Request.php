<?php

namespace app\core;
class Request
{
    /**
     *   Used to get the Current website URL Path for the request example localhost/foo?bar=1 will return /foo
     */
    public function getPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? '/';
        $position = strpos($path, "?");
        if (!$position) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    /**
     * @return string of request ex. get , post
     */
    public function method(): string
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function isGet()
    {
        return $this->method() == "get";
    }

    public function isPost()
    {
        return $this->method() == "post";
    }

    public function getBody()
    {
        $body = [];
        if ($this->method() == "get")
            foreach ($_GET as $item => $value) {
                /**
                 * INPUT_GET IS JUST A TYPE
                 */
                $body[$item] = filter_input(INPUT_GET, $item, FILTER_SANITIZE_STRING);
            }
        if ($this->method() == "post")
            foreach ($_POST as $item => $value) {
                /**
                 * INPUT_GET IS JUST A TYPE
                 */
                $body[$item] = filter_input(INPUT_GET, $item, FILTER_SANITIZE_STRING);
            }
        return $body;
    }
}