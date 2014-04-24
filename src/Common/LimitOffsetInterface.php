<?php

namespace Aura\SqlQuery\Common;

interface LimitOffsetInterface extends LimitInterface
{
    /**
     *
     * Sets a limit offset on the query.
     *
     * @param int $offset Start returning after this many rows.
     *
     * @return $this
     *
     */
    public function offset($offset);
}
