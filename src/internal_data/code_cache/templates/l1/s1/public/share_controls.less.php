<?php
// FROM HASH: 00e670c3212c45228f3db6f060aa9daa
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.shareButtons
{
	.m-clearFix();
}

.shareButtons-buttons
{
	.shareButtons--iconic &
	{
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
	}
}

.shareButtons-label
{
	float: left;
	margin-right: 3px;
	color: @xf-textColorMuted;
	min-height: 35px;
	line-height: 35px;
}

.shareButtons-button
{
	float: left;
	margin-right: 3px;
	padding: 6px;
	color: @xf-textColorMuted;
	font-size: 20px;
	line-height: 20px;
	white-space: nowrap;
	min-width: 35px;
	border-radius: @xf-borderRadiusSmall;
	background-color: transparent;
	.m-transition();

	&:last-of-type
	{
		margin-right: 0;
	}

	&:hover
	{
		text-decoration: none;
		color: white;
	}

	> i
	{
		display: inline-block;
		vertical-align: middle;

		.m-faBase(\'Pro\');
	}

	&.shareButtons-button--brand
	{
		> i
		{
			.m-faBase(\'Brands\');
		}
	}

	> span
	{
		font-weight: @xf-fontWeightNormal;
		font-size: @xf-fontSizeNormal;
	}

	.shareButtons--iconic &
	{
		text-align: center;

		> i
		{
			min-width: 20px;
		}

		> svg
		{
			vertical-align: middle;
		}

		> span
		{
			.m-visuallyHidden();
		}
	}

	&.shareButtons-button--facebook
	{
		&:hover { background-color: #3B5998; }
		> i:before { .m-faContent(@fa-var-facebook-f); }
	}

	&.shareButtons-button--twitter
	{
		&:hover { background-color: #000000; }
		> i:before { .m-faContent(@fa-var-twitter); }
	}

	&.shareButtons-button--pinterest
	{
		&:hover { background-color: #bd081c; }
		> i:before { .m-faContent(@fa-var-pinterest-p); }
	}

	&.shareButtons-button--tumblr
	{
		&:hover { background-color: #35465c; }
		> i:before { .m-faContent(@fa-var-tumblr); }
	}

	&.shareButtons-button--reddit
	{
		&:hover { background-color: #FF4500; }
		> i:before { .m-faContent(@fa-var-reddit-alien); }
	}

	&.shareButtons-button--whatsApp
	{
		&:hover { background-color: #25D366; }
		> i:before { .m-faContent(@fa-var-whatsapp); }
	}

	&.shareButtons-button--email
	{
		&:hover { background-color: #1289ff; }
		> i:before { .m-faContent(@fa-var-envelope); }
	}

	&.shareButtons-button--share
	{
		cursor: pointer;
		&:hover { background-color: #787878; }
		> i:before { .m-faContent(@fa-var-share-alt); }
	}

	&.shareButtons-button--link
	{
		cursor: pointer;
		&:hover { background-color: #787878; }
		> i:before { .m-faContent(@fa-var-link); }
	}

	&.is-hidden
	{
		display: none;
	}
}

.shareInput
{
	margin-bottom: 5px;

	&:last-child
	{
		margin-bottom: 0;
	}
}

.shareInput-label
{
	font-size: @xf-fontSizeSmall;
	.m-appendColon();
}

.shareInput-button
{
	color: @xf-linkColor;
	cursor: pointer;

	> i
	{
		display: inline-block;
		vertical-align: middle;
		.m-faBase();

		&:before { .m-faContent(@fa-var-copy); }
	}

	&.is-hidden
	{
		display: none;
	}
}

.shareInput-input
{
	font-size: @xf-fontSizeSmall;

	.m-inputZoomFix();

	.shareInput-button.is-hidden + &
	{
		border-radius: @xf-borderRadiusMedium;
	}
}';
	return $__finalCompiled;
}
);