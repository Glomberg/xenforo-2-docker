<?php
// FROM HASH: 411f156834153b59e7002d28c85a8a11
return array(
'macros' => array('footer' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'conversation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . '<p class="minorText">Please do not reply to this message. You must visit the forum to reply.</p>

<p class="minorText">This message was sent to you because your preferences are set to receive email when a new conversation message is received. If you no longer wish to receive these emails, you may <a href="' . $__templater->func('link', array('canonical:email-stop/conversation', $__vars['xf']['toUser'], ), true) . '">disable conversation emails</a> or <a href="' . $__templater->func('link', array('canonical:email-stop/all', $__vars['xf']['toUser'], ), true) . '">disable all emails</a>.</p>' . '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);