<?php

namespace r\ProtocolBuffer;

class QueryQueryType
{
    const int PB_CONTINUE      = 2;
    const int PB_NOREPLY_WAIT  = 4;
    const int PB_SERVER_INFO   = 5;
    const int PB_START         = 1;
    const int PB_STOP          = 3;
}
