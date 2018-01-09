<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
*******************************************************************
*
* BY USING THIS DISCLAIMER, YOU ACKNOWLEDGE AND AGREE THAT ALL INFORMATION
* CONTAINED HEREIN DOES NOT CONSTITUTE LEGAL ADVICE OF ANY KIND OR NATURE.
* PLEASE CONSULT WITH LEGAL COUNSEL BEFORE USING THIS DISCLAIMER.
*
/*****************************************************************
* Initialize glype
******************************************************************/

require 'includes/init.php';


/*****************************************************************
* Create content
******************************************************************/

$content = <<<OUT
	<h2 class="first">汉化声明</h2>
	<p>本次汉化的范围为文字也就是将英文汉化为中文</p>
OUT;


/*****************************************************************
* Send content wrapped in our theme
******************************************************************/

echo replaceContent($content);
