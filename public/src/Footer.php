<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\CopyrightYear\CopyrightYear;

class Footer
{
    public function getCopyrightYear() : CopyrightYear
    {
        return new CopyrightYear();
    }
}