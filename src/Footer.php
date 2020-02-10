<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use WaughJ\CopyrightYear\CopyrightYear;

class Footer
{
    public function getCopyrightYear() : CopyrightYear
    {
        return new CopyrightYear( 2020 );
    }
}