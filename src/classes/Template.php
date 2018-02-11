<?php

/**
 * Shadow Daemon -- Web Application Firewall
 *
 *   Copyright (C) 2014-2018 Hendrik Buchwald <hb@zecure.org>
 *
 * This file is part of Shadow Daemon. Shadow Daemon is free software: you can
 * redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, version 2.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace shadowd;

class Template
{
    /**
     * Generate data resource with file content.
     *
     * @param string $file
     * @param string $mimeType
     * @return string
     */
    public static function getInlineFile($file, $mimeType)
    {
        $content = file_get_contents('php://filter/read=convert.base64-encode/resource=' . $file);
        return 'data:' . $mimeType . ';base64,' . $content;
    }
}