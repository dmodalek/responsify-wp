<?php
function create_attachment()
{
	$attachment = array(
		'guid' => 'http://example.org/wp-content/uploads/2014/10/IMG_2089.jpg',
		'post_mime_type' => 'image/jpeg',
		'post_title' => 'Responsify',
		'post_status' => 'inherit'
	);
	$img = wp_insert_attachment( $attachment, 'IMG_2089.jpg' );
	wp_update_attachment_metadata( $img, array(
		'width' => 2448,
		'height' => 3264,
		'file' => '2014/10/IMG_2089.jpg',
		'sizes' => array(
			'thumbnail' => array(
                'file' => 'IMG_2089-480x640.jpg',
                'width' => 480,
                'height' => 640
            ),
            'medium' => array(
                'file' => 'IMG_2089-600x800.jpg',
                'width' => 600,
                'height' => 800
            ),
            'large' => array(
                'file' => 'IMG_2089-1024x1365.jpg',
                'width' => 1024,
                'height' => 1365
            )
		)
	) );
	return $img;
}

function create_png()
{
	$attachment = array(
		'guid' => 'http://example.org/wp-content/uploads/2014/12/logo.png',
		'post_mime_type' => 'image/png',
		'post_title' => 'PNG',
		'post_status' => 'inherit'
	);
	$img = wp_insert_attachment( $attachment, 'logo.png' );
	wp_update_attachment_metadata( $img, array(
		'width' => 2448,
		'height' => 3264,
		'file' => '2014/12/logo.png',
		'sizes' => array(
			'thumbnail' => array(
                'file' => 'logo-480x640.png',
                'width' => 480,
                'height' => 640
            ),
            'medium' => array(
                'file' => 'logo-600x800.png',
                'width' => 600,
                'height' => 800
            ),
            'large' => array(
                'file' => 'logo-1024x1365.png',
                'width' => 1024,
                'height' => 1365
            )
		)
	) );
	return $img;
}