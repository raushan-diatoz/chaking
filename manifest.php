<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2019 (original work) Open Assessment Technologies SA;
 *               
 * 
 */

/**
 * Generated using taoDevTools 2.21.0
 */
return array(
    'name' => 'chaking',
    'label' => 'nothing',
    'description' => 'i dont want',
    'license' => 'GPL-2.0',
    'version' => '6.7.0',
    'author' => 'Open Assessment Technologies SA',
    'requires' => array(
        'tao' => '>=15.10.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#chakingManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#chakingManager', array('ext'=>'chaking')),
    ),
    'install' => array(
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/chaking' => 'oat\\chaking\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'chaking/',
        
        #BASE WWW required by JS
        'BASE_WWW' => ROOT_URL.'chaking/views/'
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);
