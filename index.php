<?php
/*
  Plugin Name: Snippets Custom Post Type
  Plugin URI: https://www.davidangulo.xyz/
  Description: Adds a custom post type named "Snippets" for www.davidangulo.xyz
  Version: 1.0.1
  Author: David Angulo
  Author URI: https://www.davidangulo.xyz/
  Requires at least: 5.1.1
  Tested Up to: 5.2
  License: GPL2
*/

/*
  Copyright 2019 David Angulo (email: hello@davidangulo.xyz)
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
*/

require('snippets_custom_post_type.php');

$snippets_custom_post_type = new SnippetsCustomPostType;

?>
