<?php

namespace r\ProtocolBuffer;

class ResponseResponseType
{
    const int PB_CLIENT_ERROR      = 16;
    const int PB_COMPILE_ERROR     = 17;
    const int PB_RUNTIME_ERROR     = 18;
    const int PB_SERVER_INFO       = 5;
    const int PB_SUCCESS_ATOM      = 1;
    const int PB_SUCCESS_PARTIAL   = 3;
    const int PB_SUCCESS_SEQUENCE  = 2;
    const int PB_WAIT_COMPLETE     = 4;
}
